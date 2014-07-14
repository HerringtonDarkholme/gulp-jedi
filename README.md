gulp-jedi
================

> Compile [jedi](https://github.com/baixing/jedi) templates to PHP



## Install

```bash
$ npm install --save-dev gulp-jedi
```

## Usage

```js
var gulp = require('gulp');
var jedi = require('gulp-jedi');

gulp.task('default', function () {
	return gulp.src('src/*.jedi')
		.pipe(jedi())
		.pipe(gulp.dest('dist'));
});
```

## Options
Not yet :)

## License

gulp-jedi -Compile jedi templates to PHP

Written in 2014 by Herrington Darkholme

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
