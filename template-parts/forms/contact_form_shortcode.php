<?php get_template_part('template-parts/forms/reCaptchaValidation'); ?>

<div class="standard_form_container">
    <form class="contact_form_container shortcode_contact_form_container" id="ContactForm" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
        <input type=hidden name="oid" value="00D4P000000igAs">
        <input type="hidden" name="retURL" value="/thank-you/">

        <!--  ----------------------------------------------------------------------  -->
        <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
        <!--  these lines if you wish to test in debug mode.                          -->
        <!--  <input type="hidden" name="debug" value=1>                              -->
        <!--  <input type="hidden" name="debugEmail"                                  -->
        <!--  value="naveen@eliterehabplacement.com">                                 -->
        <div class="standard_form short_code_standard_form">
            <fieldset class="standard_form short_code_standard_form padding2520">
                <div class="standard_form_first_last_row shortcode_standard_form_first_last_row footer_form_row">
                    <div class="standard_form_input shortcode_standard_form_input">
                        <input placeholder="First Name*" id="dtqxyurf" class="contact_us_form_fn" maxlength="50" name="dtqxyurf" size="20" type="text">
                    </div>
                    <div class="standard_form_input shortcode_standard_form_input">
                        <input placeholder="Last Name*" id="shbousja" class="contact_us_form_ln" maxlength="50" name="shbousja" size="20" type="text">
                    </div>
                </div>
                <div class="standard_form_email_phone_row shortcode_standard_form_email_phone_row footer_form_row">
                    <div class="standard_form_input shortcode_standard_form_input">
                        <input placeholder="Email*" id="mgkbysfp" class="contact_us_form_em" maxlength="80" name="email" size="20" type="text">
                    </div>

                    <div class="standard_form_input shortcode_standard_form_input">
                        <input placeholder="Phone*" id="hwzqcmxh" class="contact_us_form_ph" maxlength="40" name="hwzqcmxh" size="20" type="tel">
                    </div>
                </div>
                <input type="hidden" id="lead_source" name="lead_source" value="<?php echo get_field('site_name', 'option') ?>">
                <input type="hidden" id="00N4P000009WDIn" name="00N4P000009WDIn" value="Web">
                <input type="hidden" id="00N4P000009WDIu" maxlength="255" name="00N4P000009WDIu" value="SS Website">
                <input type="hidden" id="00N4P000009WDGc" name="00N4P000009WDGc" value="SS Contact Form 4">

                <!-- <div class="g-recaptcha" data-sitekey="6LdIKsQZAAAAAAuzI_j8PaADmNKDbAQR3oCw7wDF" data-callback="recaptcha_callback"></div>
                <br /> -->

                <div class="standard_form_submit_btn_container shortcode_standard_form_submit_btn_container">
                    <input class="sunshine_form_submit_btn abovefoldformsubmission standard_form_submit_btn contactFormCta submit_button" value="Request More Info" type="submit" name="submitBtn">
                </div>
            </fieldset>
        </div>
    </form>
</div>