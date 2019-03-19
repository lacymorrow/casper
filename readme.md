
[![Casper](img/casper.png "Casper")](http://lacymorrow.com/projects/casper/)

> A Ghost-like 👻 WordPress theme

[![Build Status](https://travis-ci.org/lacymorrow/casper.svg?branch=master)](https://travis-ci.org/lacymorrow/casper) [![WordPress](https://img.shields.io/wordpress/v/akismet.svg)]() [![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html)

Casper *(for WordPress)* is a simple yet beautiful theme for bloggers.

Inspired by the [Ghost](http://ghost.org) blogging platform, Casper is a [WordPress](http://wordpress.org) port of the [default theme by the same name](https://github.com/TryGhost/Casper). The goal of this project is to emulate the gorgeous theme while taking advantage of features exclusive to the WordPress framework.


## Features
* Search feature   🔦
* Comments section   🙊
* Customizer integration   🌈
* Social icons pre-included   🐾
* Responsive site and images   🐛 


[![screenshot](screenshot.png "screenshot")](http://lacymorrow.com/projects/casper/)

### [Demo](http://lacymorrow.com/projects/casper/)

### [Download Casper from the WordPress.org Theme Directory](http://wordpress.org/themes/casper)


## Table of Contents

- [Usage](#usage)
- [Editing](#editing-casper)
- [Building](#building-casper)
    - [With Grunt](#using-grunt-to-build-the-package)
    - [Grunt Tasks](#grunt-tasks)
    - [i18n](#i18n-internationalization)
- [Development](#development)
- [Roadmap](#roadmap)
- [License](#license)


## Usage

Download the [zip](https://github.com/lacymorrow/casper/archive/master.zip) package of the theme and install either automatically through the WordPress Dashboard > Appearance tab, or by uploading the `casper` folder to your WordPress/wp-content/themes directory.

The `style.css` file in the theme directory is minified. A human-readable version of is located at `css/style.css`.


## Editing Casper

The recommended way to edit the Casper theme is to use the [Casper child theme](https://github.com/lacymorrow/casper-child). This will ensure that none of your changes will be lost when you update Casper. Install and activate the child theme and make changes as you would normally. Any file included in the theme will override a Casper theme file (exceptions being `functions.php` and `style.css`).

If you want to make changes to the core theme, or want to contribute, read below on how to build the package.


## Building Casper

Casper is open-source and simple to develop and extend.


#### Using Grunt to build the package

```bash
# Clone and install dependencies

$ git clone https://github.com/lacymorrow/casper.git
$ cd casper
$ npm install -g grunt-cli
$ npm install


# Build the distribution

$ grunt
```
_or `grunt watch` to continuously build._

##### Grunt Tasks

 * Compile `src/css/style.less` and other LESS and CSS files in `src/css/`
 * Any CSS is combed, linted, prefixed, then compiled with `css/style.css`
 * `css/style.css` is minified into `style.css`
 * Images in `src/img/` are compressed and copied to `img`
 * Theme JavaScript and other js files in `src/js/` are linted, minified, and combined into `js/main.js`

##### i18n (_internationalization_)

To generate a `.pot` language file you must have xgettext installed. On OSX using homebrew run `brew install gettext && brew link gettext --force` to install. Run `grunt i18n` to generate language files.


## Getting Involved

Want to report a bug, request a feature, or help me build this project? The more the merrier!  🐞

Many thanks to the [Ghost](http://ghost.org) & [WordPress](http://wordpress.org) teams, as well as the [Underscores \_s](http://underscores.me/) contributers, and [kvendrik](https://github.com/kvendrik/responsive-images.js).  ☄️

Built using all of the above.  ⛄️


## 🏎  Roadmap
 * Update Casper WP to match the updated Ghost version - _Casper 2!_
 * Implement an update mechanism to pull changes from the Ghost project to keep the development in sync


## License

[GPL v2.0](http://www.gnu.org/licenses/gpl-2.0.html) © [Lacy Morrow](http://lacymorrow.com)

All assets licensed under a GPL-compatible license.
