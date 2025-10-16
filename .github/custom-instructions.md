# Copilot Instructions for AI Block Theme Template

You are working on an AI-powered WordPress block theme template designed for rapid development and deployment. This repository serves as a starter template for WordPress block theme projects with integrated AI development tools and comprehensive Copilot asset library.

## Repository Overview

This is a WordPress block theme that follows modern development practices:
- Full Site Editing (FSE) support with comprehensive `theme.json`
- Block patterns and template parts for rapid development
- Style variations including dark mode
- Modern development workflow with WordPress packages (`@wordpress/scripts`, `@wordpress/eslint-plugin`, etc.)
- End-to-end testing with Playwright
- AI-powered development features and GitHub Copilot integration
- Comprehensive library of Copilot assets (instructions, prompts, chat modes, agents)

## Key Principles

1. **WordPress Standards**: Follow WordPress Coding Standards using WordPress packages for PHP, JavaScript, and CSS
2. **Block-First Development**: Prioritize block editor compatibility and avoid legacy patterns
3. **Performance**: Optimize for speed and accessibility using WordPress performance guidelines
4. **Maintainability**: Write clean, documented, and testable code with modern build tools
5. **AI Enhancement**: Leverage AI tools and Copilot assets for improved development efficiency
6. **Package-First**: Use WordPress packages for linting, testing, and build processes

## File Structure

### Theme Files
- `functions.php` - Theme functions and setup
- `theme.json` - Theme configuration and design tokens (v2 schema)
- `style.css` - Main theme stylesheet with theme header
- `inc/` - Modular PHP includes
- `parts/` - Template parts (header, footer, etc.)
- `patterns/` - Block patterns with proper categorization
- `styles/` - Theme style variations
- `templates/` - Block templates for FSE
- `src/` - TypeScript/JavaScript source files
- `tests/e2e/` - End-to-end Playwright tests

### AI/Copilot Assets
- `.github/instructions/` - Contextual behavioral guidance (auto-applied)
- `.github/prompts/` - Single-shot reusable tasks and templates
- `.github/chatmodes/` - Persistent conversational personas and workflows
- `.github/agents/` - Specialized AI agents for specific tasks

## Development Commands (WordPress Packages)

### Build & Development
- `npm run start` - Development server with hot reload (`@wordpress/scripts`)
- `npm run build` - Development build
- `npm run build:production` - Optimized production build
- `npm run dev` - Alias for start command

### Linting & Code Quality
- `npm run lint` - Run all linters
- `npm run lint:js` - JavaScript linting with WordPress ESLint rules
- `npm run lint:css` - CSS linting with WordPress Stylelint config
- `npm run lint:php` - PHP linting with WordPress coding standards
- `npm run lint:pkg-json` - Package.json validation
- `composer run lint` - PHP CodeSniffer with WordPress standards

### Formatting
- `npm run format` - Format all code
- `npm run format:js` - Format JavaScript with WordPress Prettier config
- `npm run format:css` - Fix CSS linting issues

### Testing
- `npm run test:e2e` - Run Playwright end-to-end tests
- `npm run test:e2e:headed` - Run tests with browser UI
- `npm run test:e2e:debug` - Debug tests with Playwright inspector
- `npm run test:js` - JavaScript unit tests
- `npm run test` - Run all tests

### Utilities
- `npm run packages-update` - Update WordPress packages
- `npm run makepot` - Generate translation files

## Copilot Asset Taxonomy

| Asset Type | File Pattern | Purpose | Scope | Typical Use |
|------------|--------------|---------|-------|-------------|
| **Instruction** | `*.instructions.md` | Global or contextual behavioral guidance (security, a11y, performance, WordPress standards) | Passive, auto-applied based on location/applyTo | Improve baseline behavior in reviews & generation |
| **Prompt** | `*.prompts.md` | Single-shot reusable task/template (generate spec, create block pattern, configure theme.json) | Invoked explicitly (`/name`) | Consistent task execution |
| **Chat Mode** | `*.chatmodes.md` | Persistent conversational persona or workflow mode (pattern wizard, accessibility assistant) | Selected in chat UI | Extended multi-step behavior |
| **Agent** | `*.agents.md` | Specialized AI agents for specific WordPress tasks | Invoked for domain expertise | Complex WordPress-specific workflows |

