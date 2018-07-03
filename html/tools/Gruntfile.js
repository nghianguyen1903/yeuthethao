module.exports = function(grunt) {

	"use strict";

	// require('load-grunt-tasks')(grunt);

	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-browser-sync');
	grunt.loadNpmTasks('grunt-newer');
	grunt.loadNpmTasks('grunt-concurrent');
	grunt.loadNpmTasks('grunt-string-replace');




	grunt.initConfig({

		devDir: '../assets',
		distDir: '..',

		concurrent: {
			dev: [
				// 'clean:dev',
				'newer:sass'
				// 'sass'
			]
		},
		watch: {
			options : {
				interrupt: true
			},
			// js: {
			// 	files: ['<%= devDir %>/js/**/*.js'],
			// 	tasks: ['newer:jshint' ]
			// },
			// html: {
			// 	files: ['<%= devDir %>/template/**/*.html']
			// },
			// css: {
			// 	files: ['<%= devDir %>/css/**/*.css']
			// },
			sass: {
				files: ['<%= devDir %>/scss/**/*.scss'],
				tasks: ['sass:dev']
			}
			// ngtemplates: {
			// 	files: [ '<%= devDir %>/template/**/*.html' ],
			// 	tasks: [ 'ngtemplates:dev' ]
			// }
		},
		sass: {
			options: {
				sourceMap: true,
				sourceComments: false,
				includePaths: [
					// '<%= devDir %>/vendor/bootstrap-sass/assets/stylesheets',
					// '<%= devDir %>/vendor/bootstrap-sass/assets/stylesheets/bootstrap',
					//'<%= devDir %>/vendor/animate.scss/source',
					// '<%= devDir %>/vendor/animate-sass',
					// '<%= devDir %>/vendor/hint.css/src'
				],
				outputStyle: 'nested' /*, nested, 'expanded' ,  'compact'*/
			},
			dev: {
				files: {
					'../assets/css/style.css': '<%= devDir %>/scss/main.scss'/*,
					 '<%= devDir %>/css/fontface.css': '<%= devDir %>/scss/fontface.scss'*/
				}
				// files: [{
				// 	expand: true,
				// 	cwd: '<%= devDir %>/scss/',
				// 	src: [
				// 		'**/*.scss',
				// 		'!**/_*.scss'
				// 	],
				// 	dest: '<%= devDir %>/css/',
				// 	ext: '.css'
				// }]
			}
		},

	});



	// grunt.registerTask('dev', ['newer:sass', 'browserSync', 'watch']);
	grunt.registerTask('dev', ['concurrent:dev', 'watch']);

};