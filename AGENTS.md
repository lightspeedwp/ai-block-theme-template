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

## Complete Agent Registry

### JavaScript Automation Agents

These agents are executable JavaScript files that integrate with GitHub Actions and workflows:

#### **bats-tests-runner-agent.js**
- **Purpose:** Test automation specialist ensuring comprehensive Bats test coverage
- **Location:** .github/agents/bats-tests-runner-agent.js
- **Integration:** GitHub Actions on script/test file changes, CI/CD validation
- **Standards:** LightSpeed WP Bats testing requirements and coverage thresholds
- **Key Functions:**
  - Validates every shell script has corresponding Bats tests
  - Enforces test coverage thresholds and quality standards
  - Manages test runner integration with CI/CD
  - Provides detailed testing reports and improvement suggestions

#### **issue-type-agent.js**
- **Purpose:** Automatically analyzes and assigns appropriate issue types in GitHub Projects
- **Location:** .github/agents/issue-type-agent.js
- **Integration:** GitHub Actions (.github/workflows/auto-issue-type.yml)
- **Standards:** Aligned with org-wide issue types and project templates
- **Key Functions:**
  - Analyzes issue content, title, labels, and template metadata
  - Assigns standardized issue types (Bug, Feature, Task, Epic, Story)
  - Updates GitHub ProjectsV2 fields automatically
  - Integrates with project management workflows

#### **label-standardization-agent.js**
- **Purpose:** Enforces standardized labels across repositories and prevents redundancy
- **Location:** .github/agents/label-standardization-agent.js
- **Integration:** GitHub Actions (.github/workflows/label-standardization.yml)
- **Standards:** Aligned with org-wide label standards and naming conventions
- **Key Functions:**
  - Detects non-standard labels with standard equivalents
  - Migrates issues/PRs from non-standard to standard labels
  - Removes redundant labels after migration
  - Provides comprehensive labeling reports

#### **labeling-agent.js**
- **Purpose:** Intelligent issue and PR labeling based on content and context analysis
- **Location:** .github/agents/labeling-agent.js
- **Integration:** GitHub Actions on issue/PR creation and updates
- **Standards:** LightSpeed WP label categories (area:, lang:, priority:, status:, size:, type:)
- **Key Functions:**
  - Automatically applies labels based on content analysis
  - Enforces label consistency and naming conventions
  - Manages label hierarchies and relationships
  - Validates repository labels against organizational standards

#### **linting-workflow-agent.js**
- **Purpose:** Code quality specialist enforcing consistent linting standards across all file types
- **Location:** .github/agents/linting-workflow-agent.js
- **Integration:** GitHub Actions on code changes, CI/CD quality gates
- **Standards:** Multi-language linting (ShellCheck, markdownlint, ESLint, Prettier, yamllint)
- **Key Functions:**
  - Validates linting configuration consistency
  - Enforces code quality standards across multiple languages
  - Provides automated fixes and suggestions
  - Integrates with CI/CD workflows as quality gates

#### **release-agent.js**
- **Purpose:** Release management specialist automating version management and changelog generation
- **Location:** .github/agents/release-agent.js
- **Integration:** GitHub Actions on release events, tag creation, and release workflows
- **Standards:** LightSpeed WP semantic versioning and changelog standards
- **Key Functions:**
  - Validates release readiness and quality gates
  - Manages semantic versioning and changelog automation
  - Coordinates release branches and tag creation
  - Performs comprehensive pre-release validation

#### **script-header-docs-agent.js**
- **Purpose:** Documentation specialist ensuring comprehensive shell script headers and inline documentation
- **Location:** .github/agents/script-header-docs-agent.js
- **Integration:** GitHub Actions on script file changes, PR documentation reviews
- **Standards:** LightSpeed WP shell script documentation standards
- **Key Functions:**
  - Validates script headers follow organizational standards
  - Checks for proper inline documentation and comments
  - Ensures function documentation and usage examples
  - Generates documentation quality scores and suggestions

### Markdown Specification Agents

These agents are detailed specification documents that provide expert guidance for specialized domains:

#### **accessibility-auditor.agents.md**
- **Purpose:** Comprehensive accessibility auditing and WCAG 2.2 AA compliance validation
- **Specialization:** WordPress accessibility, screen reader compatibility, keyboard navigation
- **Use Cases:** Accessibility reviews, compliance audits, inclusive design validation
- **Integration:** Manual invocation for accessibility-focused reviews and audits

