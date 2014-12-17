var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var minifycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var gzip = require('gulp-gzip');
var livereload = require('gulp-livereload');
var rev = require('gulp-rev');

var gzip_options = {
    threshold: '1kb',
    gzipOptions: {
        level: 9
    }
};

/* Compile Our Sass */
gulp.task('sass', function() {
    return gulp.src('public/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('public/styles'))
        .pipe(rev())
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(rev.manifest())
        .pipe(gulp.dest('public/styles'))
        .pipe(gzip(gzip_options))
        .pipe(rev.manifest())
        .pipe(gulp.dest('public/styles'))
        .pipe(livereload());
});

/* Watch Files For Changes */
gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('public/scss/*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);