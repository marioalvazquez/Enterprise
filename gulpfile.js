'use strict';

const gulp = require('gulp');
const webserver = require('gulp-webserver');
const sass = require('gulp-sass');

gulp.task('webserver', () => {
  gulp.src('./')
    .pipe(webserver({
      host: "localhost",
      port: 8050,
      livereload: true,
      open: true
    }));
});
gulp.task('sass', () => {
  return gulp.src('src/sass/*.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(gulp.dest('dist/css'));
});

gulp.task('watch', () => {
  gulp.watch('src/sass/*.scss', ['sass']);
});

gulp.task('default', ['webserver', 'watch']);
