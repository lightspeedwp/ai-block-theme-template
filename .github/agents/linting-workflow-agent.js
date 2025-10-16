#!/usr/bin/env node
/**
 * Linting Workflow Agent
 * 
 * You are a code quality specialist. Follow our LightSpeed WP linting standards 
 * to ensure consistent code quality across all files. Avoid bypassing lint rules 
 * unless specified.
 * 
 * This agent manages linting workflows and code quality enforcement:
 * 1. Validates linting configuration consistency
 * 2. Enforces code quality standards across multiple languages
 * 3. Manages automated fixes and suggestions
 * 4. Coordinates with CI/CD workflows for quality gates
 * 
 * Usage:
 * - Automatically triggered on code changes via GitHub Actions
 * - Validates linting setup during repository initialization
 * 
 * Environment Variables:
 * - GITHUB_TOKEN: Required for API access
 * - DRY_RUN: Set to "true" to preview without making changes
 * - VERBOSE: Set to "true" for detailed logs
 * - AUTO_FIX: Set to "true" to automatically fix linting issues when possible
 * - FAIL_ON_WARNINGS: Set to "true" to fail CI on linting warnings
 */

const { Octokit } = require('@octokit/rest');
const core = require('@actions/core');
const github = require('@actions/github');
const path = require('path');

// Supported linters and their configurations per LightSpeed standards
const LINTER_CONFIGS = {
  shellcheck: {
    configFile: '.shellcheckrc',
    extensions: ['.sh'],
    requiredRules: ['SC2086', 'SC2046', 'SC2068', 'SC2206'],
    excludedRules: [], // Allow project-specific exclusions
  },
  markdownlint: {
    configFile: '.markdownlint.json',
    extensions: ['.md'],
    requiredRules: ['MD001', 'MD003', 'MD022', 'MD025', 'MD030'],
    excludedRules: ['MD013'], // Line length often excluded
  },
  eslint: {
    configFile: '.eslintrc.json',
    extensions: ['.js', '.mjs', '.jsx', '.ts', '.tsx'],
    requiredRules: ['no-unused-vars', 'no-console', 'semi', 'quotes'],
    excludedRules: [],
  },
  prettier: {
    configFile: '.prettierrc',
    extensions: ['.js', '.mjs', '.jsx', '.ts', '.tsx', '.json', '.md'],
    requiredConfig: {
      semi: true,
      singleQuote: true,
      tabWidth: 2,
    },
  },
  yamllint: {
    configFile: '.yamllint.yml',
    extensions: ['.yml', '.yaml'],
    requiredRules: ['line-length', 'indentation', 'trailing-spaces'],
    excludedRules: [],
  },
};

// Workflow patterns for linting
const WORKFLOW_PATTERNS = {
  linting_job: /jobs:\s*\n\s*[\w-]*lint[\w-]*:/,
  shellcheck_step: /shellcheck|shell.*check/i,
  markdownlint_step: /markdownlint|markdown.*lint/i,
  eslint_step: /eslint|js.*lint/i,
  prettier_step: /prettier|format.*check/i,
};

// Config
const config = {
  dryRun: process.env.DRY_RUN === 'true',
  verbose: process.env.VERBOSE === 'true',
  token: process.env.GITHUB_TOKEN,
  autoFix: process.env.AUTO_FIX === 'true',
  failOnWarnings: process.env.FAIL_ON_WARNINGS === 'true',
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
    
    log('Starting linting workflow analysis...');
    
    const lintingReport = {
      configurationIssues: [],
      workflowIssues: [],
      codeQualityIssues: [],
      autoFixSuggestions: [],
      overallScore: 0,
    };
    
    // Analyze linting configurations
    await analyzeLintingConfigs(octokit, context, lintingReport);
    
    // Analyze workflow integration
    await analyzeLintingWorkflows(octokit, context, lintingReport);
    
    // Check changed files for linting issues
    if (context.eventName === 'pull_request') {
      await analyzeChangedFilesLinting(octokit, context, lintingReport);
    }
    
    // Generate auto-fix suggestions
    await generateAutoFixSuggestions(octokit, context, lintingReport);
    
    // Create comprehensive report
    await generateLintingReport(octokit, context, lintingReport);
    
    // Fail if there are critical linting issues
    const criticalIssues = [
      ...lintingReport.configurationIssues.filter(i => i.severity === 'error'),
      ...lintingReport.codeQualityIssues.filter(i => i.severity === 'error'),
    ];
    
    if (criticalIssues.length > 0 && !config.dryRun) {
      core.setFailed(`${criticalIssues.length} critical linting issues found`);
    }
    
    log('Linting workflow analysis completed');
    
  } catch (error) {
    core.setFailed(`Error: ${error.message}`);
  }
}

