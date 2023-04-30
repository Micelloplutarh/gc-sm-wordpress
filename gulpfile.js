
const gulp = require('gulp');
const webp = require('gulp-webp');

gulp.task('webp', () =>
  gulp.src('assets/img/*.{jpg,png}')
    .pipe(webp())
    .pipe(gulp.dest('dist/images'))
);

gulp.task('default', gulp.parallel('webp'));
