<!DOCTYPE html>
<html lang="ja">
<head>
  <title><?php wp_title(); ?></title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

  <!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/image/logo-favicon.svg" type="image/svg"> -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/image/BCooP_logo.svg" type="image/svg">
  <link rel="favicon" href="<?php echo get_template_directory_uri(); ?>/assets/image/BCooP_logo.svg" type="image/svg">
  <link rel="stylesheet" href="./assets/css/common.min.css">
  <link rel="stylesheet" href="./assets/css/top-page/style.css">

  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Nunito:wght@400;700&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/35ebb59adf.js" crossorigin="anonymous"></script>

  <?php wp_head(); ?>

</head>

<body id="top">
  <header class="l-header">
    <svg class="moon_wrap" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
      <circle id="moon_body" stroke-width="0" stroke="#F5F5F5" fill="#FFFF57" fill-opacity=".7" />
    </svg>
    <svg class="moon_wrap" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
      <circle id="moon_hide" stroke-width="0" stroke="#00FFFF" fill="#F5F5F5" />
    </svg>
    <button type="button" id="js-buttonHamburger" class="c-hamburger" aria-controls="global-nav" aria-expanded="false">
      <span class="c-hamburger__line">
        <span class="u-visuallyHidden">
          メニューを開閉する
        </span>
      </span>
    </button><!-- /.c-hamburger -->
    <nav class="p-globalNav js-globalNav">
      <ul class="p-globalNav__list c-list-unstyled">
        <li class="p-globalNav__item"><a href="#top" class="p-globalNav__link">Home</a></li>
        <li class="p-globalNav__item"><a href="#aboutme" class="p-globalNav__link">About Me</a></li>
        <li class="p-globalNav__item"><a href="#survice" class="p-globalNav__link">Survice</a></li>
        <li class="p-globalNav__item"><a href="#works" class="p-globalNav__link">Works</a></li>
        <li class="p-globalNav__item"><a href="#blog" class="p-globalNav__link">Blog</a></li>
        <li class="p-globalNav__item"><a href="#contact" class="p-globalNav__link">Contact</a></li>
      </ul>
    </nav><!-- /.p-globalNav -->
  </header><!-- /.l-header -->

  <main>