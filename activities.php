<?php

/**
 * Template Name: Experiential Learning Activities
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');

sbh_center()->print_styles('sbh_center-content');

?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		var sliders = document.querySelectorAll('.glide');

		for (var i = 0; i < sliders.length; i++) {
			var glide = new Glide(sliders[i], {
				gap: 15,
				perView: 1,
				autoplay: 2500,
				hoverpause: true,
				keyboard: true,
				peek: {
					before: 100,
					after: 100
				},
			});

			glide.mount();
		}
	});
</script>

<?php get_template_part('template-parts/content/googleTranslate'); ?>
<main id="primary" class="maxWidth thank_you_page">
	<div class="custom_page_noSideBar_wrapper">
		<div class="activity_page_image_container">
			<div class="page_image">
				<img class="page_desktop_image hero_image hide_on_mobile show_on_tablet" src="<?php echo get_field('desktop_image')['url']; ?>">
				<img class="page_mobile_image hero_image hide_on_desktop hide_on_tablet" src="<?php echo get_field('mobile_image')['url']; ?>">
				<div class="page_mobile_image_text_and_cta_container">
					<h1><?php echo get_field('page_headline') ?></h1>
					<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
				</div>
			</div>
			<div class="hide_on_mobile">
				<h1><?php echo get_field('page_headline') ?></h1>
				<p class="hero_subheadline"><?php echo get_field('page_subheadline_paragraph') ?></p>
			</div>
		</div>

		<div class="page_content_below_image">
			<section class="activity_page_content_section">
				<div class="top_activity_page_content">
					<h2><?php echo get_field('page_headline'); ?></h2>
					<p><?php echo get_field('page_paragraphs') ?></p>
				</div>
			</section>
			<section class="activities_section">
				<?php
				if (have_rows('text_and_image_carousel')) :
					while (have_rows('text_and_image_carousel')) : the_row();
				?>
						<?php if (get_sub_field('gallery_left_or_right') == "Right Gallery") : ?>
							<div class="activity ">
								<div class="text_left">
									<h3><?php echo get_sub_field('gallery_text') ?></h3>
								</div>
								<div class="img_carousel_right">
									<div class="glide carousel<?php echo get_sub_field('increment') ?>">
										<div class="glide__track" data-glide-el="track">
											<ul class="glide__slides">
												<?php
												if (have_rows('gallery')) :
													while (have_rows('gallery')) : the_row();
												?>
														<li class="glide__slide"><img src="<?php echo get_sub_field('gallery_image')['url'] ?>" alt="" loading="lazy"></li>
												<?php
													endwhile;
												endif;
												?>
											</ul>
										</div>
									</div>
								</div>
							</div>

						<?php else : ?>
							<div class="activity ">
								<?php if (wp_is_mobile()) : ?>
									<div class="text_right">
										<h3><?php echo get_sub_field('gallery_text') ?></h3>
									</div>
								<?php endif; ?>
								<div class="img_carousel_left">
									<div class="glide carousel<?php echo get_sub_field('increment') ?>">
										<div class="glide__track" data-glide-el="track">
											<ul class="glide__slides">
												<?php
												if (have_rows('gallery')) :
													while (have_rows('gallery')) : the_row();
												?>
														<li class="glide__slide"><img src="<?php echo get_sub_field('gallery_image')['url'] ?>" alt="" loading="lazy"></li>
												<?php
													endwhile;
												endif;
												?>
											</ul>
										</div>
									</div>
								</div>
								<?php if (!wp_is_mobile()) : ?>
									<div class="text_right">
										<h3><?php echo get_sub_field('gallery_text') ?></h3>
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>
				<?php
					endwhile;
				endif;
				?>


			</section>
			<section class="activity_page_about_section">
				<div class="activity_page_about_container">
					<?php
					if (have_rows('learn_more_section')) :
						while (have_rows('learn_more_section')) : the_row();
					?>
							<div class="acitivty_page_about_card">
								<img src="<?php echo get_sub_field('card_image')['url'] ?>" alt="" loading="lazy">
								<div class="acitivty_page_about_card_text">
									<h5><?php echo get_sub_field('card_headline') ?></h5>
									<p><?php echo get_sub_field('card_sentance') ?>: <a href="<?php echo get_sub_field('card_link') ?>">Read More</a> </p>
								</div>

							</div>
					<?php
						endwhile;
					endif;
					?>

				</div>
			</section>

			<?php get_template_part('template-parts/content/pageDisclaimer'); ?>
		</div>



	</div>
</main>
<?php
get_footer('');
