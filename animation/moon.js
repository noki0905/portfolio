//スクロール状態。0で一番上、1で一番下
var scrollPos = 0;
//スクロールできる = 画面から隠れてる範囲
var scrollRange;

$( document ).ready(function() {
  $(function() {
    $(window).scroll(function(){
      scrollRange = $(document.body).height() - $(this).outerHeight();
      scrollPos = $(this).scrollTop() / scrollRange;
      const circle = $('#moon_hide');

      console.log(scrollPos);

      let cxSet = 100 + 7/scrollPos;
      let cySet = 100 + 5/scrollPos;
      const setAttr = { cx:cxSet, cy:cySet };

      if ( !(scrollPos) ) {
        circle.hide();
      }else if ( scrollPos < 1 ) {
        circle.show();
        circle.attr(setAttr);
      }else {
        cxSet = 100;
        cySet = 100;
        const setAttr = { cx:cxSet, cy:cySet, r:79 };
        circle.attr(setAttr);
      }
    });
  });
});
