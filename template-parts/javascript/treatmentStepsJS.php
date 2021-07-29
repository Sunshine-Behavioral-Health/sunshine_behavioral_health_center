<script>
    jQuery(document).ready(function($) {
        var fixmeTop = $('.treatment_step_progress_bar_section').offset().top; // get initial position of the element

        $(window).scroll(function() { // assign scroll event listener

            var currentScroll = $(window).scrollTop(); // get current position

            if (currentScroll >= fixmeTop) { // apply position: fixed if you
                $('.treatment_step_progress_bar_section').css({ // scroll to that element or below it
                    position: 'fixed',
                    top: '75px',
                    left: '0',
                    margin: '-17px 0 0 0',
                    background: '#fff'
                });
            } else { // apply position: static
                $('.treatment_step_progress_bar_section').css({ // if you scroll above it
                    position: 'static'
                });
            }

        });
    });
</script>


position: fixed;
    top: 75px;
    left: 0px;
    margin: -10px 0px 0px;
    background-color: #fff;