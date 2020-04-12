/**
 * @desc - スムーススクロール
 */

// var headerHight = jQuery('.l-header').outerHeight();

// jQuery( document ).ready(function() {
//   jQuery(function(){
//     //*ページ内リンクの指定
//     jQuery('a[href^=#]').click(function(){
//         var href= jQuery(this).attr("href");
//         var target = jQuery(href == "#" || href == "" ? 'body' : href);
//         var position = target.offset().top-headerHight;
//         jQuery("html, body").animate({scrollTop:position}, 500, "swing");
//         return false;
//     });
//     //*ページ外リンクの指定*/      
//     var url = jQuery(location).attr('href');
//     if (url.indexOf("?id=") == -1) {
//         // ほかの処理
//     }else{
//         var url_sp = url.split("?id=");
//         var hash     = '#' + url_sp[url_sp.length - 1];
//         var target2 = jQuery(hash);
//         var position2   = target2.offset().top-headerHight;
//         jQuery("html, body").animate({scrollTop:position2}, 550, "swing");
//     }
//   });
// });

//移動時間（1 = 1000分の1秒（1ミリ秒））
const move_time = 500;

//繰り返す回数（アニメーションの回数）の計算
const end_time = move_time / 1000 * 60;

//イージング計算式（ easeInOutQua ）
const easing = function ( t, b, c, d) {
  if ((t/=d/2) < 1) return c/2*t*t + b;
  return -c/2 * ((--t)*(t-2) - 1) + b;
};

//移動関数（アニメーション実行関数）
function pageScroll( pos ){
  let xPos = window.pageXOffset
    , yPos = window.pageYOffset
    , moved = pos - yPos
    , time = 1;
  (function scrollMoved() {
      window.scrollTo( xPos, easing( time, yPos, moved, end_time) );
      time ++ ;
      if ( time <= end_time ) {
        window.requestAnimationFrame( scrollMoved );
      }
  })();
};

//ハッシュからエレメントを取得する関数
function getElm( h ){
    let deCode = decodeURI( h );
    return document.querySelector( deCode + ',a[name="' + deCode.substr(1)  + '"]');
}

//移動先の位置を取得する関数
function getPos( t ){
  let tPos = t.getBoundingClientRect()
  return tPos.top + window.pageYOffset;
};

//ページ内リンクを取得
const entryPageLinks = document.querySelectorAll( 'a[href^="#"]' );

//ページ内リンクにイベント登録
if ( entryPageLinks.length ) {
  for( var i = 0; entryPageLinks.length > i; i++ ) {
    entryPageLinks[i].addEventListener( 'click', function(e){

      let href = e.target.hash;
      if ( ( href != '' ) && ( href != '#') ) {
        let targetElm = getElm( href );
        if ( targetElm ) {
           ( e.preventDefault ) ? e.preventDefault(): e.returnValue = false;
           pageScroll( getPos( targetElm ) );
           return false;
        }
      }

    });
  }
}