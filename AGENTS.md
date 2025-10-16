# Agents Directory & Registry

This repository contains AI and automation agents to assist with GitHub project management and issue workflow automation.

## Purpose

This file serves as a registry for agent implementations in the repository, including:

- Custom GitHub Copilot agents
- Issue management automation agents
- Workflow automation agents
- MCP server agents
- Any other AI or automation agents

## Current Agents

### issue-type-agent

- **Purpose:** Automatically analyzes GitHub issues and assigns appropriate issue types in GitHub Projects
- **Location:** .github/agents/issue-type-agent.js
- **Integration:** GitHub Actions (.github/workflows/auto-issue-type.yml)
- **Usage:** Automatically runs when issues are opened or reopened
- **Standards:** Aligned with org-wide-issue-types-v1-9.md and project templates
- **Functionality:**
  - Analyzes issue template metadata, content, title, and labels
  - Determines appropriate issue type using the standardized types (Bug, Feature, Task, Epic, Story, etc.)
  - Updates GitHub ProjectsV2 issue type field
  - Adds issues to relevant projects if not already added
- **Definition of Done:**
  - Correctly identifies all standard issue types per org-wide standards
  - Prioritizes template metadata over content analysis
  - Documents behavior in .github/docs/auto-issue-type.md
  - Integrates with PR and issue templates
  - Follows the standard branch naming conventions when modified

### label-standardization-agent

- **Purpose:** Enforces standardized labels across repositories, preventing redundant labels
- **Location:** .github/agents/label-standardization-agent.js
- **Integration:** GitHub Actions (.github/workflows/label-standardization.yml)
- **Usage:** Runs weekly and can be triggered manually via workflow_dispatch
- **Standards:** Aligned with org-wide-labels-v1-11.md and standard prefixes
- **Functionality:**
  - Detects non-standard labels with standard equivalents (e.g., "php" vs "lang:php")
  - Migrates issues/PRs from non-standard to standard labels
  - Removes redundant non-standard labels after migration
  - Supports dry-run mode for testing before applying changes
- **Definition of Done:**
  - Successfully standardizes all labels according to organization conventions
  - Properly migrates issues/PRs to use standard labels
  - Provides clear logging and summary reports
  - Integrates with existing label workflows
  - Documents behavior in .github/docs/label-standardization.md

### script-header-docs-agent

- **Purpose:** You are a documentation specialist. Follow our LightSpeed WP script documentation standards to ensure comprehensive script headers and inline documentation. Avoid abbreviated or incomplete documentation unless specified.
- **Location:** .github/agents/script-header-docs-agent.js
- **Integration:** GitHub Actions on script file changes, manual documentation reviews
- **Usage:** Automatically triggered on shell script changes via pull requests
- **Standards:** Aligned with LightSpeed WP shell script documentation standards and header requirements
- **Functionality:**
  - Validates script headers follow LightSpeed WP standards (shebang, script name, description, usage, author, date)
  - Checks for proper inline documentation and comments
  - Ensures function documentation and usage examples
  - Validates parameter and variable documentation
  - Generates documentation quality scores and improvement suggestions
- **Definition of Done:**
  - All shell scripts have compliant headers with required components
  - Functions and important variables are properly documented
  - Provides clear feedback on documentation gaps with actionable suggestions
  - Integrates with PR review process for automated documentation validation

### bats-tests-runner-agent

- **Purpose:** You are a test automation specialist. Follow our LightSpeed WP testing standards to ensure comprehensive test coverage and quality. Avoid incomplete test suites unless specified.
- **Location:** .github/agents/bats-tests-runner-agent.js
- **Integration:** GitHub Actions on script or test file changes, CI/CD test validation
- **Usage:** Automatically triggered on script or test file changes during PR reviews
- **Standards:** Aligned with LightSpeed WP Bats testing requirements and coverage thresholds
- **Functionality:**
  - Ensures every shell script has corresponding Bats tests
  - Validates test coverage and quality against script type requirements
  - Manages test runner scripts and CI integration
  - Checks for proper test structure and naming conventions
  - Analyzes test categories (basic functionality, error handling, dry-run, etc.)
- **Definition of Done:**
  - All shell scripts have corresponding test files with minimum coverage threshold
  - Test files follow naming conventions and quality standards
  - Test runners are properly configured for CI/CD integration
  - Provides comprehensive testing reports with coverage metrics and suggestions

