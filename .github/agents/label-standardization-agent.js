#!/usr/bin/env node
/**
 * Label Standardization Agent
 *
 * This agent enforces label standards across repositories by:
 * 1. Detecting non-standard labels (e.g., "php" vs "lang:php")
 * 2. Migrating issues/PRs to use standardized labels
 * 3. Deleting redundant non-standard labels after migration
 *
 * Usage:
 * - Automatically runs via GitHub Actions
 * - Can be run manually with appropriate permissions
 *
 * Environment Variables:
 * - GITHUB_TOKEN: Required for API access
 * - DRY_RUN: Set to "true" to preview without making changes
 * - VERBOSE: Set to "true" for detailed logs
 */

const { Octokit } = require('@octokit/rest');
const core = require('@actions/core');
const github = require('@actions/github');

// Label mappings from non-standard to standard
const LABEL_MAPPINGS = [
  // Language labels (canonical)
  { nonStandard: 'php', standard: 'lang:php' },
  { nonStandard: 'js', standard: 'lang:javascript' },
  { nonStandard: 'javascript', standard: 'lang:javascript' },
  { nonStandard: 'css', standard: 'lang:css' },
  { nonStandard: 'md', standard: 'lang:md' },
  { nonStandard: 'json', standard: 'lang:json' },
  { nonStandard: 'yaml', standard: 'lang:yaml' },

  // Area/component labels (canonical)
  { nonStandard: 'docs', standard: 'area:documentation' },
  { nonStandard: 'documentation', standard: 'area:documentation' },
  { nonStandard: 'testing', standard: 'area:testing' },
  { nonStandard: 'tests', standard: 'area:testing' },
  { nonStandard: 'ci', standard: 'area:ci' },
  { nonStandard: 'workflow', standard: 'area:ci' },
  { nonStandard: 'theme', standard: 'area:theme' },
  { nonStandard: 'block-editor', standard: 'area:block-editor' },
  { nonStandard: 'block-templates', standard: 'comp:block-templates' },
  { nonStandard: 'block-patterns', standard: 'comp:block-patterns' },
  { nonStandard: 'template-parts', standard: 'comp:template-parts' },
  { nonStandard: 'theme-json', standard: 'comp:theme-json' },
  { nonStandard: 'color-palette', standard: 'comp:color-palette' },
  { nonStandard: 'typography', standard: 'comp:typography' },
  { nonStandard: 'spacing', standard: 'comp:spacing' },

  // Priority labels (canonical)
  { nonStandard: 'critical', standard: 'priority:critical' },
  { nonStandard: 'important', standard: 'priority:important' },
  { nonStandard: 'normal', standard: 'priority:normal' },
  { nonStandard: 'minor', standard: 'priority:minor' },

  // Status labels (canonical)
  { nonStandard: 'needs-triage', standard: 'status:needs-triage' },
  { nonStandard: 'ready', standard: 'status:ready' },
  { nonStandard: 'in-progress', standard: 'status:in-progress' },
  { nonStandard: 'needs-review', standard: 'status:needs-review' },
  { nonStandard: 'needs-qa', standard: 'status:needs-qa' },
  { nonStandard: 'blocked', standard: 'status:blocked' },
  { nonStandard: 'in-discussion', standard: 'status:in-discussion' },
  { nonStandard: 'needs-more-info', standard: 'status:needs-more-info' },

  // Meta/hygiene labels (canonical)
  { nonStandard: 'stale', standard: 'meta:stale' },
  { nonStandard: 'no-issue-activity', standard: 'meta:no-issue-activity' },
  { nonStandard: 'needs-changelog', standard: 'meta:needs-changelog' },
  { nonStandard: 'no-changelog', standard: 'meta:no-changelog' }
];

// Config
const config = {
  dryRun: process.env.DRY_RUN === 'true',
  verbose: process.env.VERBOSE === 'true',
  token: process.env.GITHUB_TOKEN,
};

/**
 * Main function
 */
