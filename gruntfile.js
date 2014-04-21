module.exports = function(grunt) {
  	require('load-grunt-tasks')(grunt, {scope: 'devDependencies'});
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		banner: '/*\n' +
				'  Theme Name:       <%= pkg.name%>\n' +
				'  Theme URI:        <%= pkg.homepage %>\n' +
				'  Author:           <%= pkg.author %>\n' +
				'  Author URI:       http://lacymorrow.com\n' +
				'  Description:      <%= pkg.description %>\n' +
				'  Version:          <%= pkg.version%>\n' + 
				'  License:          GNU General Public License\n' +
				'  License URI:      license.txt\n' +
				'  Text Domain:      casper\n' +
				'  Domain Path:      /languages/\n' +
				'  Tags:             responsive-layout, black, white, one-column, fluid-layout, custom-header, custom-menu, editor-style\n' +
				'  GitHub Theme URI: <%= pkg.repository.url %>\n' +
				'  GitHub Branch:    master\n' +
				'  Casper is based on Underscores http://underscores.me/, (C) 2012-2014 Automattic, Inc.\n' + 
				'  */',
		autoprefixer: {
		    options: {
		        browsers: ['> 1%', 'last 2 versions', 'Firefox ESR', 'Opera 12.1', 'ie 9']
		    },
		    casper: {
				expand: true,
				flatten: true,
				src: '<%= concat.casper.dest %>'
		    },
		},
		clean: {
			casper: '<%= concat.casper.dest %>',
			src: 'src/css/style.css'
		},
		concat: {
			options: {
				banner: '<%= banner %>\n',
				stripBanners: true
			},
			casper: {
				src: ['src/css/style.css', 'src/css/**/*.css'],
				dest: 'css/style.css'
			}
		},
		csscomb: {
			casper: {
				src: '<%= concat.casper.dest %>',
				dest: '<%= concat.casper.dest %>'
			}
		},
		csslint: {
			src: [
				'<%= concat.casper.dest %>'
			]
		},
		cssmin: {
			casper: {
				options: {
					banner: '<%= banner %>',
					noAdvanced: true,
					compatibility: 'ie8',
					keepSpecialComments: 0
				},
				src: '<%= concat.casper.dest %>',
				dest: 'style.css'
			}
		},
		imagemin: {
		    casper: {
		        files: [{
		            expand: true,
		            cwd: 'src/img/',
		            src: ['**/*.{png,jpg,gif}'],
		            dest: 'img/'
		        }]
		    }
		},
		jshint: {
			casper: ['gruntfile.js', 'src/js/**/*.js', 'js/**/*.js'],
			options: {
				globals: {
					jQuery: true,
					console: true,
					module: true,
					document: true
				}
			}
		},
		less: {
			casper: {
				options: {
					compress: true,
					yuicompress: true,
					optimization: 2,
					sourceMap: true
				},
				files: {
					"src/css/style.css": ["src/css/style.less", "src/css/**/*.less"]
				}
			}
		},
		uglify: {
			options: {
				banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
			},
			casper: {
				src: 'src/js/**/*.js',
				dest: 'js/main.js'
			}
		},
		watch: {
			options: {
				livereload: true,
			},
		    styles: {
		    	files: ['gruntfile.js', 'src/**/*'],
		    	tasks: ['default'],
		    	options: {
		    		nospawn: true
		    	}
		    }, 
		}
	});
	

	grunt.registerTask('js', [ /* 'jshint', */ 'uglify']);
	grunt.registerTask('css', ['less', 'concat', 'csscomb', /* 'csslint', */ 'autoprefixer', 'cssmin']);
	grunt.registerTask('default', ['clean', 'css', 'js', 'imagemin']);

};