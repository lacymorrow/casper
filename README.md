# Casper
A Ghost-like WordPress theme

Casper *(for WordPress)* is a simple yet beautiful theme for bloggers.

Inspired by the [Ghost](http://ghost.org) blogging platform, Casper is a [WordPress](http://wordpress.org) port of the [default theme by the same name](https://github.com/TryGhost/Casper). The goal of this project is to emulate the gorgeous theme while taking advantage of features exclusive to the WordPress framework. There are plenty of customization options included, accessible through the WordPress Customizer. Already included are hooks to serve responsive images appropriately and media queries to provide a fast and seamless experience from desktop to mobile.

### [Demo](http://lacymorrow.com/projects/casper/)

### [Download Casper from the WordPress.org Theme Directory](http://wordpress.org/themes/casper)

## Usage

Download the [zip](https://github.com/lacymorrow/casper/archive/master.zip) package of the theme and install either automatically through the WordPress Dashboard > Appearance tab, or by uploading the `casper-wp` folder to your WordPress/wp-content/themes directory.

The `style.css` file in the theme directory is minified. A human-readable version of is located at `css/style.css`.


## Editing Casper

The recommended way to edit the Casper theme is to use the [Casper child theme](https://github.com/lacymorrow/casper-child). This will ensure that none of your changes will be lost when you update Casper. Install and activate the child theme and make changes as you would normally. Any file included in the theme will override a Casper theme file (exceptions being `functions.php` and `style.css`).

If you want to make changes to the core theme, or want to contribute, read below on how to build the package.


#### Using Grunt to build the package

A `gruntfile.js` is included. `cd` into the theme directory and run `npm install` to install Grunt and all dependencies locally. Run `grunt` to build or `grunt watch` to continuously build.

##### i18n

To generate a `.pot` language file you must have xgettext installed. On OSX using homebrew run `brew install gettext && brew link gettext --force` to install. Run `grunt i18n` to generate language files.


###### Tasks

 * Compile `src/css/style.less` and other LESS and CSS files in `src/css/`
 * Any CSS is combed, linted, prefixed, then compiled with `css/style.css`
 * `css/style.css` is minified into `style.css`
 * Images in `src/img/` are compressed and copied to `img`
 * Theme JavaScript and other js files in `src/js/` are linted, minified, and combined into `js/main.js`

## Getting Involved

Want to report a bug, request a feature, or help me build this project? The more the merrier!


Many thanks to the [Ghost](http://ghost.org) & [WordPress](http://wordpress.org) teams, as well as the [Underscores _s](http://underscores.me/) contributers, and [kvendrik](https://github.com/kvendrik/responsive-images.js). Built using all of the above.

## Roadmap
 * Add support for title-tag (via https://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag)
 * Update Casper WP to match the updated Ghost version 
 * Implement an update mechanism to pull changes from the Ghost project to keep the development in sync


## License

[GPL v2.0](http://www.gnu.org/licenses/gpl-2.0.html) © [Lacy Morrow](http://lacymorrow.com)

All assets licensed under a GPL-compatible license.
