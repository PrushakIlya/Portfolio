let mix = require('laravel-mix');
mix.js('resource/js/app.js', 'public/js')
  .sass('resource/sass/app.sass', 'public/css');

mix.browserSync('http://localhost:8888');