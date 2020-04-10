/**
 * @desc - ハンバーガーメニューの動作
 */

jQuery( document ).ready(function() {
  jQuery('#js-buttonHamburger').click(function () {
    jQuery('body').toggleClass('is-drawerActive');
 
    if (jQuery(this).attr('aria-expanded') == 'false') {
      jQuery(this).attr('aria-expanded', true);
    } else {
      jQuery(this).attr('aria-expanded', false);
    }
  });
  jQuery(".js-global-nav a").click(function () {
    jQuery('body').toggleClass('is-drawerActive');
    
    if (jQuery('#js-buttonHamburger').attr('aria-expanded') == 'false') {
      jQuery('#js-buttonHamburger').attr('aria-expanded', true);
    } else {
      jQuery('#js-buttonHamburger').attr('aria-expanded', false);
    }
  });
});