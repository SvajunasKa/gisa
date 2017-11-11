var gulp = require("gulp");
var imagemin = require("gulp-imagemin");
var css = require("gulp-clean-css");
var rename = require('gulp-rename');

gulp.task("imagemin", function () {
    gulp.src("images/FullSize/**/*.png")
        .pipe(imagemin())
        .pipe(gulp.dest("imagemin"))
});

gulp.task("css", function () {
    gulp.src("assets/css/main.css")
        .pipe(css())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest("assets/css"))
});

gulp.task('watch', function () {
    gulp.watch('assets/css/main.css', ['css']);
});


gulp.task('default', [
    'css',
    'watch'
]);

