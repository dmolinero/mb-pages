var gulp = require('gulp');
var fs = require('fs')
var browserify = require('browserify')
var vueify = require('vueify')
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');
var concat = require('gulp-concat')
var sourcemaps = require('gulp-sourcemaps')
var babel = require('gulp-babel')
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

// Compile vue components and send output to JS folder folder
gulp.task('vue', function(){
	return browserify('./source/vue/main.js')
	  .transform(vueify)
	  .bundle()
	  .pipe(fs.createWriteStream('./source/js/app.js'))
});

// Concat, minify, and convert ES6
gulp.task('js', ['vue'], function() {

	if ( process.env.NODE_ENV == 'production' ) {
		return gulp.src('./source/js/**/*js')
			.pipe(babel({
	            presets: ['es2015']
	        }))
	        .pipe(concat('app.js'))
	        .pipe(uglify())
			.pipe(gulp.dest('./dist'))
	}

	if ( process.env.NODE_ENV == 'development' ) {
		return gulp.src('./source/js/**/*js')
			.pipe(sourcemaps.init())
			.pipe(babel({
	            presets: ['es2015']
	        }))
	        .pipe(concat('app.js'))
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

  return gulp.src('./source/scss/*.scss')
  	.pipe(concat('styles.css'))
    .pipe(sass())
    .pipe(postcss(plugins))
    .pipe(gulp.dest('./dist'));

}); 

// Watch and compile automatically
gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('./source/scss/*.scss', ['sass']);
  gulp.watch('./source/js/**/*.vue', ['js']);
  gulp.watch('./source/js/**/*.js', ['js']);
});


gulp.task('build-dev', [ 'node-dev', 'js', 'sass' ]);
gulp.task('build-prod', [ 'node-prod', 'js', 'sass', 'delmaps' ]);