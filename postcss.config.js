/**
 * WordPress PostCSS configuration using WordPress packages
 */
module.exports = {
	plugins: [
		require('@wordpress/postcss-plugins-preset'),
		require('@wordpress/postcss-themes')({
			// Define theme configurations if needed
			themes: {
				default: {},
				dark: {
					selector: '.is-dark-theme',
				},
			},
		}),
	],
};
