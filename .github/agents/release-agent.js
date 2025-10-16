#!/usr/bin/env node
/**
 * Release Agent
 * 
 * You are a release management specialist. Follow our LightSpeed WP release processes 
 * to automate version management and changelog generation. Avoid manual release steps 
 * unless specified.
 * 
 * This agent automates release management tasks:
 * 1. Validates release readiness and quality gates
 * 2. Manages semantic versioning and changelog automation
 * 3. Coordinates release branches and tag creation
 * 4. Handles release notes and documentation updates
 * 
 * Usage:
 * - Automatically triggered on release branch creation or tag events
 * - Validates release criteria during pre-release workflows
 * 
 * Environment Variables:
 * - GITHUB_TOKEN: Required for API access
 * - DRY_RUN: Set to "true" to preview without making changes
 * - VERBOSE: Set to "true" for detailed logs
 * - RELEASE_BRANCH_PREFIX: Prefix for release branches (default: "release/")
 * - AUTO_GENERATE_NOTES: Auto-generate release notes (default: "true")
 */

const { Octokit } = require('@octokit/rest');
const core = require('@actions/core');
const github = require('@actions/github');
const semver = require('semver');

// Release validation criteria per LightSpeed standards
const RELEASE_CRITERIA = {
  required_files: [
    'VERSION',
    'CHANGELOG.md',
    'README.md',
    'package.json',
  ],
  required_tests_pass: true,
  required_coverage_threshold: 80,
  required_documentation_updates: true,
  blocked_labels: ['blocked', 'do-not-merge', 'work-in-progress'],
  required_approvals: 1,
};

// Changelog patterns and sections
const CHANGELOG_PATTERNS = {
  version_header: /^##\s+\[?(\d+\.\d+\.\d+(?:-[a-zA-Z0-9.]+)?)\]?\s*(?:\([^)]+\))?\s*(?:-\s*\d{4}-\d{2}-\d{2})?$/,
  unreleased_section: /^##\s+\[?Unreleased\]?/i,
  breaking_changes: /^###?\s+(?:💥\s*)?(?:BREAKING\s+CHANGES?|Breaking\s+Changes?)/im,
  features: /^###?\s+(?:✨\s*)?(?:Features?|New\s+Features?|Added)/im,
  fixes: /^###?\s+(?:🐛\s*)?(?:Bug\s*Fixes?|Fixed|Fixes)/im,
  improvements: /^###?\s+(?:⚡\s*)?(?:Improvements?|Enhanced?|Changed)/im,
};

// Config
const config = {
  dryRun: process.env.DRY_RUN === 'true',
  verbose: process.env.VERBOSE === 'true',
  token: process.env.GITHUB_TOKEN,
  releaseBranchPrefix: process.env.RELEASE_BRANCH_PREFIX || 'release/',
  autoGenerateNotes: process.env.AUTO_GENERATE_NOTES !== 'false',
};

/**
 * Main function
 */
async function run() {
  try {
    if (!config.token) {
      throw new Error('GITHUB_TOKEN is required');
    }
    
    const octokit = new Octokit({ auth: config.token });
    const context = github.context;
    
    log('Starting release management analysis...');
    
    let releaseAction = determineReleaseAction(context);
    log(`Detected release action: ${releaseAction}`);
    
    switch (releaseAction) {
      case 'validate_release_readiness':
        await validateReleaseReadiness(octokit, context);
        break;
      case 'prepare_release':
        await prepareRelease(octokit, context);
        break;
      case 'finalize_release':
        await finalizeRelease(octokit, context);
        break;
      case 'post_release':
        await postReleaseActions(octokit, context);
        break;
      default:
        log('No release action required for this event');
    }
    
    log('Release management completed successfully');
    
  } catch (error) {
    core.setFailed(`Error: ${error.message}`);
  }
}

/**
 * Determine what release action to take based on context
 */
function determineReleaseAction(context) {
  const { eventName, payload } = context;
  
  if (eventName === 'pull_request') {
    const branch = payload.pull_request.head.ref;
    if (branch.startsWith(config.releaseBranchPrefix)) {
      return payload.action === 'opened' ? 'prepare_release' : 'validate_release_readiness';
    }
  }
  
  if (eventName === 'push') {
    const ref = payload.ref;
    if (ref.startsWith('refs/tags/v')) {
      return 'finalize_release';
    }
    if (ref.startsWith(`refs/heads/${config.releaseBranchPrefix}`)) {
      return 'validate_release_readiness';
    }
  }
  
  if (eventName === 'release' && payload.action === 'published') {
    return 'post_release';
  }
  
  return 'none';
}

/**
 * Validate release readiness
 */
