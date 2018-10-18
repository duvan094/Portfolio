<?php

  add_shortcode('gallery','my_function');

  function my_function($atts){
    $markup = "<div class='slider-cont'>";
    $markup .= "<div id='slider'>";
    $images = explode(",",$atts['ids']);

    for($i = 0; $i<count($images); $i++){
      $markup .= "<figure style='background:url(\"". wp_get_attachment_image_url($images[$i],$atts['size']) ."\"); background-position:center; background-size:contain; background-repeat:no-repeat;'>";
      //$markup .= "<img src='" . wp_get_attachment_image_url($images[$i],$atts['size']) . "'>";
      $markup .= "</figure>";
    }
    $markup .= "</div>";
    $markup .= "<div id='slide-tracker'></div>";
    $markup .= "<div class='img-button' id='prev'><img src='" . get_bloginfo('template_url') ."/img/arrow-left.svg'></div>";
    $markup .= "<div class='img-button' id='next'><img src='" . get_bloginfo('template_url') ."/img/arrow-right.svg'></div></div>";
    return $markup;
  }

 ?>
