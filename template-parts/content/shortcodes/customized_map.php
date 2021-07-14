<?php
$centerSelection = get_field('customized_map_center_options');
?>

<section class="customized_map_section">
    <div class="customized_map_container">
        <div class="customized_map_wrapper">
            <?php if ($centerSelection == "Chapters Capistrano") : ?>
                <img class="customized_map_banner" src="<?php $uploadDir = wp_upload_dir();
                                                        echo $uploadDir['baseurl'] . '/sbh_center_theme_images/customized_map/customized_map_header_chapters.jpg' ?>" alt="">
                <div class="customized_map_iframe_wrapper hide_on_desktop hide_on_tablet">
                    <?php echo get_field('customized_map_iframe') ?>
                    <?php if (get_field('customized_map_legal_notice')) : ?>
                        <p class="customized_map_legal_notice">Our closest facility is in California</p>
                    <?php endif; ?>
                </div>
                <div class="customized_map_address_container" style="background-color:<?php echo "var(--chapters_primary)"; ?>">
                    <p>Address: <span>1525 Buena Vista, San Clemente, CA 92672</span></p>
                </div>
                <div class="customized_map_body_wrapper">
                    <img class="customized_map_main_image" src="<?php $uploadDir = wp_upload_dir();
                                                                echo $uploadDir['baseurl'] . '/sbh_center_theme_images/customized_map/customized_map_body_chapters.jpg' ?>" alt="">
                    <a id="customziedMapPhoneCta" class="invocaNumber customzied_map_cta customziedMapPhoneCta" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'customziedMapPhoneCta'});" href="tel:949-276-2886">Talk to Our Intake Coordinators</a>
                </div>
            <?php elseif ($centerSelection == "Lincoln Recovery") : ?>
                <img class="customized_map_banner" src="<?php $uploadDir = wp_upload_dir();
                                                        echo $uploadDir['baseurl'] . '/sbh_center_theme_images/customized_map/customized_map_header_lincoln.jpg' ?>" alt="">
                <div class="customized_map_iframe_wrapper hide_on_desktop hide_on_tablet">
                    <?php echo get_field('customized_map_iframe') ?>
                    <?php if (get_field('customized_map_legal_notice')) : ?>
                        <p class="customized_map_legal_notice">Our closest facility is in Illinois</p>
                    <?php endif; ?>
                </div>
                <div class="customized_map_address_container" style="background-color:<?php echo "var(--lincoln_primary)"; ?>">
                    <p>Address: <span>Raymond, IL</span></p>
                </div>
                <div class="customized_map_body_wrapper">
                    <img class="customized_map_main_image" src="<?php $uploadDir = wp_upload_dir();
                                                                echo $uploadDir['baseurl'] . '/sbh_center_theme_images/customized_map/customized_map_body_lincoln.jpg' ?>" alt="">
                    <a id="customziedMapPhoneCta" class="invocaNumber customzied_map_cta customziedMapPhoneCta" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'customziedMapPhoneCta'});" href="tel:949-276-2886">Talk to Our Intake Coordinators</a>
                </div>
            <?php elseif ($centerSelection == "Monarch Shores") : ?>
                <img class="customized_map_banner" src="<?php $uploadDir = wp_upload_dir();
                                                        echo $uploadDir['baseurl'] . '/sbh_center_theme_images/customized_map/customized_map_header_monarch.jpg' ?>" alt="">
                <div class="customized_map_iframe_wrapper hide_on_desktop hide_on_tablet">
                    <?php echo get_field('customized_map_iframe') ?>
                    <?php if (get_field('customized_map_legal_notice')) : ?>
                        <p class="customized_map_legal_notice">Our closest facility is in California</p>
                    <?php endif; ?>
                </div>
                <div class="customized_map_address_container" style="background-color:<?php echo "var(--monarch_primary)"; ?>">
                    <p>Address: <span>27123 Calle Arroyo #2121, San Juan Capistrano, CA 92675</span></p>
                </div>
                <div class="customized_map_body_wrapper">
                    <img class="customized_map_main_image" src="<?php $uploadDir = wp_upload_dir();
                                                                echo $uploadDir['baseurl'] . '/sbh_center_theme_images/customized_map/customized_map_body_monarch.jpg' ?>" alt="">
                    <a id="customziedMapPhoneCta" class="invocaNumber customzied_map_cta customziedMapPhoneCta" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'customziedMapPhoneCta'});" href="tel:949-276-2886">Talk to Our Intake Coordinators</a>
                </div>
            <?php elseif ($centerSelection == "Mountain Springs Recovery") : ?>
                <img class="customized_map_banner" src="<?php $uploadDir = wp_upload_dir();
                                                        echo $uploadDir['baseurl'] . '/sbh_center_theme_images/customized_map/customized_map_header_mountain.jpg' ?>" alt="">
                <div class="customized_map_iframe_wrapper hide_on_desktop hide_on_tablet">
                    <?php echo get_field('customized_map_iframe') ?>
                    <?php if (get_field('customized_map_legal_notice')) : ?>
                        <p class="customized_map_legal_notice">Our closest facility is in Monument, CO</p>
                    <?php endif; ?>
                </div>
                <div class="customized_map_address_container" style="background-color:<?php echo "var(--mountain_primary)"; ?>">
                    <p>Address: <span>1865 Woodmor Monument, CO 80132</span></p>
                </div>
                <div class="customized_map_body_wrapper">
                    <img class="customized_map_main_image" src="<?php $uploadDir = wp_upload_dir();
                                                                echo $uploadDir['baseurl'] . '/sbh_center_theme_images/customized_map/customized_map_body_mountain.jpg' ?>" alt="">
                    <a id="customziedMapPhoneCta" class="invocaNumber customzied_map_cta customziedMapPhoneCta" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'customziedMapPhoneCta'});" href="tel:949-276-2886">Talk to Our Intake Coordinators</a>
                </div>

            <?php elseif ($centerSelection == "Willow Springs Recovery") : ?>
                <img class="customized_map_banner" src="<?php $uploadDir = wp_upload_dir();
                                                        echo $uploadDir['baseurl'] . '/sbh_center_theme_images/customized_map/customized_map_header_willow.jpg' ?>" alt="">
                <div class="customized_map_iframe_wrapper hide_on_desktop hide_on_tablet">
                    <?php echo get_field('customized_map_iframe') ?>
                    <?php if (get_field('customized_map_legal_notice')) : ?>
                        <p class="customized_map_legal_notice">Our closest facility is in Texas</p>
                    <?php endif; ?>
                </div>
                <div class="customized_map_address_container" style="background-color:<?php echo "var(--willow_primary)"; ?>">
                    <p>Address: <span>11128 TX-21, Bastrop, TX 78602</span></p>
                </div>
                <div class="customized_map_body_wrapper">
                    <img class="customized_map_main_image" src="<?php $uploadDir = wp_upload_dir();
                                                                echo $uploadDir['baseurl'] . '/sbh_center_theme_images/customized_map/customized_map_body_willow.jpg' ?>" alt="">
                    <a id="customziedMapPhoneCta" class="invocaNumber customzied_map_cta customziedMapPhoneCta" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'customziedMapPhoneCta'});" href="tel:949-276-2886">Talk to Our Intake Coordinators</a>
                </div>

            <?php endif; ?>
        </div>
        <div class="customized_map_right_wrapper hide_on_mobile show_on_tablet">
            <?php echo get_field('customized_map_iframe') ?>

            <?php if (get_field('customized_map_legal_notice')) : ?>
                <?php if ($centerSelection == "Chapters Capistrano") : ?>
                    <p class="customized_map_legal_notice">Our closest facility is in California</p>
                <?php elseif ($centerSelection == "Lincoln Recovery") : ?>
                    <p class="customized_map_legal_notice">Our closest facility is in Illinois</p>
                <?php elseif ($centerSelection == "Monarch Shores") : ?>
                    <p class="customized_map_legal_notice">Our closest facility is in California</p>
                <?php elseif ($centerSelection == "Mountain Springs Recovery") : ?>
                    <p class="customized_map_legal_notice">Our closest facility is in Monument, CO</p>
                <?php elseif ($centerSelection == "Wilow Springs Recovery") : ?>
                    <p class="customized_map_legal_notice">Our closest facility is in Texas</p>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>