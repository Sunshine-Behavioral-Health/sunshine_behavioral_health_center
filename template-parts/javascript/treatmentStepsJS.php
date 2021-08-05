<script>
    stickyElem = document.querySelector(".treatment_step_progress_bar_section");
    currStickyPos = stickyElem.getBoundingClientRect().top + window.pageYOffset;

    window.onscroll = function() {
        if (window.pageYOffset > currStickyPos) {
            console.log("added fixed position")
            stickyElem.style.position = "fixed";
            stickyElem.style.top = "300px";
        } else {
            stickyElem.style.position = "relative";
            stickyElem.style.top = "initial";
        }
    }
</script>