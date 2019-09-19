'use strict';

var gulp = require('gulp');
var bsync = require('browser-sync');
var autoprefixer = require('autoprefixer');
var watch = require('gulp-watch');
var cssnano = require('cssnano');
var $ = require('gulp-load-plugins')();

/*
var webpack = require('webpack-stream');

gulp.task('js', function() {
  return gulp.src('./src/assets/js/main.js')
    .pipe(webpack(require('./webpack.config.js')))
    .pipe(gulp.dest('./../assets/js/'))
    .pipe(bsync.reload({stream: true}));
});
*/
gulp.task('styles', function () {
  var sassOptions = {
    includePaths: [
    ]
   //,outputStyle: 'compressed'
  };
  var plugins = [
    autoprefixer(),
    cssnano({zindex: false})
  ];
  return gulp.src('./sass/main.scss')
    .pipe($.sass(sassOptions).on('error', $.sass.logError))
    .pipe($.postcss(plugins))
    .pipe(gulp.dest('./../assets/styles/'))
    .pipe(bsync.reload({stream: true}));
});


gulp.task('images', function() {
  return gulp.src('./images/**/*')
    .pipe($.imagemin({
      progressive: true,
      interlaced: true,
      optimizationLevel: 4
    }))
    .pipe(gulp.dest('./../assets/images/'));
});

gulp.task('browser-sync', function() {
  bsync({
    proxy: "http://infinum.local",
    ghostMode: true,
    notify: false
  });
});


gulp.task('watch', ['build'], function() {
  gulp.watch(['images', 'images/**/*'], ['images']);
  gulp.watch('sass/*', ['styles']);
  //gulp.watch('src/assets/js/*', ['js']);
  //gulp.watch('*.html', ['views']);
  gulp.start('browser-sync');
});


gulp.task('build', ['styles', 'images']);
gulp.task('default', ['build']);
