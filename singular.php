<?php get_header(); ?>

<?php
if(have_posts()){
  while(have_posts()){
    the_post();

?>
<div class="hero-container">
  <div class="hero project" style="background:url(<?php echo get_the_post_thumbnail_url($post->ID,'full')?>); background-size:cover; background-position:center;">
  </div>
  <?php echo "<h1>" . get_the_title() . "</h1>"; ?>
</div>


<article>
  <div class="wrapper project">
    <?php
        echo do_shortcode(get_post_meta($post->ID,"project_gallery",true));

        $terms = get_the_terms ($post->id, 'project_skill');
        echo "<p class='skills'><b>Made in</b> ". get_the_date( 'Y', '', '') . " <b>with</b>";

        $count = count($terms);
        for($i = 0; $i < $count; $i++){
          if($count > 1 && $i == $count-1){
            echo " and";
          }

          echo " " . $terms[$i]->name;

          if($i < $count-2){
            echo ",";
          }

        }

        echo ".</p>";




        the_content();
        echo "<div class='next-prev-post'>";
        next_post_link( '%link' );
        previous_post_link( '%link' );
        echo "</div>";
    ?>
  </div>
</article>

<?php
  }
}//the loop end

 ?>


<script type="text/javascript">

  var slider = document.getElementById("slider");

  var slides = slider.children;
  var slideLength = slider.children.length;

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
