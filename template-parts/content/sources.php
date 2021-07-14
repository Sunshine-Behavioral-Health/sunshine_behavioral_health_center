<?php
get_template_part('template-parts/javascript/expandableRowsShortcodeJs');

$sitePlusIconUrl;
$uploadDir = wp_upload_dir();
$siteName = get_field('site_name', 'option');

if ($siteName == "Chapters Capistrano") : $sitePlusIconUrl = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_chapters.png';
elseif ($siteName == "Lincoln Recovery") : $sitePlusIconUrl = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_lincoln.png';
elseif ($siteName == "Monarch Shores") : $sitePlusIconUrl = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_monarch.png';
elseif ($siteName == "Mountain Springs Recovery") : $sitePlusIconUrl = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_mountain.png';
elseif ($siteName == "Willow Springs Recovery") : $sitePlusIconUrl = $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_willow.png';
endif;

?>


<?php if (get_field('references')) : ?>
    <section class="sources_section">
        <h4>Sources</h4>
        <img class="sources_plus_icon" src="<?php echo $sitePlusIconUrl; ?>" alt="">
        <div class="sources_wrapper hide">
            <?php echo get_field('references') ?>
        </div>
    </section>
<?php endif; ?>