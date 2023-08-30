var gulp = require("gulp"),
    connect = require("gulp-connect-php"),
    browserSync = require("browser-sync");

gulp.task("amanda", function () {
    connect.server({}, function () {
        browserSync({
            proxy: "localhost:80/amanda",
        });
    });

    gulp.watch("**/*.php").on("change", function () {
        browserSync.reload();
    });
});
