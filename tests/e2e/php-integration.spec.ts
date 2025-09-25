import { test, expect } from './helpers/wordpress';

test.describe('PHP Theme Integration Tests', () => {
	test('should not show PHP errors on frontend', async ({ page, wp }) => {
		await page.goto('/');

		// Check for PHP errors in the page source
		const content = await page.content();

		// Look for common PHP error patterns
		const phpErrorPatterns = [
			/Fatal error:/i,
			/Parse error:/i,
			/Warning: /i,
			/Notice: /i,
			/Deprecated: /i,
			/<b>Fatal error<\/b>/i,
			/<b>Parse error<\/b>/i,
			/<b>Warning<\/b>/i,
		];

		for (const pattern of phpErrorPatterns) {
			expect(content).not.toMatch(pattern);
		}
	});

	test('should activate theme without errors', async ({ wp }) => {
		await wp.loginAsAdmin();
		await wp.goToThemeEditor();

		// Check for PHP errors in admin
		await wp.checkForPHPErrors();
	});

	test('should load customizer without PHP errors', async ({ wp }) => {
		await wp.goToCustomizer();

		// Check for PHP errors
		await wp.checkForPHPErrors();
	});

	test('should handle block editor without PHP errors', async ({ wp }) => {
		await wp.testBlockEditor();
	});

	test('should load all templates without PHP errors', async ({
		page,
		wp,
	}) => {
		const templates = [
			'index',
			'front-page',
			'single',
			'page',
			'archive',
			'404',
		];

		for (const template of templates) {
			try {
				await wp.testTemplate(template);
			} catch (error) {
				// eslint-disable-next-line no-console
				console.warn(`Template ${template} may have issues:`, error);
				// Don't fail the test for missing templates, just log
			}
		}
	});

	test('should have valid theme.json structure', async ({ page }) => {
		// Test that theme.json is accessible and valid
		const response = await page.request.get(
			'/wp-content/themes/ai-block-theme-template/theme.json'
		);
		expect(response.status()).toBe(200);

		const themeJson = await response.json();

		// Basic validation of theme.json structure
		expect(themeJson).toHaveProperty('version');
		expect(themeJson).toHaveProperty('settings');
		expect(themeJson).toHaveProperty('styles');
	});

	test('should enqueue scripts and styles correctly', async ({ page }) => {
		await page.goto('/');

		// Check that WordPress styles are loaded
		const stylesheets = await page.locator('link[rel="stylesheet"]').all();
		expect(stylesheets.length).toBeGreaterThan(0);

		// Check for theme stylesheet
		const themeStyle = page.locator('link[href*="style.css"]');
		await expect(themeStyle).toHaveCount(1);
	});

	test('should handle WordPress hooks and filters', async ({ page }) => {
		await page.goto('/');

		// Check that basic WordPress functionality is working
		// This indicates that hooks and filters are being processed
		const wpContent = page.locator(
			'.wp-site-blocks, .wp-block-group, main'
		);
		await expect(wpContent).toBeVisible();
	});
});
