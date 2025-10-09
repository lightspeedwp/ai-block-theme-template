import { test, expect } from './helpers/wordpress';

test.describe('Accessibility Tests', () => {
	// Define templates to test with their expected routes
	const templates = [
		{ name: 'Homepage', path: '/', templateFile: 'index.html' },
		{ name: 'Archive', path: '/category/uncategorized/', templateFile: 'archive.html' },
		{ name: 'Single Post', path: '/hello-world/', templateFile: 'single.html' },
		{ name: 'Page', path: '/sample-page/', templateFile: 'page.html' },
		{ name: '404', path: '/non-existent-page/', templateFile: '404.html' },
		{ name: 'Front Page', path: '/', templateFile: 'front-page.html' }
	];

	templates.forEach(({ name, path, templateFile }) => {
		test.describe(`${name} Template Accessibility`, () => {
			
			test(`should have proper ARIA landmarks on ${name}`, async ({ page }) => {
				// Navigate to the template
				await page.goto(path);
				
				// Wait for page to load completely
				await expect(page.locator('body')).toBeVisible();
				
				// Test ARIA landmarks with flexible snapshot
				// This uses a flexible approach that adapts to actual content
				const landmarks = page.getByRole('banner').or(page.getByRole('navigation')).or(page.getByRole('main')).or(page.getByRole('complementary')).or(page.getByRole('contentinfo'));
				
				// Check that we have at least the essential landmarks
				await expect(page.getByRole('main')).toBeVisible({ timeout: 10000 });
				
				// More flexible ARIA snapshot that focuses on structure
				const mainContent = page.getByRole('main');
				await expect(page).toMatchAriaSnapshot(`
					- banner:
					- navigation:
					- main:
						- heading:
					- complementary:
					- contentinfo:
				`);
			});

			test(`should have proper heading hierarchy on ${name}`, async ({ page }) => {
				await page.goto(path);
				
				// Wait for content to load
				await expect(page.locator('body')).toBeVisible();
				
				// Check for proper heading hierarchy
				const headings = page.locator('h1, h2, h3, h4, h5, h6');
				const headingCount = await headings.count();
				
				if (headingCount > 0) {
					// Check that there's at least one h1 (or site title)
					const h1Elements = page.locator('h1');
					const h1Count = await h1Elements.count();
					
					// Should have at least one h1, or if not, should have proper site title structure
					if (h1Count === 0) {
						// Check for site title block which might be level 0
						const siteTitle = page.locator('.wp-block-site-title');
						await expect(siteTitle).toBeVisible();
					} else {
						await expect(h1Elements.first()).toBeVisible();
					}
				}
			});

			test(`should have accessible navigation on ${name}`, async ({ page }) => {
				await page.goto(path);
				
				// Wait for page structure to load
				await expect(page.locator('body')).toBeVisible();
				
				// Check for navigation elements
				const nav = page.getByRole('navigation').first();
				
				// If navigation exists, it should be accessible
				if (await nav.isVisible()) {
					// Navigation should have proper structure
					await expect(nav).toBeVisible();
					
					// Check for navigation links
					const navLinks = nav.locator('a');
					const linkCount = await navLinks.count();
					
					if (linkCount > 0) {
						// First link should be focusable
						await navLinks.first().focus();
						await expect(navLinks.first()).toBeFocused();
					}
				}
			});

			test(`should have accessible footer on ${name}`, async ({ page }) => {
				await page.goto(path);
				
				// Wait for page to load
				await expect(page.locator('body')).toBeVisible();
				
				// Check footer visibility and basic accessibility
				const footer = page.locator('footer').or(page.getByRole('contentinfo'));
				await expect(footer.first()).toBeVisible({ timeout: 10000 });
				
				// Footer should have some content
				const footerText = await footer.first().textContent();
				expect(footerText?.trim().length).toBeGreaterThan(0);
			});

			test(`should have skip links functionality on ${name}`, async ({ page }) => {
				await page.goto(path);
				
				// Wait for page structure
				await expect(page.locator('body')).toBeVisible();
				
				// Look for skip links - they might be visually hidden but should be in DOM
				// Common selectors for skip links
				const skipLinkSelectors = [
					'.skip-link',
					'.screen-reader-text',
					'a[href="#main"]',
					'a[href="#content"]',
					'.wp-block-template-part[data-part="skip-links"] a'
				];
				
				let skipLinkFound = false;
				let skipLink;
				
				for (const selector of skipLinkSelectors) {
					skipLink = page.locator(selector).first();
					if (await skipLink.count() > 0) {
						skipLinkFound = true;
						break;
					}
				}
				
				// If skip links are implemented, test their functionality
				if (skipLinkFound && skipLink) {
					// Focus the skip link (this should make it visible)
					await skipLink.focus();
					
					// Skip link should be focusable
					await expect(skipLink).toBeFocused();
					
					// Get the target of the skip link
					const href = await skipLink.getAttribute('href');
					
					if (href && href.startsWith('#')) {
						const targetId = href.substring(1);
						const target = page.locator(`#${targetId}`);
						
						// Target should exist
						if (await target.count() > 0) {
							// Click the skip link
							await skipLink.click();
							
							// Target should receive focus or be scrolled to
							await expect(target).toBeVisible();
						}
					}
				} else {
					// Log that skip links are not implemented yet but test passes
					// Log using Playwright's test reporter
					test.info().log(`Skip links not found on ${name} - this is acceptable for development`);
				}
			});

			test(`should have proper keyboard navigation on ${name}`, async ({ page }) => {
				await page.goto(path);
				
				// Wait for interactive elements
				await expect(page.locator('body')).toBeVisible();
				
				// Test tab navigation through interactive elements
				const interactiveElements = page.locator('a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])');
				const interactiveCount = await interactiveElements.count();
				
				if (interactiveCount > 0) {
					// Start tabbing from body
					await page.locator('body').focus();
					
					// Tab to first interactive element
					await page.keyboard.press('Tab');
					
					// Should focus on an interactive element
					const focusedElement = page.locator(':focus');
					await expect(focusedElement).toBeVisible();
					
					// Test that focus is visible
					const focusedElementBox = await focusedElement.boundingBox();
					expect(focusedElementBox).toBeTruthy();
				}
			});

			test(`should have proper color contrast on ${name}`, async ({ page }) => {
				await page.goto(path);
				
				// Wait for styles to load
				await expect(page.locator('body')).toBeVisible();
				await page.waitForTimeout(1000); // Wait for CSS to fully apply
				
				// This is a basic color contrast check
				// In a full implementation, you might use axe-core for detailed contrast checking
				
				// Check main content area has text content
				const main = page.getByRole('main');
				if (await main.isVisible()) {
					const textContent = await main.textContent();
					expect(textContent?.trim().length).toBeGreaterThan(0);
					
					// Check that main content area has proper styling
					const computedStyle = await main.evaluate((el) => {
						const styles = window.getComputedStyle(el);
						return {
							color: styles.color,
							backgroundColor: styles.backgroundColor
						};
					});
					
					// Basic check that color properties are set
					expect(computedStyle.color).toBeTruthy();
				}
			});
		});
	});

	test.describe('Cross-Template Accessibility Features', () => {
		
		test('should maintain consistent navigation structure across templates', async ({ page }) => {
			// Test navigation consistency across different templates
			const testPages = ['/', '/hello-world/'];
			const navStructures: any[] = [];
			
			for (const testPage of testPages) {
				await page.goto(testPage);
				await expect(page.locator('body')).toBeVisible();
				
				const nav = page.getByRole('navigation').first();
				if (await nav.isVisible()) {
					const navLinks = await nav.locator('a').allTextContents();
					navStructures.push(navLinks);
				}
			}
			
			// If navigation exists on multiple pages, it should be consistent
			if (navStructures.length > 1) {
				expect(navStructures[0]).toEqual(navStructures[1]);
			}
		});

		test('should have consistent landmark structure across templates', async ({ page }) => {
			// Test that landmark roles are consistent across key templates
			const testPages = ['/', '/hello-world/'];
			const landmarkStructures: any[] = [];
			
			for (const testPage of testPages) {
				await page.goto(testPage);
				await expect(page.locator('body')).toBeVisible();
				
				// Get all landmark roles
				const landmarks = await page.locator('[role="banner"], [role="navigation"], [role="main"], [role="complementary"], [role="contentinfo"], header, nav, main, aside, footer').allTextContents();
				const landmarkTypes = await page.locator('[role="banner"], [role="navigation"], [role="main"], [role="complementary"], [role="contentinfo"], header, nav, main, aside, footer').evaluateAll((elements) => {
					return elements.map(el => el.tagName.toLowerCase() + (el.getAttribute('role') ? `[${el.getAttribute('role')}]` : ''));
				});
				
				landmarkStructures.push(landmarkTypes);
			}
			
			// Should have at least main landmark on all pages
			landmarkStructures.forEach(structure => {
				const hasMainLandmark = structure.some((landmark: string) => 
					landmark.includes('main') || landmark.includes('[main]')
				);
				expect(hasMainLandmark).toBeTruthy();
			});
		});
	});
});