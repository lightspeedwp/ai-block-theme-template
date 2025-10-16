#!/usr/bin/env node
/**
 * Labeling Agent
 *
 * You are a project organization specialist. Follow our LightSpeed WP labeling standards
 * to ensure consistent issue and PR categorization. Avoid non-standard labels
 * unless specified.
 *
 * This agent manages comprehensive labeling automation:
 * 1. Automatically applies labels based on content, files changed, and context
 * 2. Enforces label consistency and naming conventions
 * 3. Manages label hierarchies and relationships
 * 4. Integrates with project management and workflow automation
 *
 * Usage:
 * - Automatically triggered on issue/PR creation and updates
 * - Validates label consistency during repository management
 *
 * Environment Variables:
 * - GITHUB_TOKEN: Required for API access
 * - DRY_RUN: Set to "true" to preview without making changes
 * - VERBOSE: Set to "true" for detailed logs
 * - LABEL_CONFIG_PATH: Path to label configuration file (default: .github/labels.yml)
 * - AUTO_REMOVE_INVALID: Set to "true" to automatically remove non-standard labels
 */

const { Octokit } = require('@octokit/rest');
const core = require('@actions/core');
const github = require('@actions/github');
const path = require('path');

// Standard label categories and patterns per LightSpeed conventions
const LABEL_CATEGORIES = {
  area: {
    prefix: 'area:',
    description: 'Functional area or broad domain',
    color: '0052CC',
    labels: ['ci', 'documentation', 'testing', 'security', 'performance', 'theme', 'block-editor', 'navigation', 'content', 'analytics', 'seo', 'deployment', 'infrastructure', 'forms', 'plugins', 'spacing'],
  },
  comp: {
    prefix: 'comp:',
    description: 'Specific component or artefact',
    color: 'C5DEF5',
    labels: ['block-templates', 'block-patterns', 'template-parts', 'theme-json', 'color-palette', 'typography', 'block-styles', 'style-variations', 'settings', 'post-settings', 'help-tabs', 'section-styles'],
  },
  lang: {
    prefix: 'lang:',
    description: 'Programming language or format',
    color: '5319E7',
    labels: ['php', 'javascript', 'css', 'md', 'json', 'yaml'],
  },
  priority: {
    prefix: 'priority:',
    description: 'Issue or PR priority level',
    color: 'D73A4A',
    labels: ['critical', 'important', 'normal', 'minor'],
  },
  status: {
    prefix: 'status:',
    description: 'Current status or state',
    color: '0E8A16',
    labels: ['needs-triage', 'ready', 'in-progress', 'needs-review', 'needs-qa', 'blocked', 'in-discussion', 'needs-more-info'],
  },
  meta: {
    prefix: 'meta:',
    description: 'Meta/hygiene or automation',
    color: '9198a1',
    labels: ['needs-changelog', 'no-changelog', 'stale', 'no-issue-activity'],
  },
};

// File path patterns for automatic labeling
const FILE_PATTERNS = {
  'area:ci': ['.github/workflows/**', '.github/actions/**', 'scripts/ci/**'],
  'area:documentation': ['*.md', 'docs/**', '.github/docs/**', 'README*'],
  'area:testing': ['tests/**', '**/*.test.*', '**/*.spec.*', '**/*.bats', 'test-*'],
  'area:security': ['**/*security*', '**/*auth*', 'SECURITY.md'],
  'area:performance': ['**/perf*/**', '**/*perf*'],
  'area:theme': ['theme.json', 'styles/**', 'inc/customizer.php'],
  'comp:block-templates': ['templates/**'],
  'comp:block-patterns': ['patterns/**'],
  'comp:template-parts': ['parts/**'],
  'comp:theme-json': ['theme.json'],
  'comp:color-palette': ['styles/colors/**'],
  'comp:typography': ['styles/typography/**'],
  'lang:php': ['**/*.php'],
  'lang:javascript': ['**/*.js', '**/*.jsx', '**/*.ts', '**/*.tsx'],
  'lang:css': ['**/*.css', '**/*.scss', '**/*.sass'],
  'lang:md': ['**/*.md'],
  'lang:json': ['**/*.json'],
  'lang:yaml': ['**/*.yml', '**/*.yaml'],
};

