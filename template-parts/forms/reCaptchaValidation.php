<?php

$publicKey = "6LdIKsQZAAAAAAuzI_j8PaADmNKDbAQR3oCw7wDF";
$secretKey = "6LdIKsQZAAAAAG8Fae6SHtBr5Eou4t-r3g6SQE2w";
$url = "https://www.google.com/recaptcha/api/siteverify";

$validationPassBoolean = false;


if (array_key_exists('submit', $_POST)) {
    $response_key = $_POST['g-recaptcha-response'];
    $response = file_get_contents($url . '?secret=' . $secretKey . '&response=' . $response_key . '&remoteip=' . $_SERVER['REMOTE_ADDR']);
    $response = json_decode($response);

    if ($response->success == 1) {
        $validationPassBoolean = true;
    } else {

        $validationPassBoolean = false;
    }
}
?>


<script>
    jQuery(document).ready(function($) {
        function recaptcha_callback() {
            $('.sunshine_form_submit_btn').removeAttr('disabled');
        };
        window.recaptcha_callback = recaptcha_callback
    });
</script>