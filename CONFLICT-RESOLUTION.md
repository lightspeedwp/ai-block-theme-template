# PR #13 Conflict Resolution Guide

This document provides steps to resolve conflicts in PR #13 caused by commit `0c6af5faa6a8aa3b8a09fb0cfa92241d4d42467e`.

## Problem

The commit `0c6af5faa6a8aa3b8a09fb0cfa92241d4d42467e` ("Final implementation and testing of vertical header section style with responsive validation") added changes to pattern files and test artifacts that are causing merge conflicts in PR #13.

## Files Affected

The following 25 pattern files need to be reset to their clean state:

### Foundation Patterns
- `patterns/00-foundations/00-search-panel.php`

### Section Patterns
- `patterns/10-sections/10-contact-centered-social-link.php`
- `patterns/10-sections/10-contact-details.php`
- `patterns/10-sections/10-contact-info-locations.php`
- `patterns/10-sections/10-contact-location-and-link.php`
- `patterns/10-sections/10-cta-banner.php`
- `patterns/10-sections/10-cta-book-links.php`
- `patterns/10-sections/10-cta-book-locations.php`
- `patterns/10-sections/10-cta-centered-heading.php`
- `patterns/10-sections/10-cta-events-list.php`
- `patterns/10-sections/10-cta-grid-products-link.php`
- `patterns/10-sections/10-cta-heading-search.php`
- `patterns/10-sections/10-cta-newsletter.php`
- `patterns/10-sections/10-faq-compact.php`
- `patterns/10-sections/10-faq.php`
- `patterns/10-sections/10-feature-boxes-with-button.php`
- `patterns/10-sections/10-feature-boxes-with-icon-dark.php`
- `patterns/10-sections/10-features-grid-4col.php`
- `patterns/10-sections/10-features-with-emojis.php`
- `patterns/10-sections/10-hero-book.php`
- `patterns/10-sections/10-hero-call-to-action-buttons-light.php`
- `patterns/10-sections/10-hero-call-to-action-buttons.php`
- `patterns/10-sections/10-hero-cta-extended.php`
- `patterns/10-sections/10-hero-dark.php`
- `patterns/10-sections/10-hero-full-width-image.php`

## Solution Steps

### Option 1: Using the Reset Script (Recommended)

1. **Run the automated reset script:**
   ```bash
   ./scripts/reset-pattern-files.sh
   ```

2. **Review the changes:**
   ```bash
   git status
   git diff
   ```

3. **Test the theme:**
   ```bash
   npm run build
   npm run test:e2e
   ```

4. **Commit the reset:**
   ```bash
   git add .
   git commit -m "Reset pattern files to resolve PR #13 conflicts"
   git push
   ```

### Option 2: Manual Reset

1. **Create a backup:**
   ```bash
   mkdir -p tmp/pattern-backups
   cp patterns/00-foundations/00-search-panel.php tmp/pattern-backups/
   # ... repeat for all files
   ```

2. **Reset each file to develop branch:**
   ```bash
   git checkout develop -- patterns/00-foundations/00-search-panel.php
   git checkout develop -- patterns/10-sections/10-contact-centered-social-link.php
   # ... repeat for all 25 files
   ```

3. **Remove any test artifacts:**
   ```bash
   rm -rf test-results/
   rm -f .last-run.json
   ```

### Option 3: Interactive Rebase (Advanced)

If you have access to the PR branch:

1. **Checkout the PR branch:**
   ```bash
   git checkout copilot/refactor-vertical-header-style
   ```

2. **Interactive rebase to exclude the commit:**
   ```bash
   git rebase -i HEAD~10
   ```

3. **Mark the problematic commit as 'drop' or 'skip'**

4. **Force push (if allowed):**
   ```bash
   git push --force-with-lease
   ```

## Prevention

The following changes have been made to prevent future conflicts:

### Updated .gitignore

The `.gitignore` file has been updated to better exclude test artifacts:

```gitignore
# Playwright end-to-end testing artifacts
test-results/                # Test execution results (any location)
playwright-report/           # HTML test reports (any location)  
blob-report/                 # Binary test artifacts (any location)
playwright/.cache/           # Playwright browser cache (any location)
*.zip                        # Trace files and test artifacts
.last-run.json              # Playwright test run state
```

### Test Artifact Exclusion

Ensure these patterns are never committed:
- `test-results/**`
- `playwright-report/**`
- `blob-report/**`
- `*.zip` files in test directories
- `.last-run.json`

## Verification

After applying the solution:

1. **Check build passes:**
   ```bash
   npm run build
   ```

2. **Verify no conflicts remain:**
   ```bash
   git status
   git log --oneline -10
   ```

3. **Test pattern functionality:**
   ```bash
   npm run test:e2e -- --grep="pattern"
   ```

4. **Validate theme.json:**
   ```bash
   npx wp-scripts build
   ```

## Notes

- Backups are automatically created in `tmp/pattern-backups-{timestamp}/`
- The reset script is safe and can be run multiple times
- All changes maintain theme.json token compatibility
- No functional pattern code is lost, only conflicting changes are reset

## Support

If you encounter issues:

1. Check the backup directory for original files
2. Run `git status` to see what changed
3. Use `git checkout develop -- <filename>` to reset individual files
4. Contact the team if manual intervention is needed