// Content-based labeling patterns
const CONTENT_PATTERNS = {
  'priority:critical': [
    /\b(critical|production|launch-blocking|urgent|blocker|asap)\b/i,
  ],
  'priority:important': [
    /\b(important|must-do|iteration)\b/i,
  ],
  'priority:normal': [
    /\b(normal|default priority|routine)\b/i,
  ],
  'priority:minor': [
    /\b(minor|nice to have|low urgency)\b/i,
  ],
  'status:needs-triage': [
    /\b(needs triage|ungroomed|review by pm|review by lead)\b/i,
  ],
  'status:ready': [
    /\b(ready|groomed|ready to start)\b/i,
  ],
  'status:in-progress': [
    /\b(in progress|actively underway|wip|work in progress)\b/i,
  ],
  'status:needs-review': [
    /\b(needs review|awaiting code review)\b/i,
  ],
  'status:needs-qa': [
    /\b(needs qa|qa pass required)\b/i,
  ],
  'status:blocked': [
    /\b(blocked|blocked reason)\b/i,
  ],
  'status:in-discussion': [
    /\b(in discussion|needs alignment|decision)\b/i,
  ],
  'status:needs-more-info': [
    /\b(needs more info|missing details)\b/i,
  ],
  'area:documentation': [
    /\b(documentation|docs|readme|guide|tutorial)\b/i,
  ],
  'area:testing': [
    /\b(test|testing|tests|qa|coverage)\b/i,
  ],
  'area:ci': [
    /\b(ci|workflow|pipeline|github action|automation)\b/i,
  ],
  'area:security': [
    /\b(security|vulnerability|exploit|auth|authentication|permission|access|credential|token|password)\b/i,
  ],
  'area:performance': [
    /\b(performance|speed|slow|optimization|bottleneck|memory|cpu|load time|latency)\b/i,
  ],
};

// Config
const config = {
  dryRun: process.env.DRY_RUN === 'true',
  verbose: process.env.VERBOSE === 'true',
  token: process.env.GITHUB_TOKEN,
  labelConfigPath: process.env.LABEL_CONFIG_PATH || '.github/labels.yml',
  autoRemoveInvalid: process.env.AUTO_REMOVE_INVALID === 'true',
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

    log('Starting labeling automation...');

    const labelingAction = determineLabelingAction(context);
    log(`Detected labeling action: ${labelingAction}`);

    switch (labelingAction) {
      case 'label_issue':
        await labelIssue(octokit, context);
        break;
      case 'label_pull_request':
        await labelPullRequest(octokit, context);
        break;
      case 'validate_labels':
        await validateRepositoryLabels(octokit, context);
        break;
      case 'sync_labels':
        await syncLabelsWithStandard(octokit, context);
        break;
      default:
        log('No labeling action required for this event');
    }

    log('Labeling automation completed successfully');

  } catch (error) {
    core.setFailed(`Error: ${error.message}`);
  }
}

/**
 * Determine what labeling action to take
 */
function determineLabelingAction(context) {
  const { eventName, payload } = context;

  if (eventName === 'issues' && ['opened', 'edited'].includes(payload.action)) {
    return 'label_issue';
  }

  if (eventName === 'pull_request' && ['opened', 'edited', 'synchronize'].includes(payload.action)) {
    return 'label_pull_request';
  }

  if (eventName === 'schedule' || (eventName === 'workflow_dispatch')) {
    return 'sync_labels';
  }

  if (eventName === 'push' && payload.ref === 'refs/heads/main') {
    return 'validate_labels';
  }

  return 'none';
}

/**
 * Automatically label an issue based on content and context
 */
async function labelIssue(octokit, context) {
  const issue = context.payload.issue;
  log(`Analyzing issue #${issue.number}: ${issue.title}`);

  const suggestedLabels = await analyzeIssueForLabels(issue);
  const currentLabels = issue.labels.map(label => label.name);

  // Filter out labels that are already applied
  const newLabels = suggestedLabels.filter(label => !currentLabels.includes(label));

  if (newLabels.length > 0) {
    await applyLabelsToIssue(octokit, context, issue.number, newLabels, 'issue');
  } else {
    log('No new labels to apply to issue');
  }

  // Generate labeling report
  await generateIssueLabelingReport(octokit, context, issue, suggestedLabels, currentLabels);
}

