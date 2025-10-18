# {{theme_name}} Block Theme Scaffolding Template

_Last updated: {{last_updated}} • Version: {{version}} • Maintainer: {{maintainer}}_

---

## 🚀 Introduction

Welcome to the {{theme_name}} scaffolding block theme!  
This documentation outlines everything required to generate, build, and maintain a modern WordPress block theme with Full Site Editing (FSE), `theme.json`-driven global styles, and a robust asset pipeline.

---

## 🗂️ Project Structure Overview

**Required Files:**
- `style.css` — Theme metadata (`{{theme_name}}`, `{{author}}`, `{{version}}`)
- `templates/index.html` — Minimal block-based fallback template

**Recommended Files:**
- `functions.php` — Theme setup, feature registration, asset enqueuing
- `theme.json` — Global styles/settings, color palette, typography, spacing
- `screenshot.png` — Theme preview for WP admin
- `README.md` / `README.txt` — Onboarding and developer notes
- `CHANGELOG.md` — [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) format
- `LICENSE.md` — GPLv2+ license (with placeholders)

**Primary Directories:**
- `templates/` — Block templates (`single.html`, `archive.html`, etc.)
- `parts/` — Template parts (`header.html`, `footer.html`, etc.)
- `patterns/` — Block patterns (PHP/HTML/JSON)
- `styles/` — Style variations (`dark.json`, etc.)

**Development/CI & Automation:**
- `assets/` — Source SCSS, JS, images, fonts
- `inc/` — Modular PHP includes
- `.github/` — Health files: workflows, `CONTRIBUTING.md`, `CODE_OF_CONDUCT.md`, `SECURITY.md`, PR & issue templates
- `.editorconfig`, `.gitignore`, `.gitattributes` — Coding style and VCS config

**VS Code Workspace:**
- `.vscode/settings.json` — Workspace settings
- `.vscode/extensions.json` — Recommended extensions
- `.vscode/configuration.md` — Pattern/template guidelines

---

## 🛠️ Automation, Placeholders, & Scaffolding

- **Prompt for mustache values on setup:**  
  - `{{theme_name}}`, `{{author}}`, `{{description}}`, `{{version}}`, palette, typography, etc.
- **Replace placeholders in all metadata and templates:**  
  - `style.css`, `theme.json`, `functions.php`, `README.md`, `package.json`, etc.
- **Generate example templates, parts, and patterns with correct headers and placeholder values.**

---

## 📦 WordPress Packages & Build Tools

**NPM (JS/CSS Build):**
- `@wordpress/scripts`, `@wordpress/eslint-plugin`, `@wordpress/stylelint-config`, `@wordpress/postcss-plugins-preset`, `prettier`, `eslint`, `stylelint`, `webpack-remove-empty-scripts`

**Composer (PHP Standards):**
- `wp-coding-standards/wpcs`, `10up/phpcs-composer`, `phpstan/phpstan`

---

## ⚡ Developer Workflow

1. `npm install` & `composer install`
2. `npm run start` — Dev server/watch
3. `npm run build` — Production build
4. `npm run lint` — JS/CSS standards
5. `composer run lint` — PHP standards
6. `npm run test` / `composer run test` — Testing and QA

---

## 🗃️ File & Directory Standards

- **Templates/patterns:** Use block-based HTML/PHP/JSON, with mustache in headers.
- **theme.json:** Must define palette, typography (clamp), spacing, widths, block supports.
- **Asset pipeline:** Use `.asset.php` manifest files for dependencies/versioning.
- **Health files in `.github/`:**
  - `CONTRIBUTING.md`, `CODE_OF_CONDUCT.md`, `SECURITY.md`, `PULL_REQUEST_TEMPLATE.md`, `ISSUE_TEMPLATE/`, `CHANGELOG.md`, `LICENSE.md`, `README.md`, `.editorconfig`, `.gitignore`, `.gitattributes`, `.vscode/`

---

## 💡 VS Code & Copilot Integration

- Workspace recommends extensions for WordPress, PHP, JS, SCSS, Copilot, Playwright.
- `.vscode/configuration.md` documents advanced block pattern and template strategies.
- Copilot/CI must reference all onboarding, health, and standards files for repo generation.

---

## 📚 Onboarding & Contribution

- Start with `README.md`.
- Follow `CONTRIBUTING.md`, use PR/issue templates.
- Update `CHANGELOG.md` for every release.
- License in `LICENSE.md`.

---

## 🔗 References & Health Files

- [CONTRIBUTING.md](.github/CONTRIBUTING.md)
- [CODE_OF_CONDUCT.md](.github/CODE_OF_CONDUCT.md)
- [SECURITY.md](.github/SECURITY.md)
- [PULL_REQUEST_TEMPLATE.md](.github/PULL_REQUEST_TEMPLATE.md)
- [ISSUE_TEMPLATE/](.github/ISSUE_TEMPLATE/)
- [CHANGELOG.md](CHANGELOG.md)
- [LICENSE.md](LICENSE.md)
- [README.md](README.md)
- [.editorconfig](.editorconfig)
- [.gitignore](.gitignore)
- [.gitattributes](.gitattributes)
- `.vscode/`

---

## 📑 Further Reading

- **Full rationale and examples:** See [WordPress Block Theme – Structure & Development Guidelines.md](../WordPress%20Block%20Theme%20–%20Structure%20%26%20Development%20Guidelines.md)
- **Scaffold template:** This file serves as the canonical reference for block theme repo setup.

---

**Copilot and automation tools should use this template and the referenced guidelines to scaffold, build, and maintain a complete WordPress block theme repository, substituting all mustache placeholders and referencing all onboarding, CI, and health files.**