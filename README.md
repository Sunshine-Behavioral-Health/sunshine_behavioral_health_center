# Intro

Custom theme developed by Nathan Wilson, designed by Michelle Lopez-Mckay for Sunshine Behavioral Health Rehab Centers.

# Setup Instructions

Open up terminal in `/resources` and run `npm install`. This will install all of the dependencies necessary to use gulp (task runner) to compile and minify the css and js files in the theme root under `/css` and `/js` respectively. This theme has all of the `.scss` and `.js` files under `/resources`.

TIP: `ls` in terminal lists all of the files and directories in current directory. `cd` allows you go travel into the specified directory. Example from theme root to resources: `cd resources`. 

# Adding more scss files

When the need arises to add new css for a new componenet create a new file prefixed by "_" under `/resources/scss/`, then add the file name and file path to `/resources/style.scss`. You can find examples there of how to do this. In `/resources/style.scss` remove the "_" before the file name. Gulp automatically looks at all files ending in .scss and .js. There is need to declare them individually.

# Where to find things

Most of the content for this theme is under `/template-parts/`. You'll see from there it is broken up into various parts.

All shortcodes are declared at `/template-parts/shortcodes.php`. Every shortcode has it's own file under `/template-parts/content/shortcodes/` that is pulled into `/template-parts/shortcodes.php` which is then pulled into `functions.php`.

# Universal Variables

Some things such as the colors and site name are universally controlled via Theme Settings with Advanced Custom Fields. `<?php echo get_field('site_name', 'option') ?>` returns the site name.
