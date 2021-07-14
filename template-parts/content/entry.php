<?php

/**
 * Template part for displaying a post
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

?>

<article class="blog_page_article" id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
	<div class="blog_page_article_thumbnail">
		<div class="blog_page_article_thumbnail_date">
			<?php echo get_the_date(); ?>
		</div>
		<div class="blog_page_article_thumbnail_image">
			<?php get_template_part('template-parts/content/entry_thumbnail', get_post_type()); ?>
		</div>

	</div>
	<div class="blog_page_article_body">
		<?php
		get_template_part('template-parts/content/entry_header', get_post_type());

		get_template_part('template-parts/content/entry_summary', get_post_type());

		// get_template_part('template-parts/content/entry_footer', get_post_type());
		?>
		<div class="blog_page_readMore">
			<a href="<?php echo the_permalink(); ?>"> Read More</a>

		</div>
	</div>


</article><!-- #post-<?php the_ID(); ?> -->
<div class="blog_page_separator"></div>

<?php
if (is_singular(get_post_type())) {
	// Show post navigation only when the post type is 'post' or has an archive.
	if ('post' === get_post_type() || get_post_type_object(get_post_type())->has_archive) {
		the_post_navigation(
			[
				'prev_text' => '<div class="post-navigation-sub"><span>' . esc_html__('Previous:', 'sbh_center') . '</span></div>%title',
				'next_text' => '<div class="post-navigation-sub"><span>' . esc_html__('Next:', 'sbh_center') . '</span></div>%title',
			]
		);
	}

	// Show comments only when the post type supports it and when comments are open or at least one comment exists.
	// if (post_type_supports(get_post_type(), 'comments') && (comments_open() || get_comments_number())) {
	// 	comments_template();
	// }
}
