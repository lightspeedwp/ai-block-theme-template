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
npm run lint          # Lint JavaScript and CSS
npm run lint:js       # Lint JavaScript only
npm run lint:css      # Lint CSS only
npm run lint:php      # Lint PHP code
npm run format        # Format all code
npm run format:js     # Format JavaScript
npm run format:css    # Format CSS

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

This template includes AI-powered development tools:

- **GitHub Copilot integration** with custom prompts
- **AI-assisted pattern creation**
- **Intelligent code suggestions**
- **Automated development workflows**

## Testing

The theme includes comprehensive testing:

- **End-to-end tests** with Playwright
- **Responsive testing** across device sizes
- **Accessibility testing** (coming soon)
- **Performance testing** (coming soon)

## Contributing

1. Fork the repository
2. Create a feature branch: `git checkout -b feature/amazing-feature`
3. Commit your changes: `git commit -m 'Add amazing feature'`
4. Push to the branch: `git push origin feature/amazing-feature`
5. Open a Pull Request

## License

This project is licensed under the GPL v3 or later - see the [LICENSE](LICENSE) file for details.

## Support

- [Documentation](DEVELOPMENT.md)
- [Issues](https://github.com/lightspeedwp/ai-block-theme-template/issues)
- [Discussions](https://github.com/lightspeedwp/ai-block-theme-template/discussions)
