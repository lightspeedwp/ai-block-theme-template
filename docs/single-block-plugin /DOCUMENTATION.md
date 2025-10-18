# {{theme_name}} WordPress Block Theme Template

_Last updated: {{last_updated}} • Version: {{version}} • Maintainer: {{maintainer}}_

---

## 🚀 Introduction

Welcome to the {{theme_name}} scaffolding block theme!  
This repository is designed for rapid, standards-compliant WordPress block theme development using Full Site Editing (FSE), `theme.json` global styles, modern asset pipeline, and automated coding standards.

---

## 🗂️ Project Structure Overview

**Required Core Theme Files**
- `style.css` — Theme metadata (use mustache placeholders: `{{theme_name}}`, `{{author}}`, etc.)
- `templates/index.html` — Minimal block template, fallback for all pages

**Recommended Files**
- `functions.php` — Theme setup (enqueues, supports, etc.)
- `theme.json` — Global settings/styles, color palette, typography, spacing, with placeholders
- `screenshot.png` — Theme preview (1200x900)
- `README.md` / `README.txt` — User/developer onboarding
- `CHANGELOG.md` — Version history (Keep a Changelog format)
- `LICENSE.md` — GPLv2+ license (with placeholders)

**Primary Directories**
- `templates/` — Block templates for hierarchy (e.g., `single.html`, `archive.html`)
- `parts/` — Template parts (`header.html`, `footer.html`, etc.)
- `patterns/` — Block patterns (`hero-section.php`, etc.)
- `styles/` — Style variations (`dark.json`, etc.)

**Development/CI & Automation**
- `assets/` — Source SCSS, JS, images, fonts, etc.
- `inc/` — PHP includes, modular logic
- `.github/` — Health files: workflows, `CONTRIBUTING.md`, `CODE_OF_CONDUCT.md`, `SECURITY.md`, PR & issue templates
- `.editorconfig`, `.gitignore`, `.gitattributes` — Coding style and VCS config

**VS Code Workspace**
- `.vscode/settings.json` — Workspace settings for PHP, JS, CSS, Copilot
- `.vscode/extensions.json` — Recommended development extensions
- `.vscode/configuration.md` — Advanced dev & pattern guidelines

---

## 🛠️ Automated Scaffolding & Placeholder Handling

When running setup (`npm install`, `composer install`, or a custom `scaffold.js`/`init.sh`):
- Prompt for all mustache placeholder values:
  - `{{theme_name}}`
  - `{{author}}`
  - `{{description}}`
  - `{{version}}`
  - `{{repo_url}}`
  - Palette, typography, etc.
- Substitute placeholders in core files: `style.css`, `theme.json`, `functions.php`, `README.md`, `package.json`, `LICENSE.md`, etc.
- Generate example templates, patterns, and parts with correct headers and placeholder values.

---

## 📦 WordPress Packages & Build Tools

**NPM Packages to Install**
- `@wordpress/scripts` — Build pipeline, JS/CSS compilation
- `@wordpress/eslint-plugin` — JS linting
- `@wordpress/stylelint-config` — CSS linting
- `@wordpress/postcss-plugins-preset` — PostCSS config
- `@wordpress/babel-preset-default` — Babel config
- `webpack-remove-empty-scripts` — Prevent empty JS files
- `prettier`, `eslint`, `stylelint`, `markdownlint-cli` — Formatting and linting

**Composer Packages for PHP QA**
- `wp-coding-standards/wpcs` — WordPress PHP Coding Standards
- `10up/phpcs-composer` — Enhanced PHPCS config
- `phpstan/phpstan` — PHP static analysis

---

## ⚡ Build & Development Workflow

1. **Install dependencies:**  
   `npm install` and `composer install`
2. **Start development server:**  
   `npm run start` (watches for changes)
3. **Build for production:**  
   `npm run build` (minified assets)
4. **Lint code:**  
   `npm run lint` for JS/CSS, `composer run lint` for PHP
5. **Run tests:**  
   `npm run test` for JS/e2e, `composer run test` for PHP static analysis

---

## 📄 Theme File Requirements

- All templates and patterns must use block-based HTML/PHP/JSON, with proper headers and mustache placeholders.
- `theme.json` must define:
  - Color palette (semantic names)
  - Fluid typography scale (clamp)
  - Spacing tokens
  - Content/wide widths
  - Block supports
- Asset pipeline uses `.asset.php` manifest files for dependency/versioning (see `functions.php` for enqueue examples).
- Health files in `.github/` must be referenced:
  - `CONTRIBUTING.md` — Contribution workflow
  - `CODE_OF_CONDUCT.md` — Community standards
  - `SECURITY.md` — Responsible disclosure policy
  - `PULL_REQUEST_TEMPLATE.md` — Required PR structure
  - `ISSUE_TEMPLATE/` — Issue reporting templates
  - `CHANGELOG.md` — Change log (required for releases)

---

## 🖥️ VS Code & Copilot Integration

- Workspace auto-detects recommended extensions for WordPress, PHP, JS, SCSS, Copilot, Playwright.
- `.vscode/configuration.md` documents advanced block pattern and template strategies.
- Copilot will be aware of:
  - Project structure and file requirements
  - Placeholder usage and automation
  - Coding standards and linting rules
  - Asset pipeline setup and onboarding

---

## 📚 Onboarding & Contribution

- Start by reading `README.md` and `DOCUMENTATION.md` for setup instructions.
- All contributions must follow the guidelines in `CONTRIBUTING.md` and coding standards files.
- Use the included PR and issue templates when submitting changes.
- Document all updates in `CHANGELOG.md`.  
- Review `LICENSE.md` for terms of use and distribution.

---

## 🔗 References & GitHub Health Files

- [CONTRIBUTING.md](.github/CONTRIBUTING.md)
- [CODE_OF_CONDUCT.md](.github/CODE_OF_CONDUCT.md)
- [SECURITY.md](.github/SECURITY.md)
- [PULL_REQUEST_TEMPLATE.md](.github/PULL_REQUEST_TEMPLATE.md)
- [ISSUE_TEMPLATE/](.github/ISSUE_TEMPLATE/)
- [CHANGELOG.md](CHANGELOG.md)
- [LICENSE.md](LICENSE.md)
- [README.md](README.md)
- [README.txt](README.txt)
- [.editorconfig](.editorconfig)
- [.gitignore](.gitignore)
- [.gitattributes](.gitattributes)
- `.vscode/` workspace files

---

## 🤖 Copilot & Automation Guidance

Copilot and other automation tools should:
- Scaffold the entire repo using all referenced files and directories.
- Prompt for placeholder values on first run, substitute in all relevant files.
- Ensure all code and configuration matches WordPress block theme standards and the attached guidelines.
- Reference all health files for contribution, code of conduct, security, and documentation.
- Generate example templates, patterns, and assets with headers and semantic naming.

---

**For further details or rationale, see:**