jQuery (document).ready (function ($) {
  let authorImageDataSrc = $ ('#author_avatar').attr ('data-src');
  let medicalImageDataSrc = $ ('#medical-reviewer_avatar').attr ('data-src');

  $ ('#author_avatar').attr ('src', authorImageDataSrc);
  $ ('#medical-reviewer_avatar').attr ('src', medicalImageDataSrc);

  let screenWidth = $ (window).width ();
  if (screenWidth > 1024) {
    $ (
      '.author-and-medical-review--desktop--editor--content--author-name'
    ).hover (function () {
      $ ('.author-and-medical-review--desktop--author--bio').removeClass (
        'hide'
      );
    });

    $ (
      '.author-and-medical-review--desktop--author--bio'
    ).mouseleave (function () {
      $ ('.author-and-medical-review--desktop--author--bio').addClass ('hide');
    });

    $ (
      '.author-and-medical-review--desktop--medical-reviewer--content--name'
    ).hover (function () {
      $ (
        '.author-and-medical-review--desktop--medical-reviewer--bio'
      ).removeClass ('hide');
    });

    $ (
      '.author-and-medical-review--desktop--medical-reviewer--bio'
    ).mouseleave (function () {
      $ (
        '.author-and-medical-review--desktop--medical-reviewer--bio'
      ).addClass ('hide');
    });
  }
});
