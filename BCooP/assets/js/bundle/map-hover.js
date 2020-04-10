/**
 * @desc - アコーディオンメニューの動作
 */

jQuery( document ).ready(function() {
  jQuery('.tp-area-search__map area').hover(
    function() { jQuery(this).focus(); },
    function() { jQuery(this).blur(); }
  );
});