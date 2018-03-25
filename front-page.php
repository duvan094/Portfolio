<?php get_header(); ?>

<div id="hero" class="front-page hero">
  <div class="hero-text">
    <div class="title">Jacob.</div>
    <h2>Graphic designer & Web developer</h2>
  </div>
  <img id="arrow" src="<?php bloginfo('template_url'); ?>/img/arrow.svg" alt="arrow">
</div>
<div class="featured-title">
  <h3>Latest Projects</h3>
</div>
<?php
$args = array(
    'post_type'     => 'project',
    'posts_per_page' => 6
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
<article>
  <div class="wrapper">
    <?php dynamic_sidebar('profile-img'); ?>
    <?php dynamic_sidebar('about-me'); ?>
  </div>
</article>

<script type="text/javascript">

  document.getElementById("arrow").addEventListener("click",function(){
      console.log("Arrow click");
      document.getElementById("hero").classList.toggle("minimize");
  });

</script>

<?php get_footer(); ?>
