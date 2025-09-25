
/**
 * WordPress webpack configuration for AI Block Theme Template
 * Extends WordPress Scripts default configuration with theme-specific entries
 */
const RemoveEmptyScriptsPlugin = require( 'webpack-remove-empty-scripts' );         // Removes empty JS files from CSS-only entries
const DependencyExtractionWebpackPlugin = require( '@wordpress/dependency-extraction-webpack-plugin' );  // Extracts WordPress dependencies
const path = require( 'path' );                                                      // Node.js path utilities
const defaultConfig = require( '@wordpress/scripts/config/webpack.config' );        // WordPress Scripts default config

module.exports = {
	...defaultConfig,  // Inherit all WordPress Scripts defaults
	entry: {
		...defaultConfig.entry,  // Include any default entries
		// Theme-specific TypeScript/JavaScript entry points
		'theme': path.resolve( process.cwd(), 'src/js/theme.ts' ),           // Main theme JavaScript
		'accessibility': path.resolve( process.cwd(), 'src/js/accessibility.ts' ),  // Accessibility enhancements
		'style-engine': path.resolve( process.cwd(), 'src/js/style-engine.ts' ),    // Dynamic CSS generation
	},

	plugins: [
		...defaultConfig.plugins,  // Include all default WordPress Scripts plugins
		// Remove empty JavaScript files that are created from CSS-only entries
		new RemoveEmptyScriptsPlugin(),
		// Extract WordPress dependencies and create asset files for proper enqueueing
		new DependencyExtractionWebpackPlugin({
			injectPolyfill: true,  // Include necessary polyfills
			combineAssets: true,   // Combine asset information into fewer files
		}),
	],
};