async function run() {
  try {
    // Initialize octokit
    if (!config.token) {
      throw new Error('GITHUB_TOKEN is required');
    }

    const octokit = new Octokit({ auth: config.token });
    const context = github.context;
    const repo = context.repo.repo;
    const owner = context.repo.owner;

    // Get repository labels
    const labels = await getRepositoryLabels(octokit, owner, repo);
    log(`Found ${labels.length} labels in repository ${owner}/${repo}`);

    // Find non-standard labels that have standard equivalents
    const labelsToStandardize = findLabelsToStandardize(labels);
    log(`Found ${labelsToStandardize.length} non-standard labels to standardize`);

    // Process each non-standard label
    for (const labelPair of labelsToStandardize) {
      await standardizeLabel(octokit, owner, repo, labelPair);
    }

    log('Label standardization completed successfully');

  } catch (error) {
    core.setFailed(`Error: ${error.message}`);
  }
}

/**
 * Get all labels in the repository
 */
async function getRepositoryLabels(octokit, owner, repo) {
  const labelsResponse = await octokit.paginate(
    octokit.issues.listLabelsForRepo,
    {
      owner,
      repo,
      per_page: 100,
    }
  );

  return labelsResponse;
}

/**
 * Find non-standard labels that have standard equivalents
 */
function findLabelsToStandardize(labels) {
  const labelsToStandardize = [];
  const labelNames = labels.map(label => label.name);

  for (const mapping of LABEL_MAPPINGS) {
    if (
      labelNames.includes(mapping.nonStandard) &&
      labelNames.includes(mapping.standard)
    ) {
      labelsToStandardize.push(mapping);
    }
  }

  return labelsToStandardize;
}

/**
 * Standardize a label by migrating issues/PRs and removing the non-standard label
 */
async function standardizeLabel(octokit, owner, repo, labelPair) {
  const { nonStandard, standard } = labelPair;

  log(`Standardizing label: ${nonStandard} → ${standard}`);

  // Find issues/PRs with the non-standard label
  const issues = await octokit.paginate(
    octokit.issues.listForRepo,
    {
      owner,
      repo,
      labels: nonStandard,
      state: 'all',
      per_page: 100,
    }
  );

  log(`Found ${issues.length} issues/PRs with label "${nonStandard}"`);

  // Update each issue/PR
  for (const issue of issues) {
    await updateIssueLabels(octokit, owner, repo, issue, nonStandard, standard);
  }

  // Delete the non-standard label if not in dry run mode
  if (!config.dryRun) {
    try {
      await octokit.issues.deleteLabel({
        owner,
        repo,
        name: nonStandard,
      });
      log(`Deleted non-standard label: ${nonStandard}`);
    } catch (error) {
      log(`Error deleting label ${nonStandard}: ${error.message}`, 'error');
    }
  } else {
    log(`[DRY RUN] Would delete non-standard label: ${nonStandard}`);
  }
}

/**
 * Update labels on an issue or PR
 */
async function updateIssueLabels(octokit, owner, repo, issue, nonStandard, standard) {
  const issueNumber = issue.number;

  // Get current labels and ensure we don't duplicate the standard label
  const currentLabels = issue.labels.map(label => label.name);
  const updatedLabels = currentLabels.filter(label => label !== nonStandard);

  if (!updatedLabels.includes(standard)) {
    updatedLabels.push(standard);
  }

  // Update the issue's labels
  if (!config.dryRun) {
    try {
      await octokit.issues.setLabels({
        owner,
        repo,
        issue_number: issueNumber,
        labels: updatedLabels,
      });
      log(`Updated #${issueNumber}: Replaced "${nonStandard}" with "${standard}"`);
    } catch (error) {
      log(`Error updating #${issueNumber}: ${error.message}`, 'error');
    }
  } else {
    log(`[DRY RUN] Would update #${issueNumber}: Replace "${nonStandard}" with "${standard}"`);
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
  findLabelsToStandardize,
  LABEL_MAPPINGS,
};
