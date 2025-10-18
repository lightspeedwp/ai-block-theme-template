# {{theme_name}} Block Theme Template Documentation

_Last updated: {{last_updated}} | Version: {{version}} | Maintainer: {{maintainer}}_

---

## Project Structure Overview

Your block theme must include the following files and directories:

| Path                          | Purpose & Mustache Placeholders                       |
|-------------------------------|------------------------------------------------------|
| `style.css`                   | Theme metadata (name: {{theme_name}}, author: {{author}}, version: {{version}}), fallback CSS |
| `theme.json`                  | Global styles, settings, color palette, typography, spacing |
| `functions.php`               | Theme setup, asset enqueue, feature registration, use `{{theme_name}}` for text domain/constants |
| `templates/index.html`        | Required fallback template; use block-based HTML      |
| `parts/header.html`, ...      | Template parts for global sections                   |
| `patterns/hero-full-width-image.php`, ... | Block patterns with headers using mustache placeholders |
| `styles/dark.json`, ...       | Alternate style variations; use {{theme_name}} tokens |
| `assets/`                     | Source SCSS, JS, images, fonts                      |
| `inc/`                        | PHP includes; modularize advanced logic              |
| `screenshot.png`              | 1200x900 preview image for WP admin                  |
| `README.md`, `README.txt`     | Documentation, instructions, credits, requirements   |
| `CHANGELOG.md`                | Keep a Changelog format; reference {{version}}       |
| `LICENSE.md`                  | GPLv2+ license with {{author}}, {{year}} placeholders|
| `.editorconfig`               | Coding style config                                  |
| `.gitignore`                  | Ignore build, node_modules, asset output, etc.       |
| `.gitattributes`              | Line endings, export exclusions                      |
| `package.json`                | NPM scripts, dependencies, mustache placeholders for name, description, author |
| `webpack.config.js`           | Custom build configuration                           |
| `.github/`                    | Workflows, templates, CONTRIBUTING.md, CODE_OF_CONDUCT.md, PULL_REQUEST_TEMPLATE.md |
| `.vscode/`                    | Workspace settings, recommended extensions           |

---

## Mustache Placeholders

- All files should use mustache placeholders for theme name, author, version, URLs, and other dynamic values:
  - `{{theme_name}}`
  - `{{author}}`
  - `{{version}}`
  - `{{repo_url}}`
  - `{{description}}`
  - `{{year}}`
  - etc.

---

## Block Patterns & Template Parts

- **Patterns:** Store in `patterns/` as PHP/HTML/JSON; header must include:
  ```
  /**
   * Title: {{pattern_title}}
   * Slug: {{theme_name}}/{{pattern_slug}}
   * Categories: {{pattern_categories}}
   * Keywords: {{pattern_keywords}}
   * Description: {{pattern_description}}
   */
  ```
- **Template Parts:** Store in `parts/` as HTML files; semantic markup, ARIA roles, and use theme.json variables for styling.

---

## theme.json Requirements

- Must define:
  - Color palette (with semantic names: base, contrast, primary, accent, etc.)
  - Typography scale (use clamp for fluid sizes)
  - Spacing scale (tokens, e.g. spacing-10, spacing-100)
  - Layout settings (content/wide widths)
  - Block supports and block-level settings
- Reference mustache placeholders for theme name, palette, etc.

---

## Asset Pipeline

- Use `@wordpress/scripts` for build (`npm run start`, `npm run build`)
- Source files in `assets/`; output to `build/` or `public/`
- Enqueue assets in `functions.php` using `.asset.php` manifest files for dependencies & cache busting

---

## Contribution Workflow

- Use [CONTRIBUTING.md](CONTRIBUTING.md); enforce PR standards via `.github/PULL_REQUEST_TEMPLATE.md`
- Document changes in [CHANGELOG.md](CHANGELOG.md) using mustache placeholders for version and date
- Follow [CODE_OF_CONDUCT.md](CODE_OF_CONDUCT.md) and [LICENSE.md](LICENSE.md)

---

## VS Code Workspace

- `.vscode/settings.json`: Workspace settings
- `.vscode/extensions.json`: Recommended extensions (WordPress, PHP, JS, SCSS, Copilot, Playwright)
- `.vscode/configuration.md`: Dev guide for block patterns, templates, standards, testing
- `.vscode/README.md`: Workspace onboarding steps and troubleshooting

---

## Example Mustache Usage

- In `style.css`:
  ```
  /*
   Theme Name: {{theme_name}}
   Author: {{author}}
   Version: {{version}}
   Description: {{description}}
   Text Domain: {{theme_name}}
  */
  ```
- In `package.json`:
  ```
  {
    "name": "{{theme_name}}",
    "description": "{{description}}",
    "author": "{{author}}",
    "version": "{{version}}",
    ...
  }
  ```

---

Refer to `WordPress Block Theme – Structure & Development Guidelines.md` for full rationale and reference examples.
