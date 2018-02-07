src =
	scss: 	'src/assets/scss/'
	js:		'src/assets/js/'

dist =
	css: 	'public/assets/css/'
	js: 	'public/assets/js/'

gulp 			= require('gulp')
$ 				= require('gulp-load-plugins')()
browserify      = require('gulp-browserify')

browser_support = ["ie >= 9", "ie_mob >= 10", "ff >= 30", "chrome >= 34", "safari >= 7", "opera >= 23", "ios >= 7", "android >= 4.4", "bb >= 10"]

gulp.task 'sass', ->
	gulp.src "#{src.scss}*.scss"
		.pipe $.sourcemaps.init()
		.pipe $.sass
			includePaths: 'susy/sass'
			onError: console.error.bind(console, 'SASS Error:')
		.pipe $.autoprefixer
			browsers: browser_support
		.pipe $.sourcemaps.write('.')
		.pipe gulp.dest "#{dist.css}"
		.pipe $.size()

gulp.task 'mincss', ->
    gulp.src "#{ dist.css }app.css"
        .pipe $.cssmin()
        .pipe $.rename
        	suffix: '.min'
        .pipe gulp.dest "#{dist.css}"
        .pipe $.size()

gulp.task 'js', ->
	gulp.src "#{ src.js }*.js"
	    .pipe $.concat "app.js"
		.pipe $.sourcemaps.write('.')
	    .pipe gulp.dest "#{dist.js}"
		.pipe $.size()

# watch
gulp.task 'watch',['sass', 'mincss', 'js'], ->
	gulp.watch "#{src.scss}**/*.scss", ['sass']
	gulp.watch "#{src.js}**.js", ['js']

gulp.task 'default', ['js', 'sass', 'mincss', 'watch']
