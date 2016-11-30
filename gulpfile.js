const elixir = require('laravel-elixir');
const imagemin = require('gulp-imagemin');

//require('laravel-elixir-vue');

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

elixir(function (mix) {
    mix.sass('app.scss')
        .webpack('app.js')
        .styles(['../js/plugins/pace/pace-theme-flash.css', 'app.css', '../js/plugins/font-awesome/css/font-awesome.css', 'pages/css/pages.css', 'pages/css/pages-icons.css', 'slick-modal-min.css'])
        .scripts(['plugins/jquery-appear/jquery.appear.js', 'plugins/velocity/velocity.min.js', 'plugins/velocity/velocity.ui.js', '../pages/js/pages.frontend.js']);
});

gulp.task('images', function() {
    var wiredep = require('wiredep').stream;
    return gulp.src('public/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('public/images/dist'));
});