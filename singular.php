<?php get_header(); ?>

<div class="hero" style="background:url(<?php echo get_the_post_thumbnail_url($post->ID,'full')?>); background-size:cover; background-position:center; background-attachment:fixed;">

</div>

<article>
  <div class="wrapper project">
    <?php
    if(have_posts()){
      while(have_posts()){
        the_post();
        echo "<h1>" . get_the_title() . "</h1>";
        the_content();
        echo do_shortcode(get_post_meta($post->ID,"project_gallery",true));
      }
    }
    ?>

  </div>
</article>

<?php get_footer(); ?>
