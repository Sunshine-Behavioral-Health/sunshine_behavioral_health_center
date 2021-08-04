jQuery (document).ready (function ($) {
  let authorImageDataSrc = $ ('#author_avatar').attr ('data-src');
  let medicalImageDataSrc = $ ('#medical-reviewer_avatar').attr ('data-src');

  $ ('#author_avatar').attr ('src', authorImageDataSrc);
  $ ('#medical-reviewer_avatar').attr ('src', medicalImageDataSrc);

  let screenWidth = $ (window).width ();
  if (screenWidth > 1024) {
    $ ('.author_content .name').hover (function () {
      $ ('.author_content .bio').removeClass ('hide');
      $ ('.medical-reviewer_content .bio').addClass('hide');
    });

    $ ('.author_content .bio').mouseleave (function () {
      $ ('.author_content .bio').addClass ('hide');
    });

    $ ('.medical-reviewer_content .name').hover (function () {
      $ ('.medical-reviewer_content .bio').removeClass ('hide');
      $ ('.author_content .bio').addClass('hide');
    });

    $ ('.medical-reviewer_content .bio').mouseleave (function () {
      $ ('.medical-reviewer_content .bio').addClass ('hide');
    });

    $ ('.author-and-medical-review').mouseleave (function () {
      $ ('.medical-reviewer_content .bio').addClass ('hide');
      $ ('.author_content .bio').addClass ('hide');
    });
  }
});
