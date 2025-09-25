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