### release-agent

- **Purpose:** You are a release management specialist. Follow our LightSpeed WP release processes to automate version management and changelog generation. Avoid manual release steps unless specified.
- **Location:** .github/agents/release-agent.js
- **Integration:** GitHub Actions on release branch creation, tag events, and release workflows
- **Usage:** Automatically triggered on release branch creation, tag creation, and release publication
- **Standards:** Aligned with LightSpeed WP semantic versioning and changelog standards
- **Functionality:**
  - Validates release readiness and quality gates
  - Manages semantic versioning and changelog automation
  - Coordinates release branches and tag creation
  - Handles release notes and documentation updates
  - Performs comprehensive pre-release validation (files, tests, documentation, dependencies)
- **Definition of Done:**
  - All release criteria are validated before release creation
  - Version consistency is maintained across all files (VERSION, package.json, CHANGELOG.md)
  - Release process is fully automated with proper quality gates
  - Provides detailed release validation reports and blocks releases with critical issues

### linting-workflow-agent

- **Purpose:** You are a code quality specialist. Follow our LightSpeed WP linting standards to ensure consistent code quality across all files. Avoid bypassing lint rules unless specified.
- **Location:** .github/agents/linting-workflow-agent.js
- **Integration:** GitHub Actions on code changes, CI/CD quality gates
- **Usage:** Automatically triggered on code changes via pull requests and repository validation
- **Standards:** Aligned with LightSpeed WP multi-language linting standards (ShellCheck, markdownlint, ESLint, Prettier, yamllint)
- **Functionality:**
  - Validates linting configuration consistency across multiple languages
  - Enforces code quality standards for shell, JavaScript, Markdown, YAML
  - Manages automated fixes and suggestions
  - Coordinates with CI/CD workflows for quality gates
  - Analyzes changed files for linting issues with detailed reporting
- **Definition of Done:**
  - All supported file types have proper linting configurations
  - Linting workflows are integrated into CI/CD with appropriate triggers
  - Code quality issues are detected and reported with auto-fix suggestions
  - Comprehensive linting reports provide actionable feedback for developers

### labeling-agent

- **Purpose:** You are a project organization specialist. Follow our LightSpeed WP labeling standards to ensure consistent issue and PR categorization. Avoid non-standard labels unless specified.
- **Location:** .github/agents/labeling-agent.js
- **Integration:** GitHub Actions on issue/PR creation and updates, label management workflows
- **Usage:** Automatically triggered on issue/PR creation, updates, and periodic label synchronization
- **Standards:** Aligned with LightSpeed WP label categories and naming conventions (area:, lang:, priority:, status:, size:, type:)
- **Functionality:**
  - Automatically applies labels based on content, files changed, and context
  - Enforces label consistency and naming conventions
  - Manages label hierarchies and relationships
  - Integrates with project management and workflow automation
  - Validates repository labels against organizational standards
- **Definition of Done:**
  - All issues and PRs receive appropriate labels based on standardized categories
  - Repository labels conform to organizational naming conventions
  - Label application is consistent and automated across content and file patterns
  - Provides comprehensive labeling reports with suggestions for improvement

## Additional Automation Logic

Additional agent-related logic is managed via:

- [Copilot instructions](.github/copilot-instructions.md)
- [Custom instructions](.github/custom-instructions.md)
- [Prompts](.github/prompts/prompts.md)
- [Chat modes](.github/chatmodes/chatmodes.md)
- [Automation scripts](scripts/)
- [Workflows](.github/workflows/)

## How to Add Agents

1. Create a new folder: `./github/agents/`
2. Add agent implementation files (e.g., `copilot-agent.js`, `review-agent.py`)
3. Document each agent in this file:
   - Name
   - Purpose
   - Integration points
   - Usage instructions
   - Maintenance notes

## Example Entry (for future agents)

```markdown
### copilot-swe-agent
- **Purpose:** Automates code suggestions and review for SWE tasks
- **Location:** .github/agents/copilot-swe-agent.js
- **Integration:** GitHub Actions, Copilot Chat, CodeRabbit
- **Usage:** See README and workflow documentation
```

---

**Note:** Update this file whenever new agents are added or existing ones are modified.
