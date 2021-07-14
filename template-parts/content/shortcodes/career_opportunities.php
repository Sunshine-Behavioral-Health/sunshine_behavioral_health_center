<section class="career_opportunities_shortcode_section">
		<div class="career_opportunities_shortcode_container row ">
			<h2 class="col-12"><?php echo get_field('career_opportunities_shortcode_headline') ?></h2>
			<h3><?php echo get_field('career_opportunities_shortcode_subheadline') ?></h3>
			<div class="career_opportunities_shortcode_container row">

				<?php
				if (have_rows('career_opportunities')) :
					while (have_rows('career_opportunities')) : the_row();
				?>
						<div class="col-md-3 career_opportunities_shortcode_card_container">
							<a href="<?php echo get_sub_field('center_link') ?>">
								<div class="career_opportunities_shortcode_image_container"><img class="" src="<?php echo get_sub_field('image')['url'] ?>"></div>
							</a>
							<a href="<?php echo get_sub_field('link') ?>">
								<h4 class="career_opportunities_shortcode_name"><?php the_sub_field('center_name') ?></h4>
							</a>
							<h5><?php the_sub_field('content_headline') ?></h5>
                            <p><?php the_sub_field('card_content') ?></p>
                            <a href="<?php echo get_sub_field('job_link') ?>" class="career_opportunities_shortcode_job_link_cta"><?php echo get_sub_field('job_link_text') ?></a>
						</div>
				<?php
					endwhile;
				endif;
				?>

			</div>

		</div>
	</section>