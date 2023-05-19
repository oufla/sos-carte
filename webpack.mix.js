const mix = require('laravel-mix');


/*
|--------------------------------------------------------------------------
| Mix Asset Management
|--------------------------------------------------------------------------
|
| Mix provides a clean, fluent API for defining some Webpack build steps
| for your Laravel applications. By default, we are compiling the CSS
| file for the application as well as bundling up all the JS files.
|
*/

const glob = require('glob')

function mixAssetsDir(query, cb) {
    ; (glob.sync('resources/' + query) || []).forEach(f => {
        f = f.replace(/[\\\/]+/g, '/')
        cb(f, f.replace('resources', 'public'))
    })
}

mixAssetsDir('vendors/js/**/*.js', (src, dest) => mix.scripts(src, dest))
mixAssetsDir('js/pages/**/*.js', (src, dest) => mix.scripts(src, dest))

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/lib/bootstrap.bundle.min.js', 'public/js/lib')
    .js('resources/js/core/base.js', 'public/js/core')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
