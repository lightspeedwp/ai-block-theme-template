#!/bin/bash
# Script to reset specific pattern files to resolve conflicts from commit 0c6af5faa6a8aa3b8a09fb0cfa92241d4d42467e
# This script will reset the files mentioned in the problem statement to their clean state

echo "🔄 Resetting pattern files to resolve PR #13 conflicts..."

# List of files to reset as specified in the problem statement
FILES=(
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

# Check if we're in a git repository
if ! git rev-parse --git-dir > /dev/null 2>&1; then
    echo "❌ Error: Not in a git repository"
    exit 1
fi

# Create backup directory
BACKUP_DIR="./tmp/pattern-backups-$(date +%Y%m%d-%H%M%S)"
mkdir -p "$BACKUP_DIR"

echo "📁 Creating backups in $BACKUP_DIR"

# Backup and reset files
for file in "${FILES[@]}"; do
    if [ -f "$file" ]; then
        echo "   📄 Backing up: $file"
        cp "$file" "$BACKUP_DIR/"
        
        # Reset to develop branch version
        git checkout develop -- "$file" 2>/dev/null || echo "   ⚠️  Warning: Could not reset $file to develop branch"
    else
        echo "   ❓ File not found: $file"
    fi
done

echo ""
echo "✅ Pattern files reset complete!"
echo "🔍 Review changes with: git status"
echo "💾 Backups saved in: $BACKUP_DIR"
echo ""
echo "Next steps:"
echo "1. Review the changes: git diff"
echo "2. Test the theme: npm run build && npm run test"
echo "3. Commit the changes: git add . && git commit -m 'Reset pattern files to resolve PR conflicts'"
echo "4. The conflicts in PR #13 should now be resolved"