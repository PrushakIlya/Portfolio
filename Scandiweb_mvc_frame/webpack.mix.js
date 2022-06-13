const mix = require('laravel-mix');

mix.sass('resources/sass/app.sass', 'public/css', {
    sassOptions: {
        outputStyle: 'compressed'
    }
})

mix.js('resources/js/index.js', 'public/js').react();

mix.browserSync('http://localhost:8888')
