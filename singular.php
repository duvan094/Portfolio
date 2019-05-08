<?php get_header(); ?>

<?php
if(have_posts()){
  while(have_posts()){
    the_post();

?>

<article>
  <div class="wrapper project">
    <?php
        if(get_post_meta($post->ID,"project_gallery",true)){
          echo "<div class='gallery-wrapper'>";
          echo do_shortcode(get_post_meta($post->ID,"project_gallery",true));
          echo "</div>";
        }else if(get_post_meta($post->ID,"project_video",true)){
          echo "<div class='video-wrapper'>";
          echo do_shortcode(get_post_meta($post->ID,"project_video",true));
          echo "</div>";
        }

        if(get_the_terms($post->id, 'project_type' )){
          echo "<p class='type'>" . get_the_terms($post->id, 'project_type' )[0]->name . "</p>";
        }
        echo "<h1>" . get_the_title() . "</h1>";
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

  var slider;
  slider = document.getElementById("slider");

  for(var i = 1; i<slider.children.length; i++){
    slider.children[i].classList.add("invisibleSlide");
  }


  var currentSlide = 0;

  function nextImg(){
      slider.children[currentSlide].classList.remove("currentSlide");
      slider.children[currentSlide].classList.add("invisibleSlide");

      currentSlide = (currentSlide+1)%slider.children.length;

      slider.children[currentSlide].classList.remove("invisibleSlide");
      slider.children[currentSlide].classList.add("currentSlide");

      updateTracker(currentSlide);
  }

  function previousImg(){
      slider.children[currentSlide].classList.remove("currentSlide");
      slider.children[currentSlide].classList.add("invisibleSlide");

      if(currentSlide == 0){
        currentSlide = slider.children.length-1;
      }else{
        currentSlide = (currentSlide-1)%slider.children.length;
      }

      slider.children[currentSlide].classList.remove("invisibleSlide");
      slider.children[currentSlide].classList.add("currentSlide");

      updateTracker(currentSlide);
  }


    function getSlide(index){

      for(var i = 0; i<slider.children.length; i++){
        slider.children[i].classList.remove("currentSlide");
        slider.children[i].classList.add("invisibleSlide");
      }

      currentSlide = (index)%slider.children.length;

      slider.children[currentSlide].classList.remove("invisibleSlide");
      slider.children[currentSlide].classList.add("currentSlide");

      updateTracker(currentSlide);
    }




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


  document.getElementById("next").addEventListener("click",nextImg);

  document.getElementById("prev").addEventListener("click",previousImg);


  var sliderContainer = document.querySelector(".slider-cont");


  sliderContainer.addEventListener("click",function(event){
    sliderContainer.classList.toggle("expand");
  });

  sliderContainer.children[1].addEventListener("click",function(event){
    event.stopPropagation();
  });

  sliderContainer.children[2].addEventListener("click",function(event){
    event.stopPropagation();
  });

  sliderContainer.children[3].addEventListener("click",function(event){
    event.stopPropagation();
  });

</script>

<?php get_footer(); ?>