#### **block-patterns-planner.agents.md**
- **Purpose:** Strategic planning and optimization for WordPress block pattern development
- **Specialization:** Pattern library architecture, design system integration, reusability
- **Use Cases:** Pattern strategy development, library organization, design consistency
- **Integration:** Pattern development workflows and design system planning

#### **block-theme-optimizer.agents.md**
- **Purpose:** WordPress block theme performance optimization and best practices enforcement
- **Specialization:** FSE optimization, theme.json configuration, performance tuning
- **Use Cases:** Theme performance audits, optimization recommendations, FSE compliance
- **Integration:** Theme development and performance review processes

#### **i18n-l10n-reviewer.agents.md**
- **Purpose:** Internationalization and localization review for global WordPress deployments
- **Specialization:** Multi-language support, RTL layouts, cultural adaptation
- **Use Cases:** i18n compliance reviews, localization planning, global deployment prep
- **Integration:** Internationalization workflows and global launch preparation

#### **performance-profiler.agents.md**
- **Purpose:** Performance analysis and profiling for WordPress applications and infrastructure
- **Specialization:** Core Web Vitals, database optimization, caching strategies
- **Use Cases:** Performance audits, optimization planning, scalability assessment
- **Integration:** Performance testing workflows and optimization sprints

#### **pr-reviewer.agents.md**
- **Purpose:** Automated pull request review and quality assessment
- **Specialization:** Code quality, standards compliance, security review
- **Use Cases:** PR review automation, quality gate enforcement, standards validation
- **Integration:** GitHub PR workflows and automated review processes

#### **qa-test-architect.agents.md**
- **Purpose:** Quality assurance strategy development and testing architecture design
- **Specialization:** Test strategy, framework selection, coverage planning
- **Use Cases:** QA planning, test architecture design, quality framework development
- **Integration:** Testing strategy planning and QA process development

#### **release-notes-manager.agents.md**
- **Purpose:** Release notes generation and management automation
- **Specialization:** Changelog generation, version documentation, release communication
- **Use Cases:** Release documentation, changelog automation, version management
- **Integration:** Release workflows and version management processes

#### **security-hardening-reviewer.agents.md**
- **Purpose:** Security hardening and vulnerability assessment for WordPress applications
- **Specialization:** OWASP compliance, WordPress security, penetration testing
- **Use Cases:** Security reviews, vulnerability assessment, hardening recommendations
- **Integration:** Security review workflows and compliance validation

#### **woocommerce-specialist.agents.md**
- **Purpose:** WooCommerce development expertise and e-commerce optimization
- **Specialization:** WooCommerce extensions, payment gateways, e-commerce UX
- **Use Cases:** WooCommerce development, e-commerce optimization, plugin development
- **Integration:** E-commerce project development and WooCommerce customization

#### **wordpress-a11y-specialist.agents.md**
- **Purpose:** WordPress-specific accessibility specialization and compliance
- **Specialization:** WordPress accessibility APIs, theme/plugin a11y, editor accessibility
- **Use Cases:** WordPress accessibility audits, compliance validation, inclusive development
- **Integration:** WordPress accessibility workflows and compliance processes

#### **wordpress-block-theme-architect.agents.md**
- **Purpose:** WordPress block theme architecture design and development strategy
- **Specialization:** FSE architecture, block development, theme system design
- **Use Cases:** Block theme planning, architecture design, development strategy
- **Integration:** Block theme development and architectural planning

### Agent Templates and Documentation

#### **AGENT.md**
- **Purpose:** Agent development contract and authoring guidelines
- **Content:** Standard persona structure, authoring rules, quality focus guidelines
- **Usage:** Template for creating new specialized agents

#### **README.md**
- **Purpose:** Comprehensive agent directory documentation
- **Content:** Agent overview, usage patterns, integration guidelines
- **Usage:** Central reference for agent ecosystem navigation

#### **TEMPLATE.agents.md**
- **Purpose:** Standardized template for creating new agent specifications
- **Content:** Standard structure, required sections, formatting guidelines
- **Usage:** Starting point for new agent development

## Additional Automation Logic

The agent ecosystem integrates with comprehensive automation infrastructure:

- **[Copilot Instructions](.github/instructions/)** - 32 contextual behavioral guidance files
- **[Custom Instructions](.github/custom-instructions.md)** - Central Copilot configuration
- **[Prompts](.github/prompts/)** - 70+ specialized single-shot task templates
- **[Chat Modes](.github/chatmodes/)** - 18 persistent conversational personas
- **[Automation Scripts](scripts/)** - Shell and automation scripts
- **[GitHub Workflows](.github/workflows/)** - CI/CD and automation workflows

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
