<?php
$args = array(
    'post_type'     => 'project',
    'posts_per_page' => -1
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
