---
name: Bug Fix
about: Template for bug fixes in the AI Block Theme Template
title: "Fix: [Brief description of the bug]"
labels: ["bug", "needs-review"]
assignees: []
---

## Bug Description

**What was broken?**
<!-- Describe the issue that was identified -->

### Root Cause
<!-- Explain what caused the bug -->

### Environment

- WordPress Version:
- PHP Version:
- Node Version:
- Browser(s) affected:

## Solution

**What does this fix change?**
<!-- Describe the changes made to resolve the issue -->

**Why this approach?**
<!-- Justify the chosen solution -->

## Testing

### Automated Testing

- [ ] All existing Playwright e2e tests pass (`npm run test:e2e`)
- [ ] JavaScript unit tests pass (`npm run test:js`)
- [ ] PHP coding standards pass (`composer run lint`)
- [ ] JavaScript/CSS linting passes (`npm run lint`)

### Manual Testing

- [ ] Bug is reproducible in development environment
- [ ] Fix resolves the issue completely
- [ ] No regression issues introduced
- [ ] Works across all supported browsers
- [ ] Accessible on mobile and desktop
- [ ] Block editor functionality preserved
- [ ] Full Site Editing (FSE) compatibility maintained

## Scope of Changes

- [ ] WordPress theme functions (`functions.php`)
- [ ] Block patterns (`patterns/`)
- [ ] Template parts (`parts/`)
- [ ] Block templates (`templates/`)
- [ ] Theme configuration (`theme.json`)
- [ ] Styles (CSS/SCSS)
- [ ] JavaScript/TypeScript
- [ ] E2E tests (Playwright)
- [ ] Documentation

## Screenshots / Videos

<!-- Include before/after screenshots or videos demonstrating the fix -->

## WordPress Block Theme Checklist

### Code Quality

- [ ] Follows WordPress PHP coding standards (PHPCS)
- [ ] JavaScript follows WordPress ESLint rules
- [ ] CSS follows WordPress Stylelint configuration
- [ ] All functions prefixed with `ai_block_theme_`
- [ ] Proper PHPDoc comments added
- [ ] No deprecated WordPress functions used

### Block Theme Standards

- [ ] Compatible with Full Site Editing (FSE)
- [ ] Uses `theme.json` v2 schema for styling
- [ ] Block patterns properly registered and categorized
- [ ] Template parts function correctly
- [ ] Site Editor compatibility maintained
- [ ] Block editor preview works correctly

### Security & Performance

- [ ] Proper sanitization and escaping in PHP
- [ ] Input validation implemented
- [ ] Performance impact assessed
- [ ] WordPress nonces used where appropriate
- [ ] Assets enqueued properly with dependencies

### Accessibility & UX

- [ ] Maintains accessibility standards (WCAG 2.1 AA)
- [ ] Semantic HTML structure preserved
- [ ] Keyboard navigation works
- [ ] Screen reader compatibility
- [ ] Responsive design preserved
- [ ] Mobile-first approach maintained

### Build Process & Testing

- [ ] TypeScript types are correct (if applicable)
- [ ] Webpack build process works (`npm run build:production`)
- [ ] Development server starts (`npm run start`)
- [ ] All linters pass (`npm run lint`)
- [ ] Playwright e2e tests pass (`npm run test:e2e`)
- [ ] JavaScript unit tests pass (if applicable)

## Related Issues

Fixes #<!-- issue number -->
