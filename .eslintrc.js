module.exports = {
	extends: [
		'@wordpress/eslint-config',
		'@wordpress/eslint-config/recommended',
		'plugin:prettier/recommended'
	],
	plugins: [
		'@typescript-eslint',
		'prettier'
	],
	env: {
		browser: true,
		node: true,
		es6: true,
	},
	parser: '@typescript-eslint/parser',
	parserOptions: {
		ecmaVersion: 2020,
		sourceType: 'module',
		ecmaFeatures: {
			jsx: true,
		},
	},
	rules: {
		// WordPress specific rules
		'@wordpress/no-unsafe-wp-apis': 'warn',
		'@wordpress/dependency-group': 'error',
		'@wordpress/react-no-unsafe-timeout': 'error',

		// Prettier integration
		'prettier/prettier': 'error',

		// General JavaScript rules
		'no-console': 'warn',
		'no-unused-vars': 'off', // Use TypeScript version instead
		'@typescript-eslint/no-unused-vars': 'error',
		'prefer-const': 'error',
		'no-var': 'error',
	},
	overrides: [
		{
			files: ['**/*.ts', '**/*.tsx'],
			extends: [
				'@wordpress/eslint-config',
				'plugin:@typescript-eslint/recommended',
				'plugin:prettier/recommended'
			],
			rules: {
				'@typescript-eslint/no-explicit-any': 'warn',
				'@typescript-eslint/explicit-function-return-type': 'off',
				'@typescript-eslint/explicit-module-boundary-types': 'off',
			},
		},
		{
			files: ['**/*.test.js', '**/*.test.ts', '**/tests/**/*.js', '**/tests/**/*.ts'],
			env: {
				jest: true,
			},
			rules: {
				'no-console': 'off',
				'@typescript-eslint/no-explicit-any': 'off',
			},
		},
	],
};