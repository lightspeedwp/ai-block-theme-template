import { test as base, expect, Page } from '@playwright/test';
import { RequestUtils } from '@wordpress/e2e-test-utils-playwright';

/**
 * WordPress-specific test utilities for PHP theme testing
 */
export class WordPressHelpers {
	private page: Page;
	public requestUtils: RequestUtils;

	constructor(page: Page) {
		this.page = page;
		this.requestUtils = new RequestUtils(page.request);
	}

	/**
	 * Login to WordPress admin
	 *
	 * @param {string} username - The username to login with
	 * @param {string} password - The password to login with
	 */
	async loginAsAdmin(username = 'admin', password = 'password') {
		await this.page.goto('/wp-admin/');

		// Check if already logged in
		if (await this.page.locator('#wpadminbar').isVisible()) {
			return;
		}

		await this.page.fill('#user_login', username);
		await this.page.fill('#user_pass', password);
		await this.page.click('#wp-submit');

		// Wait for admin bar to appear
		await expect(this.page.locator('#wpadminbar')).toBeVisible();
	}

	/**
	 * Navigate to theme customizer
	 */
	async goToCustomizer() {
		await this.loginAsAdmin();
		await this.page.goto('/wp-admin/customize.php');
		await this.page.waitForSelector('.wp-full-overlay-sidebar');
	}

	/**
	 * Navigate to theme editor
	 */
	async goToThemeEditor() {
		await this.loginAsAdmin();
		await this.page.goto('/wp-admin/theme-editor.php');
	}

	/**
	 * Test theme activation
	 *
	 * @param {string} themeName - The name of the theme to activate
	 */
	async activateTheme(themeName: string) {
		await this.loginAsAdmin();
		await this.page.goto('/wp-admin/themes.php');

		// Find and activate the theme
		const themeCard = this.page.locator(`[data-slug="${themeName}"]`);
		if (await themeCard.isVisible()) {
			await themeCard.locator('.activate').click();
			await expect(this.page.locator('.notice-success')).toBeVisible();
		}
	}

	/**
	 * Check for PHP errors in the admin
	 */
	async checkForPHPErrors() {
		const phpErrors = await this.page
			.locator('.error, .notice-error')
			.all();

		for (const error of phpErrors) {
			const text = await error.textContent();
			if (
				text?.includes('Fatal error') ||
				text?.includes('Parse error') ||
				text?.includes('Warning')
			) {
				throw new Error(`PHP Error detected: ${text}`);
			}
		}
	}

	/**
	 * Test block editor functionality
	 */
	async testBlockEditor() {
		await this.loginAsAdmin();
		await this.page.goto('/wp-admin/post-new.php');

		// Wait for block editor to load
		await this.page.waitForSelector('.block-editor-page');

		// Check for JavaScript errors that might indicate PHP issues
		const logs: any[] = [];
		this.page.on('console', (msg) => {
			if (msg.type() === 'error') {
				logs.push(msg.text());
			}
		});

		// Add a paragraph block
		await this.page.click('.block-editor-default-block-appender');
		await this.page.type('.wp-block-paragraph', 'Test content');

		// Check for errors
		if (logs.length > 0) {
			// eslint-disable-next-line no-console
			console.warn('JavaScript errors detected:', logs);
		}
	}

	/**
	 * Test theme templates
	 *
	 * @param {string} template - The template name to test
	 */
	async testTemplate(template: string) {
		await this.page.goto(`/?template=${template}`);

		// Check for PHP errors
		await this.checkForPHPErrors();

		// Verify template loaded
		await expect(this.page.locator('body')).toBeVisible();
	}
}

// Extended test with WordPress helpers
export const test = base.extend<{ wp: WordPressHelpers }>({
	wp: async ({ page }, use) => {
		const wp = new WordPressHelpers(page);
		await use(wp);
	},
});

export { expect } from '@playwright/test';
