<script>
    jQuery(document).ready(function($) {
        $('.expandable_row_element').click(function(event) {
            event.stopImmediatePropagation();
            $(this).find('img').toggleClass('dropdown_active');
            $(this).find('.expandable_row_content').toggleClass('hide');
        });

        $('.covid19_container').click(function() {
            $('.covid19_content').toggleClass('hide');
            $('.covid19_container img').toggleClass('dropdown_active');
        });

        $('.sources_section').click(function(event) {
            event.stopImmediatePropagation();
            $('.sources_wrapper').toggleClass('hide');
            $('.sources_section img.sources_plus_icon').toggleClass('dropdown_active');
        });

        $('.all_centers_accordion_row').click(function(event) {
            event.stopImmediatePropagation();
            $(this).find('.all_centers_accordion_headline_wrapper img.all_center_accordion_plus_icon').toggleClass('dropdown_active');
            $(this).find('.all_centers_accordion_dropdown_wrapper').toggleClass('hide');
        });
    });
</script>