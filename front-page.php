<?php

/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

get_header();
get_template_part('template-parts/javascript/navigationJs');

// Use grid layout if blog index is displayed.
if (is_home()) {
	sbh_center()->print_styles('sbh_center-front-page');
}
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
			});

			glide.mount();
		}
	});
</script>

<main id="primary" class="front_page">
	<!-- HERO -->
	<div class="hero_container row">
		<img class="hide_on_mobile hide_on_tablet front_page_desktop_hero " src="<?php echo get_field('hero_image')['url'] ?>" alt="">
		<img class="hide_on_desktop show_on_tablet front_page_mobile_hero" src="<?php echo get_field('hero_mobile_image')['url'] ?>" alt="">
		<!-- Headline -->
		<div class="front_page_hero_content_wrapper">
			<div class="hero_headline">
				<h1><?php echo get_field('hero_headline') ?></h1>
			</div>

			<!-- Headline -->

			<div class="hero_cta_container">
				<?php $heroCTA1 = get_field('hero_cta_top');
				$heroCTA2 = get_field('hero_cta_bottom'); ?>

				<div class="cta_btn sbh_center_btn sbh_center_btn_hero hero_cta">
					<a href="tel:949-276-2886" class="hpHeroPhone hide_on_mobile invocaNumber" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'hpHeroPhone'});"><?php echo $heroCTA1['title'] ?></a>
					<a href="tel:949-276-2886" class="mobileHeroPhone hide_on_desktop invocaNumber" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'mobileHeroPhone'});"><?php echo $heroCTA1['title'] ?></a>
				</div>

				<div class="cta_btn home_hero_btn_insurance hero_cta">
					<a href="<?php echo $heroCTA2['url'] ?>" class="hpHeroInsurance hide_on_mobile" onclick="dataLayer.push({'event': 'insurance_click', 'shortcode_type' : 'hpHeroInsurance'});"><?php echo $heroCTA2['title'] ?></a>
					<a href="<?php echo $heroCTA2['url'] ?>" class="mobileHeroInsurance hide_on_desktop" onclick="dataLayer.push({'event': 'insurance_click', 'shortcode_type' : 'mobileHeroInsurance'});"><?php echo $heroCTA2['title'] ?></a>
				</div>
			</div>
		</div>

	</div>
	<!-- End Hero -->

	<?php get_template_part('template-parts/content/homeCovidNotice'); ?>

	<!-- Inpatient Treatment -->
	<section>
		<div class="treatment_programs_container row  width_restriction">
			<h2 class="col-12"><?php echo get_field('inpatient_treatment_headline') ?></h2>
			<div class="treatment_program_container row">

				<?php
				if (have_rows('inpatient_treatment_programs')) :
					while (have_rows('inpatient_treatment_programs')) : the_row();
				?>
						<div class="col-md-6 col-lg-3 inpatient_treatment_card">
							<a href="<?php echo get_sub_field('link') ?>">
								<div class="icon_container"><img class="icon" src="<?php echo get_sub_field('icon')['url'] ?>"></div>
							</a>
							<h3><?php the_sub_field('title') ?></h3>
							<p><?php the_sub_field('content') ?></p>
						</div>
				<?php
					endwhile;
				endif;
				?>

			</div>

		</div>
	</section>

	<!-- End Treatment -->

	<!-- Healing Interjection -->
	<section>
		<div class="">
			<div class="healing_background">
				<h2 class="section_headline healing_headline"><?php echo get_field('interjection_cta_one_headline') ?></h2>
				<?php
				$interjectionCTAOne = get_field('interjection_cta_button')
				?>
				<div class="cta_btn secondary_color_cta interjection_cta"><a class="invocaNumber hpPhone" href="<?php echo $interjectionCTAOne['url'] ?>"><?php echo $interjectionCTAOne['title'] ?></a></div>
			</div>
		</div>
	</section>

	<!-- Badges -->
	<section>
		<div class="">
			<div class="row  badge_container">
				<div class="badge_image">
					<?php echo get_field('legitscript_html', 'option') ?>
					<p><?php echo get_field('badge_1_text'); ?></p>
				</div>
				<div class="badge_image">
					<img loading="lazy" src="<?php echo get_field('badge_2')['url'] ?>" alt="">
					<p><?php echo get_field('badge_2_text'); ?></p>
				</div>
				<div class="badge_image">
					<img loading="lazy" src="<?php echo get_field('badge_3')['url'] ?>" alt="">
					<p><?php echo get_field('badge_3_text'); ?></p>
				</div>
			</div>
			<div class="badge_paragraph_container">
				<p><?php echo get_field('badge_subtext') ?></p>
			</div>
		</div>
	</section>

	<!-- Testimonial Carousel -->
	<section>
		<div class="testimonial_bg" style="background-image: url(<?php echo get_field('testimonial_carousel_background_image')['url'] ?>)">
			<div class="">
				<h4><?php echo get_field('testimonial_headline') ?></h4>
				<div class="glide carousel<?php echo get_sub_field('increment') ?>">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides">
							<?php
							if (have_rows('testimonials')) :
								while (have_rows('testimonials')) : the_row();
							?>
									<li class="glide__slide">
										<p><?php echo get_sub_field('testimonial') ?></p>
									</li>
							<?php
								endwhile;
							endif;
							?>
						</ul>
					</div>
					<div class="glide__bullets" data-glide-el="controls[nav]">
						<?php
						if (have_rows('testimonials')) :
							while (have_rows('testimonials')) : the_row();
						?>
								<button class="glide__bullet" data-glide-dir="=0"></button>
						<?php
							endwhile;
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonial Carousel END -->



	<!-- Treatment Cards -->
	<section>
		<div class="treatment_cards_container row ">
			<h2 class="col-12"><?php echo get_field('inpatient_card_headline') ?></h2>
			<div class="treatment_card_container row">

				<?php
				if (have_rows('inpatient_cards')) :
					while (have_rows('inpatient_cards')) : the_row();
				?>
						<div class="treatment_card_box">
							<a href="<?php echo get_sub_field('card_links')['url'] ?>">
								<div class="icon_container"><img loading="lazy" class="icon" src="<?php echo get_sub_field('icon')['url'] ?>" alt=""></div>
								<h3><?php echo get_sub_field('headline') ?></h3>
							</a>
							<p>______</p>
							<p class="treatment_card_paragraph"><?php echo get_sub_field('card_content') ?></p>
							<div class="row treatment_card_cta_wrapper"><a href="<?php echo get_sub_field('card_links')['url'] ?>">Learn More</a></div>
						</div>
				<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>

	<!-- Treatment card end -->

	<!-- Insurance Coverage Interjection -->
	<section class="healing_section">
		<div class="">
			<div class="row  healing_background">
				<h2 class="section_headline insurance_verification_headling"><?php echo get_field('interjection_cta_two_headline') ?></h2>
				<div class="cta_btn secondary_color_cta row interjection_cta"><a href="<?php echo get_field('interjection_cta_two_button')['url'] ?>" class="hpInsurance"><?php echo get_field('interjection_cta_two_button')['title'] ?></a></div>
			</div>
		</div>
	</section>


	<!-- Blog Posts -->
	<section class="blog_posts_section">

		<div class=" row blog_container blog_bg" style="background-image: url(
			<?php
			if (get_field('blog_background_image')) {
				echo get_field('blog_background_image')['url'];
			} else {
				$uploadDir = wp_upload_dir();
				echo $uploadDir['baseurl'] . '/sbh_center_theme_images/ocean_background.jpg';
			}


			?>)">
			<h2>OUR BLOG</h2>
			<div class="blog_post_wrapper">
				<ul>
					<?php $posts_query = new \WP_Query('posts_per_page=3');
					while ($posts_query->have_posts()) : $posts_query->the_post();
					?>
						<li>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php the_date(); ?></p>
							<p><?php the_excerpt(); ?></p>
							<a class="blog_post_cta" href="<?php the_permalink(); ?>">Read More &#187;</a>
						</li>
					<?php endwhile;
					wp_reset_query(); ?>
				</ul>
			</div>
		</div>
	</section>

	<!-- End Blog Posts -->

	<!-- Treatment Resources -->
	<section class="treatment_resources_section">
		<div class="treatment_resources_container ">
			<div class="treatment_resources_container_headline">
				<div class="icon_container"><img loading="lazy" class="" src="<?php echo get_field('addiction_treatment_headline_icon')['url'] ?>"></div>
				<h4><?php echo get_field('addiction_treatment_headline') ?></h4>
			</div>
			<div class="row">
				<div class="col-md-6">
					<?php
					if (have_rows('addiction_treatment_column_one')) :
						while (have_rows('addiction_treatment_column_one')) : the_row();
					?>
							<div class="row resource_content">
								<h3><?php echo get_sub_field('headline') ?></h3>
								<p><?php echo get_sub_field('content') ?></p>
								<div class="resource_content_cta"><a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('link_text') ?></a></div>
							</div>
							<div class="resource_content_spacer hide_on_desktop"></div>
					<?php
						endwhile;
					endif;
					?>
				</div>
				<div class="col-md-6">
					<?php
					if (have_rows('addiction_treatment_column_two')) :
						while (have_rows('addiction_treatment_column_two')) : the_row();
					?>
							<div class="row resource_content">
								<h3><?php echo get_sub_field('headline') ?></h3>
								<p><?php echo get_sub_field('content') ?></p>
								<div class="resource_content_cta"><a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('link_text') ?></a></div>
							</div>
							<div class="resource_content_spacer hide_on_desktop"></div>
					<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
		</div>
	</section>

	<!-- End Treatment Resources -->

	<!-- STAFF -->
	<?php echo do_shortcode('[staff_home]'); ?>


	<!-- Substance Information -->
	<section>
		<div class="substance_bg" style="background-image: url(<?php echo get_field('substance_abuse_background_image')['url'] ?>)">
			<h2 class="substance_headline"><?php echo get_field('substance_abuse_information_headline'); ?></h2>
			<div class="row substance_info_width">
				<?php
				if (have_rows('substance_abuse_cards')) :
					while (have_rows('substance_abuse_cards')) : the_row();
				?>
						<div class="substance_individual_card">
							<div class="substance_abuse_top">
								<a href="<?php echo get_sub_field('link') ?>">
									<div class="icon_container"><img loading="lazy" class="icon " src="<?php echo get_sub_field('icon')['url'] ?>"></div>
								</a>

								<h3><?php echo get_sub_field('headline') ?></h3>
								<p class="substance_headline_underline">______</p>
							</div>
							<p><?php echo get_sub_field('content') ?></p>
						</div>
				<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>
</main>
<?php
get_footer('home');
