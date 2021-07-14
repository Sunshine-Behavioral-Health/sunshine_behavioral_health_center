<?php

/**
 * Template part for displaying the header navigation menu
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

?>

<nav id="site-navigation" class="main-navigation nav--toggle-sub sticky_nav">
	<div class="nav_top_container">
		<div class="nav_top_wrapper">
			<div class="site_logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_field('navigation_logo', 'option')['url']; ?>" alt="">
				</a>
			</div>

			<div class="search_bar_container hide_on_desktop">
				<img src="<?php echo get_field('search_icon', 'option')['url']; ?>" alt="" class="search_bar_magnifying_glass_icon">
				<div class="search_bar_wrapper">
					<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
				</div>
			</div>
			<div class="nav_notice_and_cta_wrapper hide_on_mobile">
				<div class="covid_notice_container ">
					<a class="corona_virus_udpate" href="<?php echo get_field('covid19_link', 'option'); ?>">Our Response To The Corona Virus Health Concern
					</a>
				</div>

				<div class="navbar_cta_container">
					<a href="tel:949-276-2886" class="invocaNumber navCtaPhone" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'navCtaPhone'});">949-276-2886</a>
				</div>
			</div>
		</div>
	</div>
	<div class="nav_bottom_container">
		<div class="navigation_wrapper">
			<div class="nav_width_constrict_wrapper">
				<?php sbh_center()->display_primary_nav_menu(['menu_id' => 'primary-menu']); ?>
				<div class="search_bar_container hide_on_mobile">
					<div class="deskop_nav_icon_wrapper">
						<img src="<?php echo get_field('search_icon', 'options')['url'] ?>" alt="" class="search_bar_magnifying_glass_icon">
					</div>
					<div class="desktop_nav_search_subnav_wrapper sub_menu_wrapper">
						<div class="search_bar_wrapper_desktop">
							<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</nav><!-- #site-navigation -->




<?php


?>