/**
 * Automatically label a pull request based on changes and context
 */
async function labelPullRequest(octokit, context) {
  const pr = context.payload.pull_request;
  log(`Analyzing PR #${pr.number}: ${pr.title}`);

  // Get changed files
  const { data: files } = await octokit.pulls.listFiles({
    owner: context.repo.owner,
    repo: context.repo.repo,
    pull_number: pr.number,
  });

  const suggestedLabels = await analyzePullRequestForLabels(pr, files);
  const currentLabels = pr.labels.map(label => label.name);

  // Filter out labels that are already applied
  const newLabels = suggestedLabels.filter(label => !currentLabels.includes(label));

  if (newLabels.length > 0) {
    await applyLabelsToIssue(octokit, context, pr.number, newLabels, 'pull_request');
  } else {
    log('No new labels to apply to pull request');
  }

  // Generate labeling report
  await generatePRLabelingReport(octokit, context, pr, suggestedLabels, currentLabels, files);
}

/**
 * Analyze issue content for appropriate labels
 */
async function analyzeIssueForLabels(issue) {
  const labels = new Set();

  const content = `${issue.title} ${issue.body || ''}`.toLowerCase();

  // Check content patterns
  for (const [label, patterns] of Object.entries(CONTENT_PATTERNS)) {
    if (patterns.some(pattern => pattern.test(content))) {
      labels.add(label);
    }
  }

  // Check for template-based labels
  if (issue.body) {
    const templateLabelMatch = issue.body.match(/(?:labels?|type):\s*([^\r\n]+)/i);
    if (templateLabelMatch) {
      const templateLabels = templateLabelMatch[1]
        .split(',')
        .map(l => l.trim().toLowerCase())
        .filter(l => l.length > 0);

      templateLabels.forEach(label => {
        // Try to map to standard labels
        const standardLabel = findStandardLabel(label);
        if (standardLabel) {
          labels.add(standardLabel);
        }
      });
    }
  }

  // Add default status and priority if missing
  if (!Array.from(labels).some(l => l.startsWith('status:'))) {
    labels.add('status:needs-triage');
  }
  if (!Array.from(labels).some(l => l.startsWith('priority:'))) {
    labels.add('priority:normal');
  }

  return Array.from(labels);
}

/**
 * Analyze pull request for appropriate labels
 */
async function analyzePullRequestForLabels(pr, files) {
  const labels = new Set();

  const content = `${pr.title} ${pr.body || ''}`.toLowerCase();

  // Check content patterns
  for (const [label, patterns] of Object.entries(CONTENT_PATTERNS)) {
    if (patterns.some(pattern => pattern.test(content))) {
      labels.add(label);
    }
  }

  // Check changed files for automatic labels
  const changedPaths = files.map(f => f.filename);

  for (const [label, patterns] of Object.entries(FILE_PATTERNS)) {
    if (patterns.some(pattern => {
      const glob = new RegExp(pattern.replace(/\*\*/g, '.*').replace(/\*/g, '[^/]*'));
      return changedPaths.some(path => glob.test(path));
    })) {
      labels.add(label);
    }
  }

  // Add default status and priority if missing
  if (!Array.from(labels).some(l => l.startsWith('status:'))) {
    labels.add(pr.draft ? 'status:in-progress' : 'status:needs-review');
  }
  if (!Array.from(labels).some(l => l.startsWith('priority:'))) {
    labels.add('priority:normal');
  }

  return Array.from(labels);
}

/**
 * Estimate change size based on line changes
 */
function estimateChangeSize(changes) {
  if (changes <= 10) return 'size:xs';
  if (changes <= 50) return 'size:s';
  if (changes <= 200) return 'size:m';
  if (changes <= 500) return 'size:l';
  if (changes <= 1000) return 'size:xl';
  return 'size:xxl';
}

/**
 * Find standard label for a given input
 */
