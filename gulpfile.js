var gulp = require("gulp");
var connect = require("gulp-connect-php");
var browserSync = require("browser-sync");
var notify = require("gulp-notify");

// Config`s
var config = {
  FOLDER_START_SERVE: 'public',
  PROXY: '127.0.0.1:8000'
}

// Server PHP + livereload
gulp.task('serve', function(){
  connect.server({
    base: config.FOLDER_START_SERVE
  }, function(){
    browserSync({
      proxy: config.PROXY 
    });
  });
});

// Watchers
gulp.watch('**/*.php').on('change', function(){
  browserSync.reload();
});

// Gulp Task`s 
gulp.task('default', ['serve']);
