'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'assets/js/*.js',
        '!assets/js/scripts.min.js'
      ]
    },

    uglify: {
      dist: {
        files: {
          'assets/js/scripts.min.js': [
            'assets/js/_*.js'
          ]
        }
      }
    },
    // Dev and production build for sass
    sass : {
      production : {
        files : [
          {
            src : ['**/*.scss', '!**/_*.scss'],
            cwd : 'assets/scss',
            dest : 'assets/css',
            ext : '.css',
            expand : true
          }
        ],
        options : {
          style : 'compressed'
        }
      },
      dev : {
        files : [
          {
            src : ['**/*.scss', '!**/_*.scss'],
            cwd : 'assets/scss',
            dest : 'assets/css',
            ext : '.css',
            expand : true
          }
        ],
        options : {
          style : 'expanded'
        }
      }
    },

    // Image min
    imagemin : {
      production : {
        files : [
          {
            expand: true,
            cwd: 'assets/images',
            src: '**/*.{png,jpg,jpeg}',
            dest: 'assets/images'
          }
        ]
      }
    },

    // SVG min
    svgmin: {
      production : {
        files: [
          {
            expand: true,
            cwd: 'assets/images',
            src: '**/*.svg',
            dest: 'assets/images'
          }
        ]
      }
    },
    
    watch: {
      sass : {
        files : ['assets/scss/**/*.scss'],
        tasks : ['sass:dev'],
        options : {
          livereload : true
        }
      },
      js: {
        files: [
          '<%= jshint.all %>'
        ],
        tasks: ['jshint', 'uglify'],
        options : {
          livereload : true
        }
      },
      php : {
        files : ['**/*.php'],
        options : {
          livereload : true
        }
      }
    },
    clean: {
      dist: [
        'assets/css/main.css',
        'assets/js/scripts.min.js'
      ]
    }
  });

  // Load tasks
  grunt.loadTasks('tasks');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-svgmin');

  // Register tasks
  grunt.registerTask('default', [
    'clean',
    'sass',
    'uglify'
  ]);

  // Build task
  grunt.registerTask('build', [
    'jshint',
    'sass:production',
    'imagemin:production',
    'svgmin:production'
  ]);

  grunt.registerTask('dev', [
    'watch'
  ]);

};