/**
 * Analyze linting configuration files
 */
async function analyzeLintingConfigs(octokit, context, report) {
  log('Analyzing linting configurations...');
  
  for (const [linter, config] of Object.entries(LINTER_CONFIGS)) {
    await analyzeLinterConfig(octokit, context, linter, config, report);
  }
}

/**
 * Analyze individual linter configuration
 */
async function analyzeLinterConfig(octokit, context, linter, linterConfig, report) {
  try {
    const { data: configFile } = await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: linterConfig.configFile,
    });
    
    const configContent = Buffer.from(configFile.content, 'base64').toString('utf8');
    
    // Validate configuration based on linter type
    switch (linter) {
      case 'shellcheck':
        await validateShellCheckConfig(configContent, report);
        break;
      case 'markdownlint':
        await validateMarkdownLintConfig(configContent, report);
        break;
      case 'eslint':
        await validateESLintConfig(configContent, report);
        break;
      case 'prettier':
        await validatePrettierConfig(configContent, report, linterConfig);
        break;
      case 'yamllint':
        await validateYAMLLintConfig(configContent, report);
        break;
    }
    
    log(`✅ ${linter} configuration validated`);
    
  } catch (error) {
    if (error.status === 404) {
      report.configurationIssues.push({
        type: 'missing_config',
        linter: linter,
        message: `Missing ${linter} configuration file: ${linterConfig.configFile}`,
        severity: linter === 'shellcheck' || linter === 'markdownlint' ? 'error' : 'warning',
        suggestion: `Create ${linterConfig.configFile} with LightSpeed WP standards`,
      });
    } else {
      log(`Error analyzing ${linter} config: ${error.message}`, 'error');
    }
  }
}

/**
 * Validate ShellCheck configuration
 */
async function validateShellCheckConfig(content, report) {
  const lines = content.split('\n');
  
  // Check for required exclusions/inclusions
  const hasExternalSources = lines.some(line => 
    line.includes('external-sources=true') || line.includes('source-path=')
  );
  
  if (!hasExternalSources) {
    report.configurationIssues.push({
      type: 'shellcheck_config',
      message: 'ShellCheck config should include external-sources=true for better analysis',
      severity: 'warning',
      suggestion: 'Add "external-sources=true" to .shellcheckrc',
    });
  }
  
  // Check for proper shell specification
  const hasShellSpec = lines.some(line => line.includes('shell='));
  if (!hasShellSpec) {
    report.configurationIssues.push({
      type: 'shellcheck_shell',
      message: 'ShellCheck config should specify shell type (e.g., shell=bash)',
      severity: 'warning',
      suggestion: 'Add "shell=bash" to .shellcheckrc',
    });
  }
}

/**
 * Validate Markdown lint configuration
 */
async function validateMarkdownLintConfig(content, report) {
  try {
    const config = JSON.parse(content);
    
    // Check for required rules
    const recommendedRules = {
      'MD001': true, // Header levels should only increment by one level at a time
      'MD003': { style: 'atx' }, // Header style
      'MD022': true, // Headers should be surrounded by blank lines
      'MD025': true, // Multiple top level headers in the same document
      'MD030': true, // Spaces after list markers
    };
    
    for (const [rule, expectedValue] of Object.entries(recommendedRules)) {
      if (!(rule in config) || (typeof expectedValue === 'object' && JSON.stringify(config[rule]) !== JSON.stringify(expectedValue))) {
        report.configurationIssues.push({
          type: 'markdownlint_rule',
          message: `Markdown lint config missing or incorrect rule: ${rule}`,
          severity: 'warning',
          suggestion: `Add "${rule}": ${JSON.stringify(expectedValue)} to .markdownlint.json`,
        });
      }
    }
    
  } catch (error) {
    report.configurationIssues.push({
      type: 'markdownlint_invalid',
      message: 'Invalid JSON in .markdownlint.json',
      severity: 'error',
      suggestion: 'Fix JSON syntax errors in .markdownlint.json',
    });
  }
}

