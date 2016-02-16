var gulp = require('gulp'),
	sass = require('gulp-sass'),
	coffee = require('gulp-coffee'),
	uglifycss = require('gulp-uglifycss'),
	livereload = require('gulp-livereload');


var css_path = './public/css',
	js_path = './public/js';

gulp.task('sass', function () {

	return gulp
		.src('./sass/*.scss')		
		.pipe(sass())
		.pipe(gulp.dest(css_path))

});

gulp.task('ugly', function () {

	gulp.src(css_path)
		.pipe(uglifycss({
	      "max-line-len": 1000
	    }))
	    .pipe(gulp.dest(css_path))
});


gulp.task('coffee', function ()
{

	gulp.src('./coffee/*.coffee')
		.pipe(coffee({bare: true}))
		.pipe(gulp.dest(js_path));
})