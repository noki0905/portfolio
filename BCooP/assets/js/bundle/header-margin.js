/**
 * @desc - header高さ分、bodyにmargin-topを付与する
 */

jQuery( document ).ready(function() {
  const height = jQuery('.l-header').outerHeight();
  jQuery("main").css("margin-top", height);
});