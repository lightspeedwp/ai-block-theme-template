# End-to-End (E2E) Tests

This directory contains Playwright-based end-to-end tests for the AI Block Theme Template.

## Test Files

### accessibility.spec.ts
Comprehensive accessibility testing across all major WordPress templates:
- **Templates Tested**: Homepage, Archive, Single Post, Page, 404, Front Page
- **Features**: ARIA landmarks, heading hierarchy, navigation, skip links, keyboard navigation
- **Flexibility**: Tests gracefully handle missing skip links and adapt to content changes

### block-patterns.spec.ts
Block pattern functionality testing:
- **Current Patterns**: Hero Section, Call to Action
- **Features**: Pattern inserter visibility, editor insertion, publishing workflow, frontend rendering
- **Configuration**: Easy to add new patterns by updating the `patterns` array

### Existing Files
- `admin.spec.ts` - WordPress admin functionality tests
- `php-integration.spec.ts` - PHP integration tests
- `theme.spec.ts` - Basic theme functionality tests
- `helpers/wordpress.ts` - WordPress-specific test utilities

## Running Tests

```bash
# Run all E2E tests
npm run test:e2e

# Run in headed mode (with browser UI)
npm run test:e2e:headed

# Debug tests
npm run test:e2e:debug

# Run specific test file
npx playwright test accessibility.spec.ts
```

## Adding New Block Patterns

To test additional block patterns, update the `patterns` array in `block-patterns.spec.ts`:

```typescript
const patterns = [
  {
    name: 'Pattern Name',
    slug: 'theme-namespace/pattern-slug',
    category: 'pattern-category',
    searchTerm: 'search term',
    expectedContent: ['Text to look for', 'Button text'],
    description: 'Pattern description'
  },
  // Add new patterns here...
];
```

## Accessibility Testing Notes

- Tests use flexible ARIA snapshots that adapt to content structure
- Skip link tests gracefully handle missing implementation
- Cross-template consistency checks ensure uniform user experience
- Keyboard navigation testing validates accessibility compliance

## WordPress Environment

Tests expect a WordPress environment running on `http://localhost:8888` with:
- Default admin credentials (admin/password)
- Basic WordPress content (Hello World post, Sample Page)
- Active AI Block Theme Template

## CI/CD Integration

Tests are configured to run in CI environments with:
- GitHub Actions reporter
- Screenshot and video capture on failures
- Retry logic for flaky tests
- Multiple browser testing (Chromium, Firefox, WebKit)

## Maintenance

- **Pattern Updates**: Modify the `patterns` array when theme patterns change
- **Template Updates**: Add new templates to the `templates` array in accessibility tests
- **Content Updates**: Update expected content when theme content changes
- **Error Handling**: Tests include comprehensive error handling and logging

For detailed Playwright documentation, visit: https://playwright.dev/