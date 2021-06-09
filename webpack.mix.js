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

mix.js('resources/asset/js/app.js', 'public/js')
    .js('resources/asset/js/bootstrap.js', 'public/js')
    .js('resources/asset/js/ck.js', 'public/js')
    .postCss('resources/asset/css/login.css', 'public/css')
    .postCss('resources/asset/css/profile.css', 'public/css')
    .postCss('resources/asset/css/layout.css', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')
    .version();
