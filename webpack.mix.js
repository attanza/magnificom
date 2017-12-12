let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/manage.js', 'public/js/manage.js')
   .sass('resources/assets/sass/app.scss', 'public/css').version();
 if (mix.inProduction()) {
   mix.version();
 }