function findStandardLabel(input) {
  const normalized = input.toLowerCase().trim();

  // Direct matches
  for (const [category, config] of Object.entries(LABEL_CATEGORIES)) {
    const fullLabel = `${config.prefix}${normalized}`;
    if (config.labels.includes(normalized)) {
      return fullLabel;
    }
  }

  // Fuzzy matches for canonical label families only
  const mappings = {
    'javascript': 'lang:javascript',
    'js': 'lang:javascript',
    'php': 'lang:php',
    'css': 'lang:css',
    'md': 'lang:md',
    'json': 'lang:json',
    'yaml': 'lang:yaml',
    'docs': 'area:documentation',
    'documentation': 'area:documentation',
    'test': 'area:testing',
    'tests': 'area:testing',
    'ci': 'area:ci',
    'workflow': 'area:ci',
    'theme': 'area:theme',
    'block-editor': 'area:block-editor',
    'block-templates': 'comp:block-templates',
    'block-patterns': 'comp:block-patterns',
    'template-parts': 'comp:template-parts',
    'theme-json': 'comp:theme-json',
    'color-palette': 'comp:color-palette',
    'typography': 'comp:typography',
    'spacing': 'comp:spacing',
    'critical': 'priority:critical',
    'important': 'priority:important',
    'normal': 'priority:normal',
    'minor': 'priority:minor',
    'needs-triage': 'status:needs-triage',
    'ready': 'status:ready',
    'in-progress': 'status:in-progress',
    'needs-review': 'status:needs-review',
    'needs-qa': 'status:needs-qa',
    'blocked': 'status:blocked',
    'in-discussion': 'status:in-discussion',
    'needs-more-info': 'status:needs-more-info',
    'needs-changelog': 'meta:needs-changelog',
    'no-changelog': 'meta:no-changelog',
    'stale': 'meta:stale',
    'no-issue-activity': 'meta:no-issue-activity',
  };
  return mappings[normalized] || null;
}

/**
 * Apply labels to an issue or PR
 */
async function applyLabelsToIssue(octokit, context, issueNumber, labels, type) {
  if (config.dryRun) {
    log(`[DRY RUN] Would apply labels to ${type} #${issueNumber}: ${labels.join(', ')}`);
    return;
  }

  try {
    // Get current labels
    const { data: issue } = await octokit.issues.get({
      owner: context.repo.owner,
      repo: context.repo.repo,
      issue_number: issueNumber,
    });

    const currentLabels = issue.labels.map(label => label.name);
    const allLabels = [...new Set([...currentLabels, ...labels])];

    await octokit.issues.setLabels({
      owner: context.repo.owner,
      repo: context.repo.repo,
      issue_number: issueNumber,
      labels: allLabels,
    });

    log(`Applied labels to ${type} #${issueNumber}: ${labels.join(', ')}`);

  } catch (error) {
    log(`Error applying labels: ${error.message}`, 'error');
  }
}

/**
 * Validate repository labels against standards
 */
async function validateRepositoryLabels(octokit, context) {
  log('Validating repository labels...');

  const { data: repoLabels } = await octokit.issues.listLabelsForRepo({
    owner: context.repo.owner,
    repo: context.repo.repo,
    per_page: 100,
  });

  const validation = {
    standardLabels: [],
    nonStandardLabels: [],
    missingLabels: [],
    duplicateLabels: [],
  };

  // Check each existing label
  repoLabels.forEach(label => {
    if (isStandardLabel(label.name)) {
      validation.standardLabels.push(label);
    } else {
      validation.nonStandardLabels.push(label);
    }
  });

  // Check for missing standard labels
  const expectedLabels = generateExpectedLabels();
  const existingLabelNames = repoLabels.map(l => l.name);

  expectedLabels.forEach(expectedLabel => {
    if (!existingLabelNames.includes(expectedLabel.name)) {
      validation.missingLabels.push(expectedLabel);
    }
  });

  // Generate validation report
  await generateLabelValidationReport(octokit, context, validation);
}

/**
 * Check if a label follows standard conventions
 */
function isStandardLabel(labelName) {
  // Check if it matches any category pattern
  return Object.values(LABEL_CATEGORIES).some(category =>
    labelName.startsWith(category.prefix)
  ) || ['good first issue', 'help wanted', 'duplicate', 'invalid', 'wontfix'].includes(labelName);
}

/**
 * Generate expected standard labels
 */
