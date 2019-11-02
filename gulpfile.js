'use strict';

const gulp = require('gulp');
const less = require('gulp-less');
const concat = require('gulp-concat');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const minify = require('gulp-csso');
const rename = require('gulp-rename');
const terser = require('gulp-terser');

gulp.task('less', () => {
  return gulp.src('Fire/less/**/*.less')
    .pipe(concat('style.less'))
    .pipe(less())
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(gulp.dest('Fire/css'))
    .pipe(minify())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('Fire/css')); 
});

gulp.task('min-js', () => {
  return gulp.src(['Fire/js/**/*.js', '!/Fire/js/**/*.min.js'])
    .pipe(terser({
      mangle: false,
      ecma: 5
    }))
    .pipe(rename( (path) => {
      path.extname = '.min.js';
    }))
    .pipe(gulp.dest('Fire/js'));
});

gulp.task('watch', () => {
  gulp.watch('Fire/less/**/*.less', gulp.series('less'));
});