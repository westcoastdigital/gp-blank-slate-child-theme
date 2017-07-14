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
      		'assets/js/vendor/html5shiv.js',
			'assets/js/src/project.js'
		],
			dest: 'assets/js/project.js'
	}
};
