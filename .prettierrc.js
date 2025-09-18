module.exports = {
	useTabs: true,
	tabWidth: 4,
	printWidth: 80,
	singleQuote: true,
	trailingComma: 'es5',
	bracketSpacing: true,
	jsxBracketSameLine: false,
	semi: true,
	arrowParens: 'always',
	endOfLine: 'lf',
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
	],
};