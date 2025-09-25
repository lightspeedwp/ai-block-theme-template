/**
 * WordPress Prettier configuration
 * Extends the WordPress default configuration for consistent code formatting
 */
const wpPrettierConfig = require('@wordpress/prettier-config');

module.exports = {
	...wpPrettierConfig, // Inherit all WordPress Prettier defaults
	// Override specific settings if needed
	printWidth: 80, // Maximum line length before wrapping
	overrides: [
		{
			// JSON and YAML files use spaces instead of tabs
			files: ['*.json', '*.yml', '*.yaml'],
			options: {
				useTabs: false, // Use spaces for indentation
				tabWidth: 2, // 2 spaces per indentation level
			},
		},
		{
			// Markdown files have longer line length and use spaces
			files: ['*.md'],
			options: {
				printWidth: 120, // Longer lines for better readability
				useTabs: false, // Use spaces for Markdown
				tabWidth: 2, // 2 spaces per indentation
			},
		},
		{
			// PHP files formatting options
			files: ['*.php'],
			options: {
				parser: 'php', // Use PHP parser
				phpVersion: '7.4', // Target PHP 7.4+ syntax
			},
		},
	],
};
