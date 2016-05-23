var gulp = require('gulp'),
    postcss = require('gulp-postcss'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('autoprefixer'),
    sass = require('gulp-sass'),
    notify = require('gulp-notify');

var paths = {
    sassSource: 'assets/scss/*.scss',
    cssDestination: './assets/css/',
};

gulp.task('styles', function() {
    return gulp.src(paths.sassSource)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([
            autoprefixer()
        ]))
        .pipe(sourcemaps.write('./'))
        .pipe(notify('Styles Processed!'))
        .pipe(gulp.dest(paths.cssDestination));
});

gulp.task('watch', function() {
  gulp.watch(paths.sassSource, ['styles']);
});

gulp.task('default', ['styles']);