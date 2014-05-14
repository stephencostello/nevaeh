module.exports = function(grunt) {

  // 1. All configuration goes here
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    concat: {
      options: {
        preserveComments: false,
        separator: ';'
      },
      dist: {
        src: [
          'js/lib/*.js'
        ],
        dest: 'js/site.js',
      }
    },

    uglify: {
      build: {
        src: 'js/site.js',
        dest: 'js/site.min.js'
      }
    },

    imagemin: {
        dynamic: {
            files: [{
                expand: true,
                cwd: 'images/',
                src: ['**/*.{png,jpg,gif}'],
                dest: 'images/'
            }]
        }
    },

    watch: {
        scripts: {
            files: ['js/*.js'],
            tasks: ['concat', 'uglify'],
            options: {
                spawn: false,
            },
        },

        css: {
            files: ['css/*.scss'],
            tasks: ['sass'],
            options: {
                spawn: false,
            }
        }
    },

    sass: {
          dist: {
            options: {
              style: 'compressed'
            },
            files: {
              'style.css': 'css/style.scss'
            }
          }
      }

  });

  // 3. Where we tell Grunt we plan to use this plug-in.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  grunt.registerTask('default', ['concat', 'uglify', 'imagemin', 'sass', 'watch']);

};

