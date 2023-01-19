let mix = require('laravel-mix')
let path = require("path");
require('./nova.mix')

mix.setPublicPath('dist')
    .js('resources/js/field.js', 'js')
    .vue({version: 3 })
    .nova('yieldstudio/nova-phone-field');

    mix.alias({
        '@': path.join(__dirname, '../../vendor/laravel/nova/resources/js/'),
        'vendor@': path.join(__dirname, '../../vendor/'),
      });