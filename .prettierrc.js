/**
 * WordPress Prettier configuration
 * Extends the WordPress default configuration
 */
const wpPrettierConfig = require('@wordpress/prettier-config');

module.exports = {
	...wpPrettierConfig,
	// Override specific settings if needed
	printWidth: 80,
	overrides: [
		{
			files: ['*.json', '*.yml', '*.yaml'],
			options: {
				useTabs: false,
				tabWidth: 2,
			},
		},
		{
			files: ['*.md'],
			options: {
				printWidth: 120,
				useTabs: false,
				tabWidth: 2,
			},
		},
		{
			files: ['*.php'],
			options: {
				parser: 'php',
				phpVersion: '7.4',
			},
		},
	],
};
