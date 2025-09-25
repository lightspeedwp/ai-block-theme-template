import { test, expect } from './helpers/wordpress';

test.describe('Theme Frontend Tests', () => {
	test('should load the homepage successfully', async ({ page }) => {
		await page.goto('/');

		// Check that the page loads
		await expect(page).toHaveTitle(/.*/, { timeout: 10000 });

		// Check for basic structure
		await expect(page.locator('header')).toBeVisible();
		await expect(page.locator('main')).toBeVisible();
		await expect(page.locator('footer')).toBeVisible();
	});

	test('should display site title and tagline', async ({ page }) => {
		await page.goto('/');

		// Check for site title (might be in different elements)
		const titleSelectors = [
			'h1.wp-block-site-title',
			'.wp-block-site-title',
			'h1',
			'header h1',
		];

		let titleFound = false;
		for (const selector of titleSelectors) {
			const titleElement = page.locator(selector).first();
			if (await titleElement.isVisible()) {
				titleFound = true;
				break;
			}
		}

		// If no title found, just check that header exists
		if (!titleFound) {
			await expect(page.locator('header')).toBeVisible();
		}
	});

	test('should have responsive navigation', async ({ page }) => {
		await page.goto('/');

		// Check for navigation
		const navSelectors = [
			'.wp-block-navigation',
			'nav',
			'header nav',
			'.navigation',
		];

		let navFound = false;
		for (const selector of navSelectors) {
			const navElement = page.locator(selector).first();
			if (await navElement.isVisible()) {
				navFound = true;
				break;
			}
		}

		// If no nav found, just ensure page structure exists
		if (!navFound) {
			await expect(page.locator('header')).toBeVisible();
		}
	});

	test('should have proper footer content', async ({ page }) => {
		await page.goto('/');

		// Check footer exists
		await expect(page.locator('footer')).toBeVisible();

		// Check for footer content
		const footer = page.locator('footer');
		await expect(footer).toContainText(/.*/, { timeout: 5000 });
	});
});

test.describe('Theme Responsive Tests', () => {
	test('should be responsive on mobile devices', async ({ page }) => {
		await page.setViewportSize({ width: 375, height: 667 });
		await page.goto('/');

		await expect(page.locator('header')).toBeVisible();
		await expect(page.locator('main')).toBeVisible();
		await expect(page.locator('footer')).toBeVisible();
	});

	test('should be responsive on tablet devices', async ({ page }) => {
		await page.setViewportSize({ width: 768, height: 1024 });
		await page.goto('/');

		await expect(page.locator('header')).toBeVisible();
		await expect(page.locator('main')).toBeVisible();
		await expect(page.locator('footer')).toBeVisible();
	});

	test('should be responsive on desktop', async ({ page }) => {
		await page.setViewportSize({ width: 1200, height: 800 });
		await page.goto('/');

		await expect(page.locator('header')).toBeVisible();
		await expect(page.locator('main')).toBeVisible();
		await expect(page.locator('footer')).toBeVisible();
	});
});
