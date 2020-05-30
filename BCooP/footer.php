<section class="l-section p-contact u-text-center" id="contact">
  <div class="c-wrapper">
    <h1 class="p-contact__head">Contact</h1>
    <form class="p-contact__wrapper" action="https://docs.google.com/forms/u/2/d/e/1FAIpQLSe134U_EOmlh4Gh5_rujKOwkj4gkolubfK-4xUUiKT0kqy06g/formResponse">
      <div class="p-contact__item">
        <label class="p-contact__ttl" for="name">Name<span class="p-contact__ttl--deco u-dn u-di-md"></span></label>
        <input id="name" class="p-contact__input" name="entry.449571119" type="text" required>
      </div><!-- /.p-contact__item -->
      <div class="p-contact__item">
        <label class="p-contact__ttl" for="mail">E-mail<span class="p-contact__ttl--deco u-dn u-di-md"></span></label>
        <input id="mail" class="p-contact__input" name="entry.528976160" type="email" required>
      </div><!-- /.p-contact__item -->
      <div class="p-contact__item">
        <label class="p-contact__ttl" for="msg">Message<span class="p-contact__ttl--deco u-dn u-di-md"></span></label>
        <textarea id="msg" class="p-contact__input p-contact__input--area" name="entry.1517769412" required></textarea>
      </div><!-- /.p-contact__item -->
      <button type="submit" class="p-contact__button" name="button" value="submit">Submit</button>
    </form><!-- /.p-contact__wrapper -->
  </div><!-- /.c-wrapper -->
</section><!-- /#contact.l-section p-contact -->

</main>

<footer class="l-footer">
  <a href="#top" class="c-topLink"></a>
  <div class="c-wrapper">
    <nav class="l-footer__nav">
      <ul class="l-footer__list u-text-center">
        <li class="l-footer__item"><a href="<?php if ( is_front_page() || is_home() ) { echo "#top"; } else{ bloginfo('url'); } ?>" class="l-footer__link l-footer__link1">Home</a></li>
        <li class="l-footer__item"><a href="<?php if ( is_front_page() || is_home() ) { echo "#aboutme"; } else{ echo esc_url( home_url( ) ) . '#aboutme'; } ?>" class="l-footer__link l-footer__link1">About Me</a></li>
        <li class="l-footer__item"><a href="<?php if ( is_front_page() || is_home() ) { echo "#service"; } else{ echo esc_url( home_url( ) ) . '#service'; } ?>" class="l-footer__link">Service</a></li>
        <li class="l-footer__item"><a href="<?php if ( is_front_page() || is_home() ) { echo "#work"; } else{ echo esc_url( home_url( '/' ) ) . 'work'; } ?>" class="l-footer__link">Work</a></li>
        <li class="l-footer__item"><a href="<?php if ( is_front_page() || is_home() ) { echo "#blog"; } else{ echo esc_url( home_url( '/' ) ) . 'blog'; } ?>" class="l-footer__link">Blog</a></li>
        <li class="l-footer__item"><a href="#contact" class="l-footer__link">Contact</a></li>
      </ul><!-- /.l-footer__list -->
    </nav><!-- /.l-footer__nav -->
    <div class="l-footer__logo"><img src="<?php echo get_template_directory_uri() ?>/assets/image/BCooP_logo.png" alt="BCooPのロゴ"></div>
  </div>
  <p class="l-footer__copyright u-text-center" lang="en">&copy;copyrights <?php echo date( 'Y' ); ?><br class="u-dn-md"> Naoki Yoshizawa All Rights Reserved.</p>
</footer>

<?php wp_footer(); ?>

</body>
</html>