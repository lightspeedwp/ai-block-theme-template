# AI Block Theme Template - VS Code Configuration

This directory contains comprehensive VS Code configuration files optimized for WordPress block theme development with the AI Block Theme Template.

## Configuration Files

### Core Configuration

-   **`settings.json`** - VS Code workspace settings optimized for WordPress block theme development
-   **`extensions.json`** - Recommended extensions for WordPress, PHP, and theme development
-   **`mcp.json`** - Model Context Protocol configuration for enhanced Copilot integration

### GitHub Copilot Enhancement

-   **`configuration.md`** - Comprehensive development guidelines and patterns for Copilot
-   **`README.md`** - This documentation file

## Key Features

### WordPress-Optimized Settings

-   PHP formatting with Intelephense for WordPress coding standards
-   File associations for WordPress-specific file types
-   Exclusion patterns for WordPress development files
-   Terminal and Git optimizations for WordPress workflows

### Essential Extensions

-   **WordPress Development**: Intelephense, WordPress Hooks IntelliSense
-   **Code Quality**: ESLint, Prettier, PHP CS Fixer, Psalm
-   **Testing**: Playwright integration for e2e accessibility testing
-   **AI Assistance**: GitHub Copilot, Claude, ChatGPT, CodeRabbit
-   **UI/UX**: HTML/CSS enhancements, Figma integration, auto-rename tags

### Enhanced Copilot Integration

-   WordPress block theme specific instructions
-   Pattern and template development guidance
-   Theme.json configuration best practices
-   Accessibility and performance optimization patterns

## WordPress Block Theme Development Focus

This configuration is specifically tailored for:

-   **Full Site Editing (FSE)** theme development
-   **Block patterns** creation and management
-   **Template parts** and template development
-   **Theme.json** configuration and optimization
-   **Accessibility** compliance (WCAG 2.1 AA)
-   **Performance** optimization for Core Web Vitals
-   **Responsive design** across all devices

## Getting Started

1. **Install Recommended Extensions**: VS Code will prompt you to install recommended extensions when opening this workspace
2. **Configure PHP**: Ensure PHP is installed and configured in your system PATH
3. **WordPress Studio**: Set up WordPress Studio for local development and syncing
4. **Playwright**: Install Playwright for e2e testing: `npx playwright install`

## Copilot Usage

The enhanced Copilot configuration provides:

-   **Context-Aware Suggestions**: Understands WordPress block theme patterns
-   **Best Practice Guidance**: Follows WordPress coding standards automatically
-   **Accessibility Focus**: Suggests accessible markup and ARIA attributes
-   **Performance Optimization**: Recommends efficient block structures
-   **Theme.json Integration**: Prioritizes theme.json over custom CSS

### Example Prompts

```bash
# Create a new block pattern
"Create a hero pattern with responsive layout using theme.json variables"

# Modify existing code
"Update header.php to use semantic HTML5 and improve accessibility"

# Theme.json configuration
"Add fluid typography and spacing scale to theme.json"
```

## Development Workflow

1. **Branch Management**: Use feature branches for new patterns/templates
2. **Code Review**: CodeRabbit integration provides automated WordPress-focused reviews
3. **Testing**: Playwright e2e tests validate accessibility and functionality
4. **Documentation**: Update patterns and templates with proper documentation

## Troubleshooting

### Extension Issues

-   Ensure PHP is installed and accessible in system PATH
-   Restart VS Code after installing recommended extensions
-   Check extension logs in VS Code Developer Tools

### Copilot Issues

-   Verify GitHub Copilot subscription is active
-   Restart VS Code to refresh Copilot configuration
-   Check MCP server status in VS Code command palette

## Additional Resources

### WordPress Development

-   [WordPress Block Theme Documentation](https://developer.wordpress.org/themes/block-themes/)
-   [Full Site Editing Handbook](https://developer.wordpress.org/block-editor/how-to-guides/themes/full-site-editing/)
-   [Theme.json Reference](https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/)

### VS Code & Copilot

-   [GitHub Copilot Documentation](https://docs.github.com/en/copilot)
-   [Model Context Protocol (MCP)](https://github.com/github/mcp)
-   [VS Code WordPress Development](https://code.visualstudio.com/docs/languages/php)
