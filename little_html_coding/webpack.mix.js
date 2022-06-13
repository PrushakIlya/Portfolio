const mix = require('laravel-mix');
mix.js('resource/js/app.js', 'js')
  .sass('resource/sass/app.sass', 'css',{
    sassOptions: {
      outputStyle: 'compressed'
    }
  })
  .setPublicPath('public');

mix.browserSync('http://localhost:8888');