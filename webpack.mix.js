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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'public/style.css'
], 'public/css/style.min.css')

mix.styles([
    'public/css/responsive.css'
], 'public/css/responsive.min.css')

mix.styles([
    'public/blueapron.css'
], 'public/css/blueapron.min.css')

if (mix.inProduction()) {
    mix.version();
}
