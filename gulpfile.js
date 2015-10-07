var gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    concat = require('gulp-concat'),
    minifycss = require('gulp-minify-css'),
    rename = require('gulp-rename'),
    rev = require('gulp-rev'),
    clean = require('gulp-clean'),
    path = require('path'),
    browserify = require('browserify'),
    transform = require('vinyl-transform'),
    uglify = require('gulp-uglify'),

    publicPath = './public/'

    stylesPath = publicPath + 'app/styles/',
    scriptsPath = publicPath + 'app/scripts/',


/* Compile Our Sass */
gulp.task('css', function() {
    return gulp.src(stylesPath + 'main.scss', { base: path.join(process.cwd(), 'public/app') } )
        .pipe(sass({
          errLogToConsole: true
        }))
        // .pipe(rev())
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest(publicPath))
        // .pipe(rev.manifest())
        .pipe(gulp.dest(publicPath))
});

gulp.task('clean', function() {
    return gulp.src(publicPath + 'styles/', {read: false})
        .pipe(clean());
});

gulp.task('js', function() {
    var browserified = transform(function(filename) {
        var b = browserify({entries: filename, debug: true});
        return b.bundle();
    });

    gulp.src(scriptsPath + 'app.js')
        .pipe(browserified)
        .pipe(uglify())
        .pipe(gulp.dest(publicPath + 'scripts'));

    gulp.src([scriptsPath + 'sw.js', scriptsPath + 'serviceworker-cache-polyfill.js'])
        .pipe(gulp.dest(publicPath));
});

/* Watch Files For Changes */
gulp.task('watch', function() {
  // Watch our scripts
  gulp.watch(stylesPath + '*.scss', ['css']);
});

gulp.task('build', ['css', 'js'], function() {});