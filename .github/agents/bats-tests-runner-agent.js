#!/usr/bin/env node
/**
 * Bats Tests & Runner Scripts Agent
 * 
 * You are a test automation specialist. Follow our LightSpeed WP testing standards 
 * to ensure comprehensive test coverage and quality. Avoid incomplete test suites 
 * unless specified.
 * 
 * This agent automatically validates and manages Bats test files and runner scripts:
 * 1. Ensures every shell script has corresponding Bats tests
 * 2. Validates test coverage and quality
 * 3. Manages test runner scripts and CI integration
 * 4. Checks for proper test structure and naming conventions
 * 
 * Usage:
 * - Automatically triggered on script or test file changes via GitHub Actions
 * - Validates test coverage requirements during PR reviews
 * 
 * Environment Variables:
 * - GITHUB_TOKEN: Required for API access
 * - DRY_RUN: Set to "true" to preview without making changes
 * - VERBOSE: Set to "true" for detailed logs
 * - COVERAGE_THRESHOLD: Minimum test coverage percentage (default: 80)
 */

const { Octokit } = require('@octokit/rest');
const core = require('@actions/core');
const github = require('@actions/github');
const path = require('path');

// Test patterns and requirements per LightSpeed standards
const TEST_PATTERNS = {
  test_file_naming: /^test-.+\.bats$/,
  test_function_naming: /^@test\s+["'](.+)["']\s*\{/,
  setup_function: /@test\s+["'].*setup.*["']|^setup\(\)/,
  teardown_function: /@test\s+["'].*teardown.*["']|^teardown\(\)/,
  dry_run_tests: /@test\s+["'].*dry.?run.*["']/i,
  error_handling_tests: /@test\s+["'].*error.*["']|@test\s+["'].*fail.*["']/i,
};

// Required test categories per script type
const REQUIRED_TEST_CATEGORIES = {
  deployment: ['basic_functionality', 'error_handling', 'dry_run', 'parameter_validation'],
  maintenance: ['basic_functionality', 'error_handling', 'dry_run', 'safety_checks'],
  utility: ['basic_functionality', 'error_handling', 'parameter_validation', 'integration'],
  project: ['basic_functionality', 'error_handling', 'api_integration', 'data_validation'],
};

// Config
const config = {
  dryRun: process.env.DRY_RUN === 'true',
  verbose: process.env.VERBOSE === 'true',
  token: process.env.GITHUB_TOKEN,
  coverageThreshold: parseInt(process.env.COVERAGE_THRESHOLD) || 80,
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
    
    // Get changed files from pull request
    const changedFiles = await getChangedFiles(octokit, context);
    const scriptFiles = changedFiles.filter(f => f.filename.endsWith('.sh'));
    const testFiles = changedFiles.filter(f => f.filename.endsWith('.bats'));
    
    log(`Analyzing ${scriptFiles.length} script files and ${testFiles.length} test files`);
    
    const testingReport = {
      scriptsCovered: 0,
      scriptsUncovered: [],
      testQualityIssues: [],
      missingTestCategories: [],
      runnerIssues: [],
      overallCoverage: 0,
    };
    
    // Check test coverage for scripts
    for (const scriptFile of scriptFiles) {
      await analyzeScriptTestCoverage(octokit, context, scriptFile, testingReport);
    }
    
    // Analyze test file quality
    for (const testFile of testFiles) {
      await analyzeTestFileQuality(octokit, context, testFile, testingReport);
    }
    
    // Check test runner scripts
    await analyzeTestRunners(octokit, context, testingReport);
    
    // Generate comprehensive report
    await generateTestingReport(octokit, context, testingReport);
    
    // Fail if coverage is below threshold
    if (testingReport.overallCoverage < config.coverageThreshold && !config.dryRun) {
      core.setFailed(`Test coverage ${testingReport.overallCoverage}% is below threshold ${config.coverageThreshold}%`);
    }
    
    log('Bats test analysis completed');
    
  } catch (error) {
    core.setFailed(`Error: ${error.message}`);
  }
}

/**
 * Get changed files from pull request or push
 */
async function getChangedFiles(octokit, context) {
  if (context.eventName === 'pull_request') {
    const { data: files } = await octokit.pulls.listFiles({
      owner: context.repo.owner,
      repo: context.repo.repo,
      pull_number: context.payload.pull_request.number,
    });
    return files;
  }
  
  // For push events, get files in the repository
  return await getAllScriptAndTestFiles(octokit, context);
}

/**
 * Get all script and test files in repository
 */
async function getAllScriptAndTestFiles(octokit, context) {
  const files = [];
  
  // Get scripts directory
  try {
    const { data: scriptsContent } = await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: 'scripts',
    });
    
    for (const item of scriptsContent) {
      if (item.type === 'file' && item.name.endsWith('.sh')) {
        files.push({ filename: item.path, status: 'existing' });
      }
    }
  } catch (error) {
    log('Scripts directory not found or inaccessible', 'warning');
  }
  
  // Get tests directory
  try {
    const { data: testsContent } = await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: 'tests',
    });
    
    for (const item of testsContent) {
      if (item.type === 'file' && item.name.endsWith('.bats')) {
        files.push({ filename: item.path, status: 'existing' });
      }
    }
  } catch (error) {
    log('Tests directory not found or inaccessible', 'warning');
  }
  
  return files;
}