function generateExpectedLabels() {
  const labels = [];

  Object.entries(LABEL_CATEGORIES).forEach(([categoryName, config]) => {
    config.labels.forEach(label => {
      labels.push({
        name: `${config.prefix}${label}`,
        color: config.color,
        description: `${config.description}: ${label}`,
      });
    });
  });

  // Add common GitHub labels
  labels.push(
    { name: 'good first issue', color: '7057FF', description: 'Good for newcomers' },
    { name: 'help wanted', color: '008672', description: 'Extra attention is needed' },
    { name: 'duplicate', color: 'CFD3D7', description: 'This issue or pull request already exists' },
    { name: 'invalid', color: 'E4E669', description: 'This doesn\'t seem right' },
    { name: 'wontfix', color: 'FFFFFF', description: 'This will not be worked on' },
  );

  return labels;
}

/**
 * Sync repository labels with standard set
 */
async function syncLabelsWithStandard(octokit, context) {
  log('Syncing labels with standard set...');

  if (config.dryRun) {
    log('[DRY RUN] Would sync repository labels with standard set');
    return;
  }

  const expectedLabels = generateExpectedLabels();

  try {
    // Create or update each expected label
    for (const label of expectedLabels) {
      try {
        await octokit.issues.createLabel({
          owner: context.repo.owner,
          repo: context.repo.repo,
          name: label.name,
          color: label.color,
          description: label.description,
        });
        log(`Created label: ${label.name}`);
      } catch (error) {
        if (error.status === 422) {
          // Label exists, update it
          try {
            await octokit.issues.updateLabel({
              owner: context.repo.owner,
              repo: context.repo.repo,
              name: label.name,
              color: label.color,
              description: label.description,
            });
            log(`Updated label: ${label.name}`);
          } catch (updateError) {
            log(`Error updating label ${label.name}: ${updateError.message}`, 'warning');
          }
        } else {
          log(`Error creating label ${label.name}: ${error.message}`, 'warning');
        }
      }
    }

    log('Label synchronization completed');

  } catch (error) {
    log(`Error syncing labels: ${error.message}`, 'error');
  }
}

/**
 * Generate issue labeling report
 */
async function generateIssueLabelingReport(octokit, context, issue, suggestedLabels, currentLabels) {
  const newLabels = suggestedLabels.filter(label => !currentLabels.includes(label));

  if (newLabels.length === 0 && config.verbose) {
    return; // No report needed if no new labels
  }

  let reportContent = `## 🏷️ Auto-Labeling Report - Issue #${issue.number}

### Labels Applied:`;

  if (newLabels.length > 0) {
    reportContent += `\n${newLabels.map(label => `- \`${label}\``).join('\n')}`;
  } else {
    reportContent += `\n*No new labels applied - issue already has appropriate labels*`;
  }

  if (suggestedLabels.length > newLabels.length) {
    const existingRelevant = suggestedLabels.filter(label => currentLabels.includes(label));
    reportContent += `\n\n### Existing Relevant Labels:`;
    reportContent += `\n${existingRelevant.map(label => `- \`${label}\``).join('\n')}`;
  }

  reportContent += `\n\n*Labels are automatically applied based on issue content and our [labeling standards](/.github/instructions/labeling-standards.md).*`;

  // Post report if there are new labels or verbose mode
  if ((newLabels.length > 0 || config.verbose) && !config.dryRun) {
    try {
      await octokit.issues.createComment({
        owner: context.repo.owner,
        repo: context.repo.repo,
        issue_number: issue.number,
        body: reportContent,
      });
      log(`Posted labeling report for issue #${issue.number}`);
    } catch (error) {
      log(`Error posting report: ${error.message}`, 'error');
    }
  }
}

/**
 * Generate pull request labeling report
 */
