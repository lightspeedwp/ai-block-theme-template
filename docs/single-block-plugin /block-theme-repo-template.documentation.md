# {{theme_name}} Block Theme Template: Comprehensive Documentation

*Last Updated:* {{last_updated}}  
*Version:* {{version}}  
*Maintainer:* {{maintainer}}  
*Author:* {{author}}

---

## Expanded Instructions, Prompts, and Chat Modes

This section details **how to use and customize the documentation, instructions, prompts, and chat modes** for {{theme_name}}, referencing all required files and using mustache placeholders (`{{...}}`) wherever relevant.

---

### 📚 Documentation File Requirements

Your block theme should include the following documentation and automation files (all with mustache placeholders):

- `.github/block-theme-repo-template.documentation.md` (this file): Main reference and onboarding doc.
- `.github/block-theme-repo-template.instructions.md`: Copilot agent instructions.
- `.github/block-theme-repo-template.prompt.md`: Copilot build prompt.
- `.github/block-theme-repo-template.chatmode.md`: Copilot support/chat mode.
- `.github/CONTRIBUTING.md`: Contribution workflow and guidelines.
- `.github/CODE_OF_CONDUCT.md`: Community standards.
- `.github/CHANGELOG.md`: Keep a Changelog format.
- `.github/SECURITY.md`: Responsible disclosure and security practices.
- `.github/SUPPORT.md`: Support options and paid support details.
- `.github/.all-contributorsrc`: Contributor recognition automation.

Each file should use placeholders for theme name, author, version, repo URL, and any other variables.

---

### 📝 Instructions File: `block-theme-repo-template.instructions.md`

**Purpose:**  
Guides Copilot agents and contributors on theme setup, structure, coding standards, asset pipeline, and CI.

**Template Example:**
````markdown name=.github/block-theme-repo-template.instructions.md
# {{theme_name}} Block Theme: Copilot Instructions

## Role
You are an AI agent supporting WordPress block theme development for {{theme_name}}.

## Process
- Use mustache placeholders for theme variables.
- Scaffold: `style.css`, `theme.json`, `templates/index.html`, `functions.php`, `screenshot.png`
- Recommend directory structure: `templates/`, `parts/`, `patterns/`, `styles/`, `assets/`, `inc/`, `.github/`
- Link to: [WordPress Block Theme – Structure & Development Guidelines.md], [repo-structure-patterns.md], [DEVELOPMENT.md]
- Advise on npm scripts, composer setup, linting, and testing.
- Reference `.github/CHANGELOG.md`, `.github/CONTRIBUTING.md`, `.github/CODE_OF_CONDUCT.md`
- Require PRs to use [PULL_REQUEST_TEMPLATE.md](https://github.com/lightspeedwp/.github/blob/master/.github/PULL_REQUEST_TEMPLATE.md)

## Mustache Placeholders
- Replace all {{theme_name}}, {{author}}, {{repo_url}}, etc., before release.