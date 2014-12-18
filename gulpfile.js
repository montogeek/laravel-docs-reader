var gulp = require('gulp'),
  sass = require('gulp-sass'),
  watch = require('gulp-watch'),
  minifycss = require('gulp-minify-css'),
  rename = require('gulp-rename'),
  livereload = require('gulp-livereload'),
  rev = require('gulp-rev'),
  clean = require('gulp-clean'),
  path = require('path'),

  stylesPath = 'public/app/styles/',
  scriptsPath = 'public/app/scripts/',

  publicPath = 'public/'
  publicStylesPath = publicPath + 'styles/'

/* Compile Our Sass */
gulp.task('sass', function() {
    return gulp.src(stylesPath + '*.scss', {base: path.join(process.cwd(), 'public/app')})
      // .pipe(rename({extname: ''}))
      .pipe(sass())
      .pipe(rev())
      // .pipe(rename({extname: '.css'}))
      .pipe(rename({suffix: '.min'}))
      .pipe(minifycss())
      .pipe(gulp.dest(publicPath))
      .pipe(rev.manifest())
      .pipe(gulp.dest(publicPath))
      .pipe(livereload())
});

// gulp.task('clean', function () {
//     return gulp.src(publicStylesPath, {read: false})
//         .pipe(clean());
// });

/* Watch Files For Changes */
gulp.task('watch', function() {
    livereload.listen();
    gulp.watch(stylesPath + '*.scss', ['sass']);
});

gulp.task('default', ['sass', 'watch']);