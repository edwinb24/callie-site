var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var cssMin = require('gulp-css');

//'gulp sass' command
gulp.task('sass', function(){
    gulp.src('./assets/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css/uncompress'));
});

gulp.task('css',function() {
  gulp.src([
            "./assets/css/uncompress/styles.css"
        ])
        .pipe(concat('styles.css'))
        .pipe(cssMin())
        .pipe(gulp.dest('./assets/css'));
})

gulp.task('scripts', function() {
  gulp.src([
          "./assets/js/scripts/main.js"
        ])
        .pipe(concat('libs.js'))
        .pipe(uglify())
        .pipe(gulp.dest("./assets/js"));
})

gulp.task('default', ['sass','css','scripts']);
