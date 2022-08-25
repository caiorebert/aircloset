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

mix.disableNotifications();

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.postCss('resources/css/cadastro.css', 'public/css', [
        //
    ]);

mix.postCss('resources/css/head.css', 'public/css', [
    //
]);

mix.postCss('resources/css/franqueado.css', 'public/css', [
    //
]);

mix.postCss('resources/css/ecommerce.css', 'public/css', [
    //
]);

mix.postCss('resources/css/produto.css', 'public/css', [
    //
]);