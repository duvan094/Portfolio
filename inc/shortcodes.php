<?php

  add_shortcode('gallery','my_function');

  function my_function($atts){
    $markup = "<div class='slider-cont'>";
    $markup .= "<div id='slider'>";
    $images = explode(",",$atts['ids']);

    for($i = 0; $i<count($images); $i++){
      $markup .= "<img src='" . wp_get_attachment_image_url($images[$i],$atts['size']) . "'>";
    }
    $markup .= "</div>";
    $markup .= "<div id='slide-tracker'></div>";
    $markup .= "<button id='prev'>Previous</button><button id='next'>Next</button></div>";
    return $markup;
  }

 ?>
