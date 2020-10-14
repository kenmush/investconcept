const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'public/js')
    .browserSync('localhost:8000')
    .sass('resources/sass/app.scss', 'public/css');
