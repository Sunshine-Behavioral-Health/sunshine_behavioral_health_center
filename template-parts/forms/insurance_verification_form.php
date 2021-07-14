<section id="insurance" class="bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2><a class="adjusted-anchor"></a>Verify Your Insurance</h2>
                <p style="text-align: center;">Fill this form and one of our representatives will check your benefits with
                    your insurance.</p>
            </div>
        </div>
        <div class="row  justify-content-md-center">
            <div class="form-style-5 insuranceVerification_form">
                <form id="InsuranceForm" action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" onsubmit="return insuranceFormValidation()" method="POST">
                    <input type=hidden name="oid" value="00D4P000000igAs">
                    <input type="hidden" name="retURL" value="/thank-you/">

                    <!--  ----------------------------------------------------------------------  -->
                    <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
                    <!--  these lines if you wish to test in debug mode.                          -->
                    <!--  <input type="hidden" name="debug" value=1>                              -->
                    <!--  <input type="hidden" name="debugEmail"                                  -->
                    <!--  value="naveen@eliterehabplacement.com">                                 -->

                    <fieldset>
                        <div class="insurance_form_section_1">
                            <legend><span class="c">1) </span>Contact Info</legend>
                            <div class="insurance_form_section_1_inputs">
                                <input placeholder="First Name*" id="00N4P000009WDGm" maxlength="50" name="00N4P000009WDGm" size="20" type="text">
                                <input placeholder="Last Name*" id="00N4P000009WDGn" maxlength="50" name="00N4P000009WDGn" size="20" type="text">
                                <input placeholder="Email*" id="emailText" maxlength="80" name="email" size="20" type="text">
                                <input placeholder="Phone:*" id="phone" maxlength="40" name="phone" size="20" type="text">
                            </div>

                        </div>
                        <div class="insurance_form_section_2">
                            <legend><span class="c">2) </span>Patient Info</legend>
                            <div class="insurance_form_section_2_inputs">
                                <input placeholder="First Name" id="first_name" maxlength="50" name="first_name" size="20" type="text">

                                <input placeholder="Last Name" id="last_name" maxlength="50" name="last_name" size="20" type="text">

                                <input placeholder="Client DOB:" id="00N4P000009WDIi" maxlength="50" name="00N4P000009WDIi" size="20" type="text">

                                <input placeholder="Subscriber First Name:" id="00N4P000009WDJP" maxlength="50" name="00N4P000009WDJP" size="20" type="text">

                                <input placeholder="Subscriber Last Name:" id="00N4P000009WDJQ" maxlength="50" name="00N4P000009WDJQ" size="20" type="text">

                                <input placeholder="Subscriber DOB:" id="00N4P000009WDJN" maxlength="255" name="00N4P000009WDJN" size="20" type="text">

                                <input placeholder="SSN (Last 4):" id="00N4P000009WDJA" maxlength="255" name="00N4P000009WDJA" size="20" type="text">
                            </div>

                        </div>
                        <div class="insurance_form_section_3">
                            <legend><span class="number">3) </span>Insurance Info</legend>
                            <div class="insurance_form_section_1_inputs">
                                <input placeholder="Insurance Providers:" id="00N4P000009WDHc" maxlength="255" name="00N4P000009WDHc" size="20" type="text">

                                <input placeholder="Insurance Policy #:" id="00N4P000009WDHa" maxlength="30" name="00N4P000009WDHa" size="20" type="text">

                                <input placeholder="Group Number:" id="00N4P000009WDHB" maxlength="255" name="00N4P000009WDHB" size="20" type="text">

                                <input placeholder="Insurance Provider Phone Number:" id="00N4P000009WDHb" maxlength="40" name="00N4P000009WDHb" onkeydown="formatPhoneOnEnter(this, event);" size="20" type="text">
                                <div class="insurance_form_textarea_button_container">
                                    <textarea placeholder="Additional Notes:" id="00N4P000009WDFw" name="00N4P000009WDFw" class="insurance_form_textarea" type="text"></textarea>


                                    <input type="hidden" id="lead_source" name="lead_source" value="<?php echo get_field('site_name', 'option') ?>">
                                    <input type="hidden" id="00N4P000009WDIn" name="00N4P000009WDIn" value="Web">
                                    <input type="hidden" id="00N4P000009WDIu" name="00N4P000009WDIu" value="WSR Website">
                                    <input type="hidden" id="00N4P000009WDGc" maxlength="255" name="00N4P000009WDGc" value="<?php echo get_field('site_name', 'option') ?> Insurance Form">

                                    <input class="landingpageformsubmisison1 insurance_form_textarea_submit" type="submit" name="submit" value="Submit">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div> <!-- END row-->
    </div> <!-- END container-->
</section>