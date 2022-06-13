let mix = require('laravel-mix');
mix.sass('resource/sass/app.sass', 'public/css', {
  sassOptions: {
    outputStyle: 'compressed'
  }
});

mix.browserSync('http://localhost:8888');