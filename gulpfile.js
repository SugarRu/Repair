const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const jsmin = require('gulp-jsmin');
const htmlmin = require('gulp-htmlmin');

/* Сожми и перенеси CSS файлы */
gulp.task('minify-css', () => {
  return gulp.src('css/*.css')
  .pipe(cleanCSS())
  .pipe(gulp.dest('build/css/'))
});

/* Перенеси сжатые JS-файлы */
gulp.task('move-js', () => {
  return gulp.src('js/*.min.js')
  .pipe(gulp.dest('build/js'))
});

/* Сожми JS-файлы и перенеси в папку build */
gulp.task('minify-js', () => {
  return gulp.src(['js/*.js' , '!js/*.min.js'])
  .pipe(jsmin())
  .pipe(gulp.dest('build/js'))
});

/* Сожми и перенеси HTML файлы */
gulp.task('htmlmin' , () => {
  return gulp.src('/*.html')
  .pipe(htmlmin({ collapseWhitespace: true }))
  .pipe(gulp.dest('build/'))
}); 

/* Переменная gulp build для серии команд */
gulp.task('build' , gulp.series('minify-css' ,'move-js' , 'minify-js' , 'htmlmin'));