const mix = require('laravel-mix');

require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
    .browserSync('localhost:8000')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/front.scss', 'public/css')
    .version()
    .purgeCss();
