/**
 * WordPress Stylelint configuration
 * Extends the WordPress stylelint config for CSS compliance
 */
module.exports = {
	extends: ['@wordpress/stylelint-config'],
	rules: {
		// Allow custom properties
		'custom-property-empty-line-before': null,
		'custom-property-pattern': null,

		// WordPress specific overrides
		'declaration-property-unit-allowed-list': {
			'line-height': ['px', 'em', 'rem', '%'],
			'/^animation/': ['s', 'ms'],
		},

		// Allow vendor prefixes for better browser support
		'property-no-vendor-prefix': null,
		'value-no-vendor-prefix': null,

		// Disable some overly strict rules
		'selector-class-pattern': null,
		'selector-id-pattern': null,
		'font-family-no-missing-generic-family-keyword': null,

		// Allow deep nesting for WordPress themes
		'max-nesting-depth': [
			4,
			{
				ignore: ['blockless-at-rules', 'pseudo-classes'],
			},
		],

		// WordPress CSS Coding Standards compliance
		'rule-empty-line-before': [
			'always-multi-line',
			{
				except: ['first-nested'],
				ignore: ['after-comment'],
			},
		],
		'at-rule-empty-line-before': [
			'always',
			{
				except: ['blockless-after-same-name-blockless', 'first-nested'],
				ignore: ['after-comment'],
			},
		],
	},
	ignoreFiles: [
		'node_modules/**/*',
		'vendor/**/*',
		'assets/css/*.css',
		'dist/**/*',
		'build/**/*',
		'languages/**/*',
	],
};
