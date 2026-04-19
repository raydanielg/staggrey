const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

// Disable webpackbar progress plugin to avoid webpack 5 schema validation error
mix.override(webpackConfig => {
    webpackConfig.plugins = webpackConfig.plugins.filter(
        plugin => plugin.constructor.name !== 'WebpackBarPlugin'
    );
});
