<?php
/*
 *Template Name: archive
*/
?>
<?php get_header();?>

<section class="l-section u-text-center">
  <div class="c-wrapper">
    <?php if ( strpos( $_SERVER['REQUEST_URI'],'blog') !== false ) : ?>
    <h1 class="ar-ttl">All Blogs</h1>
    <ul class="ar-list">

      <?php
        $args = array(
          'post_type' => 'post', 
          'posts_per_page' => 12 /* 表示する数 */
        );
      ?>
      <?php $wp_query = new WP_Query( $args ); ?>
      <?php if ( $wp_query->have_posts() ) : ?>
      <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

      <li class="ar-blog__card p-blogCard">
        <a href="<?php the_permalink(); ?>">
        <?php if ( get_post_thumbnail_id() ): ?>
          <div class="p-blogCard__img"><?php the_post_thumbnail('thumbnail'); ?></div>
        <?php else: ?>
          <div class="p-blogCard__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/BCooP_logo.png" alt="Logo of BCooP"></div>
        <?php endif; ?>
          <h2 class="p-blogCard__ttl u-text-justify"><?php echo get_the_title(); ?></h2>
        </a>
      </li><!-- /.ar-blog__card p-blogCard -->

      <?php endwhile; else:?>
      <p class="c-na u-text-center">Not Yet</p>
      <?php endif; wp_reset_postdata();?>
    </ul>
    
    <?php else : ?>

      <h1 class="ar-ttl">All about <?php echo get_archive_title(); ?></h1>
      <ul class="ar-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li class="ar-blog__card p-blogCard">
          <a href="<?php the_permalink(); ?>">
          <?php if ( get_post_thumbnail_id() ): ?>
            <div class="p-blogCard__img"><?php the_post_thumbnail('thumbnail'); ?></div>
          <?php else: ?>
            <div class="p-blogCard__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/BCooP_logo.png" alt="Logo of BCooP"></div>
          <?php endif; ?>
            <h2 class="p-blogCard__ttl u-text-justify"><?php echo get_the_title(); ?></h2>
          </a>
        </li><!-- /.ar-blog__card p-blogCard -->
        <?php endwhile; else:?>
        <p class="c-na u-text-center">Not Yet</p>
        <?php endif; wp_reset_postdata();?>
      </ul>

    <?php endif; ?>
  </div>
</section><!-- /.l-section -->
  
<?php get_footer(); ?>