/**
 * @desc - スムーススクロール
 */

var headerHight = jQuery('.l-header').outerHeight();

jQuery( document ).ready(function() {
  jQuery(function(){
    //*ページ内リンクの指定
    jQuery('a[href^=#]').click(function(){
        var href= jQuery(this).attr("href");
        var target = jQuery(href == "#" || href == "" ? 'body' : href);
        var position = target.offset().top-headerHight;
        jQuery("html, body").animate({scrollTop:position}, 500, "swing");
        return false;
    });
    //*ページ外リンクの指定*/      
    var url = jQuery(location).attr('href');
    if (url.indexOf("?id=") == -1) {
        // ほかの処理
    }else{
        var url_sp = url.split("?id=");
        var hash     = '#' + url_sp[url_sp.length - 1];
        var target2 = jQuery(hash);
        var position2   = target2.offset().top-headerHight;
        jQuery("html, body").animate({scrollTop:position2}, 550, "swing");
    }
  });
});