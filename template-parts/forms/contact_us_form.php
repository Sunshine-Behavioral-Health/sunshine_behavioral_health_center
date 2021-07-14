<?php get_template_part('template-parts/forms/reCaptchaValidation'); ?>


<section id="insurance" class="bg-gray">
    <div class="container">
        <div class="row  justify-content-md-center">
            <div class="form-style-5 insuranceVerification_form">
                <form id="InsuranceForm" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

                    <input type=hidden name="oid" value="00D4P000000igAs">
                    <input type="hidden" name="retURL" value="/thank-you/">

                    <fieldset>
                        <div class="contact_us_form_container">
                            <div class="contact_us_field_wrapper">
                                <label for="dtqxyurf">First Name<span class="form_required">*</span></label>
                                <input id="dtqxyurf" class="contact_us_form_fn" maxlength="50" name="dtqxyurf" size="20" type="text">
                            </div>

                            <div class="contact_us_field_wrapper">
                                <label for="shbousja">Last Name*</label>
                                <input id="shbousja" class="contact_us_form_ln" maxlength="50" name="shbousja" size="20" type="text">
                            </div>

                            <div class="contact_us_field_wrapper">
                                <label for="mgkbysfp">Email*</label>
                                <input id="mgkbysfp" class="contact_us_form_em" maxlength="80" name="email" size="20" type="text">
                            </div>

                            <div class="contact_us_field_wrapper">
                                <label for="phone">Phone:*</label>
                                <input id="hwzqcmxh" class="contact_us_form_ph" maxlength="40" name="hwzqcmxh" size="20" type="text">
                            </div>


                            <label class="contact_text_area_span_label" for="">Additional Notes:</label>
                            <textarea id="00N4P000009WDFw" name="00N4P000009WDFw" class="contact_text_area" type="text"></textarea>
                            <div class="contact_submit_container">
                                <input type="hidden" id="lead_source" name="lead_source" value="<?php echo get_field('site_name', 'option') ?>">
                                <input type="hidden" id="00N4P000009WDIn" name="00N4P000009WDIn" value="Web">
                                <input type="hidden" id="00N4P000009WDIu" maxlength="255" name="00N4P000009WDIu" value="SS Website">
                                <input type="hidden" id="00N4P000009WDGc" name="00N4P000009WDGc" value="SS Contact Form 2">

                                <!-- <div class="g-recaptcha" data-sitekey="6LdIKsQZAAAAAAuzI_j8PaADmNKDbAQR3oCw7wDF" data-callback="recaptcha_callback"></div>
                                <br /> -->
                                <input class="sunshine_form_submit_btn landingpageformsubmisison1 contact_form_submit submit_button" type="submit" name="submitBtn" value="Submit">
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div> <!-- END row-->
    </div> <!-- END container-->
</section>