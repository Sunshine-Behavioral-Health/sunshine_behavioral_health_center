<?php

/**
 * Template part for displaying the footer info
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

?>

<div>
	<section class="footer_container home_footer_container">
		<div class="footer_logo_and_contact_info_container">
			<div class="contact_information_container footer_contact_information">
				<h4>CONTACT INFORMATION</h4>
				<div class="footer_contact_address_container">
					<img loading="lazy" src="<?php $uploadDir = wp_upload_dir();
												echo $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/address_icon_white.png' ?>" alt="">
					<div class="contact_information_content footer_address_content">
						<a href="<?php echo get_field('footer_contract_information_-_address_url', 'option') ?>">
							<p><?php echo get_field('footer_contact_information_-_address', 'option') ?></p>
						</a>
					</div>
				</div>
				<div class="footer_contact_phone_container">
					<img loading="lazy" src="<?php $uploadDir = wp_upload_dir();
												echo $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/phone_icon_white.png' ?>" alt="">
					<a class="contact_information_content footerPhone" href="">949-276-2886</a>
				</div>

				<div class="footer_contact_email_container">
					<img loading="lazy" src="<?php $uploadDir = wp_upload_dir();
												echo $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/email_icon_white.png' ?>" alt="">
					<a class="contact_information_content" href="mailto:contact@<?php echo get_field('site_domain', 'option') ?>.com">contact@<?php echo get_field('site_domain', 'option') ?>.com</a>
				</div>
				<div class="privacy_links_container">
					<div class="footer_home_terms_and_privacy">
						<a href="/privacy-policy/">Privacy Policy</a>
						<span>|</span>
						<?php if (get_field('terms_of_service_link', 'option')) : ?>
							<a href="<?php echo get_field('terms_of_service_link', 'option') ?>">Terms of Service</a>
						<?php else :  ?>
							<a href="/terms-of-use/">Terms of Service</a>
						<?php endif; ?>
					</div>
				</div>
			</div>

		</div>

		<div class="blog_footer_container">
			<h3>Recent Blog Posts</h3>
			<ul>
				<?php $posts_query = new \WP_Query('posts_per_page=5');
				while ($posts_query->have_posts()) : $posts_query->the_post();
				?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php endwhile;
				wp_reset_query(); ?>
			</ul>

			<div class="footer_social_media_container">
				<?php
				if (have_rows('social_media', 'option')) :
					while (have_rows('social_media', 'option')) : the_row();
				?>
						<a href="<?php echo get_sub_field('link', 'option') ?>">
							<img src="<?php echo get_sub_field('icon', 'option')['url'] ?>" alt="" loading="lazy">
						</a>
				<?php
					endwhile;
				endif;
				?>


			</div>
		</div>

		<div class="footer_badges_container">
			<div class="footer_badge">
				<?php echo get_field('legitscript_html', 'option') ?>
			</div>

			<?php
			if (have_rows('footer_badges', 'option')) :
				while (have_rows('footer_badges', 'option')) : the_row();
			?>
					<div class="footer_badge">
						<img loading="lazy" src="<?php echo get_sub_field('badge', 'option')['url']; ?>" alt="">
					</div>
			<?php
				endwhile;
			endif;
			?>
		</div>


	</section>
	<div class="copyright_container">
		<p>&copy; <?php echo date("Y") ?> <?php echo get_field('site_name', 'option') ?> is a <a href="https://www.sunshinebehavioralhealth.com/">Sunshine Behavioral Health</a> location</p>
	</div>
</div>

<section class="mobile_bottom_cta_section hide_on_desktop">
	<div class="mobile_bottom_cta_container">
		<a href="tel:949-276-2886" class="invocaNumber cta_left mobileCtaPhone" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'mobileCtaPhone'});">949-276-2886</a>
		<a class="cta_right mobileCtaInsurance" href="<?php echo get_field('insurance_url', 'option') ?>" onclick="dataLayer.push({'event': 'insurance_click', 'shortcode_type' : 'mobileCtaInsurance'});" href="<?php echo get_field('insurance_url', 'option') ?>">Verify Insurance</a>
	</div>
</section>