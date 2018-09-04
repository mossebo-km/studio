let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */


// WP-THEMES
//publicDir = '../../devsrv/site.dev/public/wp-content/themes/rembaza';

// Test
publicDir = 'dist/theme';

//MAC CONFIG
mix.js('src/assets/js/app.js', publicDir + '/assets/js')
    .sass('src/assets/scss/app.scss', publicDir + '/assets/css')
    .options({
        processCssUrls: false,
    })
    .extract([
        'babel-polyfill',
        'jquery',
        'vue',
        'lodash'
    ])
    .version();

if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'source-map'
    })
        .sourceMaps()
}

mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});

mix.copyDirectory('src/assets/fonts', publicDir + '/assets/fonts');
mix.copyDirectory('src/assets/images', publicDir + '/assets/images');
mix.copyDirectory('src/template', publicDir);

mix.browserSync({
    proxy: {
        target: "https://example.test"
    },
    https: true,
    open: false
});


mix.setResourceRoot(path.normalize(publicDir));
mix.setPublicPath(path.normalize(publicDir));
