Blankout
========

Blankout: a robust, responsive, Bootstrap 3-enabled theme framework for WordPress developed by Mindshare Labs as a foundation for client WordPress projects. Blankout is open source and ready to rock n’ roll on your next WP project. Blankout is lightweight and super flexible and is built to be used with the Mindshare Theme API plugin.

<img src="./screenshot.png" width="300" height="225" />
<br />

Built with love using:
* Bootstrap (Bootstrap 4 coming soon)
* FontAwesome
* jQuery
* LESS
* Mindshare Theme API

# Getting Started with Blankout

1. Rename the blankout folder to something specific to your project, e.g. `wp-content/your-theme`
1. Install Grunt/ NPM Dependencies `npm install -g grunt grunt-cli`
1. Navigate to the theme folder:cd wp-content/your-theme;
1. Run `npm install`
1. Start the Blankout 'grunt' task to watch your LESS for changes by running: `grunt`

You should see the following in terminal:
```
Running "watch" task
Waiting...
```

# Compiling LESS with Grunt

1. Open `header.less` and change the Theme Name to the name of your new theme, save the file, grunt will automatically recompile your CSS.
1. Upload the newly compiled `style.css` to the remote server.


# Structure

Blankout is laid out with the following folder structure:

```
├── css					-> all compiled CSS
├── img					-> all images
├── inc					-> folder for any includes/WP template parts
│   ├── dependencies	-> TGM Plugin Activation config
│   └── functions		-> files included in `functions.php`
├── js					-> all theme JavaScript
├── less				-> custom LESS
│   ├── bootstrap		-> vanilla (unmodified) Boostrap LESS
│   └── util			-> 3rd-party and utility LESS files
├── templates			-> custom WP page template files
└── translation			-> internationalization files
```

# Changelog

### 3.9.2
* Add responsive video embed styling
* Update Bootstrap to 3.3.7
* Move to Composer

### 3.9.1
* Add `mm.png`
* Minor Bugfixes

### 3.9
* Reorganization and cleanup
* Update branding

### 3.8.3
* Updated README
* Added nav dropdown CSS animation
* Added Back To Top CSS

### 3.8.2
* Add equalheight DIV Js function
* Update title tag output for new WP 4.1+ method
* Remove old mobile friendly meta tags

### 3.8.1
* Fix for fatal error from old versions of TGMPA library

### 3.8
* Update Bootstrap to 3.3.6
* Enable field visibility settings in Gravity Forms
* Added some Mindshare Theme API integrations to `functions.php`

### 3.7.6
* Fix for the "More Tag" on archive.php
* Add featured images to single.php 
* Better styling default comment form
* Many improvements to index.php and archive.php
* Minor styling improvements

### 3.7.5
* Add Instagram style for `mapi_social_links()`
* Update Bootstrap to 3.3.5

### 3.7.4
* Added new comments template and FB comment plugin option
* Added new blankout_nav fns
* Removed unsued image filters
* Change screen-reader-text to sr-only
* Change muted to text-muted
* Misc validation improvements
* Gravity forms CSS improvements

### 3.7.3
* Added `blankout_add_loginout_nav()` and filter `blankout_add_loginout_nav_slug` to add a login/out link to the footer nav 

### 3.7.2
* Added equal heights styling (see `less\equal-heights.less`)
* Tweaked README.md files

### 3.7.1
* Update Bootstrap to 3.3.4
* Added PHP filters for Gravity Forms to add Bootstrap classes
* Misc. minor improvements

### 3.7
* Bugfixes, minor updates and improvements
* Added styles for `mapi_social()`
* Added styles for responsive text centering
* Updated to Bootstrap 3.3.2

### 3.6.1
* Updated to Bootstrap 3.3.1
* Refactored LESS files

### 3.6
* Updated to Bootstrap 3.3.0
* Various minor improvements

### 3.5
* new CSS/LESS structure, now compiles to style.css instead of `bootstrap.css`
* Remove focus highlight from form fields
* misc bug fixes

### 3.4
* Custom post types include now commented out by default
* Completed styling for Gravity Forms
* Added style-responsive.less with template for responsive styles
* Added Blankout comment to header
* Added conditional logic for main / blog sidebars
* Added widgetized footer
* Added Chrome-compatible LESS source maps

### 3.3
* Removed fatal errors when Mindshare Theme API isn't present
* Updated Flexslider initialization to pause videos on play
* Removed wp_page_menu() fallback on header and footer menus
* Misc. bugfixes

### 3.2
* Replacing Glyphicons with FontAwesome
* Tighter integration with Flexslider
* Misc. bugfixes
