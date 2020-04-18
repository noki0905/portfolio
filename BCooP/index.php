<?php get_header();?>

<section class="l-section tp-firstView">
  <div class="c-wrapper">
    <h1 class="u-visuallyHidden"><?php wp_title(); ?></h1>
    <p class="tp-firstView__copy u-text-right">
      I'm Naoki Yoshizawa<br>Web Developer in Japan<br>To be yourself at this moment
    </p><!-- /.tp-firstView__copy -->
    <div class="c-arrowDown"></div>
  </div><!-- /.c-wrapper -->
</section><!-- /.l-section .tp-firstView -->

<section class="l-section tp-aboutMe" id="aboutme">
  <div class="c-wrapper">
    <h1 class="c-head1">About Me<span class="c-head1__deco"></span></h1>
    <div class="tp-aboutMe__wrapper">
      <div class="tp-aboutMe__img"><img src="<?php echo get_template_directory_uri() ?>/assets/image/naoki_yohiszawa.JPG" alt="Naoki Yoshizawa"></div>
      <div class="tp-aboutMe__left">
        <h2 class="tp-aboutMe__name">Naoki Yoshizawa</h2>
        <span class="tp-aboutMe__age">Age 25</span>
        <p class="tp-aboutMe__info">
          長野県に生まれ長野県に育ちました。<br>
          『自分らしくあること』が一番の幸福である。<br>
          自分らしくいられる場所を一緒に作りたいです。<br>
          自然と服と人が好き。<br><br>
          2015年 長野高専卒業<br>
          2015-19年 大手メーカーにてFAエンジニア<br>
          2020年 フリーランスWEB製作者<br>
          2020年 カナダでフロントエンド技術を学習中(のはずでした)<br>
        </p>
        <ul class="tp-aboutMe__snsList">
          <li class="tp-aboutMe__snsItem u-text-center"><a href="https://twitter.com/noki0905" target="_blank" rel=”noopener”><i class="fab fa-twitter"></i></a></li>
          <li class="tp-aboutMe__snsItem u-text-center"><a href="https://www.facebook.com/noki0905" target="_blank" rel=”noopener”><i class="fab fa-facebook-f"></i></a></li>
          <li class="tp-aboutMe__snsItem u-text-center"><a href="https://www.instagram.com/noki0905" target="_blank" rel=”noopener”><i class="fab fa-instagram"></i></a></li>
          <li class="tp-aboutMe__snsItem u-text-center"><a href="https://www.linkedin.com/in/yoshizawanaoki0905/" target="_blank" rel=”noopener”><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div><!-- /.tp-aboutMe__wrapper -->
    <div class="u-text-right">
      <a href="#work" class="c-linkArrow">work<span class="c-linkArrow__deco"></span></a>
    </div>
  </div><!-- /.c-wrapper -->
</section><!-- /.tp-aboutMe -->

<section class="l-section tp-survice" id="survice">
  <div class="c-wrapper">
    <h1 class="c-head1">Survice<span class="c-head1__deco"></span></h1><!-- /.c-head1 -->
    <ul class="tp-survice__wrapper">
      <li class="tp-survice__card">
        <div class="tp-survice__img"><img src="<?php echo get_template_directory_uri() ?>/assets/image/coding.png" alt="Coding"></div>
        <h2 class="tp-survice__ttl u-text-center">コーディング</h2>
        <p class="tp-survice__info">
          LP・コーポレートサイトなどさまざまな形態のサイトコーディングをさせていただきます。<br>
          オンラインで完結することを求められる中で、コーディングのスキルの習得にお悩みの方、ご相談ください。
        </p>
      </li><!-- /.tp-survice__card -->
      <li class="tp-survice__card">
        <div class="tp-survice__img"><img src="<?php echo get_template_directory_uri() ?>/assets/image/design.png" alt="Design"></div>
        <h2 class="tp-survice__ttl u-text-center">デザイン</h2>
        <p class="tp-survice__info">
          企業・個人問わずお客様の『目的』を理解し、ただ『かっこいい』だけのサイトではなく、成果の上がるサイトを一緒に追求します。<br>
          迷いを起こさせないユーザビリティの高さ、行動動線を意識したデザインの提案をさせていただきます。
        </p>
      </li><!-- /.tp-survice__card -->
      <li class="tp-survice__card">
        <div class="tp-survice__img"><img src="<?php echo get_template_directory_uri() ?>/assets/image/running.png" alt="Starting Position"></div>
        <h2 class="tp-survice__ttl u-text-center">サイト運用</h2>
        <p class="tp-survice__info">
          サイトが出来たらスタート地点です。そこから共に走ります。SEOキーワードの選定、アナリティクスの解析から、軽微なバグの修正、記事の投稿、機能追加など対応致します。<br>
          リソースが避けなくなった既存のサイトの運用保守もお任せください。
        </p>
      </li><!-- /.tp-survice__card -->
    </ul><!-- /.tp-survice__wrapper -->
  </div><!-- /.c-wrapper -->
