module.exports = {
	options: {
		stripBanners: true,
			banner: '/*! <%= pkg.title %> - v<%= pkg.version %>\n' +
		' * <%= pkg.homepage %>\n' +
		' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
		' * Licensed GPL-2.0+' +
		' */\n'
	},
	main: {
		src: [
      		'assets/js/vendor/browser.test.js',
      		'assets/js/vendor/jquery.matchHeight-min.js',
      		'assets/js/vendor/text-toggle.js',
			'assets/js/src/project.js'
		],
			dest: 'assets/js/project.js'
	}
};
