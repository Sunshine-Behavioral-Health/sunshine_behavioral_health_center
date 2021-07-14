<?php

/**
 * Template part for displaying a pagination
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

the_posts_pagination(
	[
		'mid_size'           => 2,
		'prev_text'          => _x('Previous', 'previous set of search results', 'sbh_center'),
		'next_text'          => _x('Next', 'next set of search results', 'sbh_center'),
		'screen_reader_text' => __('Page navigation', 'sbh_center'),
	]
);
