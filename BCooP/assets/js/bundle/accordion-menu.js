/**
 * @desc - アコーディオンメニューの動作
 */

jQuery( document ).ready(function() {
  jQuery('.js-accordion-menu__button').click(function () {
    jQuery(this).toggleClass('is-accordionActive');
    jQuery(this).parent().find(".js-accordion-menu__open:first").slideToggle('');
  });
});