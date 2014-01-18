'use strict';
module.exports = function(grunt) {
 
    require('load-grunt-tasks')(grunt);
 
    grunt.initConfig({
 
        // watch our project for changes
        watch: {
            less: {
				files: ['less/*'],
                tasks: ['less']
            }
        },
        // style (Sass) compilation via Compass
		less: {
		  development: {
		    options: {
		      paths: ["less"]
		    },
		    files: {
		      "css/style.css": "less/style.less"
		    }
		  },
		  production: {
		    options: {
		      paths: ["less"],
		      cleancss:true
		    },
		    files: {
		      "css/style.css": "less/style.less"
		    }
		  }
		}
    });
 
    // register task
    grunt.registerTask('default', ['watch']);
 
};