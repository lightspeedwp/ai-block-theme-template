# Development Guide

This document provides comprehensive instructions for developing with the AI Block Theme Template.

## System Requirements

- **Node.js** 18.0.0 or higher
- **npm** 9.0.0 or higher
- **PHP** 7.4 or higher
- **Composer** 2.0 or higher
- **WordPress** 6.0 or higher (for FSE support)
- **Local WordPress development environment** (Local WP, XAMPP, Docker, etc.)

## Quick Setup

1. **Clone the repository:**

   ```bash
   git clone https://github.com/lightspeedwp/ai-block-theme-template.git
   cd ai-block-theme-template
   ```

2. **Install dependencies:**

   ```bash
   # Install Node.js dependencies
   npm install

   # Install PHP dependencies (for code standards)
   composer install
   ```

3. **Verify installation:**

   ```bash
   # Check if all tools are working
   npm run lint:js
   npm run lint:css
   composer run lint
   ```

4. **Start development:**

   ```bash
   # Start development server with hot reload
   npm run start

   # Or build once for development
   npm run build
   ```

## Development Workflow

### Build Commands

```bash
# Development build (with source maps)
npm run build

# Production build (optimized)
npm run build:production

# Development server with hot reload
npm run start

# Alternative development server
npm run dev
```

## Code Quality

### Linting and Formatting

```bash
# Lint JavaScript/CSS
npm run lint

# Format code
npm run format

# Lint PHP
npm run lint:php
```

### Testing

```bash
# Run all available tests
npm run test

# Run JavaScript/TypeScript tests (Jest)
npm run test:js

# Run end-to-end tests (Playwright)
npm run test:e2e

# Run e2e tests with browser UI visible
npm run test:e2e:headed

# Debug e2e tests interactively
npm run test:e2e:debug

# Update e2e test screenshots
npm run test:e2e:update

# Run PHP tests (if PHPUnit is configured)
composer run test
```

### Environment Setup

For optimal development experience:

1. **WordPress Environment:**
   - Install WordPress 6.0+ locally
   - Enable debug mode: `define('WP_DEBUG', true);`
   - Copy theme to `/wp-content/themes/ai-block-theme-template/`

2. **VS Code Setup:**
   - Install recommended extensions (see `.vscode/extensions.json`)
   - Open the workspace file: `ai-block-theme-template.code-workspace`

3. **Git Configuration:**
   - Ensure Git hooks are set up for code quality
   - Install pre-commit hooks if available

## Project Structure

```
├── .github/          # AI/Copilot assets and GitHub configuration
│   ├── agents/       # Specialized AI agents (WordPress experts)
│   ├── chatmodes/    # Multi-step conversational workflows
│   ├── instructions/ # Auto-applied coding guidance
│   ├── prompts/      # Reusable development tasks
│   ├── workflows/    # CI/CD automation
│   └── custom-instructions.md  # Copilot workspace config
├── .vscode/          # VS Code settings and recommended extensions
├── assets/           # Asset files (images, fonts, etc.)
├── inc/             # PHP includes and functionality
├── parts/           # Template parts (header, footer, etc.)
├── patterns/        # Block patterns
├── styles/          # Theme style variations
├── templates/       # Block templates
├── tests/           # Test files
│   └── e2e/        # Playwright end-to-end tests
├── functions.php    # Theme functions
├── style.css        # Main theme stylesheet
└── theme.json       # Theme configuration
```

## Theme Development

### Creating Block Patterns

Add new patterns to the `patterns/` directory. Each pattern should be a PHP file that returns a pattern configuration array.

### Template Parts

Template parts are stored in `parts/` and can be customized through the WordPress admin or by editing the HTML files directly.

### Style Variations

Create style variations by adding JSON files to the `styles/` directory. Each file should contain theme.json-compatible style definitions.

## AI Features & Copilot Assets

This template includes a comprehensive library of AI-powered development tools:

### Asset Types

- **Instructions** (`.github/instructions/`): Auto-applied behavioral guidance for coding standards, security, accessibility
- **Prompts** (`.github/prompts/`): Single-shot tasks like generating patterns, configuring theme.json, creating tests
- **Chat Modes** (`.github/chatmodes/`): Persistent workflows like pattern wizard, accessibility assistant
- **Agents** (`.github/agents/`): Specialized WordPress experts for complex tasks
- **Custom Instructions** (`.github/custom-instructions.md`): GitHub Copilot workspace configuration

### Usage

- Instructions are automatically applied based on file types and location
- Prompts can be invoked with `/prompt-name` in Copilot Chat
- Chat modes provide sustained multi-step workflows
- Agents offer domain-specific expertise for WordPress development

### WordPress Package Integration

The development workflow uses WordPress packages:

- `@wordpress/scripts` for build tooling
- `@wordpress/eslint-plugin` for JavaScript linting
- `@wordpress/stylelint-config` for CSS standards
- `@wordpress/e2e-test-utils-playwright` for testing

## Troubleshooting

### Common Issues

**Node.js version errors:**

```bash
# Check your Node.js version
node --version

# Update to Node.js 18+
# Use nvm: nvm install 18 && nvm use 18
```

**Build failures:**

```bash
# Clear cache and reinstall
rm -rf node_modules package-lock.json
npm install

# Clear WordPress Scripts cache
rm -rf build/
npm run build
```

**PHP linting errors:**

```bash
# Fix auto-fixable issues
composer run format

# Check specific files
./vendor/bin/phpcs functions.php
```

**VS Code IntelliSense not working:**

- Ensure PHP and Intelephense extensions are installed
- Reload VS Code: `Cmd/Ctrl + Shift + P` > "Developer: Reload Window"

### Performance Tips

- Use `npm run start` for active development (hot reload)
- Use `npm run build` for testing builds locally
- Only use `npm run build:production` for final deployment
- Enable WordPress debug mode during development

## Theme Installation

### Local Development

1. **Copy to WordPress:**

   ```bash
   # Copy entire theme directory to WordPress themes folder
   cp -r . /path/to/wordpress/wp-content/themes/ai-block-theme-template/
   ```

2. **Activate theme:**
   - Go to WordPress Admin > Appearance > Themes
   - Activate "AI Block Theme Template"

### Production Deployment

1. **Build for production:**

   ```bash
   npm run build:production
   ```

2. **Create deployment package:**
   ```bash
   # Create clean theme package (excludes dev files)
   zip -r ai-block-theme-template.zip . -x "node_modules/*" "tests/*" ".git/*" "*.md"
   ```

## Contributing

Please read our [Contributing Guidelines](CONTRIBUTING.md) for detailed information. Quick steps:

1. **Fork the repository**
2. **Create a feature branch:** `git checkout -b feature/your-feature-name`
3. **Install dependencies:** `npm install && composer install`
4. **Make your changes** following our coding standards
5. **Run tests:** `npm run test && composer run lint`
6. **Commit changes:** Follow [Conventional Commits](https://conventionalcommits.org/)
7. **Submit Pull Request** with detailed description

### Code Standards

- **JavaScript/TypeScript:** ESLint with WordPress config
- **CSS/SCSS:** Stylelint with WordPress config
- **PHP:** PHPCS with 10up standards
- **Commit Messages:** Conventional Commits format
