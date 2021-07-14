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

<footer id="colophon" class="site-footer non_home_footer">

    <div class="banner_top_image" style="background-image: url(<?php echo get_field('above_footer_image_desktop', 'option')['url']; ?>);"></div>

    <?php get_template_part('template-parts/footer/info'); ?>

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