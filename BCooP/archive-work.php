<?php
/*
 *Template Name: archive-work
*/
?>
<?php get_header();?>

<section class="l-section u-text-center">
  <div class="c-wrapper">
    <h1 class="ar-ttl">All <?php echo get_archive_title()."s"; ?></h1>
    <ul class="ar-list">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li class="ar-work__card p-workCard u-text-center">
          <h2 class="p-workCard__ttl"><?php the_title(); ?></h2>
          <a href="<?php the_permalink(); ?>"><div class="p-workCard__img"><?php the_post_thumbnail('thumbnail'); ?></div></a>
          <p class="p-workCard__cate"><?php echo get_the_term_list( $post->ID, 'work_category', '', ' / ', '' ); ?></p>
        </li><!-- /.ar-work__card p-workCard -->
        <?php endwhile; else:?>
      <p class="c-na u-text-center">Not Yet</p>
      <?php endif; wp_reset_postdata();?>
      <li class="ar-item"></li>
    </ul>
  </div>
</section><!-- /.l-section -->
  
<?php get_footer(); ?>