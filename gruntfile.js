module.exports = function(grunt) {

	// 1. All configuration goes here 
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		
		imagemin: {
		    dynamic: {
		        files: [{
		            expand: true,
		            cwd: 'images/',
		            src: ['**/*.{png,jpg,gif}'],
		            dest: 'images/build/'
		        }]
		    }
		},
		less: {
			standard: {
				options: {
					compress: true,
					yuicompress: true,
					optimization: 2,
					sourceMap: true
				},
				files: {
					"css/style.css": "css/src/style.less"
				}
			}
		},
		watch: {
			options: {
				livereload: true,
			},
		    styles: {
		    	files: ['css/src/*.less'],
		    	tasks: ['less'],
		    	options: {
		    		nospawn: true
		    	}
		    }, 
		}
	});

	// 3. Where we tell Grunt we plan to use this plug-in.
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
	grunt.registerTask('default', ['watch']);

};