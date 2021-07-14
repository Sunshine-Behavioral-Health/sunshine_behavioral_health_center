<script>
    jQuery(document).ready(function($) {

        $(".custom_experience_form_group input:radio").change(function() {
            if ($(this).val() == 'myself') {
                $(".customize_experience_form_bottom_wrapper").addClass("hide");
                $("#customize_experience_form_bottom_wrapper_1").removeClass("hide");
            } else if ($(this).val() == 'loved_one') {
                $(".customize_experience_form_bottom_wrapper").addClass("hide");
                $("#customize_experience_form_bottom_wrapper_2").removeClass("hide");
            } else if ($(this).val() == 'patient') {
                $(".customize_experience_form_bottom_wrapper").addClass("hide");
                $("#customize_experience_form_bottom_wrapper_3").removeClass("hide");
            } else {
                $(".customize_experience_form_bottom_wrapper").addClass("hide");
            }
        });


        $("#myself_select").change(function() {
            if ($(this).val() !== '') {
                $('#customize_experience_submit').removeClass("hide")
            }
            let mySelfSelectValue = $('#myself_select :selected').text();
            if (mySelfSelectValue == "not sure I have a problem") {
                $('#customize_experience_submit').attr("href", "/myself_not_sure_have_problem")
            } else if (mySelfSelectValue == "considering making a change") {
                $('#customize_experience_submit').attr("href", "/myself_considering_change")
            } else if (mySelfSelectValue == "ready to make a change") {
                $('#customize_experience_submit').attr("href", "/myself_ready_make_change")
            } else if (mySelfSelectValue == "on my way to recovery") {
                $('#customize_experience_submit').attr("href", "/myself_on_way_to_recovery")
            } else if (mySelfSelectValue == "in recovery") {
                $('#customize_experience_submit').attr("href", "/myself_in_recovery")

            }
        });


        $("#loved_one_options_primary").change(function() {
            if ($('loved_one_options_primary').val() !== '' && $('#loved_one_options_secondary').val() !== '') {
                $('#customize_experience_submit').removeClass("hide")
            }
        });

        $("#loved_one_options_secondary").change(function() {
            if ($(this).val() !== '' && $('#loved_one_options_primary').val() !== '') {
                $('#customize_experience_submit').removeClass("hide")
            }
            let lovedOnePrimarySelectValue = $('#loved_one_options_primary :selected').text();
            let lovedOneSecondarySelectValue = $('#loved_one_options_secondary :selected').text();
            if (lovedOnePrimarySelectValue == "child") {
                if (lovedOneSecondarySelectValue == "may be using") {
                    $('#customize_experience_submit').attr("href", "/child_may_beusing")
                } else if (lovedOneSecondarySelectValue == "are using") {
                    $('#customize_experience_submit').attr("href", "/child_are_using")
                } else if (lovedOneSecondarySelectValue == "may relapse") {
                    $('#customize_experience_submit').attr("href", "/child_may_replapse")
                }
            } else if (lovedOnePrimarySelectValue == "partner") {
                if (lovedOneSecondarySelectValue == "may be using") {
                    $('#customize_experience_submit').attr("href", "/partner_may_be_using")
                } else if (lovedOneSecondarySelectValue == "are using") {
                    $('#customize_experience_submit').attr("href", "/partner_are_using")
                } else if (lovedOneSecondarySelectValue == "may relapse") {
                    $('#customize_experience_submit').attr("href", "/partner_may_relapse")
                }
            } else if (lovedOnePrimarySelectValue == "family member") {
                if (lovedOneSecondarySelectValue == "may be using") {
                    $('#customize_experience_submit').attr("href", "/family_member_may_be_using")
                } else if (lovedOneSecondarySelectValue == "are using") {
                    $('#customize_experience_submit').attr("href", "/family_member_are_using")
                } else if (lovedOneSecondarySelectValue == "may relapse") {
                    $('#customize_experience_submit').attr("href", "/family_member_may_relapse")
                }
            } else if (lovedOnePrimarySelectValue == "friend") {
                if (lovedOneSecondarySelectValue == "may be using") {
                    $('#customize_experience_submit').attr("href", "/friend_may_be_using")
                } else if (lovedOneSecondarySelectValue == "are using") {
                    $('#customize_experience_submit').attr("href", "/friend_are_using")
                } else if (lovedOneSecondarySelectValue == "may relapse") {
                    $('#customize_experience_submit').attr("href", "/friend_may_relapse")
                }
            }
        });

        $('#customize_experience_submit').attr("target", "");

        $('.customize_experience_reset_btn').click(function() {
            $('.customize_experience_form_wrapper').trigger("reset");
            $('#customize_experience_submit').addClass("hide");
            $('#customize_experience_form_bottom_wrapper_1').addClass("hide");
            $('#customize_experience_form_bottom_wrapper_2').addClass("hide");
            $('#customize_experience_form_bottom_wrapper_3').addClass("hide");
            console.log("form reset")
        });
    });
</script>