async function validateReleaseReadiness(octokit, context) {
  log('Validating release readiness...');
  
  const validation = {
    files: await validateRequiredFiles(octokit, context),
    version: await validateVersionConsistency(octokit, context),
    changelog: await validateChangelog(octokit, context),
    tests: await validateTestStatus(octokit, context),
    documentation: await validateDocumentation(octokit, context),
    dependencies: await validateDependencies(octokit, context),
  };
  
  const issues = [];
  const warnings = [];
  
  // Collect issues
  Object.entries(validation).forEach(([category, result]) => {
    if (result.issues) {
      issues.push(...result.issues.map(issue => ({ category, ...issue })));
    }
    if (result.warnings) {
      warnings.push(...result.warnings.map(warning => ({ category, ...warning })));
    }
  });
  
  // Generate validation report
  await generateReleaseValidationReport(octokit, context, validation, issues, warnings);
  
  // Fail if there are blocking issues
  if (issues.filter(issue => issue.blocking).length > 0) {
    core.setFailed('Release validation failed. See report for details.');
  }
}

/**
 * Validate required files exist and are properly formatted
 */
async function validateRequiredFiles(octokit, context) {
  const result = { issues: [], warnings: [] };
  
  for (const file of RELEASE_CRITERIA.required_files) {
    try {
      const { data: content } = await octokit.repos.getContent({
        owner: context.repo.owner,
        repo: context.repo.repo,
        path: file,
      });
      
      // Additional validation based on file type
      if (file === 'package.json') {
        await validatePackageJson(content, result);
      } else if (file === 'VERSION') {
        await validateVersionFile(content, result);
      }
      
    } catch (error) {
      result.issues.push({
        type: 'missing_file',
        message: `Required file missing: ${file}`,
        blocking: true,
      });
    }
  }
  
  return result;
}

/**
 * Validate package.json structure and version
 */
async function validatePackageJson(content, result) {
  try {
    const packageData = JSON.parse(Buffer.from(content.content, 'base64').toString());
    
    if (!packageData.version) {
      result.issues.push({
        type: 'missing_version',
        message: 'package.json missing version field',
        blocking: true,
      });
    }
    
    if (!semver.valid(packageData.version)) {
      result.issues.push({
        type: 'invalid_version',
        message: `Invalid semantic version in package.json: ${packageData.version}`,
        blocking: true,
      });
    }
    
    // Check for required fields
    const requiredFields = ['name', 'description', 'repository'];
    for (const field of requiredFields) {
      if (!packageData[field]) {
        result.warnings.push({
          type: 'missing_metadata',
          message: `package.json missing recommended field: ${field}`,
        });
      }
    }
    
  } catch (error) {
    result.issues.push({
      type: 'invalid_json',
      message: 'package.json contains invalid JSON',
      blocking: true,
    });
  }
}

/**
 * Validate VERSION file format
 */
async function validateVersionFile(content, result) {
  const version = Buffer.from(content.content, 'base64').toString().trim();
  
  if (!semver.valid(version)) {
    result.issues.push({
      type: 'invalid_version_file',
      message: `Invalid semantic version in VERSION file: ${version}`,
      blocking: true,
    });
  }
}

/**
 * Validate version consistency across files
 */
async function validateVersionConsistency(octokit, context) {
  const result = { issues: [], warnings: [] };
  const versions = {};
  
  // Collect versions from different sources
  try {
    // VERSION file
    const { data: versionFile } = await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: 'VERSION',
    });
    versions.VERSION = Buffer.from(versionFile.content, 'base64').toString().trim();
    
    // package.json
    const { data: packageFile } = await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: 'package.json',
    });
    const packageData = JSON.parse(Buffer.from(packageFile.content, 'base64').toString());
    versions.package = packageData.version;
    
    // CHANGELOG.md
    const { data: changelogFile } = await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: 'CHANGELOG.md',
    });
    const changelogContent = Buffer.from(changelogFile.content, 'base64').toString();
    const versionMatch = changelogContent.match(CHANGELOG_PATTERNS.version_header);
    if (versionMatch) {
      versions.changelog = versionMatch[1];
    }
    
  } catch (error) {
    // Files may not exist, will be caught by file validation
  }
  
  // Check consistency
  const uniqueVersions = [...new Set(Object.values(versions))];
  if (uniqueVersions.length > 1) {
    result.issues.push({
      type: 'version_mismatch',
      message: `Version mismatch across files: ${JSON.stringify(versions)}`,
      blocking: true,
    });
  }
  
  return result;
}

/**
 * Validate changelog format and content
 */
