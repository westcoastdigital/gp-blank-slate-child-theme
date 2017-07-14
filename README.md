# Generatepress Blank Slate
A bare bones Generatepress child theme that features Grunt and SASS

## How to install Grunt
from command line
```npm install -g grunt-cli```

Then in your command line navigate to the child theme folder
eg
```cd localhost/WordPress/wp-content/themes/gp-blank-slate-child-theme```

then install the addons by running
```npm install```

Once you have everything installed then you just need to watch for changes in your theme
```grunt watch```


## How to add CSS
Under assets/css/sass you can add in your sass. Compiling is all taken care of for you. Once the Grunt Watch task has finished in the command line, refresh your page to see the changtes

## How to add custom JS
Under /assets/js/src you can ad javascript to the project.js file. This theme has an error checker that ensures your JS is correctly entered, keep an eye on your command line for errors and how to fix them

## How to add jQuery plugins
Download to the assets/js/vendor. Then under tasks/options/concat.js call your jQuery plugin as shown on line12 with the html5shiv.js plugin. Any vendor files are not error checked but are minified