/**
 * Analyze test coverage for a script file
 */
async function analyzeScriptTestCoverage(octokit, context, scriptFile, report) {
  const scriptName = path.basename(scriptFile.filename, '.sh');
  const expectedTestFile = `tests/test-${scriptName}.bats`;
  
  // Check if corresponding test file exists
  try {
    await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: expectedTestFile,
    });
    
    // Test file exists, analyze its quality
    report.scriptsCovered++;
    await analyzeTestFileForScript(octokit, context, scriptFile, expectedTestFile, report);
    
  } catch (error) {
    // Test file doesn't exist
    report.scriptsUncovered.push({
      script: scriptFile.filename,
      expectedTest: expectedTestFile,
      scriptType: determineScriptType(scriptFile.filename),
    });
  }
}

/**
 * Determine script type based on location
 */
function determineScriptType(filename) {
  if (filename.includes('/deployment/')) return 'deployment';
  if (filename.includes('/maintenance/')) return 'maintenance';
  if (filename.includes('/utility/')) return 'utility';
  if (filename.includes('/project/')) return 'project';
  return 'general';
}

/**
 * Analyze test file for a specific script
 */
async function analyzeTestFileForScript(octokit, context, scriptFile, testFile, report) {
  const { data: testContent } = await octokit.repos.getContent({
    owner: context.repo.owner,
    repo: context.repo.repo,
    path: testFile,
  });
  
  const testFileContent = Buffer.from(testContent.content, 'base64').toString('utf8');
  const scriptType = determineScriptType(scriptFile.filename);
  const requiredCategories = REQUIRED_TEST_CATEGORIES[scriptType] || REQUIRED_TEST_CATEGORIES.general || [];
  
  // Check for required test categories
  const missingCategories = [];
  for (const category of requiredCategories) {
    const hasCategory = checkTestCategory(testFileContent, category);
    if (!hasCategory) {
      missingCategories.push(category);
    }
  }
  
  if (missingCategories.length > 0) {
    report.missingTestCategories.push({
      script: scriptFile.filename,
      testFile: testFile,
      missing: missingCategories,
      scriptType: scriptType,
    });
  }
}

/**
 * Check if test file contains tests for a specific category
 */
function checkTestCategory(testContent, category) {
  const categoryPatterns = {
    basic_functionality: /test.*basic|test.*function|test.*execute/i,
    error_handling: /test.*error|test.*fail|test.*invalid/i,
    dry_run: /test.*dry.?run/i,
    parameter_validation: /test.*param|test.*arg|test.*option/i,
    safety_checks: /test.*safe|test.*backup|test.*protect/i,
    api_integration: /test.*api|test.*github|test.*http/i,
    data_validation: /test.*data|test.*valid|test.*format/i,
    integration: /test.*integrat|test.*end.?to.?end/i,
  };
  
  const pattern = categoryPatterns[category];
  return pattern ? pattern.test(testContent) : false;
}

/**
 * Analyze quality of test files
 */
