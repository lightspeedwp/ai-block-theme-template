# AI Block Theme Template - WordPress Block Theme Development Guide

This configuration enhances GitHub Copilot's understanding of the AI Block Theme Template project structure and WordPress block theme development patterns.

## Project Structure Guidelines

### Block Patterns (`/patterns/`)

-   **Naming Convention**: `category-descriptive-name.php` (e.g., `hero-full-width-image.php`)
-   **Registration**: Each pattern must include `register_block_pattern()` at the top
-   **Categories**: Use consistent categories (banner, cta, hero, footer, header, etc.)
-   **Content**: Use realistic placeholder content, not lorem ipsum
-   **Documentation**: Include usage instructions in pattern header comments

```php
<?php
/**
 * Title: Hero Full Width Image
 * Slug: ai-block-theme-template/hero-full-width-image
 * Categories: banner, hero
 * Keywords: hero, banner, image, full-width
 * Viewport width: 1400
 * Description: A full-width hero section with background image and overlay text
 */
```

### Template Parts (`/parts/`)

-   **Semantic HTML**: Use proper HTML5 semantic elements (`<header>`, `<nav>`, `<main>`, `<footer>`)
-   **Reusability**: Design parts to work across multiple templates
-   **Theme.json Variables**: Always use theme.json variables for styling
-   **Accessibility**: Include proper ARIA labels and roles

### Block Templates (`/templates/`)

-   **Template Hierarchy**: Follow WordPress template hierarchy
-   **Query Loops**: Use WordPress Query Loop blocks for dynamic content
-   **Template Parts**: Compose templates using reusable template parts
-   **Responsive**: Ensure templates work on all device sizes

### Theme Configuration (`theme.json`)

-   **Design Tokens**: Define comprehensive color, typography, and spacing systems
-   **Responsive Values**: Use clamp() for fluid typography and spacing
-   **Custom Properties**: Leverage CSS custom properties for dynamic theming
-   **Block Supports**: Configure block supports for consistent behavior

## Development Best Practices

### WordPress Block Theme Patterns

When creating new patterns or templates:

1. **Start with theme.json**: Define colors, fonts, spacing before creating patterns
2. **Use Block Variations**: Leverage existing block variations before creating custom blocks
3. **Semantic Markup**: Always use appropriate HTML5 semantic elements
4. **Accessibility First**: Include alt text, proper heading hierarchy, keyboard navigation
5. **Performance**: Optimize images, minimize custom CSS, use efficient block structures

### CSS/SCSS Guidelines

-   **Prefer theme.json**: Use theme.json for 90% of styling needs
-   **Custom CSS**: Only add custom CSS when theme.json limitations require it
-   **BEM Methodology**: Use BEM naming for any custom CSS classes
-   **Mobile First**: Write responsive styles mobile-first
-   **Performance**: Minimize CSS bundle size, avoid unused styles

### PHP Development Standards

-   **WordPress Hooks**: Use appropriate WordPress hooks and filters
-   **Security**: Always sanitize input and escape output
-   **Performance**: Use WordPress caching functions and optimize database queries
-   **Coding Standards**: Follow WordPress PHP Coding Standards exactly
-   **Documentation**: Include comprehensive PHPDoc for all functions

## Copilot Usage Patterns

### Creating New Block Patterns

When asking Copilot to create patterns:

```
Create a new CTA pattern with:
- Category: "cta"
- Responsive 2-column layout on desktop, stacked on mobile
- Uses theme.json primary and accent colors
- Includes accessibility attributes
- Follows AI Block Theme Template naming conventions
```

### Modifying Existing Code

When modifying patterns or templates:

```
Update the hero pattern to:
- Add proper alt text placeholders
- Use theme.json spacing variables instead of hardcoded values
- Ensure proper heading hierarchy (h1 -> h2 -> h3)
- Make responsive for mobile devices
```

### Theme.json Configuration

When working with theme.json:

```
Add to theme.json:
- New color palette with primary, secondary, accent colors
- Fluid typography scale using clamp() functions
- Consistent spacing scale (xs, sm, md, lg, xl)
- Layout settings for content and wide widths
```

## Testing & Quality Assurance

### Accessibility Testing

-   Use Playwright tests to verify WCAG 2.1 AA compliance
-   Test with screen readers and keyboard navigation
-   Validate color contrast ratios
-   Check heading hierarchy and semantic markup

### Performance Testing

-   Monitor Core Web Vitals (LCP, FID, CLS)
-   Test on various devices and connection speeds
-   Validate image optimization and lazy loading
-   Check CSS and JavaScript bundle sizes

### Cross-browser Testing

-   Test on all major browsers (Chrome, Firefox, Safari, Edge)
-   Validate responsive design at various breakpoints
-   Check for vendor prefix requirements
-   Test print styles and high contrast modes

## Common Gotchas & Solutions

### Block Editor Compatibility

-   Always test patterns in the block editor inserter
-   Ensure proper block validation and no console errors
-   Test pattern variations and style options
-   Verify compatibility with theme switching

### Full Site Editing (FSE)

-   Test template editing in Site Editor
-   Ensure template parts can be customized by users
-   Validate theme.json settings apply correctly
-   Check global styles inheritance

### Performance Optimization

-   Minimize use of heavy blocks (like Group blocks with complex styling)
-   Optimize pattern complexity for rendering performance
-   Use efficient query patterns for dynamic content
-   Implement proper caching strategies
