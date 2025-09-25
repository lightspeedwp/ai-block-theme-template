# AI Block Theme Template

Starter repository for WordPress block theme projects with AI support. Includes GitHub templates, issue/PR forms, Copilot path guidance, reusable prompts, custom chat modes, and reference schemas—plus theme.json, functions.php, patterns, and Playwright tests for scalable workflows.

## Features

- **Full Site Editing (FSE)** support with comprehensive theme.json
- **Block patterns** and template parts for rapid development
- **Style variations** including dark mode
- **Modern development workflow** with build tools
- **End-to-end testing** with Playwright
- **AI-powered development** features and GitHub Copilot integration
- **Code quality tools** (ESLint, Prettier, Stylelint, PHPCS)
- **Responsive design** with fluid typography and spacing

## Quick Start

1. **Clone the repository:**

   ```bash
   git clone https://github.com/lightspeedwp/ai-block-theme-template.git
   cd ai-block-theme-template
   ```

2. **Install dependencies:**

   ```bash
   npm install
   composer install
   ```

3. **Start development:**

   ```bash
   npm run start
   ```

4. **Build for production:**
   ```bash
   npm run build:production
   ```

## Project Structure

```
├── .github/          # AI/Copilot assets and GitHub configuration
│   ├── agents/       # Specialized AI agents for WordPress tasks
│   ├── chatmodes/    # Persistent conversational workflows
│   ├── instructions/ # Contextual behavioral guidance (auto-applied)
│   ├── prompts/      # Single-shot reusable tasks and templates
│   ├── workflows/    # GitHub Actions CI/CD
│   └── custom-instructions.md  # GitHub Copilot custom instructions
├── .vscode/          # VS Code workspace configuration
├── assets/           # Asset files (images, fonts, etc.)
├── inc/             # PHP includes and functionality
├── parts/           # Template parts (header, footer, etc.)
├── patterns/        # Block patterns
├── styles/          # Theme style variations
├── templates/       # Block templates
├── tests/           # Test files
│   └── e2e/        # End-to-end tests
├── functions.php    # Theme functions
├── style.css        # Main theme stylesheet
├── theme.json       # Theme configuration
├── readme.txt       # WordPress.org theme readme
└── screenshot.png   # Theme screenshot
```

## Development Commands

```bash
# Development
npm run start          # Start development server
npm run dev           # Alias for start

# Building
npm run build         # Build for development
npm run build:production  # Build for production

# Code Quality
npm run lint          # Lint JavaScript, CSS, and PHP
npm run lint:js       # Lint JavaScript only
npm run lint:css      # Lint CSS only
npm run lint:php      # Lint PHP code (uses 10up PHPCS)
npm run format        # Format all code
npm run format:js     # Format JavaScript
npm run format:css    # Format CSS

# PHP-specific commands
composer run lint     # Run PHPCS on all PHP files
composer run format   # Auto-fix PHPCS violations

# Testing
npm run test          # Run all tests
npm run test:js       # Run JavaScript tests
npm run test:e2e      # Run end-to-end tests
npm run test:e2e:headed  # Run e2e tests with browser UI
npm run test:e2e:debug   # Debug e2e tests
```

## Theme Development

### Block Patterns

Create new patterns in the `patterns/` directory. Each pattern should be a PHP file with proper WordPress pattern headers:

```php
<?php
/**
 * Title: Pattern Name
 * Slug: ai-block-theme-template/pattern-slug
 * Categories: ai-block-theme-template
 * Keywords: keyword1, keyword2
 */
?>
<!-- Pattern content here -->
```

### Style Variations

Add new style variations in the `styles/` directory as JSON files following the theme.json schema.

### Template Parts

Customize template parts in the `parts/` directory using HTML with WordPress block markup.

### Custom Functionality

Add custom PHP functionality in the `inc/` directory and include it in `functions.php`.

## AI Features

This template includes comprehensive AI-powered development tools and assets:

### Copilot Asset Library

- **150+ specialized prompts** for WordPress development tasks (`.github/prompts/`)
- **Comprehensive instructions** covering security, accessibility, performance (`.github/instructions/`)
- **Expert chat modes** for sustained development workflows (`.github/chatmodes/`)
- **Specialized agents** for complex WordPress scenarios (`.github/agents/`)
- **Custom instructions** for GitHub Copilot (`.github/custom-instructions.md`)

### AI-Enhanced Development

- **GitHub Copilot integration** with WordPress-specific context
- **AI-assisted block pattern creation** and optimization
- **Intelligent code suggestions** following WordPress standards
- **Automated accessibility and performance auditing**
- **Smart theme.json configuration** assistance
- **WordPress package integration** for modern development workflow

## Testing

The theme includes comprehensive testing and code quality tools:

- **PHP Code Standards** with 10up PHPCS Composer package
- **End-to-end tests** with Playwright for PHP integration testing
- **WordPress-specific testing** including admin functionality
- **Responsive testing** across device sizes
- **PHP error detection** and compatibility testing

For detailed testing documentation, see [PHP Testing Guide](docs/PHP_TESTING.md).

## Documentation & Resources

- 📖 **[Development Guide](DEVELOPMENT.md)** - Complete setup and development instructions
- 🤝 **[Contributing Guidelines](CONTRIBUTING.md)** - How to contribute to this project
- 📋 **[Code of Conduct](CODE_OF_CONDUCT.md)** - Community standards and guidelines
- 🔒 **[Security Policy](SECURITY.md)** - Security reporting and best practices
- 📝 **[Changelog](changelog.md)** - Version history and release notes
- 🆘 **[Support Information](SUPPORT.md)** - Getting help and support options

## Contributing

We welcome contributions! Please read our [Contributing Guidelines](CONTRIBUTING.md) before submitting pull requests.

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/amazing-feature`
3. Follow our [Development Guide](DEVELOPMENT.md) for setup
4. Ensure your code follows our [Code of Conduct](CODE_OF_CONDUCT.md)
5. Submit a Pull Request

## Funding & Support

This project is maintained by [LightSpeedWP](https://lightspeedwp.agency). You can support our work:

- 💖 **[GitHub Sponsors](https://github.com/sponsors/lightspeedwp)** - Support ongoing development
- 🏢 **[Professional Services](https://lightspeedwp.agency/services/)** - Custom WordPress development
- 📞 **[Contact Us](https://lightspeedwp.agency/contact/)** - Get in touch for projects

## Contributors

Thanks to all the contributors who have helped make this project better:

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- This section is automatically generated by All Contributors -->
<!-- ALL-CONTRIBUTORS-LIST:END -->

## License

This project is licensed under the GPL v3 or later - see the [LICENSE](LICENSE) file for details.

## Support

- 📖 **[Development Guide](DEVELOPMENT.md)** - Setup and development instructions
- 🐛 **[Issues](https://github.com/lightspeedwp/ai-block-theme-template/issues)** - Bug reports and feature requests
- 💬 **[Discussions](https://github.com/lightspeedwp/ai-block-theme-template/discussions)** - Community discussions
- 🔒 **[Security Reports](SECURITY.md)** - Report security vulnerabilities
- 🆘 **[Paid Support](SUPPORT.md)** - Professional support options
