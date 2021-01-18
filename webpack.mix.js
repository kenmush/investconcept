const mix = require('laravel-mix');

require('laravel-mix-purgecss');

mix.js('resources/js/app.js', 'public/js')
    .extract([
        'popper.js', 'jquery', 'bootstrap', 'vue', 'axios'
    ])
    .browserSync('localhost:8080')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/front.scss', 'public/css')
    .options({
        processCssUrls: false
    })
    .version()
    .purgeCss();
