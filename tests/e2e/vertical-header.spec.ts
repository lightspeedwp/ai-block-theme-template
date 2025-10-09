import { test, expect } from '@playwright/test';

test.describe('Vertical Header Section Style', () => {
	test.beforeEach(async ({ page }) => {
		// Navigate to a test page with vertical header
		await page.goto('/');
	});

	test('Vertical header section should have adaptive width', async ({ page }) => {
		await test.step('Test vertical header adaptive width at different viewports', async () => {
			// Test at mobile viewport (360px)
			await page.setViewportSize({ width: 360, height: 800 });
			
			const verticalHeader = page.locator('.is-style-vertical-header');
			if (await verticalHeader.count() > 0) {
				const headerWidth = await verticalHeader.boundingBox();
				expect(headerWidth?.width).toBeGreaterThanOrEqual(96); // 6rem min
				expect(headerWidth?.width).toBeLessThanOrEqual(224); // 14rem max
			}

			// Test at tablet viewport (768px)  
			await page.setViewportSize({ width: 768, height: 1024 });
			
			if (await verticalHeader.count() > 0) {
				const headerWidthTablet = await verticalHeader.boundingBox();
				expect(headerWidthTablet?.width).toBeGreaterThanOrEqual(96); // 6rem min
				expect(headerWidthTablet?.width).toBeLessThanOrEqual(224); // 14rem max
			}

			// Test at desktop viewport (1920px)
			await page.setViewportSize({ width: 1920, height: 1080 });
			
			if (await verticalHeader.count() > 0) {
				const headerWidthDesktop = await verticalHeader.boundingBox();
				expect(headerWidthDesktop?.width).toBeGreaterThanOrEqual(96); // 6rem min
				expect(headerWidthDesktop?.width).toBeLessThanOrEqual(224); // 14rem max
			}
		});
	});

	test('Vertical header template part should use proper spacing tokens', async ({ page }) => {
		await test.step('Verify spacing tokens are applied correctly', async () => {
			const verticalHeaderPart = page.locator('[data-wp-block-type="core/template-part"][data-wp-template-part-slug="vertical-header"]');
			
			if (await verticalHeaderPart.count() > 0) {
				// Check computed styles include proper padding values
				const computedStyles = await verticalHeaderPart.evaluate((element) => {
					return window.getComputedStyle(element);
				});
				
				// These should correspond to our fluid spacing tokens
				expect(parseFloat(computedStyles.paddingTop)).toBeGreaterThanOrEqual(32); // 2rem min for spacing-60
				expect(parseFloat(computedStyles.paddingBottom)).toBeGreaterThanOrEqual(48); // 3rem min for spacing-80
			}
		});
	});

	test('Vertical header section style should support nested headings and links', async ({ page }) => {
		await test.step('Verify nested elements use theme tokens', async () => {
			const verticalHeaderSection = page.locator('.is-style-vertical-header');
			
			if (await verticalHeaderSection.count() > 0) {
				// Check for headings within the vertical header
				const headings = verticalHeaderSection.locator('h1, h2, h3, h4, h5, h6');
				
				if (await headings.count() > 0) {
					const headingStyles = await headings.first().evaluate((element) => {
						return window.getComputedStyle(element);
					});
					
					// Should have proper font weight and line height from tokens
					expect(headingStyles.fontWeight).toBe('700');
				}

				// Check for links within the vertical header
				const links = verticalHeaderSection.locator('a');
				
				if (await links.count() > 0) {
					const linkStyles = await links.first().evaluate((element) => {
						return window.getComputedStyle(element);
					});
					
					// Should use primary color token
					expect(linkStyles.color).toMatch(/rgb\(0, 124, 186\)|#007cba/i); // Primary color
				}
			}
		});
	});
});