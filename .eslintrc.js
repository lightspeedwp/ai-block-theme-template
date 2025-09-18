module.exports = {
	extends: ['@wordpress/eslint-config'],
	env: {
		browser: true,
		node: true,
		es6: true,
	},
	parserOptions: {
		ecmaVersion: 2020,
		sourceType: 'module',
	},
	rules: {
		// WordPress specific rules
		'@wordpress/no-unsafe-wp-apis': 'warn',
		'@wordpress/dependency-group': 'error',
		'@wordpress/react-no-unsafe-timeout': 'error',

		// General JavaScript rules
		'no-console': 'warn',
		'no-unused-vars': 'error',
		'prefer-const': 'error',
		'no-var': 'error',
	},
	overrides: [
		{
			files: ['**/*.test.js', '**/tests/**/*.js'],
			env: {
				jest: true,
			},
			rules: {
				'no-console': 'off',
			},
		},
	],
};