module.exports = function (grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),


        sass: {
            home: {
                options: {
                    sourcemap: 'none'
                },
                files: {
                    'www/css/home.css': 'css/home.scss'
                }
            },
            login: {
                options: {
                    sourcemap: 'none'
                },
                files: {
                    'www/css/login.css': 'css/login.scss'
                }
            }
        },


        autoprefixer: {
            home: {
                src: 'www/css/home.css',
                dest: 'www/css/home.min.css'
            },
            login: {
                src: 'www/css/login.css',
                dest: 'www/css/login.min.css'
            }
        },


        cssmin: {
            home: {
                files: {
                    'www/css/home.min.css': 'www/css/home.min.css'
                }
            },
            login: {
                files: {
                    'www/css/login.min.css': 'www/css/login.min.css'
                }
            }
        },


        concat: {
            plugin: {
                src: ['js/plugin/**/*.js'],
                dest: 'www/js/plugin.min.js'
            },
            pluginHome: {
                src: ['js/plugin/global/**/*.js'],
                dest: 'www/js/plugin-home.min.js'
            },
            home: {
                src: ['js/global/**/*.js', 'js/home/**/*.js'],
                dest: 'www/js/home.min.js'
            },
            login: {
                src: ['js/global/**/*.js', 'js/login/**/*.js'],
                dest: 'www/js/login.min.js'
            }
        },


        uglify: {
            plugin: {
                files: {
                    'www/js/plugin.min.js': 'www/js/plugin.min.js'
                }
            },
            pluginHome: {
                files: {
                    'www/js/plugin-home.min.js': 'www/js/plugin-home.min.js'
                }
            },
            home: {
                files: {
                    'www/js/home.min.js': 'www/js/home.min.js'
                }
            },
            login: {
                files: {
                    'www/js/login.min.js': 'www/js/login.min.js'
                }
            }
        },


        watch: {
            options: {
                spawn: false,
                livereload: true
            },
            jsPlugin: {
                files: ['js/plugin/**/*.js'],
                tasks: ['concat:plugin']
            },
            jsPluginHome: {
                files: ['js/plugin/global/**/*.js'],
                tasks: ['concat:pluginHome']
            },
            jsGlobal: {
                files: ['js/global/**/*.js'],
                tasks: ['concat:home', 'concat:login']
            },
            jsHome: {
                files: ['js/home/**/*.js'],
                tasks: ['concat:home']
            },
            jsLogin: {
                files: ['js/login/**/*.js'],
                tasks: ['concat:login']
            },
            cssHelper: {
                files: ['css/helper/**/*.scss'],
                tasks: ['sass', 'autoprefixer']
            },
            cssHome: {
                files: ['css/home.scss', 'css/home/**/*.scss'],
                tasks: ['sass:home', 'autoprefixer:home']
            },
            cssLogin: {
                files: ['css/login.scss', 'css/login/**/*.scss'],
                tasks: ['sass:login', 'autoprefixer:login']
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