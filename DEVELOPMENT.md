# Development Guide

This document provides instructions for developing with the AI Block Theme Template.

## Prerequisites

- Node.js 18+ and npm 9+
- PHP 7.4+
- Composer
- WordPress development environment

## Getting Started

1. **Install dependencies:**
   ```bash
   npm install
   composer install
   ```

2. **Development workflow:**
   ```bash
   # Start development server with hot reload
   npm run start

   # Build for production
   npm run build:production
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
# Run JavaScript tests
npm run test:js

# Run end-to-end tests
npm run test:e2e

# Run all tests
npm run test
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
└── theme.json       # Theme configuration
```

## Theme Development

### Creating Block Patterns

Add new patterns to the `patterns/` directory. Each pattern should be a PHP file that returns a pattern configuration array.

### Template Parts

Template parts are stored in `parts/` and can be customized through the WordPress admin or by editing the HTML files directly.

### Style Variations

Create style variations by adding JSON files to the `styles/` directory. Each file should contain theme.json-compatible style definitions.

## AI Features

This template includes AI-powered development tools:

- GitHub Copilot integration
- Custom prompts for WordPress development
- Automated code suggestions
- AI-assisted pattern creation

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Run tests and linting
5. Submit a pull request

## Deployment

Build the theme for production:

```bash
npm run build:production
```

The built theme will be ready for deployment to a WordPress site.