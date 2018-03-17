<?php get_header(); ?>

<div class="front-page hero">
  <div class="hero-text">
    <div class="console">HELLO MY NAME IS</div>
    <h2 class="title">Jacob</h2>
  </div>
</div>

<article>
  <div class="wrapper">
    <?php
    echo "test";
    if(have_posts()){
      echo "test2";
      while(have_posts()){
        echo "test3";
        the_post();
        the_post_thumbnail(single_large);
        the_title();
        the_content();
      }
    }
    ?>
  </div>
</article>

<?php get_footer(); ?>
