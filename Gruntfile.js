module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-exec');
    grunt.loadNpmTasks('grunt-sass');
  
    grunt.initConfig({
      pkg: grunt.file.readJSON('package.json'),
      builddir: 'sass',
      banner: '',
      clean: {
        build: {
          src: ['src/css/bootstrap.scss']
        }
      },
      concat: {
        options: {
          banner: '<%= banner %>',
          stripBanners: true
        },
        dist: {
          src: [],
          dest: ''
        }
      },
      copy: {
        vendor: {
          files: [
            {expand: true, cwd: 'node_modules/font-awesome', src: ['css/**', 'fonts/**'], dest: 'docs/_vendor/font-awesome/'},
            {expand: true, cwd: 'node_modules/jquery', src: ['src/**'], dest: 'docs/_vendor/jquery/'},
            {expand: true, cwd: 'node_modules/bootstrap', src: ['src/**'], dest: 'docs/_vendor/bootstrap/'},
            {expand: true, cwd: 'node_modules/popper.js', src: ['src/**'], dest: 'docs/_vendor/popper.js/'}
          ]
        },
        css: {
          files: [
            {expand: true, cwd: 'src', src: ['*.css', '*.scss'], dest: 'docs/4/'},
          ]
        }
      },
      exec: {
        postcss: {
          command: 'npm run postcss'
        }
      },
      watch: {
        files: ['sass/_variables.scss', 'sass/_bootswatch.scss'],
        tasks: 'build',
        options: {
          livereload: true,
          nospawn: true
        }
      },
      connect: {
        base: {
          options: {
            base: 'docs',
            port: 3000,
            livereload: true,
            open: true
          }
        },
        keepalive: {
          options: {
            port: 3000,
            livereload: true,
            keepalive: true,
            open: true
          }
        }
      }
    });
  
  
    grunt.registerTask('build', 'build a regular theme from scss', function(compress) {
      compress = compress === undefined ? true : compress;
  
      var isFiledValid = grunt.file.exists('sass/_variables.scss') && grunt.file.exists('sass/_bootswatch.scss');
  
       // cancel the build (without failing) if files does not exist
      if (!isFiledValid) {
        console.log('SCSS files missing in sass folder.');
        return;
      }


      var concatSrc = 'build/buildBootstrap.scss';
      var concatDest = 'build/buildBootstrap.scss'; // Goes to src/
      var scssSrc = 'build/buildBootstrap.scss';
      var scssDest = 'src/css/bootstrap.css'; // After grunt build is compete, this is the "final compiled" file
  
      var dist = {src: concatSrc, dest: concatDest};
      grunt.config('concat.dist', dist);
      var files = {};
      files[scssDest] = scssSrc;
      grunt.config('sass.dist.files', files);
      grunt.config('sass.dist.options.outputStyle', 'expanded');
   
      grunt.task.run(['concat', 'sass:dist', 'postcss', 'clean:build',
        compress ? 'compress:' + scssDest + ':' + 'src/css/bootstrap.min.css' : 'none',
        'copy:css']);
    });
  
    grunt.registerTask('compress', 'compress a generic css with sass', function(fileSrc, fileDst) {
        console.log('Compressing.');
      var files = {}; files[fileDst] = fileSrc;
      grunt.log.writeln('compressing file ' + fileSrc);
  
      grunt.config('sass.dist.files', files);
      grunt.config('sass.dist.options.outputStyle', 'compressed');
      grunt.task.run(['sass:dist']);
    });
  
  
    grunt.event.on('watch', function(action, filepath) {
      var path = require('path');
      var theme = path.basename(path.dirname(filepath));
      console.log(theme);
      grunt.config('buildtheme', theme);
    });
  
    grunt.registerTask('vendor', 'copy:vendor');
  
    grunt.registerTask('postcss', 'exec:postcss');
  
    grunt.registerTask('server', 'connect:keepalive');
  
    grunt.registerTask('default', ['connect:base', 'watch']);
  };