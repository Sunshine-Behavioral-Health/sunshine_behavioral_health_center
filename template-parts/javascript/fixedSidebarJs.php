<?php ?>

<script>
    jQuery(document).ready(function($) {
        $(function() {
            var fixedSidebar = $(".fixed_sidebar");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 500) {
                    fixedSidebar.addClass("fixedSidebarPositionFixed");
                } else {
                    fixedSidebar.removeClass("fixedSidebarPositionFixed");
                }
            });
        });
    });
</script>