const gulp = require('gulp');
const concat = require('gulp-concat');

gulp.task('concat-css', function() {
  return gulp.src('assets/css/*.css')
    .pipe(concat('bundle.css'))
    .pipe(gulp.dest('dist/css/'));
});