var gulp = require('gulp');
var fs = require('fs');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var babel = require('gulp-babel');
var uglify = require('gulp-uglify');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');
var del = require('del');


// Set Node environment to dev
gulp.task('node-dev', function() {
    return process.env.NODE_ENV = 'development';
});

// Set Node environment to production
gulp.task('node-prod', function() {
    return process.env.NODE_ENV = 'production';
});

// Concat, minify, and convert ES6
gulp.task('js', function() {

	if ( process.env.NODE_ENV == 'production' ) {
		return gulp.src('./src/js/**/*.js')
			.pipe(babel({
	            presets: ['es2015']
	        }))
	        .pipe(concat('scripts.js'))
	        .pipe(uglify())
			.pipe(gulp.dest('./dist'))
	}

	if ( process.env.NODE_ENV == 'development' ) {
		return gulp.src('./src/js/**/*js')
			.pipe(sourcemaps.init())
	        .pipe(concat('scripts.js'))
	        .pipe(sourcemaps.write('.'))
			.pipe(gulp.dest('./dist'))
	}
});

// Delete source maps
gulp.task('delmaps', function () {
  return del([
  	'./dist/*map'
  ]);
});

// Compile and minify scss
gulp.task('sass', function () {

	var plugins = [
        autoprefixer({browsers: ['last 5 version']}),
    ];

   if ( process.env.NODE_ENV == 'production' ) {
        var plugins = [
            autoprefixer({browsers: ['last 5 version']}),
            cssnano()
        ];
    }

  return gulp.src('./src/scss/**/*.scss')
  	.pipe(concat('styles.css'))
    .pipe(sass())
    .pipe(postcss(plugins))
    .pipe(gulp.dest('./dist'));

});

// Main tasks to use
gulp.task('build-dev', [ 'node-dev', 'js', 'sass' ]);
gulp.task('build-prod', [ 'node-prod', 'js', 'sass', 'delmaps' ]);

// Watch and compile automatically
gulp.task('watch', function() {
   gulp.watch('./src/scss/*.scss', ['sass']);
   gulp.watch('./src/scss/mb_default/*.scss', ['sass']);
   gulp.watch('./src/js/*.js', ['build-dev']);
});