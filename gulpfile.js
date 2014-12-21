var gulp = require('gulp'),
    sass = require('gulp-sass'),
    watch = require('gulp-watch'),
    jshint = require('gulp-jshint'),
    browserify = require('gulp-browserify'),
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
gulp.task('sass', function() {
  return gulp.src(stylesPath + '*.scss', { base: path.join(process.cwd(), 'public/app') } )
    .pipe(sass())
    .pipe(rev())
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest(publicPath))
    .pipe(rev.manifest())
    .pipe(gulp.dest(publicPath));
});

// JSHint task
gulp.task('lint', function() {
  gulp.src(scriptsPath + '*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});

// Browserify task
gulp.task('browserify', function() {
  return gulp.src(scriptsPath + 'main.js', { base: path.join(process.cwd(), 'public/app') } )
    .pipe(browserify({
      insertGlobals: true,
      debug: true
    }))
    // Bundle to a single file
    .pipe(concat('scripts/app.js'))
    .pipe(rev())
    .pipe(gulp.dest(publicPath))
    .pipe(rev.manifest({base: 'public', appendExisting: true }))
    .pipe(gulp.dest(publicPath))
});

gulp.task('clean', function() {
  return gulp.src([publicPath + 'styles/', publicPath + 'scripts/'], {read: false})
        .pipe(clean());
})

/* Watch Files For Changes */
gulp.task('watch', ['clean', 'lint'], function() {
  // Watch our scripts
  gulp.watch([stylesPath + '*.scss', scriptsPath + '*.js'],[
    'sass',
    'browserify'
  ]);
});

gulp.task('build', ['sass', 'browserify'], function() {});