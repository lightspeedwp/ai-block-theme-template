---
title: "Single Block Plugin: Repo Scaffold & Documentation"
version: "v1.4"
last_updated: "2025-10-17"
author: "{{author}}"
description: "Reference for scaffolding, configuring, and extending a single-block WordPress plugin. Includes all required files, standards, prompts, chat modes, and Copilot guidance. Use mustache placeholders throughout."
type: "documentation"
---

# Single Block Plugin Repo Template

This file is the **authoritative reference** for scaffolding, configuring, and maintaining a WordPress single-block plugin.
It is used by Copilot and contributors as the primary guide for:

- Required files and folder structure
- Mustache (`{{ }}`) placeholder usage across all templates
- Standards compliance (WordPress + LightSpeed)
- GitHub health and docs files
- NPM/Composer package setup and build/test scripts
- All instructions, agent prompts, and chat modes (see below)

---

## 📚 How to Use This Template

- All documentation, instructions, prompts, and chat modes are located in `/docs/single-block-plugin/`.
- Always start by reading `repo-template.md`.
- All repo files, docs, and automation scripts should follow the standards, structure, and placeholder conventions described here.
- Use mustache-style placeholders (e.g., `{{slug}}`, `{{author}}`) in all template and instruction files. Document mappings in README and DEVELOPMENT.md.
- Reference this file in your README and internal docs so Copilot and contributors know where to find the full scaffold instructions and developer guidance.

---

## 🧩 Key Files & Structure

Your plugin should follow this structure (all docs/instructions/prompts together):

```
/
├── src/
│   ├── {{slug}}/
│   │   ├── block.json
│   │   ├── edit.js
│   │   ├── save.js
│   │   ├── index.js
│   │   ├── render.php
│   ├── scss/
│   │   ├── style.scss
│   │   └── editor.scss
│   └── index.js
├── bin/
│   ├── build.sh
│   ├── test.sh
│   ├── install-wp-tests.sh
│   └── update-version.js
├── tests/
│   ├── date.js
│   └── date.test.js
├── .github/
│   ├── workflows/
├── .vscode/
│   ├── extensions.json
│   ├── settings.json
│   ├── launch.json
│   └── tasks.json
├── .husky/
│   └── pre-commit
├── .wp-env.json
├── {{slug}}.php
├── package.json
├── composer.json
├── LICENSE
├── CODEOWNERS
├── docs/
│   └── single-block-plugin/
│       ├── repo-template.md
│       ├── README.md
│       ├── DEVELOPMENT.md
│       ├── USAGE.md
│       ├── SUPPORT.md
│       ├── SECURITY.md
│       ├── CONTRIBUTING.md
│       ├── CODE_OF_CONDUCT.md
│       ├── instructions.md
│       ├── chat-modes.md
│       ├── agent-prompts.md
│       └── ...other config/template files
└── ...other config files
```

---

## 📝 Mustache Placeholders

| Placeholder         | Usage                                        |
|---------------------|----------------------------------------------|
| `{{slug}}`          | Filenames, block.json, PHP                   |
| `{{namespace}}`     | block.json, CSS selectors                    |
| `{{author}}`        | Composer/package.json, docs                  |
| `{{description}}`   | block.json, docs                             |
| `{{license}}`       | Composer/package.json, docs                  |
| `{{textdomain}}`    | block.json, PHP, docs                        |
| `{{version}}`       | block.json, docs                             |
| `{{projectName}}`   | README.md, docs                              |

Define all placeholder mappings in README.md and DEVELOPMENT.md.

---

## 🌍 Internationalisation (i18n) Readiness

This theme and all block templates are **prepared for i18n**:

- All required WordPress packages for i18n are installed (`@wordpress/i18n` for JS, proper text domain for PHP).
- Use mustache placeholders for `textdomain` and other i18n values.
- Always wrap strings for translation in JS (`__`, `_x`) and PHP (`esc_html_e`, `__`).
- Document i18n conventions in DEVELOPMENT.md.

---

## ⚙️ Required Packages

### **NPM/Node**
- `@wordpress/scripts`, `@wordpress/block-editor`, `@wordpress/blocks`, `@wordpress/env`, `@wordpress/jest-preset-default`, `@wordpress/e2e-test-utils-playwright`, `@wordpress/stylelint-config`, `@wordpress/prettier-config`, `@wordpress/i18n`, `@wordpress/postcss-plugins-preset`, `playwright`

### **Composer/PHP**
- `"php": ">=8.0"`, `10up/phpcs-composer`, `phpstan/phpstan`, `phpunit/phpunit`

See actual package.json and composer.json templates for usage.

---

## 🛠️ Automation

- Use provided NPM and Composer scripts for build, test, lint, zip, and environment setup.
- Place all hooks/scripts in the appropriate folders (`bin/`, `.husky/`, etc.).
- Reference all Copilot health files and instructions in `/docs/single-block-plugin/`.

---

## 📑 Instructions, Chat Modes, Agent Prompts

All custom instructions, chat modes, agent prompts, and contribution guidelines are located in `/docs/single-block-plugin/`:

- [`instructions.md`](./instructions.md)
- [`chat-modes.md`](./chat-modes.md)
- [`agent-prompts.md`](./agent-prompts.md)
- [`CONTRIBUTING.md`](./CONTRIBUTING.md)
- [`CODE_OF_CONDUCT.md`](./CODE_OF_CONDUCT.md)
- [`SECURITY.md`](./SECURITY.md)
- [`SUPPORT.md`](./SUPPORT.md)

Each uses mustache placeholders for values as appropriate.

---

## 📚 References

- **Main template file:**  
  [`repo-template.md`](./repo-template.md)
- **LightSpeed Coding Standards:**  
  [`instructions.md`](./instructions.md)
- **WordPress Block API:**  
  [Block API](https://developer.wordpress.org/block-editor/reference-guides/block-api/)
- **GitHub Health Files:**  
  [`CONTRIBUTING.md`](./CONTRIBUTING.md), [`CODE_OF_CONDUCT.md`](./CODE_OF_CONDUCT.md), [`SECURITY.md`](./SECURITY.md), [`SUPPORT.md`](./SUPPORT.md)
- **All prompts and instructions:**  
  [`chat-modes.md`](./chat-modes.md), [`agent-prompts.md`](./agent-prompts.md)

---

## 🚦 For Copilot & Contributors

- Always reference `/docs/single-block-plugin/repo-template.md` when scaffolding, updating, or reviewing the repo.
- Ensure all generated files comply with the standards and placeholder usage described here.
- Use the README.md as the quickstart, but rely on `repo-template.md` for deep references and standards.

---

**Ready to scaffold your next block plugin? Start here, and build with WordPress + LightSpeed best practices.**
