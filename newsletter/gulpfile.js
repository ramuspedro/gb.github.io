var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function(){
    gulp.src('./style.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
    gulp.watch('./style.scss', ['sass']);
});