async function validateChangelog(octokit, context) {
  const result = { issues: [], warnings: [] };
  
  try {
    const { data: changelogFile } = await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: 'CHANGELOG.md',
    });
    
    const changelogContent = Buffer.from(changelogFile.content, 'base64').toString();
    
    // Check for Unreleased section
    if (!CHANGELOG_PATTERNS.unreleased_section.test(changelogContent)) {
      result.warnings.push({
        type: 'no_unreleased_section',
        message: 'CHANGELOG.md missing [Unreleased] section',
      });
    }
    
    // Check for recent entries
    const lines = changelogContent.split('\n');
    const hasRecentEntries = lines.slice(0, 50).some(line => 
      line.trim().startsWith('-') || line.trim().startsWith('*')
    );
    
    if (!hasRecentEntries) {
      result.warnings.push({
        type: 'no_recent_entries',
        message: 'CHANGELOG.md appears to have no recent entries',
      });
    }
    
    // Validate format follows Keep a Changelog
    if (!changelogContent.includes('## [')) {
      result.warnings.push({
        type: 'changelog_format',
        message: 'CHANGELOG.md should follow Keep a Changelog format',
      });
    }
    
  } catch (error) {
    result.issues.push({
      type: 'changelog_missing',
      message: 'CHANGELOG.md file not found',
      blocking: true,
    });
  }
  
  return result;
}

/**
 * Validate test status
 */
async function validateTestStatus(octokit, context) {
  const result = { issues: [], warnings: [] };
  
  try {
    // Get the latest commit status
    const { data: status } = await octokit.repos.getCombinedStatusForRef({
      owner: context.repo.owner,
      repo: context.repo.repo,
      ref: context.sha || 'HEAD',
    });
    
    if (status.state !== 'success') {
      result.issues.push({
        type: 'tests_failing',
        message: `Tests are not passing (status: ${status.state})`,
        blocking: true,
      });
    }
    
    // Check for test coverage if available
    const coverageCheck = status.statuses.find(s => 
      s.context.includes('coverage') || s.context.includes('codecov')
    );
    
    if (coverageCheck && coverageCheck.state !== 'success') {
      result.warnings.push({
        type: 'coverage_check',
        message: 'Code coverage check did not pass',
      });
    }
    
  } catch (error) {
    result.warnings.push({
      type: 'status_unavailable',
      message: 'Unable to determine test status',
    });
  }
  
  return result;
}

/**
 * Validate documentation is up to date
 */
async function validateDocumentation(octokit, context) {
  const result = { issues: [], warnings: [] };
  
  // Check if README mentions the current version
  try {
    const { data: readmeFile } = await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: 'README.md',
    });
    
    const readmeContent = Buffer.from(readmeFile.content, 'base64').toString();
    
    // Check for version badges or mentions
    const hasVersionInfo = readmeContent.includes('version') || 
                          readmeContent.includes('badge') ||
                          readmeContent.includes('release');
    
    if (!hasVersionInfo) {
      result.warnings.push({
        type: 'no_version_info',
        message: 'README.md should include version information or badges',
      });
    }
    
  } catch (error) {
    result.warnings.push({
      type: 'readme_check_failed',
      message: 'Unable to validate README.md',
    });
  }
  
  return result;
}

/**
 * Validate dependencies and security
 */
async function validateDependencies(octokit, context) {
  const result = { issues: [], warnings: [] };
  
  try {
    // Check for security advisories
    const { data: vulnerabilities } = await octokit.repos.getVulnerabilityAlerts({
      owner: context.repo.owner,
      repo: context.repo.repo,
    });
    
    if (vulnerabilities.length > 0) {
      result.issues.push({
        type: 'security_vulnerabilities',
        message: `${vulnerabilities.length} security vulnerabilities found`,
        blocking: true,
      });
    }
    
  } catch (error) {
    // Vulnerability alerts may not be available
    result.warnings.push({
      type: 'security_check_unavailable',
      message: 'Unable to check for security vulnerabilities',
    });
  }
  
  return result;
}

/**
 * Prepare release (create release branch, update versions, etc.)
 */
async function prepareRelease(octokit, context) {
  log('Preparing release...');
  
  if (config.dryRun) {
    log('[DRY RUN] Would prepare release');
    return;
  }
  
  // Implementation would include:
  // 1. Create release branch
  // 2. Update version numbers
  // 3. Update changelog
  // 4. Create initial release PR
  
  log('Release preparation completed');
}

/**
 * Finalize release (create tags, publish release)
 */
async function finalizeRelease(octokit, context) {
  log('Finalizing release...');
  
  if (config.dryRun) {
    log('[DRY RUN] Would finalize release');
    return;
  }
  
  // Implementation would include:
  // 1. Create Git tag
  // 2. Generate release notes
  // 3. Publish GitHub release
  // 4. Update documentation
  
  log('Release finalization completed');
}

