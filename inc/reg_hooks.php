<?php
  add_filter('use_default_gallery_style','__return_false');

  /**
   * Filter the except length to 20 words.
   *
   * @param int $length Excerpt length.
   * @return int (Maybe) modified excerpt length.
   */
  function wpdocs_custom_excerpt_length( $length ) {
      return 20;
  }
  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
 ?>
