<?php
//Page menu header-nav The two pages 'Work' and 'Home'
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

 ?>
