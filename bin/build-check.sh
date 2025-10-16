#!/bin/bash

# Build validation script for AI Block Theme Template
# Validates build outputs and checks for required files

set -euo pipefail

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo "🔧 AI Block Theme Template - Build Validation"
echo "=============================================="

# Check if build directory exists
if [ ! -d "build" ]; then
    echo -e "${RED}❌ Build directory not found${NC}"
    exit 1
fi

# Check for required build files
REQUIRED_FILES=(
    "build/theme.js"
    "build/theme.asset.php"
    "build/accessibility.js"
    "build/accessibility.asset.php"
    "build/style-engine.js"
    "build/style-engine.asset.php"
    "build/assets.php"
)

MISSING_FILES=()

for file in "${REQUIRED_FILES[@]}"; do
    if [ ! -f "$file" ]; then
        MISSING_FILES+=("$file")
    fi
done

if [ ${#MISSING_FILES[@]} -gt 0 ]; then
    echo -e "${RED}❌ Missing build files:${NC}"
    for file in "${MISSING_FILES[@]}"; do
        echo -e "   ${RED}• $file${NC}"
    done
    exit 1
else
    echo -e "${GREEN}✅ All required build files present${NC}"
fi

# Check file sizes (basic validation)
for file in "${REQUIRED_FILES[@]}"; do
    if [ -f "$file" ]; then
        SIZE=$(wc -c < "$file")
        if [ "$SIZE" -eq 0 ]; then
            echo -e "${YELLOW}⚠️  Warning: $file is empty${NC}"
        else
            echo -e "${GREEN}✅ $file ($SIZE bytes)${NC}"
        fi
    fi
done

echo ""
echo -e "${GREEN}🎉 Build validation completed successfully!${NC}"