const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/user/app.css', 'public/css', [])
    .postCss('resources/css/reset.css', 'public/css', [])
    .postCss('resources/css/user/login.css', 'public/css', [])
    .postCss('resources/css/user/card.css', 'public/css', [])
    .postCss('resources/css/admin/table.css', 'public/css', [])
    .postCss('resources/css/admin/add.css', 'public/css', [])
    .postCss('resources/css/user/nft.css', 'public/css', []);
