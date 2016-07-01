var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

require('laravel-elixir');
require('laravel-elixir-wiredep');
require('laravel-elixir-useref');

var options = {
	fileTypes: {
		php: {
			block: /(([ \t]*)<!--\s*bower:*(\S*)\s*-->)(\n|\r|.)*?(<!--\s*endbower\s*-->)/gi,
			detect: {
				js: /<script.*src=['"]([^'"]+)/gi,
				css: /<link.*href=['"]([^'"]+)/gi
			},
			replace: {
				js: '<script src="{{ asset(\'{{filePath}}\') }}"></script>',
				css: '<link rel="stylesheet" href="{{ asset(\'{{filePath}}\') }}" />'
			}
		}
	}
};

elixir(function (mix) {
	mix
		.browserify('app.js')
		.wiredep('scss')
		.wiredep('php', {}, options)
		.useref()
		.sass('app.scss')
		.version(['js/scripts.min.js', 'css/styles.min.css']);
});
