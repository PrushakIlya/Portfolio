let mix = require('laravel-mix');

mix.sass('src/sass/App.sass', 'css' , {
  sassOptions: {
    outputStyle: 'compressed'
}
}).setPublicPath('public');;

mix.js('src/index.js', 'js').react().setPublicPath('public');;

mix.browserSync('http://localhost:8888')