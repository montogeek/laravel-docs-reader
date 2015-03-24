var gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    concat = require('gulp-concat'),
    minifycss = require('gulp-minify-css'),
    rename = require('gulp-rename'),
    rev = require('gulp-rev'),
    clean = require('gulp-clean'),
    path = require('path'),

    publicPath = 'public/'

    stylesPath = publicPath + 'app/styles/',
    scriptsPath = publicPath + 'app/scripts/',


/* Compile Our Sass */
gulp.task('css', function() {
    return gulp.src(stylesPath + 'main.scss', { base: path.join(process.cwd(), 'public/app') } )
        .pipe(sass({
          errLogToConsole: true
        }))
        .pipe(rev())
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest(publicPath))
        .pipe(rev.manifest())
        .pipe(gulp.dest(publicPath))
});

gulp.task('clean', function() {
    return gulp.src(publicPath + 'styles/', {read: false})
        .pipe(clean());
});

gulp.task('js', function() {
    return gulp.src(['node_modules/anchor-js/anchor.js', scriptsPath + 'app.js'])
        .pipe(concat('app.js'))
        .pipe(gulp.dest(publicPath + 'scripts'))
});

/* Watch Files For Changes */
gulp.task('watch', function() {
  // Watch our scripts
  gulp.watch(stylesPath + '*.scss', ['css']);
});

gulp.task('build', ['css', 'js'], function() {});