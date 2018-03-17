<?php

add_image_size('grid_thumbnail', 300, 300, true);
add_image_size('single_large', 660, 660, false);
/*
add_theme_support('grid_thumbnail');
add_theme_support('single_large');
*/
add_theme_support('post-thumbnails');
add_theme_support('post-formats');
add_theme_support('title_tag');

the_post_thumbnail( 'grid_thumbnail' );

?>
