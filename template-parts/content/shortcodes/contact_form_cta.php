<section class="contact_cta_section contact_form_shortcode_section shortcode_section">
    <div class="contact_form_cta_container contact_form_shortcode_container">
        <h4 class="contact_form_cta_headline">Take The First Step Towards Recovery</h4>
        <p>Talk to an Intake Coordinator</p>

        <div class="contact_form_cta_form_container contact_form_shortcode_cta_form_container">
            <?php $ctaFormShortcode = '[gravityform id="' . get_field('shortcode_form_id', 'option') . '" title="false" description="false"]';
            echo do_shortcode($ctaFormShortcode); ?>
        </div>
    </div>
</section>