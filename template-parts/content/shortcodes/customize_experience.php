<?php get_template_part('template-parts/javascript/customizeExperienceJs'); ?>



<section class="customize_experience_section">
    <div class="customize_experience_container">
        <button class="customize_experience_reset_btn"><img src="<?php $uploadDir = wp_upload_dir();
                                                                    echo $uploadDir['baseurl'] . '/sbh_center_theme_images/icons/reset_white.png' ?>" alt=""><span>Reset</span></button>
        <h4>Customize Your Experinece</h4>
        <form class="customize_experience_form_wrapper">
            <h5>I'm here for:</h5>
            <div class="customize_experience_form_top">
                <div class="custom_experience_form_group">
                    <input type="radio" id="custom_experience_myself" name="contact" value="myself">
                    <label for="custom_experience_myself">myself</label>
                </div>

                <div class="custom_experience_form_group">
                    <input type="radio" id="custom_experience_lovedOne" name="contact" value="loved_one">
                    <label for="custom_experience_lovedOne">a loved one</label>
                </div>

                <div class="custom_experience_form_group">
                    <input type="radio" id="custom_experience_patient" name="contact" value="patient">
                    <label for="custom_experience_patient">a patient</label>
                </div>
            </div>
            <div class="customize_experience_form_bottom">
                <div id="customize_experience_form_bottom_wrapper_1" class="customize_experience_form_bottom_wrapper hide">
                    <label for="myself_select">I am</label>
                    <select id="myself_select" name="myself_select">
                        <option value=""></option>
                        <option value="not_sure_if_problem">not sure I have a problem</option>
                        <option value="make_a_change">considering making a change</option>
                        <option value="ready_make_a_cahnge">ready to make a change</option>
                        <option value="on_way_to_recovery">on my way to recovery</option>
                        <option value="in_recovery">in recovery</option>
                    </select>
                </div>

                <div id="customize_experience_form_bottom_wrapper_2" class="customize_experience_form_bottom_wrapper hide">
                    <div class="customize_experience_label_select_wrapper">
                        <label for="loved_one_options_primary">They are my</label>
                        <select id="loved_one_options_primary" name="loved_one_options_primary">
                            <option value=""></option>
                            <option value="child">child</option>
                            <option value="partner">partner</option>
                            <option value="family_member">family member</option>
                            <option value="friend">friend</option>
                        </select>
                    </div>

                    <div class="customize_experience_label_select_wrapper">
                        <label for="loved_one_options_secondary">and </label>
                        <select id="loved_one_options_secondary" name="loved_one_options_secondary">
                            <option value=""></option>
                            <option value="may_be_using">may be using</option>
                            <option value="are_using">are using</option>
                            <option value="may_relapse">may relapse</option>
                        </select>
                    </div>

                </div>

                <!-- <div id="customize_experience_form_bottom_wrapper_3" class="customize_experience_form_bottom_wrapper hide">
                    <label for="cars">I am</label>
                    <select id="cars" name="cars">
                        <option value=""></option>
                        <option value="option_1">option 1</option>
                        <option value="option_2">option 2</option>
                    </select>
                </div> -->


                <a href="/" id="customize_experience_submit" class="hide">Build YOUR Experience</a>

            </div>
        </form>
    </div>
</section>