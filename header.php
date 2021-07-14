<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<?php
	$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url, 'dev.') !== false) :	?>
		<meta name="robots" content="noindex, nofollow" />
	<?php endif; ?>



	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php echo get_field('meta') ?>
	<?php echo get_field('google_header_meta', 'option') ?>


	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Google Tag Manager -->
	<script async>
		setTimeout(function() {
			(function(w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({
					'gtm.start': new Date().getTime(),
					event: 'gtm.js'
				});
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != 'dataLayer' ? '&l=' + l : '';
				j.async = true;
				j.src =
					'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, 'script', 'dataLayer', '<?php echo get_field('google_tag_manger_tracking_id', 'option') ?>');
		}, 1000);
	</script>

	<!-- End Google Tag Manager -->

	<?php echo get_field('other_header_scripts', 'option') ?>



	<?php get_template_part('template-parts/content/cssVariables'); ?>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo get_field('google_tag_manger_tracking_id', 'option') ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<?php get_template_part('template-parts/header/navigation'); ?>


		</header><!-- #masthead -->