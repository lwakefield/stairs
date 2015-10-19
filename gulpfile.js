var elixir = require('laravel-elixir');
require('laravel-elixir-spritesmith');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
    mix.spritesmith('resources/assets/imgs/avatars', {
        imgOutput: 'public/img',
        cssOutput: 'public/css'
    });
});
