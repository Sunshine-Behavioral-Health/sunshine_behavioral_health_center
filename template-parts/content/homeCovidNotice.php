<?php get_template_part('template-parts/javascript/expandableRowsShortcodeJs'); ?>

<section class="covid19_section">
    <div class="covid19_container">
        <img src="<?php $uploadDir = wp_upload_dir();
                    echo $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/plus_icon_white.png' ?>" alt="">
        <h4>Get Help During COVID-19</h4>
        <div class="covid19_content hide">
            <div class="covid19_notice_body ">
                <p>With the current COVID-19 outbreak, many questions surrounding the virus arise. The safety of our staff and patients is the top priority across all of our centers. We have taken the necessary precautions to minimize the risk of exposure and transmission of the Coronavirus to those in our treatment programs, allowing them to focus on their recovery. </p>
                <p>We are here to answer your questions and alleviate any concerns. Call us at <a class="invocaNumber homeCovidPhone" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'homeCovidPhone'});" href="tel:949-276-2886">949-276-2886</a>. Do not allow COVID-19 to stop you from seeking the care you need.</p>
            </div>
            <div class="covid19_btn_container">
                <a class="invocaNumber covid19_btn_link homeCovidPhone" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'homeCovidPhone'});" href="tel:949-276-2886">Talk to Our Staff</a>
            </div>
        </div>
    </div>
</section>