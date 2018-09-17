module.exports = {
    parser: 'sugarss',
    plugins: {
        'postcss-import': {},
        'postcss-cssnext': {},
        'postcss-custom-media': {},
        'postcss-short-font-size': {},
        'postcss-short-position': {},
        'cssnano': {}
    }
}

module.exports = ({ file, options, env }) => ({
    parser: file.extname === '.sss' ? 'sugarss' : false,
    plugins: {
        'postcss-import': { root: file.dirname },
        'postcss-cssnext': options.cssnext ? options.cssnext : false,
        'autoprefixer': env === 'production' ? options.autoprefixer : false,
        'cssnano': env === 'production' ? options.cssnano : false
    }
})
