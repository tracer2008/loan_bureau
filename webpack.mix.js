const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')

    .sass('resources/sass/desktop.scss', 'public/css').options({ processCssUrls: false })

    .copyDirectory('resources/fonts/', 'public/fonts')
    .copyDirectory('resources/images/', 'public/images')

if( !mix.inProduction() ) {
    mix.webpackConfig({
        devtool: 'source-map'
    }).sourceMaps();

    mix.disableNotifications();
}

if(mix.inProduction() ) {
    mix.minify('public/js/app.js');
    mix.version();
}
