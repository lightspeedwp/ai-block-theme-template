module.exports = {
	plugins: [
		require('autoprefixer')({
			grid: 'autoplace',
		}),
		require('cssnano')({
			preset: [
				'default',
				{
					discardComments: {
						removeAll: true,
					},
				},
			],
		}),
	],
};