var gulp = require('gulp');
var sass = require('gulp-sass');
var replace = require('gulp-replace');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');

gulp.task('compilesass', function() {
	// root SASS file (contains all your includes)
	return gulp.src('./theme/timberwolf/styles/timberwolf.scss')
		// compile SASS to CSS
		.pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
		// add vendor prefixes
		.pipe(autoprefixer())
		// change the file name to be a style.css
		.pipe(concat('style.css'))
		// remove the extra set of quotations
		.pipe(replace('"{{', '{{'))
		.pipe(replace('}}"', '}}'))
		// save the file to the theme directory
		.pipe(gulp.dest('./theme/timberwolf/'));
});

gulp.task('default', function() {
	// watch all SASS (.scss) files
	gulp.watch(['./theme/timberwolf/styles/**/*.scss'], ['compilesass']);
});
