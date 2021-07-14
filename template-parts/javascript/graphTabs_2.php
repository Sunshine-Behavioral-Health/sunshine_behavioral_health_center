<?php ?>
<script>
    //Hides unecessary content on load and sets first tab to be active
    window.onload = function() {
        var t, tabcontent2, tablinks2;
        tabcontent2 = document.getElementsByClassName("tabcontentTabset2");
        for (t = 1; t < tabcontent2.length; t++) {
            tabcontent2[t].style.display = "none";
        }
        tablinks2 = document.getElementsByClassName("tablinksTabset2");
        tablinks2[0].classList.add("active");
    };

    function careerTabs_2(evt, graph) {
        var t, tabcontent2, tablinks2;
        // Get all elements with class="tabcontent" and hide them
        tabcontent2 = document.getElementsByClassName("tabcontentTabset2");
        for (t = 0; t < tabcontent2.length; t++) {
            tabcontent2[t].style.display = "none";
        }
        // Get all elements with class="tablinks" and remove the class "active"
        tablinks2 = document.getElementsByClassName("tablinksTabset2");
        for (t = 0; t < tablinks2.length; t++) {
            tablinks2[t].className = tablinks2[t].className.replace(" active", "");
        }
        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(graph).style.display = "block";
        evt.currentTarget.className += " active";

    }
</script>
<?php ?>