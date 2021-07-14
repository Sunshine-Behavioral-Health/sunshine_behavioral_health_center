<?php

/**
 * Mountain Springs functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sbh_center
 */


function my_scripts()
{
	wp_enqueue_script('compiledJs', get_template_directory_uri() . '/js/main-min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'my_scripts');


//Mega Menu
// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
	$args['container'] = false;
	return $args;
}
// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
	return is_array($var) ? array() : '';
}

add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's


// Google fonts call in inc/Componenet.php in array


define('MOUNTAIN_SPRINGS_MINIMUM_WP_VERSION', '4.5');
define('MOUNTAIN_SPRINGS_MINIMUM_PHP_VERSION', '7.0');

// Bail if requirements are not met.
if (version_compare($GLOBALS['wp_version'], MOUNTAIN_SPRINGS_MINIMUM_WP_VERSION, '<') || version_compare(phpversion(), MOUNTAIN_SPRINGS_MINIMUM_PHP_VERSION, '<')) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Setup autoloader (via Composer or custom).
if (file_exists(get_template_directory() . '/vendor/autoload.php')) {
	require get_template_directory() . '/vendor/autoload.php';
} else {
	/**
	 * Custom autoloader function for theme classes.
	 *
	 * @access private
	 *
	 * @param string $class_name Class name to load.
	 * @return bool True if the class was loaded, false otherwise.
	 */
	function _sbh_center_autoload($class_name)
	{
		$namespace = 'WP_Rig\WP_Rig';

		if (strpos($class_name, $namespace . '\\') !== 0) {
			return false;
		}

		$parts = explode('\\', substr($class_name, strlen($namespace . '\\')));

		$path = get_template_directory() . '/inc';
		foreach ($parts as $part) {
			$path .= '/' . $part;
		}
		$path .= '.php';

		if (!file_exists($path)) {
			return false;
		}

		require_once $path;

		return true;
	}
	spl_autoload_register('_sbh_center_autoload');
}

// Load the `sbh_center()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func('WP_Rig\WP_Rig\sbh_center');


if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'menu_title'	=> 'Post Settings',
		'menu_slug'		=> 'post-settings',
		'capability'	=> 'edit_posts',
		'parent_slug'	=> 'edit.php',
		'position'		=> 'false',
		'icon_url'		=> 'false',
	));
}


//Remove all classes and IDs from Nav Menu
function wp_nav_menu_remove($var)
{
	return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter('nav_menu_item_id', 'wp_nav_menu_remove', 100, 1);


//Disables dashicons.min.css
function wpdocs_dequeue_dashicon()
{
	if (current_user_can('update_core')) {
		return;
	}
	wp_deregister_style('dashicons');
}
add_action('wp_enqueue_scripts', 'wpdocs_dequeue_dashicon');

//Disables genericons.css
function dequeue_my_css()
{
	wp_dequeue_style('genericons');
	wp_deregister_style('genericons');
}
add_action('wp_enqueue_scripts', 'dequeue_my_css', 100);


//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);



// Disables WP Emojis
function disable_emoji_feature()
{

	// Prevent Emoji from loading on the front-end
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');

	// Remove from admin area also
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('admin_print_styles', 'print_emoji_styles');

	// Remove from RSS feeds also
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');

	// Remove from Embeds
	remove_filter('embed_head', 'print_emoji_detection_script');

	// Remove from emails
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

	// Disable from TinyMCE editor. Currently disabled in block editor by default
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');

	/** Finally, prevent character conversion too
	 ** without this, emojis still work 
	 ** if it is available on the user's device
	 */

	add_filter('option_use_smilies', '__return_false');
}

function disable_emojis_tinymce($plugins)
{
	if (is_array($plugins)) {
		$plugins = array_diff($plugins, array('wpemoji'));
	}
	return $plugins;
}

add_action('init', 'disable_emoji_feature');



// register a mobile menu
function wdm_register_mobile_menu()
{
	add_theme_support('nav-menus');
	register_nav_menus(array('mobile-menu' => __('Mobile Menu', 'wdm')));
}
add_action('init', 'wdm_register_mobile_menu');


//custom blog post excerpt
add_filter('excerpt_length', function ($length) {
	return 50;
});

// Gets shortcodes from template parts
get_template_part('template-parts/shortcodes');


function get_related_author_posts()
{
	global $authordata, $post;
	$authors_posts = get_posts(array('author' => $authordata->ID, 'post__not_in' => array($post->ID), 'posts_per_page' => 3));
	$output = '<ul>';
	foreach ($authors_posts as $authors_post) {
		$output .= '<li><a href="' . get_permalink($authors_post->ID) . '">' .  apply_filters('the_title', $authors_post->post_title, $authors_post->ID)  .  '</a></li>';
	}
	$output .= '</ul>';
	return $output;
}



/* Create Medical Review User Role */
add_role(
	'medical_reviewer', //  System name of the role.
	__('Medical Reviewer'), // Display name of the role.
	array(
		'read'  => true,
		'delete_posts'  => false,
		'delete_published_posts' => false,
		'edit_posts'   => true,
		'publish_posts' => true,
		'upload_files'  => false,
		'edit_pages'  => true,
		'edit_published_pages'  =>  true,
		'publish_pages'  => false,
		'delete_published_pages' => false, // This user will NOT be able to  delete published pages.
	)
);

function cloneRole()
{
	global $wp_roles;
	if (!isset($wp_roles))
		$wp_roles = new WP_Roles();

	$adm = $wp_roles->get_role('editor');

	$wp_roles->add_role('author+', 'Author+', $adm->capabilities);
	$wp_roles->add_role('medical_reviewer+', 'MedicalReviewer+', $adm->capabilities);
}

// Shortens string to variable number of words
function shorten_string($sentence, $count)
{
	preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
	return $matches[0];
}

// ACF Page Excerpt
function wp_trim_excerpt_modified($text, $content_length = 55, $remove_breaks = false)
{
	if ('' != $text) {
		$text = strip_shortcodes($text);
		$text = excerpt_remove_blocks($text);
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]&gt;', $text);
		$num_words = $content_length;
		$more = $excerpt_more ? $excerpt_more : null;
		if (null === $more) {
			$more = __('&hellip;');
		}
		$original_text = $text;
		$text = preg_replace('@<(script|style)[^>]*?>.*?</\\1>@si', '', $text);

		// Here is our modification
		// Allow <p> and <strong>
		$text = strip_tags($text, '<p>,<strong>');

		if ($remove_breaks)
			$text = preg_replace('/[\r\n\t ]+/', ' ', $text);
		$text = trim($text);
		if (strpos(_x('words', 'Word count type. Do not translate!'), 'characters') === 0 && preg_match('/^utf\-?8$/i', get_option('blog_charset'))) {
			$text = trim(preg_replace("/[\n\r\t ]+/", ' ', $text), ' ');
			preg_match_all('/./u', $text, $words_array);
			$words_array = array_slice($words_array[0], 0, $num_words + 1);
			$sep = '';
		} else {
			$words_array = preg_split("/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY);
			$sep = ' ';
		}
		if (count($words_array) > $num_words) {
			array_pop($words_array);
			$text = implode($sep, $words_array);
			$text = $text . $more;
		} else {
			$text = implode($sep, $words_array);
		}
	}
	return $text;
}


// Disables Gravity Forms from being able to generate posts:
add_filter('gform_disable_post_creation', 'disable_post_creation', 10, 3);
function disable_post_creation($is_disabled, $form, $entry)
{
	return true;
}
