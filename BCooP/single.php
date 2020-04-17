<?php get_header();?>

<section class="l-section">
  <div class="c-wrapper"> 
    <article class="si-article">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <h1 class="si-ttl u-text-center"><?php the_title(); ?></h1>
    <p class="si-article__cate u-text-center"><?php echo get_the_term_list( $post->ID, 'work_category', '', ' / ', '' ); ?></p>
    <p class="si-article__cate u-text-center"><?php echo get_the_term_list( $post->ID, 'category', '', ' / ', '' ); ?></p>
    <div class="si-article__img"><?php the_post_thumbnail(); ?></div>
    <div class="si-article__content">
      <?php the_content(); ?>
    </div>
    <?php endwhile; else:?>
      <p>記事が取得できませんでした。</p>
    <?php endif; ?>

    </article><!-- .si-wrapper -->
  </div><!-- .c-wrapper -->
</section>
  
<?php get_footer(); ?>