async function generatePRLabelingReport(octokit, context, pr, suggestedLabels, currentLabels, files) {
  const newLabels = suggestedLabels.filter(label => !currentLabels.includes(label));

  if (newLabels.length === 0 && !config.verbose) {
    return; // No report needed if no new labels
  }

  const changedFiles = files.slice(0, 10); // Limit to first 10 files
  const totalChanges = files.reduce((sum, file) => sum + file.changes, 0);

  let reportContent = `## 🏷️ Auto-Labeling Report - PR #${pr.number}

### Labels Applied:`;

  if (newLabels.length > 0) {
    reportContent += `\n${newLabels.map(label => `- \`${label}\``).join('\n')}`;
  } else {
    reportContent += `\n*No new labels applied - PR already has appropriate labels*`;
  }

  reportContent += `\n\n### Analysis Summary:`;
  reportContent += `\n- **Files changed:** ${files.length}`;
  reportContent += `\n- **Total changes:** ${totalChanges} lines`;

  if (changedFiles.length > 0) {
    reportContent += `\n- **Key files:**`;
    changedFiles.forEach(file => {
      reportContent += `\n  - \`${file.filename}\` (+${file.additions} -${file.deletions})`;
    });

    if (files.length > 10) {
      reportContent += `\n  - *...and ${files.length - 10} more files*`;
    }
  }

  reportContent += `\n\n*Labels are automatically applied based on changed files, PR content, and our [labeling standards](/.github/instructions/labeling-standards.md).*`;

  // Post report if there are new labels or verbose mode
  if ((newLabels.length > 0 || config.verbose) && !config.dryRun) {
    try {
      await octokit.issues.createComment({
        owner: context.repo.owner,
        repo: context.repo.repo,
        issue_number: pr.number,
        body: reportContent,
      });
      log(`Posted labeling report for PR #${pr.number}`);
    } catch (error) {
      log(`Error posting report: ${error.message}`, 'error');
    }
  }
}

/**
 * Generate label validation report
 */
async function generateLabelValidationReport(octokit, context, validation) {
  const totalLabels = validation.standardLabels.length + validation.nonStandardLabels.length;
  const standardPercentage = Math.round((validation.standardLabels.length / totalLabels) * 100);

  const statusEmoji = validation.nonStandardLabels.length === 0 ? '✅' : '⚠️';

  let reportContent = `## 🏷️ Label Validation Report

${statusEmoji} **Label Standards Compliance: ${standardPercentage}%**

### Summary:
- ✅ **Standard labels:** ${validation.standardLabels.length}
- ${validation.nonStandardLabels.length === 0 ? '✅' : '⚠️'} **Non-standard labels:** ${validation.nonStandardLabels.length}
- ${validation.missingLabels.length === 0 ? '✅' : 'ℹ️'} **Missing recommended labels:** ${validation.missingLabels.length}`;

  if (validation.nonStandardLabels.length > 0) {
    reportContent += `\n\n### ⚠️ Non-Standard Labels:`;
    validation.nonStandardLabels.slice(0, 10).forEach(label => {
      const suggestion = findStandardLabel(label.name);
      reportContent += `\n- \`${label.name}\`${suggestion ? ` → Consider: \`${suggestion}\`` : ''}`;
    });

    if (validation.nonStandardLabels.length > 10) {
      reportContent += `\n- *...and ${validation.nonStandardLabels.length - 10} more*`;
    }
  }

  if (validation.missingLabels.length > 0) {
    reportContent += `\n\n### ℹ️ Missing Recommended Labels:`;
    validation.missingLabels.slice(0, 10).forEach(label => {
      reportContent += `\n- \`${label.name}\` - ${label.description}`;
    });

    if (validation.missingLabels.length > 10) {
      reportContent += `\n- *...and ${validation.missingLabels.length - 10} more*`;
    }
  }

  if (validation.nonStandardLabels.length === 0 && validation.missingLabels.length === 0) {
    reportContent += `\n\n🎉 **All labels follow LightSpeed standards!**`;
  }

  reportContent += `\n\n### Next Steps:`;
  if (validation.nonStandardLabels.length > 0) {
    reportContent += `\n1. Review non-standard labels and consider standardizing`;
    reportContent += `\n2. Use label standardization agent to migrate issues/PRs`;
  }
  if (validation.missingLabels.length > 0) {
    reportContent += `\n3. Add missing recommended labels to improve categorization`;
  }

  reportContent += `\n\nSee our [Labeling Standards](/.github/instructions/labeling-standards.md) for complete guidelines.`;

  log('Label validation completed');
  if (config.verbose) {
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
  analyzeIssueForLabels,
  analyzePullRequestForLabels,
  LABEL_CATEGORIES,
  FILE_PATTERNS,
};
