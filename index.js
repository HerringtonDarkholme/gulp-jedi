'use strict';

var gutil = require('gulp-util');
var through = require('through2');
var jedi = require('jedi');

module.exports = function () {
    return through.obj(function(file, enc, cb) {
        if (file.isNull()) {
            this.push(file);
            return cb();
        }

        var code;
        try {
            code = jedi.jedi2php(file.path);
        } catch (e) {
            var err = new gutil.PluginError('gulp-jedi', e);
            this.emit('error', err);
            return cb();
        }
        if (file.isStream()) {
            var stream = through();
            stream.write(code);
            file.contents = stream;
        } else {
            file.contents = new Buffer(code);
        }
        file.path = gutil.replaceExtension(file.path, '.php');
        this.push(file);
        gutil.log('compiled jedi: ' + file.relative);
        cb();
    });
};
