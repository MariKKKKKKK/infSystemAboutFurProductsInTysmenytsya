/* gulpfile.js */
var 
    gulp = require('gulp'),
    sass = require('gulp-sass');
gulp.task('sass', function() {
    return gulp.src('scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
        .pipe(sass())
        .pipe(gulp.dest('css'))
});
gulp.task('watch', function(){
    gulp.watch('scss/**/*.scss', ['sass']);
    // Other watchers
});

// source and distribution folder

/*var
    source = 'src/',
    dest = 'dist/';
 @import "../node_modules/bootstrap-sass/assets/stylesheets/_bootstrap.scss";
// Bootstrap scss source
var bootstrapSass = {
        in: './node_modules/bootstrap-sass/'
    };

// fonts
var fonts = {
        in: [source + 'fonts/!*.*', bootstrapSass.in + 'assets/fonts/!**!/!*'],
        out: dest + 'fonts/'
    };

 // old_css source file: .scss files
var old_css = {
    in: source + 'scss/main.scss',
    out: dest + 'old_css/',
    watch: source + 'scss/!**!/!*',
    sassOpts: {
        outputStyle: 'nested',
        precision: 8,
        errLogToConsole: true,
        includePaths: [bootstrapSass.in + 'assets/stylesheets']
    }
};


gulp.task('fonts', function () {
    return gulp
        .src(fonts.in)
        .pipe(gulp.dest(fonts.out));
});


// compile scss
gulp.task('sass', ['fonts'], function () {
    return gulp.src(old_css.in)
        .pipe(sass(old_css.sassOpts))
        .pipe(gulp.dest(old_css.out));
});


// default task
gulp.task('default', ['sass'], function () {
     gulp.watch(old_css.watch, ['sass']);
});*/
