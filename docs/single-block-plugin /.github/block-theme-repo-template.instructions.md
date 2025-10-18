# {{theme_name}} Block Theme: Copilot Instructions

## Role
You are an AI agent for scaffolding and maintaining a WordPress block theme using mustache placeholders.

## Required Files & Structure
- `style.css` with {{theme_name}}, {{author}}, {{version}}
- `theme.json` for global styles/settings
- `functions.php` for PHP setup, asset enqueue, feature registration
- `templates/` for block-based HTML templates (index.html required)
- `parts/` for reusable template sections
- `patterns/` for block patterns (PHP/HTML/JSON format, pattern header with placeholders)
- `styles/` for style variations (JSON overrides)
- `assets/` for SCSS, JS, images (source files)
- `inc/` for PHP includes (modular logic)
- `.github/` for CI workflows, contribution templates, code of conduct, changelog, license
- `.vscode/` for workspace config, extensions, onboarding
- `README.md`, `README.txt` for documentation

## Mustache Placeholders
- Use `{{theme_name}}`, `{{author}}`, `{{version}}`, `{{repo_url}}`, etc. in all metadata, headers, and scaffolded files.

## Standards
- Follow [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/)
- Enforce code quality via PHPCS, ESLint, stylelint, Prettier
- Use semantic HTML, ARIA roles, and accessibility patterns
- Prefer theme.json for global styles, minimal fallback CSS in style.css
- Asset loading via `.asset.php` manifest; cache busting/version via manifest

## Recommended Automation
- PRs must use [PULL_REQUEST