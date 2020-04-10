/**
 * @desc - 続きを読むボタンの動作
 */

jQuery( document ).ready(function() {
  jQuery('.js-voices__more').click(function () {
    jQuery(this).parent().toggleClass('is-readMoreActive');
    jQuery('.is-readMoreActive > .js-voices__more').text("戻る");

    jQuery('.js-voices__more').click(function () {
      jQuery('.js-voices__more').text("続きを読む");
    });
  });
});