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

  window.onresize = function(event) {
      resizeSlider();
  };

  var slider = document.getElementById("slider");

  function resizeSlider(){
      var sliderContainerWidth = document.querySelector(".slider-cont").offsetWidth;

      for(var i = 0; i<slider.children.length; i++){
        slider.children[i].style.width = sliderContainerWidth + "px";
      }

      slider.style.width = sliderContainerWidth*slider.children.length + "px";
  }

  resizeSlider();

  var currentSlide = 0;

  var slideTracker = document.getElementById("slide-tracker");

  for(var i = 0; i<slider.children.length; i++){
    var btn = document.createElement("BUTTON");

    (function(i) {
      btn.addEventListener("click",function(event){
        for(var x = 0; x < slideTracker.children.length; x++){
          if(event.target != slideTracker.children[x]){
            slideTracker.children[x].classList.remove("selected");
          }
        }

        event.target.classList.add("selected");
        var slide = i;
        getSlide(slide);
      });
    }(i));

    slideTracker.appendChild(btn);
  }



  function updateTracker(slide){
    for(var i = 0; i < slideTracker.children.length; i++){
      if(slideTracker.children[slide] != slideTracker.children[i]){
        slideTracker.children[i].classList.remove("selected");
      }
    }

    slideTracker.children[slide].classList.add("selected");
  }

  updateTracker(0);

  document.getElementById("next").addEventListener("click",function(){
    currentSlide++;

    if(currentSlide > slider.children.length-1){
      currentSlide = 0;
    }

    getSlide(currentSlide);
  });

  document.getElementById("prev").addEventListener("click",function(){
    currentSlide--;

    if(currentSlide < 0){
      currentSlide = slider.children.length-1;
    }

    getSlide(currentSlide);
  });

  function getSlide(slideIndex){
    currentSlide = slideIndex;
    slider.style.transform = "translate(" + ((currentSlide/slider.children.length) * -100) + "%,0)";
    updateTracker(currentSlide);
  }
  
</script>

<?php get_footer(); ?>
