---
description: "Apply pre-publication checklist for WordPress block themes"
mode: "ask"
model: "GPT-4"
tools: []
---

# Pre-Publication Checklist

Review code and content comprehensively before publishing to ensure quality, performance, and WordPress standards compliance.

## Code Quality Review

### Theme Configuration
- ✅ `theme.json` validity and proper schema version
- ✅ All design tokens properly defined
- ✅ Block supports configured appropriately
- ✅ Color palette and typography scales implemented

### Block Patterns
- ✅ All block patterns properly registered
- ✅ Pattern headers include required metadata
- ✅ Patterns use semantic block markup
- ✅ Pattern categories are logical and useful

### Templates and Template Parts
- ✅ All templates follow WordPress template hierarchy
- ✅ Template parts are reusable and semantic
- ✅ Responsive design works across all screen sizes
- ✅ Template markup is clean and accessible

### PHP Code
- ✅ All functions properly prefixed
- ✅ WordPress coding standards compliance (PHPCS)
- ✅ No direct database queries
- ✅ Proper use of WordPress hooks and filters
- ✅ Security best practices implemented

### JavaScript/CSS
- ✅ ESLint and Stylelint passing
- ✅ Code formatted with Prettier
- ✅ Build process working correctly
- ✅ No console errors or warnings

## Accessibility Review

- ✅ Semantic HTML structure throughout
- ✅ Proper heading hierarchy (h1, h2, h3, etc.)
- ✅ Alt text provided for all images
- ✅ Color contrast meets WCAG AA standards
- ✅ Keyboard navigation functional
- ✅ Screen reader compatibility tested

## Internationalization (i18n)

- ✅ Text domain applied consistently
- ✅ All user-facing strings wrapped in translation functions
- ✅ `.pot` file generated and up to date
- ✅ RTL (right-to-left) language support considered

## Performance & SEO

- ✅ Images optimized and properly sized
- ✅ CSS and JavaScript minified for production
- ✅ Core Web Vitals metrics acceptable
- ✅ Meta tags and structured data implemented
- ✅ Mobile responsiveness verified

## Testing

- ✅ Playwright tests updated and passing
- ✅ Cross-browser compatibility verified
- ✅ Theme tested with various content types
- ✅ Plugin compatibility checked
- ✅ WordPress version compatibility confirmed

## Documentation

- ✅ README.md updated with current information
- ✅ CHANGELOG.md reflects all changes
- ✅ Code comments are clear and helpful
- ✅ Installation and setup instructions accurate

## Final Review

- ✅ Theme screenshot updated and relevant
- ✅ Version numbers bumped appropriately
- ✅ No debugging code or comments left behind
- ✅ All files follow project structure conventions
- ✅ Git repository clean with meaningful commit messages

Complete this checklist before any major release or deployment.