### When to Create What (WordPress Context)
- **Instruction**: Use for WordPress coding standards, security practices, accessibility requirements that should always apply
- **Prompt**: Use for generating WordPress-specific artifacts (block patterns, theme.json configs, Playwright tests)
- **Chat Mode**: Use for sustained WordPress development workflows (pattern creation, accessibility auditing, performance optimization)
- **Agent**: Use for specialized WordPress expertise (block theme architecture, WooCommerce integration, performance profiling)

## WordPress Package Integration

This theme leverages the WordPress packages ecosystem:

### Core Packages Used
- `@wordpress/scripts` - Build tooling and development server
- `@wordpress/eslint-plugin` - JavaScript linting with WordPress standards  
- `@wordpress/stylelint-config` - CSS linting configuration
- `@wordpress/prettier-config` - Code formatting rules
- `@wordpress/babel-preset-default` - JavaScript compilation
- `@wordpress/dependency-extraction-webpack-plugin` - WordPress dependency handling
- `@wordpress/e2e-test-utils-playwright` - Playwright testing utilities

### Development Workflow
1. Use `@wordpress/scripts` for all build processes
2. Follow WordPress ESLint and Stylelint configurations
3. Leverage WordPress Prettier for consistent formatting
4. Use WordPress-specific Playwright utilities for e2e testing
5. Maintain WordPress coding standards with automated tooling

## AI Development Features

### Copilot Asset Library
- **150+ specialized prompts** for WordPress development tasks
- **Comprehensive instructions** covering security, accessibility, performance
- **Expert chat modes** for sustained development workflows
- **Specialized agents** for complex WordPress scenarios
- **Automated workflows** for testing, deployment, and quality assurance

#### Instructions Library (`.github/instructions/`)
Contextual behavioral guidance that auto-applies based on file patterns and development context:

- `accessibility.instructions.md` - Comprehensive WCAG 2.2 AA compliance guidelines
- `a11y.instructions.md` - Accessibility guidelines for inclusive code generation  
- `block-json.instructions.md` - Block.json essentials and best practices
- `block-theme.instructions.md` - WordPress Block Theme development standards
- `blocks.instructions.md` - Block development and registration guidelines
- `ci-cd.instructions.md` - Continuous integration and deployment standards
- `coding-standards.instructions.md` - WordPress coding standards for all languages
- `collections.instructions.md` - Collections development and validation rules
- `copilot-thought-logging.instructions.md` - Process tracking and logging guidelines
- `create-or-update-copilot.instructions.md` - Copilot instruction creation standards
- `docs.instructions.md` - Documentation expectations and structure
- `gitops.instructions.md` - Git workflow and PR management standards
- `html-template.instructions.md` - HTML template structure and semantic guidelines
- `js.instructions.md` - JavaScript development with WordPress standards
- `json.instructions.md` - JSON formatting and configuration standards
- `markdown.instructions.md` - Markdown content rules and validation requirements
- `pattern-development.instructions.md` - Block pattern development and registration
- `patterns.instructions.md` - Block patterns authoring and content strategy
- `performance.instructions.md` - Performance optimization for front-end and editor
- `php-block.instructions.md` - PHP block and theme setup instructions
- `php-wordpress.instructions.md` - Comprehensive PHP WordPress development guidelines
- `php.instructions.md` - WordPress PHP coding standards and security
- `playwright-tests.instructions.md` - Playwright test writing and organization
- `playwright-typescript.instructions.md` - Playwright test generation with TypeScript
- `reviews.instructions.md` - Code review expectations and quality standards
- `security.instructions.md` - Security basics for WordPress development
- `spec-driven-workflow-v1.instructions.md` - Specification-driven development workflow
- `tagging-and-frontmatter-conventions.instructions.md` - Metadata standards for Copilot assets
- `tasksync.instructions.md` - TaskSync v4 protocol for continuous task management
- `testing.instructions.md` - Testing layer strategies and coverage targets
- `theme-json.instructions.md` - Theme.json configuration guidelines and structure
- `wordpress.instructions.md` - WordPress development standards and best practices

#### Chat Modes Library (`.github/chatmodes/`)
Persistent conversational personas for sustained development workflows:

- `4.1-Beast.chatmode.md` - Advanced AI reasoning and problem-solving mode
- `a11y-assistant.chatmodes.md` - Accessibility assistant for WCAG compliance
- `chatmodes.md` - Main chat modes documentation and usage guide
- `code-quality-guru.chatmode.md` - Code quality and standards expert
- `critical-thinking.chatmode.md` - Critical analysis and decision-making mode
- `debug.chatmode.md` - Debugging and troubleshooting specialist
- `devops-helper.chatmode.md` - DevOps and deployment assistance
- `implementation-plan.chatmode.md` - Implementation planning and project management
- `ls-theme-expert.chatmode.md` - LightSpeed theme development specialist
- `pattern-wizard.chatmodes.md` - Block pattern creation and optimization
- `plan.chatmode.md` - Strategic planning and architecture mode
- `planner.chatmode.md` - Project planning and task management
- `pr-copilot.chatmodes.md` - Pull request review and management
- `prompt-builder.chatmode.md` - Prompt engineering and optimization
- `prompt-engineer.chatmode.md` - Advanced prompt creation and refinement
- `release-copilot.chatmodes.md` - Release management and deployment
- `task-planner.chatmode.md` - Task breakdown and workflow planning
- `test-coach.chatmodes.md` - Testing strategy and implementation guidance

#### Prompts Library (`.github/prompts/`)
Single-shot reusable tasks and templates for consistent execution:

**Architecture & Planning:**
- `architecture-blueprint-generator.prompt.md` - System architecture design
- `breakdown-epic-arch.prompt.md` - Epic architectural breakdown
- `breakdown-epic-pm.prompt.md` - Epic project management breakdown
- `breakdown-feature-implementation.prompt.md` - Feature implementation planning
- `breakdown-feature-prd.prompt.md` - Feature product requirement document
- `breakdown-plan.prompt.md` - General project breakdown
- `breakdown-test.prompt.md` - Test strategy breakdown
- `create-implementation-plan.prompt.md` - Implementation plan creation
- `update-implementation-plan.prompt.md` - Implementation plan updates

**WordPress Development:**
- `configure-theme-json.prompt.md` - Theme.json configuration assistant
- `create-block-pattern.prompt.md` - Single block pattern creation
- `create-block-patterns.prompt.md` - Multiple block patterns creation
- `create-gutenberg-block.prompt.md` - Gutenberg block development
- `generate-block.prompt.md` - Block generation and scaffolding
- `ls-block-a11y-check.prompt.md` - Block accessibility validation
- `ls-block-release-agent.prompt.md` - Block release management
- `ls-block-scaffold.prompt.md` - Block scaffolding and setup
- `ls-theme-ci-agent.prompt.md` - Theme CI/CD configuration
- `ls-theme-regression-plan.prompt.md` - Theme regression testing
- `ls-theme-scaffold.prompt.md` - Theme scaffolding and setup
- `pattern-generation.prompt.md` - Pattern generation strategies
- `pattern-scaffold.prompt.md` - Pattern scaffolding
- `refactor-theme-json.prompt.md` - Theme.json refactoring
- `refactor-to-bem.prompt.md` - BEM methodology refactoring
- `template-scaffold.prompt.md` - Template scaffolding
- `update-pattern-for-a11y.prompt.md` - Pattern accessibility updates

**Testing & Quality Assurance:**
- `playwright-automation-fill-in-form.prompt.md` - Form automation testing
- `playwright-explore-website.prompt.md` - Website exploration testing
- `playwright-generate-test.prompt.md` - Playwright test generation
- `write-phpunit-tests.prompt.md` - PHPUnit test creation
- `write-playwright-tests.prompt.md` - Playwright test writing

**Documentation & Communication:**
- `comment-code-generate-a-tutorial.prompt.md` - Code documentation and tutorials
- `create-readme.prompt.md` - README file creation
- `folder-structure-blueprint-generator.prompt.md` - Project structure design
- `generate-changelog.prompt.md` - Changelog generation
- `generate-pr-description.prompt.md` - Pull request description creation
- `readme-blueprint-generator.prompt.md` - README blueprint generation
- `repo-story-time.prompt.md` - Repository storytelling and documentation

