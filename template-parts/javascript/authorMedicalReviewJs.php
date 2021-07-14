<script>
    jQuery(document).ready(function($) {
        $(".medical_review_meta_about").click(function() {
            $(".medical_review_meta_about_paragraph_container").toggleClass("hide_bio");
        });

        $(".editor_meta_about").click(function() {
            $(".editor_meta_about_paragraph_container").toggleClass("hide_bio");
        });


        let authorImageDataSrc = $('#editor_avatar_reference img').attr("data-src");
        let medicalImageDataSrc = $('#medical_review_avatar_reference img').attr("data-src");
        $('#editor_avatar_reference img').attr("src", authorImageDataSrc);
        $('#medical_review_avatar_reference img').attr("src", medicalImageDataSrc);


        let screenWidth = $(window).width();
        if (screenWidth > 1024) {
            $('.editor_meta_name').hover(function() {
                $('.editor_meta_bio_container').removeClass('hide');
            });

            $('.editor_container').mouseleave(function() {
                $('.editor_meta_bio_container').addClass('hide');
            });

            $('.medical_review_meta_name').hover(function() {
                $('.medical_review_meta_bio_container').removeClass('hide');
            });

            $('.medical_review_container').mouseleave(function() {
                $('.medical_review_meta_bio_container').addClass('hide');
            });
        }



    });
</script>