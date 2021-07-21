jQuery (document).ready (function ($) {
  console.log("We inside accordion block")
  $ ('.accordion').click (function (event) {
    event.stopImmediatePropagation ();
    $ (this).find ('.accordion_icon').toggleClass ('dropdown_active');
    $ (this).find ('.accordion_bottom').toggleClass ('show');
  });
});