async function analyzeTestFileQuality(octokit, context, testFile, report) {
  const { data: content } = await octokit.repos.getContent({
    owner: context.repo.owner,
    repo: context.repo.repo,
    path: testFile.filename,
  });
  
  const testContent = Buffer.from(content.content, 'base64').toString('utf8');
  const lines = testContent.split('\n');
  
  const qualityIssues = [];
  
  // Check test file structure
  if (!TEST_PATTERNS.test_file_naming.test(path.basename(testFile.filename))) {
    qualityIssues.push({
      type: 'naming_convention',
      message: 'Test file should follow naming pattern: test-*.bats',
    });
  }
  
  // Count test functions
  const testFunctions = lines.filter(line => TEST_PATTERNS.test_function_naming.test(line));
  if (testFunctions.length < 3) {
    qualityIssues.push({
      type: 'insufficient_tests',
      message: `Only ${testFunctions.length} test functions found. Minimum recommended: 3`,
    });
  }
  
  // Check for setup/teardown
  const hasSetup = TEST_PATTERNS.setup_function.test(testContent);
  const hasTeardown = TEST_PATTERNS.teardown_function.test(testContent);
  
  if (!hasSetup && testFunctions.length > 5) {
    qualityIssues.push({
      type: 'missing_setup',
      message: 'Consider adding setup() function for test initialization',
    });
  }
  
  if (!hasTeardown && testContent.includes('cleanup') && testFunctions.length > 5) {
    qualityIssues.push({
      type: 'missing_teardown',
      message: 'Consider adding teardown() function for test cleanup',
    });
  }
  
  // Check for test helper usage
  if (!testContent.includes('load test-helper') && !testContent.includes('source ')) {
    qualityIssues.push({
      type: 'no_test_helper',
      message: 'Consider using test-helper.bash for common test utilities',
    });
  }
  
  if (qualityIssues.length > 0) {
    report.testQualityIssues.push({
      file: testFile.filename,
      issues: qualityIssues,
      testCount: testFunctions.length,
    });
  }
}

/**
 * Analyze test runner scripts
 */
async function analyzeTestRunners(octokit, context, report) {
  const runnerFiles = [
    'tests/run-tests.sh',
    'tests/run-all-tests.sh',
    'scripts/testing/run-tests.sh',
  ];
  
  for (const runnerFile of runnerFiles) {
    try {
      const { data: content } = await octokit.repos.getContent({
        owner: context.repo.owner,
        repo: context.repo.repo,
        path: runnerFile,
      });
      
      const runnerContent = Buffer.from(content.content, 'base64').toString('utf8');
      await analyzeRunnerScript(runnerFile, runnerContent, report);
      
    } catch (error) {
      // Runner file doesn't exist - suggest creation
      if (runnerFile === 'tests/run-tests.sh') {
        report.runnerIssues.push({
          type: 'missing_main_runner',
          message: 'Missing main test runner script: tests/run-tests.sh',
          suggestion: 'Create a main test runner for CI/CD integration',
        });
      }
    }
  }
}

/**
 * Analyze a test runner script
 */
async function analyzeRunnerScript(filename, content, report) {
  const issues = [];
  
  // Check for proper error handling
  if (!content.includes('set -e')) {
    issues.push({
      type: 'missing_error_handling',
      message: 'Test runner should include "set -e" for proper error handling',
    });
  }
  
  // Check for bats execution
  if (!content.includes('bats')) {
    issues.push({
      type: 'no_bats_execution',
      message: 'Test runner should execute bats test files',
    });
  }
  
  // Check for test discovery
  if (!content.includes('find') && !content.includes('*.bats')) {
    issues.push({
      type: 'static_test_list',
      message: 'Consider dynamic test discovery instead of hardcoded test files',
    });
  }
  
  // Check for parallel execution support
  if (content.includes('bats') && !content.includes('-j') && !content.includes('--jobs')) {
    issues.push({
      type: 'no_parallel_execution',
      message: 'Consider adding parallel test execution with bats -j option',
    });
  }
  
  if (issues.length > 0) {
    report.runnerIssues.push({
      file: filename,
      issues: issues,
    });
  }
}

/**
 * Generate comprehensive testing report
 */
