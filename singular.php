<?php get_header(); ?>

<div class="hero" style="background:url(<?php echo get_the_post_thumbnail_url($post->ID,'full')?>); background-size:cover; background-position:center;">

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
        echo "<div class='next-prev-post'>";
        next_post_link( '%link' );
        previous_post_link( '%link' );
        echo "</div>";
      }
    }
    ?>
  </div>
</article>

<script type="text/javascript">

  var slider = document.getElementById("slider");

  var slides = slider.children;
  var slideLength = slider.children.length
  /*for(var i = 0; i < slides.length; i++){
    slides[i].classList.toggle("focus");
  }*/

  var currentSlide = 0;
  slides[currentSlide].classList.toggle("focus");

  document.getElementById("next").addEventListener("click",function(){
    if(slideLength > 1){
      slides[currentSlide].classList.toggle("focus");

      currentSlide = ++currentSlide%slideLength
      slides[currentSlide].classList.toggle("focus");
    }
  });

  document.getElementById("prev").addEventListener("click",function(){
    if(slideLength > 1){
      slides[currentSlide%slideLength].classList.toggle("focus");
      currentSlide -= 1;
      if(currentSlide < 0){
        currentSlide = slideLength-1;
      }
      slides[currentSlide].classList.toggle("focus");
    }
  });


</script>

<?php get_footer(); ?>
