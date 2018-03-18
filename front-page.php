<?php get_header(); ?>

<div class="front-page hero">
  <div class="hero-text">
    <div class="console">HELLO MY NAME IS</div>
    <h2 class="title">Jacob</h2>
  </div>
</div>

<article>
  <?php
  $args = array(
      'post_type'     => 'project',
      'posts_per_page' => 8
  );

  $my_query = new WP_Query($args);

  if ($my_query->have_posts()):
    echo '<ul id="postgrid">';
    while ($my_query->have_posts()):
        $my_query->the_post();
            echo '<li>';
            echo "<a href='" . esc_url(get_permalink()) . "'>";
            echo '<figure style="background:url(' . get_the_post_thumbnail_url($post->ID,'full') . '); background-size:cover; background-position:center;">';
            echo '</figure>';
            echo '<div class="text-container">';
            echo '<h4>' . get_the_title() . '</h4>';
            echo '<p>' . get_the_excerpt() .'</p>';
            echo '</div>';
            echo "</a>";
            echo '</li>';
    endwhile;
    echo '</ul>';
  endif;

  ?>
  <div class="wrapper">
    <img class="article-img" src="<?php bloginfo('template_url'); ?>/img/cup.svg" alt="cup">
    <div class="text-container">
      <h3>A little bit about me</h3>
      <p>I'm a coffee enthusiastic student studying graphic design and web devolpment.
        I'm born and raised in Sweden and currently live in Jönköping where I study at Jönköping University.
        I'm focusing my time on studies but would never say no to work on projects which could help build my portfolio.
      </p>
    </div>
  </div>
</article>
<?php get_footer(); ?>
