let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css').version();
 if (mix.inProduction()) {
   mix.version();
 }

mix.js('resources/assets/js/portfolio_app.js', 'public/js/portfolio_app.js').version();
if (mix.inProduction()) {
	mix.version();
}
