/**
 * WordPress PostCSS configuration using WordPress packages
 * PostCSS processes CSS and applies transformations via plugins
 */
module.exports = {
	plugins: [
		// WordPress PostCSS preset includes autoprefixer, CSS custom properties, etc.
		require('@wordpress/postcss-plugins-preset'),
		// WordPress theme support for multiple theme variations
		require('@wordpress/postcss-themes')({
			// Define theme configurations for different visual styles
			themes: {
				default: {}, // Default theme (no specific transformations)
				dark: {
					selector: '.is-dark-theme', // CSS selector for dark theme
				},
			},
		}),
	],
};
