## 🌍 Internationalisation (i18n) Readiness

- This theme is fully prepared for internationalisation and localisation (i18n/l10n).
- All necessary WordPress packages are included for i18n:
  - JS: `@wordpress/i18n`
  - PHP: Core translation functions (`__()`, `_e()`, `esc_html__()`, etc.)
  - Build tools: `@wordpress/scripts` auto-configures i18n support for JS assets.
- All patterns, templates, and onboarding documentation include mustache placeholders for translatable strings and text content:
  - Example: `{{i18n_hero_title}}`, `{{i18n_cta_description}}`, `{{i18n_footer_text}}`
  - Use these placeholders so automation can inject language-specific strings.
- Translation files (e.g., `.pot`, `.po`, `.mo`) are generated and included in the theme’s language folder (`languages/`).
- When authoring:
  - **PHP:** Always wrap user-facing text in translation functions and use mustache values for placeholders.
  - **JS:** Use `@wordpress/i18n`’s `__()` function for strings and mustache placeholders to allow automation.
  - **Patterns/docs:** Use mustache values for any text that will be translated or customized.
- Ensure all onboarding, prompts, and documentation reference i18n readiness and encourage contributors to use translation functions and mustache values.