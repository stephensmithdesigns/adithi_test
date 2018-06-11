var gulp       = require('gulp');
var less       = require('gulp-less');
var watch      = require('gulp-watch');
var minifyCSS  = require('gulp-minify-css');
var rename     = require('gulp-rename');
var header     = require('gulp-header');
var pkg        = require('./package-lock.json');

gulp.task('less', function() {
  gulp.src('pre-less/*.less')
  .pipe(less())
  .pipe(gulp.dest('less'))
})

/* Task to watch less changes */
gulp.task('watch-less', function() {
  gulp.watch('pre-less/*.less' , ['less']);
});

/* Task to minify css */
gulp.task('minify-css', function() {
  gulp.src('less/*.css')
    .pipe(minifyCSS())
    // .pipe(header(banner, {pkg: pkg}))
    .pipe(rename('main.min.css'))
    .pipe(gulp.dest( 'less' ));
});

/* Task when running `gulp` from terminal */
gulp.task('default', ['less', 'watch-less']);

/* Task when running `gulp build` from terminal */
gulp.task('build', ['minify-css']);
