/**
 * Front end build process for the Kalyber WordPress website.
 *
 * @package kalyber
 * @author James de la Bastide
 * @copyright 2020 Kalyber
 * @version v0.0.1
 * ________________________________________________________________________________
 *
 */

const config = require('./gulp.config');

const 
	gulp = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
	beep = require('beepbeep'),
	browsersync = require('browser-sync').create(),
	babel = require('gulp-babel'),
	concat = require('gulp-concat'),
	del = require("del"),
	gulpif = require('gulp-if'),
	imagemin = require('gulp-imagemin'),
	lineec = require('gulp-line-ending-corrector'),
	cleanCss = require('gulp-clean-css'),
	notify = require('gulp-notify'),
	plumber = require('gulp-plumber'),
	postCss = require('gulp-postcss'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	uglify = require('gulp-uglify'),
	webpack = require('webpack-stream'),
	yargs = require('yargs');

const isProduction = yargs.argv.prod;

const errorHandler = r => {
	notify.onError( '\n\n❌ >>> ERROR: <%= error.message %>\n' )( r );
	beep();
};

function clean() {
	const pathsToClean = [config.dest.folder, config.wp.assetsFolder];

	return (
		del(pathsToClean, { force: true })
	);
}

// function compileCustomJs() {
// 	return (
// 		gulp.src(config.src.bundleJsFile)
// 			.pipe(webpack({
// 				module: {
// 					rules: [{
// 						test: /\.js$/,
// 						use: {
// 							loader: 'babel-loader',
// 							options: {
// 								presets: []
// 							}
// 						}
// 					}]
// 				},
// 				mode: isProduction ? 'production' : 'development',
// 				devtool: isProduction ? 'source-map' : 'inline-source-map',
// 				output: {
// 					filename: config.js.customFileName + '.js'
// 				},
// 				externals: {
// 					jquery: 'jQuery'
// 				}
// 			}))
// 			.pipe(gulp.dest(config.dest.jsFolder))
// 			.pipe(gulp.dest(config.wp.jsFolder))
// 			.pipe(notify({ 
// 				message: '\n\n✅ >>> Custom JavaScript completed.\n', 
// 				onLast:true 
// 			}))
// 	);
// }

// function compileVendorJs() {
// 	return (
// 		gulp.src(config.src.bundleVendorJsFile)
// 			.pipe(webpack({
// 				module: {
// 					rules: [{
// 						test: /\.js$/,
// 						use: {
// 							loader: 'babel-loader',
// 							options: {
// 								presets: []
// 							}
// 						}
// 					}]
// 				},
// 				mode: 'production',
// 				devtool: false,
// 				output: {
// 					filename: config.js.vendorFileName + '.js'
// 				}
// 			}))
// 			.pipe(gulp.dest(config.dest.vendorJsFolder))
// 			.pipe(gulp.dest(config.wp.vendorJsFolder))
// 			.pipe(notify({ 
// 				message: '\n\n✅ >>> Vendor JavaScript completed.\n', 
// 				onLast:true 
// 			}))
// 	);
// }

function compileCustomJs() {
	return (
		gulp.src(config.src.jsGlob)
			//.pipe(gulpif(!isProduction, sourcemaps.init()))
			.pipe(concat(config.js.customFileName + '.js'))
			.pipe(babel({ presets: ["@babel/preset-env"] }))
			.pipe(uglify())
			//.pipe(gulpif(!isProduction, sourcemaps.write()))
			.pipe(gulp.dest(config.dest.jsFolder))
			.pipe(gulp.dest(config.wp.jsFolder))
			.pipe(notify({ 
				message: '\n\n✅ >>> Custom JavaScript completed.\n', 
				onLast:true 
			}))
	)
}

function compileExternalsJs() {
	return (
		gulp.src(config.src.externalsJsGlob)
			//.pipe(gulpif(!isProduction, sourcemaps.init()))
			.pipe(concat(config.js.externalsFileName + '.js'))
			.pipe(babel({ presets: ["@babel/preset-env"] }))
			.pipe(uglify())
			//.pipe(gulpif(!isProduction, sourcemaps.write()))
			.pipe(gulp.dest(config.dest.externalsJsFolder))
			.pipe(gulp.dest(config.wp.externalsJsFolder))
			.pipe(notify({ 
				message: '\n\n✅ >>> External JavaScript completed.\n', 
				onLast:true 
			}))
	)
}

function compileVendorJs() {
	return (
		gulp.src(config.src.vendorJsGlob)
			// .pipe(sourcemaps.init())
			.pipe(concat(config.js.vendorFileName + '.js'))
			.pipe(babel({ presets: ["@babel/preset-env"] }))
			.pipe(uglify())
			// .pipe(sourcemaps.write())
			.pipe(gulp.dest(config.dest.vendorJsFolder))
			.pipe(gulp.dest(config.wp.vendorJsFolder))
			.pipe(notify({ 
				message: '\n\n✅ >>> Vendor JavaScript completed.\n', 
				onLast:true 
			}))
	)
}

function css() {
	return (
		gulp
			.src(config.src.scssGlob)
			//.pipe(gulpif(!isProduction, sourcemaps.init()))
			.pipe(plumber(errorHandler))
			.pipe(sass({
				errLogToConsole: true,
				outputStyle: "expanded"
			}))
			.on('error', sass.logError)
			.pipe(postCss([autoprefixer]))
			.pipe(cleanCss({ compatibility:'ie8' }))
			.pipe(lineec())
			//.pipe(gulpif(!isProduction, sourcemaps.write()))
			.pipe(gulp.dest(config.dest.cssFolder))
			.pipe(gulp.dest(config.wp.cssFolder))
			.pipe(browsersync.stream())
			.pipe(notify({
				message: '\n\n✅ >>> Styles completed.\n', 
				onLast:true 
			}))
	);
}

function cssVendor() {
	console.log('path to vendor css is: ' + config.src.vendorCssGlob);
	return (
		gulp
			.src(config.src.vendorCssGlob)
			.pipe(postCss([autoprefixer]))
			.pipe(cleanCss({ compatibility:'ie8' }))
			//.pipe(lineec())
			.pipe(rename(config.css.vendorFileName + '.css'))
			.pipe(gulp.dest(config.dest.vendorCssFolder))
			.pipe(gulp.dest(config.wp.vendorCssFolder))
			.pipe(browsersync.stream())
			.pipe(notify({
				message: '\n\n✅ >>> Vendor styles completed.\n', 
				onLast:true 
			}))
	);
}

function html() {
	return (
		gulp.src(
				[config.src.htmlGlob],
				{
					base: config.src.folder,
					since: gulp.lastRun('html')
				}
			)
			.pipe(gulp.dest(config.dest.folder))
			.pipe(browsersync.stream())
			.pipe(notify({
				message: '\n\n✅ >>> HTML copy completed.\n', 
				onLast:true 
			}))
	);
}

function optimizeImages() {
	return (
		gulp
			.src(config.src.imagesGlob)
			.pipe(
				gulpif(isProduction, imagemin([
					imagemin.gifsicle({ interlaced: true }),
					imagemin.mozjpeg({ progressive: true }),
					imagemin.optipng({ optimizationLevel: 5 }),
					imagemin.svgo({
						plugins: [{
							removeViewBox: false,
							collapseGroups: true
						}]
					})
				])
			))
			.pipe(gulp.dest(config.dest.imagesFolder))
			.pipe(notify({
				message: '\n\n✅ >>> Image optimization completed.\n', 
				onLast:true 
			}))
	);
}

function serve(done) {
	browsersync.init({
		server: {
			baseDir: config.browserSync.baseDirectory
		},
		notify: false,
		port: 3000,
		open: false
	});
	done();
}

function watchFiles(done) {
	gulp.watch(config.src.scssGlob, gulp.series(css));
	gulp.watch(config.src.vendorCssGlob, gulp.series(cssVendor));
	gulp.watch(config.src.jsGlob, gulp.series(compileCustomJs));
	gulp.watch(config.src.externalsJsGlob, gulp.series(compileExternalsJs));
	gulp.watch(config.src.vendorJsGlob, gulp.series(compileVendorJs));
	gulp.watch(config.src.htmlGlob, gulp.series(html));
	gulp.watch(config.src.imagesGlob, gulp.series(optimizeImages));
	gulp.watch(config.browserSync.baseDirectory + '/**/*.html').on('change', browsersync.reload);
	done();
}

const compileAllCss = gulp.parallel(css, cssVendor);
const compileAllJs = gulp.parallel(compileCustomJs, compileVendorJs, compileExternalsJs);
const build = gulp.series(clean, compileAllJs, gulp.parallel(compileAllCss, html, optimizeImages));
const watch = gulp.series(clean, compileAllJs, gulp.parallel(compileAllCss, html, optimizeImages), serve, watchFiles);

exports.build = build;
exports.css = css;
exports.cssVendor = cssVendor;
exports.compileAllJs = compileAllJs;
exports.compileCustomJs = compileCustomJs;
exports.compileExternalsJs = compileExternalsJs;
exports.compileVendorJs = compileVendorJs;
exports.clean = clean;
exports.html = html;
exports.optimizeImages = optimizeImages;
exports.serve = serve;
exports.watch = watch;
exports.watchFiles = watchFiles;