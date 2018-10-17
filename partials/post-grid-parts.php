<?php
$pageNumber = (isset($pageNumber) ? $pageNumber : 0);

$args = array(
    'post_type'     => 'project',
    'posts_per_page' => 6,
    'offset' => $pageNumber
);


$my_query = new WP_Query($args);

if ($my_query->have_posts()):
  while ($my_query->have_posts()):
      $my_query->the_post();
          echo '<li class="invisible" data-interval="50">';
          echo '<div>';
          echo "<a href='" . esc_url(get_permalink()) . "'>";
          echo '<figure style="background:url(' . get_the_post_thumbnail_url($post->ID,'full') . '); background-size:cover; background-position:center;">';
          echo '</figure>';
          echo '<div class="text-container">';
          echo '<h4>' . get_the_title() . '</h4>';
          echo '</div>';
          echo "</a>";
          echo '</div>';
          echo '</li>';
  endwhile;
endif;
 ?>
