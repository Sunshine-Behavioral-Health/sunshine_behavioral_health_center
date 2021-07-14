const gulp = require('gulp');
const plumber = require('gulp-plumber');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const groupmq = require('gulp-group-css-media-queries');
const bs = require('browser-sync');
const cleanCSS = require('gulp-clean-css');
const rename = require("gulp-rename");
const concat = require('gulp-concat');
const minify = require('gulp-minify');

const SASS_SOURCES = [
  './*.scss', // This picks up our style.scss file at the root of the theme
  'css/**/*.scss', // All other Sass files in the /css directory,

];

/**
 * Compile Sass files
 */gulp.task('css', () =>
  gulp.src(SASS_SOURCES, { base: './' })
    .pipe(plumber()) // Prevent termination on error
    .pipe(sass({
      indentType: 'tab',
      indentWidth: 1,
      outputStyle: 'compressed',
    })).on('error', sass.logError)
    .pipe(postcss([
      autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false,
      })
    ]))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(rename('styleBuild.min.css'))
    .pipe(gulp.dest('../css/')) // Output compiled files in the same dir as Sass sources
    .pipe(bs.stream())); // Stream to browserSync


// Minifies JS into build file
gulp.task('js', function () {
  return gulp.src(['js/*.js'])
    .pipe(concat('main.js'))
    .pipe(minify())
    .pipe(gulp.dest('../js/'));
});

