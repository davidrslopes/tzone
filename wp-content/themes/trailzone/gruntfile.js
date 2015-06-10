module.exports = function(grunt) {
	// TrailZone WP Theme configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		/***************************************************************************
		* DEPENDECIES
		***************************************************************************/
		// Copy Bower dependencies
		bowercopy: {
			options: {
				srcPrefix: "bower_components",
				runBower: true,
			},
			jquerydist: {
				src: "jquery/dist",
				dest: "src/vendor/jquery",
			},
			twbsdist: {
				src: "bootstrap/dist",
				dest: "src/vendor/bootstrap",
			},
			fontawesome_fonts: {
				src: "bower_components/fontawesome/fonts",
				dest: "assets/fonts"
			},
			fontawesome_css: {
				options: {
					srcPrefix: "bower_components/fontawesome/css",
					destPrefix: "src/vendor/fontawesome/css"
				},
				files: { "font-awesome.css": "font-awesome.css" }
			},
			ionicons_fonts: {
				src: "bower_components/ionicons/fonts",
				dest: "assets/fonts"
			},
			navwalker: {
				options: {
					srcPrefix: "bower_components/wp-bootstrap-navwalker",
					destPrefix: "functions/libraries"
					},
				files: { "wp_bootstrap_navwalker.php": "wp_bootstrap_navwalker.php" },
			}
		},
		/***************************************************************************
		 * IMAGES
		 ***************************************************************************/
		imagemin: {
			dynamic: {
				options: {
					cache: false
				},
				files: [{
					expand: true,						// Enable dynamic expansion
					cwd: 'src/img/',					// Src matches are relative to this path
					src: ['**/*.{png,jpg,gif,svg}'],	// Actual patterns to match
					dest: 'assets/img/'					// Destination path prefix
				}]
			}
		},
		/***************************************************************************
		 * LESS & CSS
		 ***************************************************************************/

		// LESS to CSS
		less: {
			development: {
				files: {"src/css/style.css": "src/less/style.less"}
			}
		}, //less

		// Minify & concat CSS
		cssmin: {
			options: {
				keepSpecialComments: 0,
			},
			combine: {
				files: {
					'assets/css/style.min.css': [
						'src/vendor/bootstrap/css/bootstrap.css',
						'src/vendor/fontawesome/css/font-awesome.css',
						'src/vendor/ionicons/css/ionicons.css',
						'src/css/style.css',
					]
				},
			}
		}, // cssmin

		/***************************************************************************
		 * CONCAT JS
		 ***************************************************************************/

		concat: {
			options: {
				stripBanners: true,
			},
			jsfiles: {
				src: [
					'src/vendor/jquery/jquery.js',
					'src/vendor/bootstrap/js/bootstrap.js',
					'src/js/script.js',
				],
				dest: 'src/js/scripts.js',
				nonull: true,
			},
		},

		/***************************************************************************
		 * MINIFY JS
		 ***************************************************************************/

		uglify: {
			jsfiles: {
				files: {
					'assets/js/scripts.min.js': ['src/js/scripts.js']
				}
			}
		},

		/***************************************************************************
		 * WATCH
		 ***************************************************************************/

		watch: {
			options : {
				livereload : true
			},
			php:{
				files: ['*.php', '**/*.php'],
			},
			lessfiles: {
				files: ['*.less', '**/*.less'],
				tasks: ['less']
			},
			cssfiles: {
				files: ['src/css/*.css'],
				tasks: ['cssmin'],
			},
			jsfiles: {
				files: ['src/js/*.js'],
				tasks: ['concat', 'uglify'],
			},
			images: {
				files: ['src/img/**/*.{png,jpg,gif,svg}'],
				tasks: ['imagemin'],
			},
		} // watch
	}); // grunt.initConfig

	// Load necessary plugins
	grunt.loadNpmTasks("grunt-bowercopy");
	grunt.loadNpmTasks("grunt-contrib-imagemin");
	grunt.loadNpmTasks("grunt-contrib-less");
	grunt.loadNpmTasks("grunt-contrib-cssmin");
	grunt.loadNpmTasks("grunt-contrib-concat");
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask("default", ["bowercopy", "less", "cssmin", "concat", "uglify", "imagemin", "watch"]);
};