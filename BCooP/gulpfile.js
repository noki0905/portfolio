var gulp         = require('gulp');

// gulp.task('default', function() {
//     console.log('HelloWorld!');
// });


//ブラウザ自動更新
var browserSync  = require('browser-sync');
gulp.task('browser-sync', function() {
  browserSync.init({
      server: {
          baseDir: "./",
          index: "index.html"
      }
  });
});
gulp.task('bs-reload', function () {
  browserSync.reload();
});

gulp.task( 'default', gulp.series( gulp.parallel( 'browser-sync' ) ), function() {
  gulp.watch( '.*.html', gulp.task( 'bs-reload' ) );
  gulp.watch( 'assets/css/*.css', gulp.task( 'bs-reload' ) );
  gulp.watch( 'assets/js/*/*.js', gulp.task( 'bs-reload' ) );
});


//CSS圧縮
var cleanCSS = require("gulp-clean-css");
var rename   = require("gulp-rename");

gulp.task('mincss', function() {
  return gulp.src("assets/css/common.css")
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('assets/css/'));
});


//JavaScript圧縮
var uglify = require('gulp-uglify');

gulp.task('minjs', function() {
  return gulp.src("js/*.js")
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('js/'));
});


//Scssコンパイル
var sass = require('gulp-sass');
var postcss      = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cleanCSS = require("gulp-clean-css");
var rename   = require("gulp-rename");

gulp.task('sass', function() {
  return gulp.src('assets/css/common.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest('assets/css/'))
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('assets/css/'));
});
gulp.task('top', function() {
  return gulp.src('assets/css/top-page/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest('assets/css/top-page'));
});
gulp.task('single', function() {
  return gulp.src('assets/css/single/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest('assets/css/single'));
});
gulp.task('archive', function() {
  return gulp.src('assets/css/archive/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(postcss([autoprefixer()]))
    .pipe(gulp.dest('assets/css/archive'));
});


//自動コンパイル
gulp.task( 'watch', function() {
  gulp.watch( 'assets/css/**/**.scss', gulp.task( 'sass' ) );
  gulp.watch( 'assets/css/**/*.scss', gulp.task( 'top' ) );
  gulp.watch( 'assets/css/**/*.scss', gulp.task( 'single' ) );
  gulp.watch( 'assets/css/**/*.scss', gulp.task( 'archive' ) );
});
