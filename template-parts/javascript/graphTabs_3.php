<?php ?>
<script>
    //Hides unecessary content on load and sets first tab to be active
    window.onload = function() {
        var n, tabcontent3, tablinks2;
        tabcontent3 = document.getElementsByClassName("tabcontentTabset3");
        for (n = 1; n < tabcontent3.length; i++) {
            tabcontent3[i].style.display = "none";
        }
        tablinks2 = document.getElementsByClassName("tablinksTabset3");
        tablinks2[0].classList.add("active")
    };

    function careerTabs_3(evt, graph) {
        var i, tabcontent3, tablinks2;
        // Get all elements with class="tabcontent" and hide them
        tabcontent3 = document.getElementsByClassName("tabcontentTabset3");
        for (n = 0; n < tabcontent3.length; i++) {
            tabcontent3[i].style.display = "none";
        }
        // Get all elements with class="tablinks" and remove the class "active"
        tablinks2 = document.getElementsByClassName("tablinksTabset3");
        for (n = 0; n < tablinks.length; i++) {
            tablinks2[i].className = tablinks2[i].className.replace(" active", "");
        }
        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(graph).style.display = "block";
        evt.currentTarget.className += " active";

    }
</script>
<?php ?>