## Addendum — Menu Template Part & Pattern Category (lsx-design/menu)

This implementation guide is extended to include the new menu template part and pattern-category requirements. Implementers should follow these steps to ensure full compatibility with the Ollie Menu Designer plugin and the theme's pattern registration approach.

## 1) Canonical template part
- File: parts/menu.html
- Slug: "menu"
- Purpose: Host the theme menu area. Patterns inserted into parts/menu.html should provide the built-in mega menu layouts, cards, and mobile variants.

## 2) Patterns to create and register
- Place menu patterns in patterns/ with header metadata including:

### Categories
  - Categories: lsx-design/menu

### Block Types
  - Block Types (where appropriate): core/template-part/menu or core/template-part/header

### Example pattern header

/* Title: 
Menu Panel — Columns 
Slug: lsx-design/menu-panel-columns 
Categories: lsx-design/menu 
Block Types: core/template-part/menu 
Inserter: yes 
Viewport Width: 1260 
*/ 

- Ensure the file-based patterns use i18n functions (esc_html_e / __) if they include PHP wrapper strings.

## 3) Register menu pattern category (functions.php)
- Add registration similar to the Ollie pattern_categories function, but for lsx-design/menu. Use a priority of 9 if you need to ensure categories exist before pattern registration.

## 4) Template part area registration
- Add the template-part area 'menu' via the default_wp_template_part_areas filter so it appears in the Site Editor with a friendly label ("Menu") and correct area_tag ('nav').

## 5) Example usage mapping (templates → parts)
- parts/header.html (include `<!-- wp:template-part {"slug":"menu"} /-->` where the primary nav should render)
- parts/mobile-nav-panel.html (can include a menu pattern or use parts/menu.html for consistent markup)
- templates/front-page.html / templates/index.html may include specific menu patterns directly if needed.

## 6) theme.json — customTemplates
- Ensure the customTemplates block below is present in theme.json so Page (Full Width, No Title) and Page (With Sidebar) will be available in the editor:
  (Paste snippet)
- Also ensure templateParts registration in theme.json includes the menu slug:

```json
"templateParts": [
  { "slug": "skip-links", "title": "Skip Links" },
  { "slug": "header", "title": "Header" },
  { "slug": "menu", "title": "Menu" },
  { "slug": "hero", "title": "Hero" },
  { "slug": "footer", "title": "Footer" }
  ...
]
```