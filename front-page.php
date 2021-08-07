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

<main id="primary" class="front_page home-page">
	<!-- HERO -->
	<div class="hero_container row">
		<img class="hide_on_mobile hide_on_tablet front_page_desktop_hero " src="<?= get_field('hero_image')['url'] ?>" alt="">
		<img class="hide_on_desktop show_on_tablet front_page_mobile_hero" src="<?= get_field('hero_mobile_image')['url'] ?>" alt="">
		<!-- Headline -->
		<div class="front_page_hero_content_wrapper">
			<div class="hero_headline">
				<h1><?= get_field('hero_headline') ?></h1>
			</div>

			<!-- Headline -->

			<div class="hero_cta_container">
				<?php $heroCTA1 = get_field('hero_cta_top');
				$heroCTA2 = get_field('hero_cta_bottom'); ?>

				<div class="cta_btn sbh_center_btn sbh_center_btn_hero hero_cta">
					<a href="tel:949-276-2886" class="hpHeroPhone hide_on_mobile invocaNumber" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'hpHeroPhone'});"><?= $heroCTA1['title'] ?></a>
					<a href="tel:949-276-2886" class="mobileHeroPhone hide_on_desktop invocaNumber" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'mobileHeroPhone'});"><?= $heroCTA1['title'] ?></a>
				</div>

				<div class="cta_btn home_hero_btn_insurance hero_cta">
					<a href="<?= $heroCTA2['url'] ?>" class="hpHeroInsurance hide_on_mobile" onclick="dataLayer.push({'event': 'insurance_click', 'shortcode_type' : 'hpHeroInsurance'});"><?= $heroCTA2['title'] ?></a>
					<a href="<?= $heroCTA2['url'] ?>" class="mobileHeroInsurance hide_on_desktop" onclick="dataLayer.push({'event': 'insurance_click', 'shortcode_type' : 'mobileHeroInsurance'});"><?= $heroCTA2['title'] ?></a>
				</div>
			</div>
		</div>

	</div>
	<!-- End Hero -->

	<?php get_template_part('template-parts/content/homeCovidNotice'); ?>

	<!-- Icon, Headline, Content  - Columns  - 50/50 -->
	<section class="wrapper m-t-20">
		<h2 class="text-center"><?= get_field('inpatient_treatment_headline') ?></h2>
		<div class="row">
			<?php foreach (get_field('inpatient_treatment_programs') as $column) : ?>
				<div class="col-xs-12 col-sm-6 col-md-3 flex flex-column align-center">
					<a href="<?= $column['link'] ?>">
						<div class="icon_container"><img class="icon" src="<?= $column['icon']['url'] ?>"></div>
					</a>
					<h3 class="text-center"><?= $column['title'] ?></h3>
					<p class="text-center"><?= $column['content'] ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</section>


	<!-- CTA Banner -->
	<section class="background-color-secondary section-padding p-t-20 p-b-20 flex flex-column justify-center align-center">
		<h2 class="text-center color-white m-b-25"><?= get_field('interjection_cta_one_headline') ?></h2>
		<a href="tel:949-276-2886" class="invocaNumber button">949-276-2886</a>
	</section>


	<!-- Badges -->
	<section class="flex flex-wrap justify-evenly section-padding">
		<div class="flex flex-column align-center">
			<?= get_field('legitscript_html', 'option') ?>
			<p><?= get_field('badge_1_text'); ?></p>

		</div>
		<div class="flex flex-column align-center">
			<img loading="lazy" src="<?= get_field('badge_2')['url'] ?>" alt="">
			<p><?= get_field('badge_2_text'); ?></p>

		</div>
		<div class="flex flex-column align-center">
			<img loading="lazy" src="<?= get_field('badge_3')['url'] ?>" alt="">
			<p><?= get_field('badge_3_text'); ?></p>
		</div>
	</section>

	<!-- Testimonial Carousel -->
	<section>
		<div class="testimonial_bg" style="background-image: url(<?= get_field('testimonial_carousel_background_image')['url'] ?>)">
			<div class="">
				<h4><?= get_field('testimonial_headline') ?></h4>
				<div class="glide carousel<?= get_sub_field('increment') ?>">
					<div class="glide__track" data-glide-el="track">
						<ul class="glide__slides">
							<?php
							if (have_rows('testimonials')) :
								while (have_rows('testimonials')) : the_row();
							?>
									<li class="glide__slide">
										<p><?= get_sub_field('testimonial') ?></p>
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



	<!-- Services Cards -->
	<section class="services-cards section-padding">
		<h2 class="text-center">OUR SERVICES</h2>
		<div class="flex">
			<?php foreach (get_field('inpatient_cards') as $serviceCard) : ?>
				<div class="col-xs-12 col-sm-6 col-md-12 flex flex-column align-center">
					<a href="<?= $serviceCard['card_links']['url'] ?>" class="text-center block">
						<img loading="lazy" class="icon block" src="<? $serviceCard['icon']['url'] ?>" alt="">
						<h3 class="block"><?= $serviceCard['headline'] ?></h3>
					</a>
					<p>______</p>
					<p class="text-center"><?= $serviceCard['card_content'] ?></p>
					<a href="<?= $serviceCard['card_links']['url'] ?>" class="color-secondary bold text-center">Learn More</a>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<!-- Insurance Coverage Interjection -->
	<section class="healing_section">
		<div class="">
			<div class="row  healing_background">
				<h2 class="section_headline insurance_verification_headling"><?= get_field('interjection_cta_two_headline') ?></h2>
				<div class="cta_btn secondary_color_cta row interjection_cta"><a href="<?= get_field('interjection_cta_two_button')['url'] ?>" class="hpInsurance"><?= get_field('interjection_cta_two_button')['title'] ?></a></div>
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
				<div class="icon_container"><img loading="lazy" class="" src="<?= get_field('addiction_treatment_headline_icon')['url'] ?>"></div>
				<h4><?= get_field('addiction_treatment_headline') ?></h4>
			</div>
			<div class="row">
				<div class="col-md-6">
					<?php
					if (have_rows('addiction_treatment_column_one')) :
						while (have_rows('addiction_treatment_column_one')) : the_row();
					?>
							<div class="row resource_content">
								<h3><?= get_sub_field('headline') ?></h3>
								<p><?= get_sub_field('content') ?></p>
								<div class="resource_content_cta"><a href="<?= get_sub_field('link') ?>"><?= get_sub_field('link_text') ?></a></div>
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
								<h3><?= get_sub_field('headline') ?></h3>
								<p><?= get_sub_field('content') ?></p>
								<div class="resource_content_cta"><a href="<?= get_sub_field('link') ?>"><?= get_sub_field('link_text') ?></a></div>
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
	<?= do_shortcode('[staff_home]'); ?>


	<!-- Substance Information -->
	<section>
		<div class="substance_bg" style="background-image: url(<?= get_field('substance_abuse_background_image')['url'] ?>)">
			<h2 class="substance_headline"><?= get_field('substance_abuse_information_headline'); ?></h2>
			<div class="row substance_info_width">
				<?php
				if (have_rows('substance_abuse_cards')) :
					while (have_rows('substance_abuse_cards')) : the_row();
				?>
						<div class="substance_individual_card">
							<div class="substance_abuse_top">
								<a href="<?= get_sub_field('link') ?>">
									<div class="icon_container"><img loading="lazy" class="icon " src="<?= get_sub_field('icon')['url'] ?>"></div>
								</a>

								<h3><?= get_sub_field('headline') ?></h3>
								<p class="substance_headline_underline">______</p>
							</div>
							<p><?= get_sub_field('content') ?></p>
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