async function generateTestingReport(octokit, context, report) {
  if (!context.payload.pull_request && context.eventName !== 'push') {
    return;
  }
  
  // Calculate overall coverage
  const totalScripts = report.scriptsCovered + report.scriptsUncovered.length;
  report.overallCoverage = totalScripts > 0 ? Math.round((report.scriptsCovered / totalScripts) * 100) : 100;
  
  const coverageEmoji = report.overallCoverage >= config.coverageThreshold ? '✅' : '⚠️';
  const qualityEmoji = report.testQualityIssues.length === 0 ? '✅' : '⚠️';
  const runnerEmoji = report.runnerIssues.length === 0 ? '✅' : '⚠️';
  
  let reportContent = `## 🧪 Bats Test Coverage Report

${coverageEmoji} **Test Coverage: ${report.overallCoverage}%** (${report.scriptsCovered}/${totalScripts} scripts)
${qualityEmoji} **Test Quality:** ${report.testQualityIssues.length} issues found
${runnerEmoji} **Test Runners:** ${report.runnerIssues.length} issues found

### Coverage Details:`;

  // Uncovered scripts
  if (report.scriptsUncovered.length > 0) {
    reportContent += `\n\n#### ⚠️ Scripts Missing Tests:`;
    for (const uncovered of report.scriptsUncovered) {
      const requiredCategories = REQUIRED_TEST_CATEGORIES[uncovered.scriptType] || [];
      reportContent += `\n- **${uncovered.script}** → \`${uncovered.expectedTest}\``;
      if (requiredCategories.length > 0) {
        reportContent += `\n  - Required test categories: ${requiredCategories.join(', ')}`;
      }
    }
  }
  
  // Missing test categories
  if (report.missingTestCategories.length > 0) {
    reportContent += `\n\n#### 📝 Missing Test Categories:`;
    for (const missing of report.missingTestCategories) {
      reportContent += `\n- **${missing.testFile}**: Missing ${missing.missing.join(', ')} tests`;
    }
  }
  
  // Test quality issues
  if (report.testQualityIssues.length > 0) {
    reportContent += `\n\n#### 🔍 Test Quality Issues:`;
    for (const quality of report.testQualityIssues) {
      reportContent += `\n- **${quality.file}** (${quality.testCount} tests):`;
      for (const issue of quality.issues) {
        reportContent += `\n  - ${issue.message}`;
      }
    }
  }
  
  // Test runner issues
  if (report.runnerIssues.length > 0) {
    reportContent += `\n\n#### 🏃‍♂️ Test Runner Issues:`;
    for (const runner of report.runnerIssues) {
      if (runner.file) {
        reportContent += `\n- **${runner.file}**:`;
        for (const issue of runner.issues) {
          reportContent += `\n  - ${issue.message}`;
        }
      } else {
        reportContent += `\n- ${runner.message}`;
        if (runner.suggestion) {
          reportContent += `\n  - ${runner.suggestion}`;
        }
      }
    }
  }
  
  // Next steps
  reportContent += `\n\n### Next Steps:`;
  if (report.scriptsUncovered.length > 0) {
    reportContent += `\n1. Create Bats test files for uncovered scripts`;
  }
  if (report.missingTestCategories.length > 0) {
    reportContent += `\n2. Add missing test categories per script type requirements`;
  }
  if (report.testQualityIssues.length > 0) {
    reportContent += `\n3. Improve test quality and structure`;
  }
  if (report.runnerIssues.length > 0) {
    reportContent += `\n4. Fix test runner script issues`;
  }
  
  reportContent += `\n\nSee our [Bats Testing Standards](/.github/instructions/bats-tests-and-runner-scripts.md) for complete guidelines.`;
  
  // Post report
  if (context.payload.pull_request && !config.dryRun) {
    try {
      await octokit.issues.createComment({
        owner: context.repo.owner,
        repo: context.repo.repo,
        issue_number: context.payload.pull_request.number,
        body: reportContent,
      });
      log('Posted test coverage report');
    } catch (error) {
      log(`Error posting report: ${error.message}`, 'error');
    }
  } else if (config.dryRun) {
    log('[DRY RUN] Would post test coverage report');
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
  analyzeScriptTestCoverage,
  TEST_PATTERNS,
  REQUIRED_TEST_CATEGORIES,
};