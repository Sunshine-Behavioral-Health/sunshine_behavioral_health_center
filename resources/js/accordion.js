jQuery (document).ready (function ($) {
  $ ('.accordion').click (function () {
    $ ('.accordion_hidden_content').toggleClass ('hide');
    $ ('.accordion_dropdown_icon').toggleClass ('dropdown_active');
  });
});
