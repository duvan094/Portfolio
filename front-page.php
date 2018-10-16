<?php get_header(); ?>

<div id="hero" class="front-page hero">
    <div class="hero-center">
      <div class="slider-container parallax" id="hero-slider" data-depth="0.5">
        <section>
          <h2>Web developer</h2>
        </section>
        <section>
          <h2>Graphic designer</h2>
        </section>
        <section>
          <img src="<?php bloginfo('template_url'); ?>/img/responsive.svg" alt="Responsive Logo">
        </section>
      </div>
    </div>
    <!--<h2>Graphic designer & Web developer</h2>-->
  <img class="wave" src="<?php bloginfo('template_url'); ?>/img/wave.svg">
  <img id="arrow" src="<?php bloginfo('template_url'); ?>/img/arrow-white.svg" alt="arrow">
</div>
<div class="featured-title front-page" id="scroll-finish">
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
          echo '<li class="invisible">';
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
  echo '</ul>';
endif;

?>
<article class="about-me invisible" id="about">
  <div class="wrapper">
    <?php dynamic_sidebar('about-me'); ?>
    <?php dynamic_sidebar('profile-img'); ?>
  </div>
</article>

<script type="text/javascript">

  document.getElementById("arrow").addEventListener("click",function(){
    event.preventDefault();
    scroll("scroll-finish");
  });


  /*
    Add scroll animation to about-me which is on the same page.
  */
  var anchor;
  var elements = document.getElementsByTagName('a');
  for(var i = 0; i < elements.length; i++) {
    if(elements[i].href.includes("#")){
      var linkArr = elements[i].href.split("#");
      anchor = linkArr[linkArr.length-1];
      elements[i].addEventListener("click",function(){
        event.preventDefault();
        scroll(anchor);
      })
    }
  }


  var scrollFinish;
  var scrollPos;
  var maxSpeed = 40;
  var easeSpeed = 2;

  var easeLength = 0;
  for(var i = 0; i<=maxSpeed; i++){//Calculate the when the easeEnd is to begin
    easeLength += maxSpeed - (i*easeSpeed);
  }

  function scroll(id){
    scrollFinish = document.getElementById(id).getBoundingClientRect().top - 120 + window.scrollY;
    scrollPos = window.scrollY;

    if(document.querySelector(".mobile-menu").classList.contains("revealed")){
      for(let i = 0; i<hamburgerBtns.length; i++){
        hamburgerBtns[i].classList.toggle("revealed");
      }
      document.querySelector(".mobile-menu").classList.remove("revealed");
      document.querySelector(".mobile-menu").classList.add("hidden");


    }

    scrollAnimate();
  }

  var heroSlider = document.getElementById("hero-slider");
  var endScroll =  document.getElementById("scroll-finish");
  var hero =  document.getElementById("hero");

  var scrollSpeed = 0;
  function scrollAnimate(){
    if(scrollPos < scrollFinish){

      if(scrollPos >= scrollFinish - easeLength){
        scrollSpeed = scrollSpeed > 1 ? scrollSpeed - easeSpeed : 1;
      }else{
        scrollSpeed = scrollSpeed < maxSpeed ? scrollSpeed + easeSpeed : maxSpeed;
      }
      scrollPos = scrollSpeed + scrollPos;
      window.scrollTo(0, scrollPos);
      window.requestAnimationFrame(scrollAnimate);
    }else{
      scrollSpeed = 0;
    }
  }

</script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/parallax.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slider.js"></script>

<?php get_footer(); ?>
