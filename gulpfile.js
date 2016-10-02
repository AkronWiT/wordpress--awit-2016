'use strict';

var gulp       = require('gulp'),
    sass       = require('gulp-sass'),
    livereload = require('gulp-livereload');

gulp.task('sass', function () {
  return gulp.src('sass/**/*.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest(''))
    .pipe(livereload());
});

gulp.task('sass:watch', function () {
  livereload.listen();
  gulp.watch('sass/**/*.scss', ['sass']);
});
