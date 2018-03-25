<?php
 function add_widgets() {

   //page-sidebar Page Sidebar Single pages
  $args = array(
    'id'            => 'about-me',
    /** Visible name in the Admin Dashboard Widget page */
    'name'          => __( 'About Me.', 'portfolio_theme' ),
    /** Visible description in the Admin Dashboard Widget page */
//    'description'   => __( 'Show my skills and social links', 'portfolio_theme' ),
    'location'      => 'Single pages',
    /** HTML to wrap widget title in  */
    'before_title'  => '<h1 class="h3">',
    'after_title'   => '</h1>',
    /** HTML to wrap each widget  */
    'before_widget' => '<div class="text-container">',
    'after_widget'  => '</div>',
  );
  register_sidebar( $args );

    //page-sidebar Page Sidebar Single pages
   $args = array(
     'id'            => 'profile-img',
     /** Visible name in the Admin Dashboard Widget page */
     'name'          => __( 'Profile Image', 'portfolio_theme' ),
     /** Visible description in the Admin Dashboard Widget page */
  //    'description'   => __( 'Show my skills and social links', 'portfolio_theme' ),
     'location'      => 'Single pages',
     /** HTML to wrap widget title in  */
     'before_title'  => '',
     'after_title'   => '',
     /** HTML to wrap each widget  */
     'before_widget' => '<figure class="article-img profile-img">',
     'after_widget'  => '</figure>',
   );
   register_sidebar( $args );

 }

 add_action( 'widgets_init', 'add_widgets' );
?>
