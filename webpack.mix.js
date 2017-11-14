let mix = require('laravel-mix');

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

mix.scripts([
    'public/js/plugins/html5shiv.js',
    'public/js/plugins/respond.js',
    'public/js/jquery.js',
    'public/js/bootstrap.js',
    'public/js/adminlte.js',
    'public/js/nprogress.js',
    'public/js/url.js',
    'public/js/toast.js',
    'public/js/modal.js',
    'public/js/iconpicker.js',
    'public/js/pjax.js',
    'public/js/script.js',
], 'public/js/app.js');

mix.sass('resources/assets/sass/app.scss', 'public/css');
