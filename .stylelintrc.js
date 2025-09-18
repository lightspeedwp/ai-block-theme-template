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
	},
	ignoreFiles: [
		'node_modules/**/*',
		'vendor/**/*',
		'assets/css/*.css',
		'dist/**/*',
		'build/**/*',
	],
};