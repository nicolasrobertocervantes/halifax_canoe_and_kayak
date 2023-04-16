const {src, dest, watch, series} = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');

function scssTask(){
    return src('sass/style.scss', {sourcemaps: true})
        .pipe(sass())
        .pipe(postcss([cssnano()]))
        .pipe(dest('.'));
}

function watchTask(){
    watch(['sass/**/*.scss'], series(scssTask));
}

exports.default = series(
    scssTask,
    watchTask
)