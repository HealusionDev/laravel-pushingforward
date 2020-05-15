const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copyDirectory('resources/img', 'public/img');

mix.js('resources/js/app.js', 'public/js')
	.js('resources/js/summernote_create.js','public/js')
	.js('resources/js/toast.js','public/js')
	.js('resources/js/searchbar.js','public/js')
		.extract(['bootstrap','jquery','popper.js'])
   			.sass('resources/sass/app.scss', 'public/css');
