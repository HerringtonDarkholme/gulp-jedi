/* global describe, it*/
"use strict";

var assert = require('assert');
var jedi = require('./index');
var gulp = require('gulp');
var gutil = require('gulp-util');
var fs = require('fs');


function cleanup() {
    if (fs.existsSync('jedi/test.php')) {
        fs.unlinkSync('jedi/test.php');
    }
}

describe('gulp-jedi', function() {
    it('should transform Jedi', function(done) {
        var stream = gulp.src('jedi/test.jedi')
            .pipe(jedi())
            .pipe(gulp.dest('jedi/'));

        stream.on('end', function() {
            assert(fs.existsSync('jedi/test.php'));
            var transformed = fs.readFileSync('jedi/test.php').toString();
            var answer = fs.readFileSync('jedi/answer.php').toString();
            assert(transformed === answer);
            cleanup();
            done();
        });
    });

    it('should emit PluginError on Sith', function(done) {
        gulp.src('jedi/vader.jedi')
            .pipe(jedi())
            .on('error', function(e) {
                assert(e instanceof gutil.PluginError);
                assert(!fs.existsSync('jedi/vader.php'));
                done();
            })
            .pipe(gulp.dest('jedi/'));
    });
});

