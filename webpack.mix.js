let mix = require('laravel-mix')

mix.setPublicPath('dist');

mix.css('assets/css/app.css', 'css/app.css');
mix.js('assets/js/app.js', 'js/app.js');