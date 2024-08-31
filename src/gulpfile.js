let fileswatch = 'html,htm,txt,json,md,woff2,php' // List of files extensions for watching & hard reload

const { src, dest, parallel, series, watch } = require('gulp')
const browserSync  = require('browser-sync').create()
const webpack      = require('webpack-stream')
const babel        = require('gulp-babel')
const uglify       = require('gulp-uglify')
const sass         = require('gulp-sass')
const concat       = require('gulp-concat')
const autoprefixer = require('gulp-autoprefixer')
const rename       = require('gulp-rename')

function browsersync() {
	browserSync.init({
		server: { baseDir: 'app/' },
		notify: false,
		online: true
	})
}

function scripts() {
	return src([
		'app/js/scripts.js', // should be at the end
	])
		.pipe(webpack({ mode: 'production' }))
		.pipe(babel({ presets: ['@babel/env'] }))
		.pipe(uglify()) // Final minify JavaScript
		.pipe(concat('scripts.min.js'))
		.pipe(dest('app/js'))
		.pipe(browserSync.stream())

}


function styles() {
	return src('app/sass/**/*.sass')
		.pipe(sass({ outputStyle: 'compressed' }))
		.pipe(rename({suffix: '.min', prefix : ''}))
		.pipe(autoprefixer({ overrideBrowserslist: ['last 10 versions'], grid: true }))
		.pipe(dest('app/css'))
		.pipe(browserSync.stream())
}
// function styles() {
// 	return src('app/sass/home.sass')
// 		.pipe(sass({ outputStyle: 'compressed' }))
// 		.pipe(concat('home.min.css'))
// 		.pipe(autoprefixer({ overrideBrowserslist: ['last 10 versions'], grid: true }))
// 		.pipe(dest('app/css'))
// 		.pipe(browserSync.stream())
// }




function startwatch() {
	watch('app/sass/**/*', { usePolling: true }, styles)
	watch(['app/js/**/*.js', '!app/js/**/*.min.js'], { usePolling: true }, scripts)
	// watch('../**/*.{' + fileswatch + '}', { usePolling: true }).on('change', browserSync.reload)
	watch('app/**/*.{' + fileswatch + '}', { usePolling: true }).on('change', browserSync.reload)

}


exports.scripts  = scripts
exports.styles   = styles
exports.default  = series(scripts, styles, parallel(browsersync, startwatch))
