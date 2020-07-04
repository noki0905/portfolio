<?php 

/* ------------------------------------------------------- */
/*  サムネイルを有効化
/* ------------------------------------------------------- */
function twpp_setup_theme() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'twpp_setup_theme' );

set_post_thumbnail_size( 1200, 630, false );

/* ------------------------------------------------------- */
/*  CSS及びJSを読み込む
/* ------------------------------------------------------- */
function load_styles_js() {

  /* load stylesheet */
  wp_enqueue_style(
    'base_style',
    get_template_directory_uri() .'/assets/css/common.min.css',
    date('YmdGi', filemtime( get_template_directory().'/assets/css/common.min.css' ))
  );

  if ( is_front_page() || is_home() ) {
    wp_enqueue_style(
      'top-page_style',
      get_template_directory_uri() .'/assets/css/top-page/style.css',
      array( 'base_style' ),
      date('YmdGi', filemtime( get_template_directory().'/assets/css/top-page/style.css' ))
    );
  }

  if ( is_single() || is_page() ) {
    wp_enqueue_style(
      'single_style',
      get_template_directory_uri() .'/assets/css/single/style.css',
      array( 'base_style' ),
      date('YmdGi', filemtime( get_template_directory().'/assets/css/single/style.css' ))
    );
  }

  if ( is_archive() || is_page('blog') ) {
    wp_enqueue_style(
      'archive_style',
      get_template_directory_uri() .'/assets/css/archive/style.css',
      array( 'base_style' ),
      date('YmdGi', filemtime( get_template_directory().'/assets/css/archive/style.css' ))
    );
  }

  /* plugin & font*/
  // ROBOTO
  wp_enqueue_style(
    'Nunito, Noto Sans JP',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Nunito:wght@400;700&display=swap'
  );
  
  // swiper_css
  if ( is_front_page() || is_page( 'inquiry' ) ) {
    wp_enqueue_style(
      'swiper_style',
      'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css'
    );
  }


  /* load JS */

  wp_enqueue_script(
    'humberger_js',
    get_template_directory_uri() .'/assets/js/bundle/humberger.js',
    array( 'jquery' ),
    date('YmdGi', filemtime( get_template_directory().'/assets/js/bundle/humberger.js' )),
    true
  );

  wp_enqueue_script(
    'moon_js',
    get_template_directory_uri() .'/assets/js/bundle/moon.js',
    array( 'jquery' ),
    date('YmdGi', filemtime( get_template_directory().'/assets/js/bundle/moon.js' )),
    true
  );

  wp_enqueue_script(
    'deley_img',
    get_template_directory_uri() .'/assets/js/bundle/deley-img.js',
    date('YmdGi', filemtime( get_template_directory().'/assets/js/bundle/deley-img.js' )),
    true
  );

  wp_enqueue_script(
    'load_animation',
    get_template_directory_uri() .'/assets/js/bundle/load-animation.js',
    date('YmdGi', filemtime( get_template_directory().'/assets/js/bundle/load-animation.js' )),
    true
  );

  // wp_enqueue_script(
  //   'formAjax_js',
  //   get_template_directory_uri() .'/assets/js/bundle/formAjax.js',
  //   array( 'jquery' ),
  //   date('YmdGi', filemtime( get_template_directory().'/assets/js/bundle/formAjax.js' )),
  //   true
  // );

  wp_enqueue_script(
    'smoothscroll_js',
    get_template_directory_uri() .'/assets/js/bundle/smoothscroll.js',
    array( 'jquery' ),
    date('YmdGi', filemtime( get_template_directory().'/assets/js/bundle/smoothscroll.js' )),
    true
  );

  if ( is_front_page() || is_home() ) {
    wp_enqueue_script(
      'swiper_js',
      'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js'
    );
    wp_enqueue_script(
      'swiperActive_js',
      get_template_directory_uri() .'/assets/js/bundle/swiperActive.js',
      array( 'swiper_js' ),
      date('YmdGi', filemtime( get_template_directory().'/assets/js/bundle/swiperActive.js' )),
      true
    );
  }

}

add_action( 'wp_enqueue_scripts', 'load_styles_js' );

/* ------------------------------------------------------- */
/*  アーカイブタイプに応じてタイトルを返す
/* ------------------------------------------------------- */
function get_archive_title() {
  //アーカイブページじゃない場合、 false を返す
  if (!is_archive()) return false;

  //日付アーカイブページなら
  if (is_date()) {
    if (is_year()) {
      $date_name = get_query_var('year').'年';
    } elseif (is_month()) {
      $date_name = get_query_var('year').'年'.get_query_var('monthnum').'月';
    }else{
      $date_name = get_query_var('year').'年'.get_query_var('monthnum').'月'.get_query_var('day').'日';
    }

    //日付アーカイブページかつ、投稿タイプアーカイブページでもある場合
    if (is_post_type_archive()) {
      return $date_name."の".post_type_archive_title('',false);
    }
    return $date_name;
  }

  //投稿タイプのアーカイブページなら
  if (is_post_type_archive()) {
    return post_type_archive_title('',false);
  }

  //投稿者アーカイブページなら
  if (is_author()) {
    return "投稿者".get_queried_object()->data->display_name;
  }

  //それ以外(カテゴリ・タグ・タクソノミーアーカイブページ)
    return single_term_title('',false);
}



?>