/**
 * Validate ESLint configuration
 */
async function validateESLintConfig(content, report) {
  try {
    const config = JSON.parse(content);
    
    // Check for extends
    if (!config.extends || !Array.isArray(config.extends)) {
      report.configurationIssues.push({
        type: 'eslint_extends',
        message: 'ESLint config should extend recommended configurations',
        severity: 'warning',
        suggestion: 'Add "extends": ["eslint:recommended"] to .eslintrc.json',
      });
    }
    
    // Check for environment settings
    if (!config.env) {
      report.configurationIssues.push({
        type: 'eslint_env',
        message: 'ESLint config should specify environment (node, browser, es6)',
        severity: 'warning',
        suggestion: 'Add "env" section to .eslintrc.json',
      });
    }
    
  } catch (error) {
    report.configurationIssues.push({
      type: 'eslint_invalid',
      message: 'Invalid JSON in .eslintrc.json',
      severity: 'error',
      suggestion: 'Fix JSON syntax errors in .eslintrc.json',
    });
  }
}

/**
 * Validate Prettier configuration
 */
async function validatePrettierConfig(content, report, linterConfig) {
  try {
    const config = JSON.parse(content);
    
    // Check required configuration
    for (const [key, expectedValue] of Object.entries(linterConfig.requiredConfig)) {
      if (config[key] !== expectedValue) {
        report.configurationIssues.push({
          type: 'prettier_config',
          message: `Prettier config should have ${key}: ${expectedValue}`,
          severity: 'warning',
          suggestion: `Set "${key}": ${JSON.stringify(expectedValue)} in .prettierrc`,
        });
      }
    }
    
  } catch (error) {
    report.configurationIssues.push({
      type: 'prettier_invalid',
      message: 'Invalid JSON in .prettierrc',
      severity: 'error',
      suggestion: 'Fix JSON syntax errors in .prettierrc',
    });
  }
}

/**
 * Validate YAML lint configuration  
 */
async function validateYAMLLintConfig(content, report) {
  // Basic validation for YAML lint config
  if (!content.includes('rules:')) {
    report.configurationIssues.push({
      type: 'yamllint_rules',
      message: 'YAML lint config should define rules section',
      severity: 'warning',
      suggestion: 'Add rules section to .yamllint.yml',
    });
  }
}

/**
 * Analyze linting workflows
 */
async function analyzeLintingWorkflows(octokit, context, report) {
  log('Analyzing linting workflows...');
  
  try {
    const { data: workflowFiles } = await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: '.github/workflows',
    });
    
    let hasLintingWorkflow = false;
    const lintersCovered = new Set();
    
    for (const file of workflowFiles) {
      if (file.name.endsWith('.yml') || file.name.endsWith('.yaml')) {
        const workflowAnalysis = await analyzeWorkflowFile(octokit, context, file, report);
        if (workflowAnalysis.hasLinting) {
          hasLintingWorkflow = true;
          workflowAnalysis.linters.forEach(linter => lintersCovered.add(linter));
        }
      }
    }
    
    if (!hasLintingWorkflow) {
      report.workflowIssues.push({
        type: 'no_linting_workflow',
        message: 'No linting workflow found in .github/workflows/',
        severity: 'error',
        suggestion: 'Create a linting workflow that runs on pull requests',
      });
    }
    
    // Check coverage of available linters
    const availableLinters = Object.keys(LINTER_CONFIGS);
    const missingLinters = availableLinters.filter(linter => !lintersCovered.has(linter));
    
    if (missingLinters.length > 0) {
      report.workflowIssues.push({
        type: 'incomplete_linter_coverage',
        message: `Workflows missing linters: ${missingLinters.join(', ')}`,
        severity: 'warning',
        suggestion: 'Add missing linters to workflow for complete coverage',
      });
    }
    
  } catch (error) {
    log(`Error analyzing workflows: ${error.message}`, 'error');
  }
}

/**
 * Analyze individual workflow file
 */
