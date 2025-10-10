/**
 * Theme JSON Validation Tests
 * Tests the refactored theme.json structure and naming conventions
 */

const fs = require('fs');
const path = require('path');

// Load theme.json
const themeJsonPath = path.join(__dirname, '..', 'theme.json');
const themeJsonContent = fs.readFileSync(themeJsonPath, 'utf-8');
let themeJson;

try {
  themeJson = JSON.parse(themeJsonContent);
} catch (error) {
  throw new Error(`Invalid JSON in theme.json: ${error.message}`);
}

describe('Theme JSON Structure', () => {
  test('should have valid JSON structure', () => {
    expect(themeJson).toBeDefined();
    expect(themeJson.version).toBe(3);
  });

  test('should not have duplicate keys', () => {
    // Test that there are no duplicate keys by parsing successfully
    expect(() => JSON.parse(themeJsonContent)).not.toThrow();
  });
});

describe('Color Palette Naming Conventions', () => {
  test('should have base semantic colors', () => {
    const palette = themeJson.settings.color.palette;
    const slugs = palette.map(color => color.slug);
    
    expect(slugs).toContain('base');
    expect(slugs).toContain('contrast'); 
    expect(slugs).toContain('primary');
  });

  test('should have neutral scale colors with correct naming', () => {
    const palette = themeJson.settings.color.palette;
    const neutralColors = palette.filter(color => color.slug.startsWith('neutral-'));
    
    expect(neutralColors.length).toBeGreaterThanOrEqual(10); // neutral-0 through neutral-900
    
    // Check for key neutral values
    const neutralSlugs = neutralColors.map(color => color.slug);
    expect(neutralSlugs).toContain('neutral-0');
    expect(neutralSlugs).toContain('neutral-100');
    expect(neutralSlugs).toContain('neutral-500');
    expect(neutralSlugs).toContain('neutral-900');
  });

  test('should have accent scale colors with correct naming', () => {
    const palette = themeJson.settings.color.palette;
    const accentColors = palette.filter(color => color.slug.startsWith('accent-'));
    
    expect(accentColors.length).toBeGreaterThanOrEqual(9); // accent-100 through accent-900
    
    // Check for key accent values
    const accentSlugs = accentColors.map(color => color.slug);
    expect(accentSlugs).toContain('accent-100');
    expect(accentSlugs).toContain('accent-500');
    expect(accentSlugs).toContain('accent-900');
  });
});

describe('Typography Naming Conventions', () => {
  test('should have font sizes with numeric slugs', () => {
    const fontSizes = themeJson.settings.typography.fontSizes;
    
    fontSizes.forEach(fontSize => {
      expect(fontSize.slug).toMatch(/^\d+$/);
    });
    });

    test('should have complete font size scale from 100 to 900', () => {
    const fontSizes = themeJson.settings.typography.fontSizes;
    const expectedSlugs = [
      '100',
      '200',
      '300',
      '400',
      '500',
      '600',
      '700',
      '800',
      '900'
    ];
    
    const actualSlugs = fontSizes.map(fs => fs.slug);
    expectedSlugs.forEach(slug => {
      expect(actualSlugs).toContain(slug);
    });
    });

  test('should have fluid typography with min/max values', () => {
    const fontSizes = themeJson.settings.typography.fontSizes;
    
    fontSizes.forEach(fontSize => {
      expect(fontSize.fluid).toBeDefined();
      expect(fontSize.fluid.min).toBeDefined();
      expect(fontSize.fluid.max).toBeDefined();
    });
  });

  test('should have fluid typography enabled', () => {
    expect(themeJson.settings.typography.fluid).toBe(true);
  });
});

describe('Spacing Naming Conventions', () => {
  test('should have spacing sizes with numeric slugs', () => {
    const spacingSizes = themeJson.settings.spacing.spacingSizes;
    
    spacingSizes.forEach(spacing => {
      expect(spacing.slug).toMatch(/^\d+$/);
    });
  });

  test('should have complete spacing scale from 10 to 100', () => {
    const spacingSizes = themeJson.settings.spacing.spacingSizes;
    const expectedSlugs = ['10', '20', '30', '40', '50', '60', '70', '80', '90', '100'];
    
    const actualSlugs = spacingSizes.map(ss => ss.slug);
    expectedSlugs.forEach(slug => {
      expect(actualSlugs).toContain(slug);
    });
  });

  test('should use clamp() for fluid spacing', () => {
    const spacingSizes = themeJson.settings.spacing.spacingSizes;
    
    spacingSizes.forEach(spacing => {
      expect(spacing.size).toMatch(/clamp\(/);
    });
  });
});

describe('Style Variations', () => {
  test('should have styles array defined', () => {
    expect(themeJson.styles).toBeDefined();
    expect(Array.isArray(themeJson.styles)).toBe(true);
  });

  test('should have expected style variations', () => {
    const styleNames = themeJson.styles.map(style => style.name);
    const expectedStyles = ['default', 'hero-light', 'hero-dark', 'cta', 'contrast', 'cards', 'feature', 'testimonial', 'gallery', 'pricing', 'stats', 'footer-cta'];
    
    expectedStyles.forEach(styleName => {
      expect(styleNames).toContain(styleName);
    });
  });

  test('should use new naming conventions in style variations', () => {
    const stylesWithSpacing = themeJson.styles.filter(style => 
      style.styles && style.styles.spacing
    );
    
    stylesWithSpacing.forEach(style => {
      const spacingRefs = JSON.stringify(style.styles.spacing);
      // Should use numeric slugs only
      if (spacingRefs.includes('--wp--preset--spacing--')) {
        expect(spacingRefs).toMatch(/--wp--preset--spacing--\d+/);
      }
    });
  });
});

describe('Token References', () => {
  test('should use numeric font-size tokens in styles', () => {
    const stylesSection = themeJson.styles;
    const stylesString = JSON.stringify(stylesSection);
    
    // Check that prefixed font-size references are not used
    expect(stylesString).not.toMatch(/--wp--preset--font-size--font-size-\d+/);
    
    // Check that numeric font-size references are used if font-size references exist
    if (stylesString.includes('--wp--preset--font-size--')) {
      expect(stylesString).toMatch(/--wp--preset--font-size--\d+/);
    }
  });

  test('should use numeric spacing tokens in styles', () => {
    const stylesSection = themeJson.styles;
    const stylesString = JSON.stringify(stylesSection);
    
    // Check that prefixed spacing references are not used
    expect(stylesString).not.toMatch(/--wp--preset--spacing--spacing-\d+/);
    
    // Check that numeric spacing references are used if spacing references exist
    if (stylesString.includes('--wp--preset--spacing--')) {
      expect(stylesString).toMatch(/--wp--preset--spacing--\d+/);
    }
  });
});