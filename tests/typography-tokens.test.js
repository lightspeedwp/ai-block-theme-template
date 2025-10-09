/**
 * Typography Token Validation Tests
 * 
 * Tests to ensure that typography tokens are properly configured
 * and patterns use token-based typography instead of inline values
 */

import { test, expect } from '@playwright/test';
import { readFileSync } from 'fs';
import { join } from 'path';
import { glob } from 'glob';

test.describe('Typography Token System', () => {
  
  test('theme.json has complete fluid typography scale', async () => {
    const themeJsonPath = join(process.cwd(), 'theme.json');
    const themeJson = JSON.parse(readFileSync(themeJsonPath, 'utf8'));
    
    // Check that fluid typography is enabled
    expect(themeJson.settings.typography.fluid).toBe(true);
    
    // Check that we have the expected font sizes (100-900)
    const fontSizes = themeJson.settings.typography.fontSizes;
    const expectedSlugs = ['100', '200', '300', '400', '500', '600', '700', '800', '900'];
    
    expectedSlugs.forEach(slug => {
      const fontSize = fontSizes.find(fs => fs.slug === slug);
      expect(fontSize, `Font size ${slug} should exist`).toBeDefined();
      expect(fontSize.fluid, `Font size ${slug} should have fluid object`).toBeDefined();
      expect(fontSize.fluid.min, `Font size ${slug} should have min value`).toBeDefined();
      expect(fontSize.fluid.max, `Font size ${slug} should have max value`).toBeDefined();
    });
  });
  
  test('patterns do not contain inline typography values', async () => {
    const patternFiles = glob.sync('patterns/**/*.{php,html}', {
      cwd: process.cwd()
    });
    
    expect(patternFiles.length).toBeGreaterThan(0);
    
    for (const patternFile of patternFiles) {
      const content = readFileSync(join(process.cwd(), patternFile), 'utf8');
      
      // Check for inline fontSize with problematic values (vw, clamp, px)
      const inlineFontSizeMatch = content.match(/fontSize["']:\s*["'][^"']*(vw|clamp|px)/);
      
      expect(inlineFontSizeMatch, `${patternFile} should not contain inline font sizes using vw, clamp, or px`).toBeNull();
    }
  });
  
  test('modified patterns use correct token references', async () => {
    // Test the specific patterns we modified
    const modifiedPatterns = [
      'patterns/70-banner/70-banner-poster.php',
      'patterns/70-banner/70-banner-cover-big-heading.php', 
      'patterns/50-template-parts/50-author-card-compact.html'
    ];
    
    for (const patternPath of modifiedPatterns) {
      const content = readFileSync(join(process.cwd(), patternPath), 'utf8');
      
      if (patternPath.includes('banner-poster') || patternPath.includes('cover-big-heading')) {
        // Large banner headings should use font-size-900
        expect(content).toMatch(/fontSize["']:\s*["']900["']/);
        // Should have the CSS class for font size
        expect(content).toMatch(/has-900-font-size/);
      }
      
      if (patternPath.includes('author-card-compact')) {
        // Should use font-size-200 and font-size-100
        expect(content).toMatch(/fontSize["']:\s*["']200["']/);
        expect(content).toMatch(/fontSize["']:\s*["']100["']/);
      }
    }
  });
  
  test('legacy fallback CSS variables are defined', async () => {
    const stylesCssPath = join(process.cwd(), 'style.css');
    const stylesContent = readFileSync(stylesCssPath, 'utf8');
    
    // Check for legacy fallback variables
    expect(stylesContent).toMatch(/--legacy-hero-12vw/);
    expect(stylesContent).toMatch(/--legacy-banner-clamp/);
    expect(stylesContent).toMatch(/--legacy-14px/);
    expect(stylesContent).toMatch(/--legacy-12px/);
    
    // Ensure they reference the correct tokens
    expect(stylesContent).toMatch(/--legacy-hero-12vw:\s*var\(--wp--preset--font-size--900\)/);
    expect(stylesContent).toMatch(/--legacy-14px:\s*var\(--wp--preset--font-size--200\)/);
  });

});