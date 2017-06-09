var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var cache = require('gulp-cached');
var dependents = require('gulp-dependents');
var size = require('gulp-size');

var sassPath = './css/sass/**/*.scss';
var cssPath = './css/';

var sassOptions = {
    includePaths: [
        require('node-bourbon').includePaths,
        'node_modules/susy/sass',
        'node_modules/breakpoint-sass/stylesheets/'
    ],
    errLogToConsole: true,
    outputStyle: 'compact'
};

var autoprefixerOptions = {
    browsers: ['>1%', 'last 5 version']
};

gulp.task('sass', function () {
    const s = size({
        showFiles: true
    });

    return gulp
        .src(sassPath)
        .pipe(cache('sassFilesCache'))
        .pipe(dependents())
        .pipe(sourcemaps.init())
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(s)
        .pipe(sourcemaps.write('./css_sourcemaps'))
        .pipe(gulp.dest(cssPath));
});

gulp.task('default',function() {
    gulp.watch(sassPath, ['sass']);
});