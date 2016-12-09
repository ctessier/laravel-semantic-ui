const elixir = require('laravel-elixir');
const gulp = require('gulp');

elixir(function(mix) {
    mix
        .copy('bower_components/semantic/dist/semantic.js', 'public/assets/js/semantic.js')
        .copy('bower_components/semantic/dist/semantic.css', 'public/assets/css/semantic.css')
        .copy('bower_components/jquery/dist/jquery.js', 'public/assets/js/jquery.js')
        .sass([
            'app.scss',
        ], 'public/assets/css')
        .webpack('app.js')
        .version([
            'public/assets/css/app.css',
            'public/js/app.js',
            'public/assets/js/jquery.js',
            'public/assets/js/semantic.js',
            'public/assets/css/semantic.css',
        ])
    ;

});

gulp.task('fonts', function() {
    gulp.src(['bower_components/semantic/dist/themes/default/assets/fonts/**/*'])
        .pipe(gulp.dest('public/build/assets/css/themes/default/assets/fonts'));
});
