const mix = require('laravel-mix');

mix.postCss('resources/css/front/app.css', 'public/assets/css', [
    require('postcss-import'),
    require('tailwindcss'),
]);

mix.js('resources/js/front/app.js', 'public/assets/js');

if (mix.inProduction()) {
    mix.version();
}