/**
 * @desc - タブメニューの動作
 */
let md_flag_tab = false;

jQuery(window).on('load resize', function(){
    md_flag_tab = ( window.matchMedia('(max-width:767px)').matches );
    if(md_flag_tab){
        jQuery('.p-search-accordion__list.js-tab-menu').removeClass('is-tabActive');
    }
} );

jQuery( document ).ready(function(){
    jQuery('.js-tab-menu__button').click(function() {
        var index = jQuery('.js-tab-menu__button').index(this);
        jQuery('.js-tab-menu__button').removeClass('is-tabActive');
        jQuery(this).addClass('is-tabActive');
        jQuery('.js-tab-menu').removeClass('is-tabActive').eq(index).addClass('is-tabActive');
    });
});