async function analyzeWorkflowFile(octokit, context, file, report) {
  const { data: workflowContent } = await octokit.repos.getContent({
    owner: context.repo.owner,
    repo: context.repo.repo,
    path: file.path,
  });
  
  const content = Buffer.from(workflowContent.content, 'base64').toString('utf8');
  const linters = [];
  let hasLinting = false;
  
  // Check for linting patterns
  if (WORKFLOW_PATTERNS.linting_job.test(content)) {
    hasLinting = true;
    
    // Check for specific linters
    if (WORKFLOW_PATTERNS.shellcheck_step.test(content)) {
      linters.push('shellcheck');
    }
    if (WORKFLOW_PATTERNS.markdownlint_step.test(content)) {
      linters.push('markdownlint');
    }
    if (WORKFLOW_PATTERNS.eslint_step.test(content)) {
      linters.push('eslint');
    }
    if (WORKFLOW_PATTERNS.prettier_step.test(content)) {
      linters.push('prettier');
    }
  }
  
  // Check for proper triggers
  if (hasLinting && !content.includes('pull_request')) {
    report.workflowIssues.push({
      type: 'missing_pr_trigger',
      message: `Linting workflow ${file.name} should run on pull_request`,
      severity: 'warning',
      suggestion: 'Add pull_request trigger to linting workflow',
    });
  }
  
  return { hasLinting, linters };
}

/**
 * Analyze changed files for linting issues
 */
async function analyzeChangedFilesLinting(octokit, context, report) {
  log('Analyzing changed files for linting issues...');
  
  const { data: files } = await octokit.pulls.listFiles({
    owner: context.repo.owner,
    repo: context.repo.repo,
    pull_number: context.payload.pull_request.number,
  });
  
  for (const file of files) {
    if (file.status !== 'removed') {
      await analyzeFileForLinting(octokit, context, file, report);
    }
  }
}

/**
 * Analyze individual file for linting issues
 */
async function analyzeFileForLinting(octokit, context, file, report) {
  const extension = path.extname(file.filename);
  const basename = path.basename(file.filename);
  
  // Determine applicable linters
  const applicableLinters = Object.entries(LINTER_CONFIGS)
    .filter(([_, config]) => config.extensions.includes(extension))
    .map(([linter, _]) => linter);
  
  if (applicableLinters.length === 0) {
    return; // No linters apply to this file type
  }
  
  try {
    const { data: content } = await octokit.repos.getContent({
      owner: context.repo.owner,
      repo: context.repo.repo,
      path: file.filename,
      ref: context.payload.pull_request.head.sha,
    });
    
    const fileContent = Buffer.from(content.content, 'base64').toString('utf8');
    
    // Basic static analysis for common issues
    await performBasicLintingChecks(file.filename, fileContent, applicableLinters, report);
    
  } catch (error) {
    log(`Error analyzing file ${file.filename}: ${error.message}`, 'warning');
  }
}

/**
 * Perform basic static linting checks
 */
async function performBasicLintingChecks(filename, content, linters, report) {
  const lines = content.split('\n');
  const extension = path.extname(filename);
  
  // Common checks for all file types
  
  // Check for trailing whitespace
  const trailingWhitespaceLines = lines
    .map((line, index) => ({ line, index: index + 1 }))
    .filter(({ line }) => line.match(/\s+$/))
    .slice(0, 5); // Limit to first 5 occurrences
  
  if (trailingWhitespaceLines.length > 0) {
    report.codeQualityIssues.push({
      type: 'trailing_whitespace',
      file: filename,
      lines: trailingWhitespaceLines.map(l => l.index),
      message: `Trailing whitespace found on ${trailingWhitespaceLines.length} lines`,
      severity: 'warning',
      autoFixable: true,
    });
  }
  
  // Check for inconsistent line endings
  if (content.includes('\r\n')) {
    report.codeQualityIssues.push({
      type: 'windows_line_endings',
      file: filename,
      message: 'File contains Windows line endings (CRLF)',
      severity: 'warning',
      autoFixable: true,
    });
  }
  
  // File-type specific checks
  if (extension === '.sh' && linters.includes('shellcheck')) {
    await performShellScriptChecks(filename, lines, report);
  }
  
  if (extension === '.md' && linters.includes('markdownlint')) {
    await performMarkdownChecks(filename, lines, report);
  }
  
  if (['.js', '.mjs', '.jsx'].includes(extension) && linters.includes('eslint')) {
    await performJavaScriptChecks(filename, lines, report);
  }
}

/**
 * Perform shell script specific checks
 */
