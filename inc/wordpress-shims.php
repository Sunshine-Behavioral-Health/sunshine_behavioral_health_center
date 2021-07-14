<?php

/**
 * Shims for recent WordPress functions
 *
 * @package sbh_center
 */

/**
 * Adds backwards compatibility for wp_body_open() introduced with WordPress 5.2
 */
if (!function_exists('wp_body_open')) {
	/**
	 * Run the wp_body_open action.
	 *
	 * @return void
	 */
	function wp_body_open()
	{
		do_action('wp_body_open');
	}
}
