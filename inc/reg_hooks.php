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



  add_filter( 'img_caption_shortcode', 'my_img_caption_shortcode', 10, 3 );

  function my_img_caption_shortcode( $empty, $attr, $content ){
  	$attr = shortcode_atts( array(
  		'id'      => '',
  		'align'   => 'alignnone',
  		'width'   => '',
  		'caption' => ''
  	), $attr );

  	if ( 1 > (int) $attr['width'] || empty( $attr['caption'] ) ) {
  		return '';
  	}

  	if ( $attr['id'] ) {
  		$attr['id'] = 'id="' . esc_attr( $attr['id'] ) . '" ';
  	}

  	return '<div ' . $attr['id']
  	. 'class="wp-caption ' . esc_attr( $attr['align'] ) . '" '
  	. '">'
  	. do_shortcode( $content )
  	. '</div>'
    . '<p class="wp-caption-text">' . $attr['caption'] . '</p>';

  }


 ?>
