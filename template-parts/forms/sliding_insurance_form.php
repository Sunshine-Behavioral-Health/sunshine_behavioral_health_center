<section id="insurance" class="bg-gray">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2><a class="adjusted-anchor"></a>Verify Your Insurance</h2>
            <p style="text-align: center;">Fill this form and one of our representatives will check your benefits with
                your insurance.</p>
        </div>
    </div>
    <form id="regForm InsuranceForm" action="">
        <h1>Register:</h1>
        <div class="insurance_form_section_1 formTab">
            <legend><span class="c">1) </span>Contact Info</legend>
            <div class="insurance_form_section_1_inputs">
                <input placeholder="First Name*" id="first_name" maxlength="50" name="first_name" size="20" type="text">
                <input placeholder="Last Name*" id="last_name" maxlength="50" name="last_name" size="20" type="text">
                <input placeholder="Email*" id="emailText" maxlength="80" name="email" size="20" type="text">
                <input placeholder="Phone:*" id="phone_input" maxlength="40" name="phone" size="20" type="text">
            </div>
            <div class="insurance_form_section_1_buttons">
                <button type="button" id="nextBtn" onclick="validateForm2(); nextPrev(1); ">Next</button>
            </div>
        </div>

        <div class="insurance_form_section_2 formTab">
            <legend><span class="c">2) </span>Patient Info</legend>
            <div class="insurance_form_section_2_inputs">
                <input placeholder="First Name" id="00N4P000009WDGm" maxlength="50" name="00N4P000009WDGm" size="20" type="text">

                <input placeholder="Last Name" id="00N4P000009WDGn" maxlength="50" name="00N4P000009WDGn" size="20" type="text">

                <input placeholder="Client DOB:" id="00N4P000009WDIi" maxlength="50" name="00N4P000009WDIi" size="20" type="text">

                <input placeholder="Subscriber First Name:" id="00N4P000009WDJP" maxlength="50" name="00N4P000009WDJP" size="20" type="text">

                <input placeholder="Subscriber Last Name:" id="00N4P000009WDJQ" maxlength="50" name="00N4P000009WDJQ" size="20" type="text">

                <input placeholder="Subscriber DOB:" id="00N4P000009WDJN" maxlength="255" name="00N4P000009WDJN" size="20" type="text">

                <input placeholder="SSN (Last 4):" id="00N4P000009WDJA" maxlength="255" name="00N4P000009WDJA" size="20" type="text">
            </div>
            <div class="insurance_form_section_2_buttons">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>

        </div>

        <div class="insurance_form_section_3 formTab">
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

                    <input type="hidden" id="00N4P000009WDIu" maxlength="255" name="00N4P000009WDIu" value="SS Website">
                    <input type="hidden" id="00N4P000009WDGc" name="00N4P000009WDGc" value="SS Insurance Form">
                    <div class="insurance_form_section_3_buttons">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    </div>
                    <input class="g-recaptcha landingpageformsubmisison1 insurance_form_textarea_submit" data-sitekey="6Lf307sZAAAAAMO_CnztSkvwysIFZTnyK6R-B2nB" data-callback='onSubmit' data-action='submit' type="submit" name="submit" value="Submit">
                </div>

            </div>
        </div>
        <!-- <div class="sliding_insurance_form_prev_next_containr" style="overflow:auto;">
                        <div style="float:right;">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div> -->

        <!-- Circles which indicates the steps of the form: -->
        <div class="sliding_insurance_form_indicators_containr" style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

    </form>
</section>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("formTab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("formTab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !simplesimpleValidateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function simplesimpleValidateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("formTab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }
</script>

<script>
    function onSubmit(token) {
        document.getElementById("ContactForm").submit();
    }
</script>