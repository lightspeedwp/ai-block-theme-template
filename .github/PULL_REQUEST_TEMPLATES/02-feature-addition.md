---
name: Feature Addition
about: Template for adding new features to the AI Block Theme Template
title: "Feature: [Brief description of the feature]"
labels: ["enhancement", "needs-review"]
assignees: []
---

## Feature Description

**What new functionality does this add?**
<!-- Describe the feature being added -->

**Why is this needed?**
<!-- Explain the business case or user need -->

**How does it work?**
<!-- Describe how users will interact with this feature -->

## Implementation Details

**Technical approach:**
<!-- Explain the technical implementation -->

**Design decisions:**
<!-- Justify key architectural choices -->

**AI Enhancement Considerations:**
<!-- How does this feature leverage or integrate with AI capabilities? -->

**WordPress API Integration:**
<!-- Which WordPress APIs, hooks, or filters are used? -->

## User Experience

- [ ] Feature is intuitive for end users
- [ ] Works seamlessly with WordPress admin
- [ ] Compatible with block editor and Site Editor
- [ ] Integrates well with existing block patterns
- [ ] Responsive across all devices and viewports
- [ ] Accessible to users with disabilities (WCAG 2.1 AA)
- [ ] Performance impact is minimal
- [ ] Works with AI-powered development tools

## Scope of Changes

- [ ] New block patterns (`patterns/`)
- [ ] New template parts (`parts/`)
- [ ] New block templates (`templates/`)
- [ ] Theme configuration updates (`theme.json`)
- [ ] WordPress theme functions (`functions.php`)
- [ ] Theme includes (`inc/`)
- [ ] Custom blocks (if applicable)
- [ ] Style variations (`styles/`)
- [ ] TypeScript/JavaScript (`src/`)
- [ ] Build configuration changes
- [ ] Playwright e2e tests (`tests/e2e/`)
- [ ] Documentation updates
- [ ] Translation strings (`.pot` file)

## Screenshots / Videos

<!-- Include screenshots or videos demonstrating the new feature -->

## WordPress Block Theme Checklist

### Code Quality & Standards

- [ ] Follows WordPress PHP coding standards (PHPCS)
- [ ] JavaScript follows WordPress ESLint configuration
- [ ] CSS follows WordPress Stylelint rules
- [ ] All custom functions prefixed with `ai_block_theme_`
- [ ] PHPDoc comments for all new functions/classes
- [ ] No deprecated WordPress functions used
- [ ] Proper text domain usage (`ai-block-theme-template`)

### Block Theme Implementation

- [ ] Uses Block API v3 (if custom blocks)
- [ ] `block.json` properly configured (if applicable)
- [ ] Registered via PHP using metadata (if applicable)
- [ ] Uses `theme.json` v2 for styling (avoid custom CSS)
- [ ] Block patterns include proper headers and categorization
- [ ] Template parts are properly structured
- [ ] Preview works in block inserter (if applicable)
- [ ] Compatible with Full Site Editing (FSE)
- [ ] Site Editor functionality preserved

### Security, Performance & UX

- [ ] Proper sanitization and escaping in PHP
- [ ] Input validation implemented where needed
- [ ] WordPress nonces used for form submissions
- [ ] Performance impact assessed and optimized
- [ ] Maintains accessibility standards (WCAG 2.1 AA)
- [ ] Responsive design implemented (mobile-first)
- [ ] Cross-browser compatibility verified
- [ ] Keyboard navigation support

### Build Process & Testing

- [ ] TypeScript compilation successful (if applicable)
- [ ] Webpack build process works (`npm run build:production`)
- [ ] Development server functionality (`npm run start`)
- [ ] All automated tests pass:
  - [ ] PHP linting (`composer run lint`)
  - [ ] JavaScript/CSS linting (`npm run lint`)
  - [ ] Playwright e2e tests (`npm run test:e2e`)
  - [ ] Unit tests (if applicable)
- [ ] New e2e tests added for feature coverage
- [ ] Documentation updated (README, comments)

## Testing Instructions

### Automated Testing

```bash
# Install dependencies
npm install && composer install

# Run all linting and tests
npm run lint
composer run lint
npm run test:e2e

# Build for production
npm run build:production
```

### Manual Testing

1. <!-- Step-by-step instructions for testing the feature -->
2. Test in WordPress admin and Site Editor
3. Verify block editor functionality
4. Test responsive behavior on different devices
5. Check accessibility with screen reader
6. Validate with different WordPress themes/plugins

## Related Issues

Closes #<!-- issue number -->
