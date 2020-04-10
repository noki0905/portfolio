/**
 * @desc - アコーディオンメニューの動作
 */

jQuery( document ).ready(function() {
  jQuery('.js-hover-menu__trg').hover(function () {
    jQuery(this).toggleClass('is-hover');
  });
});