async function performShellScriptChecks(filename, lines, report) {
  // Check for proper shebang
  if (lines.length > 0 && !lines[0].startsWith('#!/')) {
    report.codeQualityIssues.push({
      type: 'missing_shebang',
      file: filename,
      line: 1,
      message: 'Shell script missing shebang line',
      severity: 'error',
      suggestion: 'Add #!/bin/bash as first line',
    });
  }
  
  // Check for set -euo pipefail
  const hasErrorHandling = lines.some(line => 
    line.includes('set -e') && line.includes('pipefail')
  );
  
  if (!hasErrorHandling) {
    report.codeQualityIssues.push({
      type: 'missing_error_handling',
      file: filename,
      message: 'Shell script missing proper error handling',
      severity: 'error',
      suggestion: 'Add "set -euo pipefail" after shebang',
    });
  }
  
  // Check for unquoted variables (basic check)
  const unquotedVarLines = lines
    .map((line, index) => ({ line, index: index + 1 }))
    .filter(({ line }) => {
      // Simple regex to catch common unquoted variable patterns
      return /\$[A-Za-z_][A-Za-z0-9_]*(?!\s*[=\[]|\s*\))/.test(line) && 
             !line.includes('"$') && !line.includes("'$");
    })
    .slice(0, 3); // Limit to first 3 occurrences
  
  if (unquotedVarLines.length > 0) {
    report.codeQualityIssues.push({
      type: 'unquoted_variables',
      file: filename,
      lines: unquotedVarLines.map(l => l.index),
      message: 'Potentially unquoted variables found',
      severity: 'warning',
      suggestion: 'Quote variables to prevent word splitting: "$variable"',
    });
  }
}

/**
 * Perform markdown specific checks
 */
async function performMarkdownChecks(filename, lines, report) {
  // Check for missing title (H1)
  const hasTitle = lines.some(line => line.startsWith('# '));
  if (!hasTitle) {
    report.codeQualityIssues.push({
      type: 'missing_title',
      file: filename,
      message: 'Markdown file missing main title (H1)',
      severity: 'warning',
      suggestion: 'Add a main title starting with "# "',
    });
  }
  
  // Check for very long lines
  const longLines = lines
    .map((line, index) => ({ line, index: index + 1 }))
    .filter(({ line }) => line.length > 120)
    .slice(0, 3);
  
  if (longLines.length > 0) {
    report.codeQualityIssues.push({
      type: 'long_lines',
      file: filename,
      lines: longLines.map(l => l.index),
      message: 'Lines exceed recommended length (120 characters)',
      severity: 'info',
      suggestion: 'Consider breaking long lines for better readability',
    });
  }
}

/**
 * Perform JavaScript specific checks
 */
async function performJavaScriptChecks(filename, lines, report) {
  // Check for console.log statements (simple check)
  const consoleLines = lines
    .map((line, index) => ({ line, index: index + 1 }))
    .filter(({ line }) => line.includes('console.log'))
    .slice(0, 3);
  
  if (consoleLines.length > 0) {
    report.codeQualityIssues.push({
      type: 'console_statements',
      file: filename,
      lines: consoleLines.map(l => l.index),
      message: 'Console.log statements found',
      severity: 'warning',
      suggestion: 'Remove console.log statements before production',
    });
  }
}

/**
 * Generate auto-fix suggestions
 */
async function generateAutoFixSuggestions(octokit, context, report) {
  if (!config.autoFix) {
    return;
  }
  
  const autoFixableIssues = report.codeQualityIssues.filter(issue => issue.autoFixable);
  
  if (autoFixableIssues.length > 0) {
    report.autoFixSuggestions.push({
      type: 'auto_fix_available',
      count: autoFixableIssues.length,
      message: `${autoFixableIssues.length} issues can be automatically fixed`,
      action: 'Run linters with --fix flag to automatically resolve these issues',
    });
  }
}

/**
 * Generate comprehensive linting report
 */
