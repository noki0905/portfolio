//スクロール状態。0で一番上、1で一番下
let scrollPos = 0;
//スクロールできる = 画面から隠れてる範囲
let scrollRange;
//ルート要素のフォントサイズ取得
let fontSize;
//SP表示切り替えフラグ
let mdFlag = false;
//月の半径
let moonSize;
//月の位置
let moonPos;
//月影の位置
let moonHidePos;         
//月の欠け係数
let moonLack;

jQuery( document ).ready(function() {
  jQuery(function() {
    mdFlag = ( window.matchMedia('(max-width:767px)').matches );

    if( mdFlag ) {
      moonSize = 6;
      moonPos = 8;
      moonHidePos = 10;
      moonLack = 8;
    } else {
      moonSize = 12;
      moonPos = 16;
      moonHidePos = 19;
      moonLack = 16;
    }

    fontSize = parseFloat( getComputedStyle(document.documentElement).fontSize );
    moonSize = moonSize * fontSize;
    moonPos = moonPos * fontSize;
    moonHidePos = moonHidePos * fontSize;
    moonLack = moonLack * fontSize;

    const body = jQuery('#moon_body');
    const circle = jQuery('#moon_hide');

    const setAttrBody = { cx:moonPos, cy:moonPos, r:moonSize }
    const setAttrCircle = { cx:moonHidePos, cy:moonHidePos, r:moonSize }
    body.attr(setAttrBody);
    circle.attr(setAttrCircle);
    
    jQuery(window).scroll(function(){
      scrollRange = jQuery(document.body).height() - jQuery(this).outerHeight();
      scrollPos = jQuery(this).scrollTop() / scrollRange;

      let cxSet = moonHidePos + moonLack * scrollPos;
      let cySet = moonHidePos + moonLack * scrollPos;
      const setAttrMove = { cx:cxSet, cy:cySet };

      if ( scrollPos ) {
        circle.show();
        circle.attr(setAttrMove);
      }
      if ( scrollPos >= 0.999 ) {
        const setAttrRed = { fill:"#D90000"};
        body.attr(setAttrRed);
      }
      if ( scrollPos == 0 ) {
        const setAttrYell = { fill:"#FFFF57"};
        body.attr(setAttrYell);
      }
    });
  });
});