</section><!-- /.tp-survice -->

<section class="l-section tp-work" id="work">
  <div class="c-wrapper">
    <h1 class="c-head1">Work<span class="c-head1__deco"></span></h1>
    <div class="tp-work__slider swiper-container">
      <ul class="swiper-wrapper">

        <?php
          $args = array(
            'post_type' => 'work', 
            'posts_per_page' => 12 /* 表示する数 */
          );
        ?>
        <?php $wp_query = new WP_Query( $args ); ?>
        <?php if ( $wp_query->have_posts() ) : ?>
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

        <li class="tp-work__slide p-workCard swiper-slide u-text-center">
          <a href="<?php the_permalink(); ?>">
          <h2 class="p-workCard__ttl"><?php the_title(); ?></h2>
          <div class="p-workCard__img"><?php the_post_thumbnail('thumbnail'); ?></div>
          </a>
          <p class="p-workCard__cate"><?php echo get_the_term_list( $post->ID, 'work_category', '', ' / ', '' ); ?></p>
        </li><!-- /.p-workCard -->

        <?php endwhile; else:?>
        <p class="c-na u-text-center">Not Yet</p>
        <?php endif; wp_reset_postdata();?>
        
      </ul><!-- /.swiper-wrapper -->
      <div class="c-pagination swiper-pagination"></div>
    </div><!-- /.tp-work__slider -->
    <div class="u-text-right">
      <a href="<?php echo esc_url( home_url( '/' ) ) . 'work' ?>" class="c-linkArrow">See All<span class="c-linkArrow__deco"></span></a>
    </div>
  </div><!-- /.c-wrapper -->
</section><!-- /.tp-work -->

<section class="l-section tp-blog" id="blog">
  <div class="c-wrapper">
    <h1 class="c-head1">Blog<span class="c-head1__deco"></span></h1>
    <ul class="p-blog__list">
      <?php query_posts('posts_per_page=3'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <li class="tp-blog__card p-blogCard">
        <a href="<?php the_permalink(); ?>">
        <?php if ( get_post_thumbnail_id() ): ?>
          <div class="p-blogCard__img"><?php the_post_thumbnail('thumbnail'); ?></div>
        <?php else: ?>
          <div class="p-blogCard__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/BCooP_logo.png" alt="Logo of BCooP"></div>
        <?php endif; ?>
          <h2 class="p-blogCard__ttl u-text-justify"><?php echo get_the_title(); ?></h2>
        </a>
      </li><!-- /.tp-blog__card p-blogCard -->
      <?php endwhile; else:?>
      <p class="c-na u-text-center">Not Yet</p>
      <?php endif; wp_reset_postdata();?>

    </ul><!-- /.tp-blog__wrapper -->
    <div class="u-text-right">
      <a href="<?php echo esc_url( home_url( '/' ) ) . 'blog' ?>" class="c-linkArrow">See All<span class="c-linkArrow__deco"></span></a>
    </div>
  </div><!-- /.c-wrapper -->
</section><!-- /.tp-blog -->

<?php get_footer(); ?>