async function generateLintingReport(octokit, context, report) {
  const totalIssues = report.configurationIssues.length + 
                     report.workflowIssues.length + 
                     report.codeQualityIssues.length;
  
  const errorCount = [...report.configurationIssues, ...report.workflowIssues, ...report.codeQualityIssues]
    .filter(issue => issue.severity === 'error').length;
  
  const warningCount = [...report.configurationIssues, ...report.workflowIssues, ...report.codeQualityIssues]
    .filter(issue => issue.severity === 'warning').length;
  
  const statusEmoji = errorCount > 0 ? '❌' : warningCount > 0 ? '⚠️' : '✅';
  const overallStatus = errorCount > 0 ? 'FAILING' : warningCount > 0 ? 'WARNING' : 'PASSING';
  
  let reportContent = `## 🔍 Code Quality & Linting Report

${statusEmoji} **Overall Status: ${overallStatus}**
📊 **Total Issues: ${totalIssues}** (${errorCount} errors, ${warningCount} warnings)

### Summary:
- ${report.configurationIssues.length === 0 ? '✅' : '⚠️'} **Configuration**: ${report.configurationIssues.length} issues
- ${report.workflowIssues.length === 0 ? '✅' : '⚠️'} **Workflows**: ${report.workflowIssues.length} issues  
- ${report.codeQualityIssues.length === 0 ? '✅' : '⚠️'} **Code Quality**: ${report.codeQualityIssues.length} issues`;

  // Configuration issues
  if (report.configurationIssues.length > 0) {
    reportContent += `\n\n### ⚙️ Configuration Issues:`;
    report.configurationIssues.forEach(issue => {
      const emoji = issue.severity === 'error' ? '❌' : '⚠️';
      reportContent += `\n${emoji} **${issue.linter || 'Config'}**: ${issue.message}`;
      if (issue.suggestion) {
        reportContent += `\n   💡 ${issue.suggestion}`;
      }
    });
  }
  
  // Workflow issues
  if (report.workflowIssues.length > 0) {
    reportContent += `\n\n### 🔄 Workflow Issues:`;
    report.workflowIssues.forEach(issue => {
      const emoji = issue.severity === 'error' ? '❌' : '⚠️';
      reportContent += `\n${emoji} ${issue.message}`;
      if (issue.suggestion) {
        reportContent += `\n   💡 ${issue.suggestion}`;
      }
    });
  }
  
  // Code quality issues
  if (report.codeQualityIssues.length > 0) {
    reportContent += `\n\n### 📝 Code Quality Issues:`;
    
    // Group by file
    const issuesByFile = {};
    report.codeQualityIssues.forEach(issue => {
      if (!issuesByFile[issue.file]) {
        issuesByFile[issue.file] = [];
      }
      issuesByFile[issue.file].push(issue);
    });
    
    Object.entries(issuesByFile).forEach(([file, issues]) => {
      reportContent += `\n\n**${file}**:`;
      issues.forEach(issue => {
        const emoji = issue.severity === 'error' ? '❌' : issue.severity === 'warning' ? '⚠️' : 'ℹ️';
        const lineInfo = issue.lines ? ` (lines: ${issue.lines.join(', ')})` : issue.line ? ` (line: ${issue.line})` : '';
        reportContent += `\n${emoji} ${issue.message}${lineInfo}`;
        if (issue.suggestion) {
          reportContent += `\n   💡 ${issue.suggestion}`;
        }
      });
    });
  }
  
  // Auto-fix suggestions
  if (report.autoFixSuggestions.length > 0) {
    reportContent += `\n\n### 🔧 Auto-Fix Suggestions:`;
    report.autoFixSuggestions.forEach(suggestion => {
      reportContent += `\n✨ ${suggestion.message}`;
      reportContent += `\n   📝 ${suggestion.action}`;
    });
  }
  
  if (totalIssues === 0) {
    reportContent += `\n\n🎉 **All linting checks passed!** Code quality standards are met.`;
  }
  
  reportContent += `\n\n### Next Steps:`;
  if (errorCount > 0) {
    reportContent += `\n1. Fix ${errorCount} critical errors before merging`;
  }
  if (warningCount > 0) {
    reportContent += `\n2. Address ${warningCount} warnings to improve code quality`;
  }
  if (report.autoFixSuggestions.length > 0) {
    reportContent += `\n3. Run auto-fix tools to resolve fixable issues automatically`;
  }
  
  reportContent += `\n\nSee our [Code Quality Standards](/.github/instructions/coding-standards.md) for complete guidelines.`;
  
  // Post report for pull requests
  if (context.payload.pull_request && !config.dryRun) {
    try {
      await octokit.issues.createComment({
        owner: context.repo.owner,
        repo: context.repo.repo,
        issue_number: context.payload.pull_request.number,
        body: reportContent,
      });
      log('Posted linting report');
    } catch (error) {
      log(`Error posting report: ${error.message}`, 'error');
    }
  } else if (config.dryRun) {
    log('[DRY RUN] Would post linting report');
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
  analyzeLintingConfigs,
  LINTER_CONFIGS,
};