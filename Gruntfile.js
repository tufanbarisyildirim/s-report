module.exports = function (grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        sass: {
            css: {
                options: {
                    sourcemap: 'none'
                },
                files: {
                    'theme/style.css': 'css/main.scss'
                }
            }
        },


        autoprefixer: {
            css: {
                src: 'theme/style.css',
                dest: 'theme/style.css'
            }
        },


        cssmin: {
            css: {
                files: {
                    'theme/style.css': 'theme/style.css'
                }
            }
        },


        concat: {
            plugin: {
                src: ['js/plugin/**/*.js'],
                dest: 'theme/js/plugin.js'
            },
            main: {
                src: ['js/main.js'],
                dest: 'theme/js/main.js'
            }
        },


        uglify: {
            plugin: {
                files: {
                    'theme/js/plugin.min.js': 'theme/js/plugin.js'
                }
            },
            main: {
                files: {
                    'theme/js/main.min.js': 'theme/js/main.js'
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
                files: ['js/main.js'],
                tasks: ['concat:main']
            },
            html: {
                files: ['template/**/*.html', 'template/**/*.php'],
                tasks: []
            }
        }

    });


    require('load-grunt-tasks')(grunt);

    grunt.registerTask('deploy', ["sass", "autoprefixer", "cssmin", "concat", "uglify"]);
    grunt.registerTask('default', ["watch"]);

};