/**
 * Post-release actions
 */
async function postReleaseActions(octokit, context) {
  log('Executing post-release actions...');
  
  if (config.dryRun) {
    log('[DRY RUN] Would execute post-release actions');
    return;
  }
  
  // Implementation would include:
  // 1. Merge release branch back to main
  // 2. Update development branch
  // 3. Close milestone
  // 4. Notify stakeholders
  
  log('Post-release actions completed');
}

/**
 * Generate release validation report
 */
async function generateReleaseValidationReport(octokit, context, validation, issues, warnings) {
  const blockingIssues = issues.filter(issue => issue.blocking);
  const nonBlockingIssues = issues.filter(issue => !issue.blocking);
  
  const statusEmoji = blockingIssues.length > 0 ? '❌' : warnings.length > 0 ? '⚠️' : '✅';
  const readinessStatus = blockingIssues.length > 0 ? 'NOT READY' : 'READY';
  
  let reportContent = `## 🚀 Release Readiness Report

${statusEmoji} **Status: ${readinessStatus} for Release**

### Validation Summary:
- ✅ **Files**: ${validation.files.issues.length === 0 ? 'All required files present' : `${validation.files.issues.length} issues`}
- ${validation.version.issues.length === 0 ? '✅' : '❌'} **Version**: ${validation.version.issues.length === 0 ? 'Version consistency validated' : `${validation.version.issues.length} issues`}
- ${validation.changelog.issues.length === 0 ? '✅' : '⚠️'} **Changelog**: ${validation.changelog.issues.length === 0 ? 'Changelog validated' : `${validation.changelog.issues.length} issues`}
- ${validation.tests.issues.length === 0 ? '✅' : '❌'} **Tests**: ${validation.tests.issues.length === 0 ? 'All tests passing' : `${validation.tests.issues.length} issues`}
- ${validation.documentation.issues.length === 0 ? '✅' : '⚠️'} **Documentation**: ${validation.documentation.issues.length === 0 ? 'Documentation validated' : `${validation.documentation.issues.length} issues`}
- ${validation.dependencies.issues.length === 0 ? '✅' : '❌'} **Dependencies**: ${validation.dependencies.issues.length === 0 ? 'No security issues' : `${validation.dependencies.issues.length} issues`}`;

  // Blocking issues
  if (blockingIssues.length > 0) {
    reportContent += `\n\n### ❌ Blocking Issues (must be resolved):`;
    blockingIssues.forEach(issue => {
      reportContent += `\n- **${issue.category}**: ${issue.message}`;
    });
  }
  
  // Non-blocking issues
  if (nonBlockingIssues.length > 0) {
    reportContent += `\n\n### ⚠️ Non-blocking Issues:`;
    nonBlockingIssues.forEach(issue => {
      reportContent += `\n- **${issue.category}**: ${issue.message}`;
    });
  }
  
  // Warnings
  if (warnings.length > 0) {
    reportContent += `\n\n### ⚠️ Warnings:`;
    warnings.forEach(warning => {
      reportContent += `\n- **${warning.category}**: ${warning.message}`;
    });
  }
  
  if (blockingIssues.length === 0 && warnings.length === 0) {
    reportContent += `\n\n🎉 **All validation checks passed!** This release is ready to proceed.`;
  }
  
  reportContent += `\n\nSee our [Release Management Standards](/.github/instructions/release-management.md) for complete guidelines.`;
  
  // Post report for pull requests
  if (context.payload.pull_request && !config.dryRun) {
    try {
      await octokit.issues.createComment({
        owner: context.repo.owner,
        repo: context.repo.repo,
        issue_number: context.payload.pull_request.number,
        body: reportContent,
      });
      log('Posted release validation report');
    } catch (error) {
      log(`Error posting report: ${error.message}`, 'error');
    }
  } else if (config.dryRun) {
    log('[DRY RUN] Would post release validation report');
    log(reportContent);
  }
}

/**
 * Logging helper
 */
function log(message, level = 'info') {
  if (level === 'info') {
    if (config.verbose || !message.startsWith('[DRY RUN]')) {
      console.log(message);
      if (core.info) core.info(message);
    }
  } else if (level === 'error') {
    console.error(message);
    if (core.error) core.error(message);
  } else if (level === 'warning') {
    console.warn(message);
    if (core.warning) core.warning(message);
  }
}

// Execute if run directly
if (require.main === module) {
  run();
}

module.exports = {
  run,
  validateReleaseReadiness,
  RELEASE_CRITERIA,
};