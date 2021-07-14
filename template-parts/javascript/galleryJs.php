<?php ?>

<script>
    jQuery(document).ready(function($) {
        $('.gallery_image').click(function() {
            let clickedGalleryImageSrc = $("img", this).attr('src');
            console.log(clickedGalleryImageSrc)
            $('.three_column_gallery_shortcode_popup_container img').attr('src', clickedGalleryImageSrc);
            console.log("success")
            $('.three_column_gallery_shortcode_popup_container').removeClass('hide');

            $('.two_column_gallery_shortcode_popup_container img').attr('src', clickedGalleryImageSrc);
            console.log("success")
            $('.two_column_gallery_shortcode_popup_container').removeClass('hide');

        });


        $('.three_column_gallery_shortcode_popup_container').click(function() {
            $('.three_column_gallery_shortcode_popup_container').addClass('hide');
        });

        $('.two_column_gallery_shortcode_popup_container').click(function() {
            $('.two_column_gallery_shortcode_popup_container').addClass('hide');
        });

    });
</script>