**Development Tools & Automation:**
- `ai-prompt-engineering-safety-review.prompt.md` - AI prompt safety review
- `conventional-commit.prompt.md` - Conventional commit message generation
- `copilot-instructions-blueprint-generator.prompt.md` - Copilot instruction creation
- `create-github-action-workflow-specification.prompt.md` - GitHub Actions workflow specs
- `editorconfig.prompt.md` - EditorConfig setup and configuration
- `fix-lint.prompt.md` - Linting issue resolution
- `git-flow-branch-creator.prompt.md` - Git flow branch management
- `github-copilot-starter.prompt.md` - GitHub Copilot initialization
- `my-issues.prompts.md` - Issue management and tracking
- `my-pull-requests.prompt.md` - Pull request management
- `prepub-checklist.prompt.md` - Pre-publication checklist
- `prompt-builder.prompt.md` - Prompt engineering and creation
- `review-and-refactor.prompt.md` - Code review and refactoring
- `review-performance.prompt.md` - Performance review and optimization
- `update-markdown-file-index.prompt.md` - Markdown file indexing

#### Agents Library (`.github/agents/`)
Specialized AI agents for complex WordPress-specific workflows:

**JavaScript Agents:**
- `bats-tests-runner-agent.js` - Test automation specialist for Bats testing
- `issue-type-agent.js` - Automatic issue type analysis and assignment
- `label-standardization-agent.js` - Label standardization and migration
- `labeling-agent.js` - Intelligent issue and PR labeling
- `linting-workflow-agent.js` - Code quality and linting enforcement
- `release-agent.js` - Release management and automation
- `script-header-docs-agent.js` - Shell script documentation validation

**Markdown Agents:**
- `accessibility-auditor.agents.md` - Comprehensive accessibility auditing
- `block-patterns-planner.agents.md` - Block pattern strategy and planning
- `block-theme-optimizer.agents.md` - Block theme performance optimization
- `i18n-l10n-reviewer.agents.md` - Internationalization and localization review
- `performance-profiler.agents.md` - Performance analysis and profiling
- `pr-reviewer.agents.md` - Pull request review automation
- `qa-test-architect.agents.md` - Quality assurance and testing strategy
- `release-notes-manager.agents.md` - Release notes generation and management
- `security-hardening-reviewer.agents.md` - Security hardening and vulnerability assessment
- `woocommerce-specialist.agents.md` - WooCommerce development expertise
- `wordpress-a11y-specialist.agents.md` - WordPress accessibility specialization
- `wordpress-block-theme-architect.agents.md` - Block theme architecture design

### AI-Enhanced Development
- GitHub Copilot integration with WordPress-specific context
- AI-assisted block pattern creation and optimization
- Intelligent code suggestions following WordPress standards
- Automated accessibility and performance auditing
- Smart theme.json configuration assistance

## Extension Migration Policy

**Plural forms are now canonical:**
- `*.prompts.md` replaces `*.prompt.md`
- `*.chatmodes.md` replaces `*.chatmode.md`

**Migration approach:**
1. New assets MUST use plural forms
2. Legacy filenames remain as deprecation stubs with frontmatter
3. Automation recognizes both during transition
4. External consumers should update references

## Quality Standards for WordPress Block Theme

### WordPress Standards Compliance
- Follow WordPress PHP Coding Standards (enforced via PHPCS)
- Use WordPress JavaScript coding standards (ESLint configuration)
- Implement WordPress CSS guidelines (Stylelint configuration)  
- Prefix all functions with `ai_block_theme_`
- Use proper WordPress text domain: `ai-block-theme-template`

### Block Theme Requirements
- Full Site Editing (FSE) compatibility
- theme.json v2 schema compliance
- Proper block pattern categorization and registration
- Template part functionality
- Site Editor compatibility
- Accessibility standards (WCAG 2.1 AA)

### Build Process Standards
- Use WordPress packages for all tooling
- Maintain TypeScript compatibility where applicable
- Ensure Playwright e2e test coverage
- Follow WordPress asset enqueuing best practices
- Optimize for performance and Core Web Vitals

### Security & Performance
- Implement proper sanitization and escaping
- Use WordPress nonces for form security
- Follow WordPress security best practices
- Optimize for performance with WordPress caching
- Minimize HTTP requests and optimize assets

When contributing to this repository, always leverage the available Copilot assets and maintain WordPress standards through the integrated tooling ecosystem.