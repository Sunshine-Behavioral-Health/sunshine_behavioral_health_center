<script>
  jQuery(document).ready(function(e) {
    var t, a, n, o = e("<ol></ol>").addClass("toc");
    e("h2").each(function() {
      var r = e(this).text().replace(/[^a-zA-Z0-9 ]/g, "").replace(/\s/g, "-").toLowerCase();
      e(this).attr("id", r), t = e(this), a = t.text(), n = "#" + t.attr("id"), newLine = "<li><a href='" + n + "'>" + a + "</a></li>", o.append(newLine)
    }), document.querySelectorAll("h2").length > 0 && e(".accordion_with_toc_toc_section").prepend(o), o.find("a").on("click", function() {
      var t = e(this).attr("href");
      return e("html, body").animate({
        scrollTop: e(t).offset().top + -300
      }, 500), !1
    }), e(".toc").prepend(`<div class='toc_dropdown'>` + `<img src='<?php echo get_field('plus_icon', 'option')['url'] ?>'>` + `</div>`), e(".toc").prepend("<h5>I have a question regarding:</h5>")
  });
</script>