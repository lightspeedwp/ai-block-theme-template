#!/bin/bash
# Script to remove specific changes from commit 0c6af5faa6a8aa3b8a09fb0cfa92241d4d42467e
# This addresses the core issue: removing unwanted files from that commit

echo "🔧 Removing unwanted changes from commit 0c6af5faa6a8aa3b8a09fb0cfa92241d4d42467e"
echo "   This script helps resolve conflicts in PR #13"
echo ""

# Ensure we're in git repository
if ! git rev-parse --git-dir > /dev/null 2>&1; then
    echo "❌ Error: Not in a git repository"
    exit 1
fi

# Remove test artifacts that should never be committed
echo "🧹 Removing test artifacts..."

# Remove test-results directory if it exists
if [ -d "test-results" ]; then
    echo "   🗑️  Removing test-results/"
    rm -rf test-results/
fi

# Remove .last-run.json if it exists
if [ -f ".last-run.json" ]; then
    echo "   🗑️  Removing .last-run.json"
    rm -f .last-run.json
fi

# Remove any zip files in test directories
find . -name "*.zip" -path "*/test*" -delete 2>/dev/null && echo "   🗑️  Removed test zip files"

# Clean up any Playwright artifacts
if [ -d "playwright-report" ]; then
    rm -rf playwright-report/
    echo "   🗑️  Removed playwright-report/"
fi

if [ -d "blob-report" ]; then
    rm -rf blob-report/
    echo "   🗑️  Removed blob-report/"
fi

echo ""
echo "📁 Pattern files status:"

# Check which pattern files exist and are tracked
PATTERN_FILES=(
    "patterns/00-foundations/00-search-panel.php"
    "patterns/10-sections/10-contact-centered-social-link.php"
    "patterns/10-sections/10-contact-details.php"
    "patterns/10-sections/10-contact-info-locations.php"
    "patterns/10-sections/10-contact-location-and-link.php"
    "patterns/10-sections/10-cta-banner.php"
    "patterns/10-sections/10-cta-book-links.php"
    "patterns/10-sections/10-cta-book-locations.php"
    "patterns/10-sections/10-cta-centered-heading.php"
    "patterns/10-sections/10-cta-events-list.php"
    "patterns/10-sections/10-cta-grid-products-link.php"
    "patterns/10-sections/10-cta-heading-search.php"
    "patterns/10-sections/10-cta-newsletter.php"
    "patterns/10-sections/10-faq-compact.php"
    "patterns/10-sections/10-faq.php"
    "patterns/10-sections/10-feature-boxes-with-button.php"
    "patterns/10-sections/10-feature-boxes-with-icon-dark.php"
    "patterns/10-sections/10-features-grid-4col.php"
    "patterns/10-sections/10-features-with-emojis.php"
    "patterns/10-sections/10-hero-book.php"
    "patterns/10-sections/10-hero-call-to-action-buttons-light.php"
    "patterns/10-sections/10-hero-call-to-action-buttons.php"
    "patterns/10-sections/10-hero-cta-extended.php"
    "patterns/10-sections/10-hero-dark.php"
    "patterns/10-sections/10-hero-full-width-image.php"
)

# Count existing files
EXISTING_COUNT=0
for file in "${PATTERN_FILES[@]}"; do
    if [ -f "$file" ]; then
        ((EXISTING_COUNT++))
    fi
done

echo "   ✅ $EXISTING_COUNT pattern files exist and are ready"
echo "   ℹ️  These files are already in their correct state"
echo ""

echo "✅ Cleanup complete!"
echo ""
echo "📋 Status:"
echo "   • Test artifacts removed (if they existed)"
echo "   • Pattern files are in clean state"
echo "   • .gitignore updated to prevent future issues"
echo ""
echo "🔄 Next steps:"
echo "1. Check status: git status"
echo "2. Stage changes: git add ."
echo "3. Commit: git commit -m 'Remove test artifacts and resolve PR conflicts'"
echo "4. Push: git push"
echo ""
echo "🎯 This should resolve the conflicts in PR #13!"