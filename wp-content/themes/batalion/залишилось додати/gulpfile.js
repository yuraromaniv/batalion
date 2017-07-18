var gulp = require('gulp'), //підключення gulp
	sass = require('gulp-sass'); //підключення sass пакет

gulp.task('sass', function() { //створення таску 'sass'
	return gulp.src(['sass/*.sass', 'sass/*.scss']) //вибір файлів
		.pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError)) //перетворення sass в css
		.pipe(gulp.dest('css')) // вигруження результату в папку css
});

gulp.task('watch', function() {
	gulp.watch(['sass/*.sass', 'sass/*.scss'], ['sass']); //спостерігання за scss файлами в папці css
});

gulp.task('default', ['watch']);