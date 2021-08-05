<script>
    stickyElem = document.querySelector(".treatment_step_progress_bar_section");
    currStickyPos = stickyElem.getBoundingClientRect().top + window.pageYOffset;

    window.onscroll = function() {
        if (window.pageYOffset > currStickyPos) {
            stickyElem.classList.add("treatment-step--sticky");
            console.log("new")
        } else {
            stickyElem.classList.remove("treatment-step--sticky");
        }
    }

</script>