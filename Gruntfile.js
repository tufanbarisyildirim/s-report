module.exports = function (grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        sass: {
            css: {
                options: {
                    sourcemap: 'none'
                },
                files: {
                    'style.css': 'scss/main.scss'
                }
            }
        },


        autoprefixer: {
            css: {
                src: 'style.css',
                dest: 'style.css'
            }
        },


        cssmin: {
            css: {
                files: {
                    'style.css': 'style.css'
                }
            }
        },


        concat: {
            plugin: {
                src: ['js/plugin/**/*.js'],
                dest: 'js/plugin.min.js'
            },
            main: {
                src: ['js/main.js'],
                dest: 'js/main.min.js'
            }
        },


        uglify: {
            plugin: {
                files: {
                    'js/plugin.min.js': 'js/plugin.min.js'
                }
            },
            main: {
                files: {
                    'js/main.min.js': 'js/main.min.js'
                }
            }
        },


        watch: {
            options: {
                spawn: false,
                livereload: true
            },
            css: {
                files: ['css/**/*.scss'],
                tasks: ['sass', 'autoprefixer']
            },
            jsPlugin: {
                files: ['js/plugin/**/*.js'],
                tasks: ['concat:plugin']
            },
            jsMain: {
                files: ['js/main/**/*.js'],
                tasks: ['concat:main']
            },
            html: {
                files: ['**/*.php'],
                tasks: []
            }
        }

    });


    require('load-grunt-tasks')(grunt);

    grunt.registerTask('deploy', ["sass", "autoprefixer", "cssmin", "concat", "uglify"]);
    grunt.registerTask('default', ["watch"]);

};