<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sbh_center
 */

namespace WP_Rig\WP_Rig;

?>


<footer id="colophon" class="site-footer">
    <div class="banner_top_image">
        <div class="home_page_footer_headline_form_container">
            <div class="home_page_footer_headlines_form_wrapper" style="background-image: url(<?php echo get_field('above_footer_image_desktop', 'option')['url']; ?>);">
                <div class="home_page_footer_headlines">
                    <p>At <?php echo get_field('site_name', 'option') ?>, your path to sobriety can begin today. We are available 24 hours a day, 7 days a week, at 949-276-2886. Get in touch!</p>
                    <h4>Beat Your Addiction and Start Your Healing Today</h4>
                </div>
                <div class="home_page_footer_form">
                    <h5>Have an Intake Expert Reach out to you</h5>
                    <?php $footerHomeFormShortcode = '[gravityform id="' . get_field('footer_home_form_id', 'option') . '" title="false" description="false"]';
                    echo do_shortcode($footerHomeFormShortcode); ?>
                </div>
            </div>
            <div class="home_footer_contact_wrapper">
                <?php get_template_part('template-parts/footer/info-home_page'); ?>
            </div>
        </div>
    </div>

    <script async>
        (function(i, n, v, o, c, a) {
            i.InvocaTagId = o;
            var s = n.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = ('https:' === n.location.protocol ? 'https://' : 'http://') + v;
            var fs = n.getElementsByTagName('script')[0];
            fs.parentNode.insertBefore(s, fs);
        })(window, document, 'solutions.invocacdn.com/js/pnapi_integration-latest.min.js', '<?php echo get_field('invoca_tracking_id', 'option') ?>');
    </script>

    <?php echo get_field('google_footer_meta', 'option') ?>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>