// const gulp = require('gulp');
// const concat = require('gulp-concat');

// gulp.task('concat-css', function() {
//   return gulp.src('assets/css/*.css')
//     .pipe(concat('bundle.css'))
//     .pipe(gulp.dest('dist/css/'));
// });
const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');

gulp.task('sass', function() {
    return gulp.src('./assets/old-sass/*.sass')
        .pipe(concat('styles-2.sass'))
        .pipe(gulp.dest('./scss'));
});

gulp.task('default', gulp.series('sass'));
