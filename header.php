<!DOCTYPE html>
<html>
  <head>
    <title>Jacob Duvander | Portfolio</title>
    <meta charset="utf-8">
    <meta name="author" content="Jacob Duvander">
    <meta name="keywords" content="portfolio, jacob-duvander, grafic-designer, web-developer, grafisk-design, webbutvecklare, new-media-design">
    <meta name="description" content="The portfolio website of graphic designer and web developer, Jacob Duvander. Currently studying New Media Design at Jönköping University. Check out my latest projects.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href=<?php bloginfo('stylesheet_url'); ?>>


    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:title" content="Jacob Duvander - Portfolio">
    <meta property="og:description" content="The portfolio website of graphic designer and web developer, Jacob Duvander. Currently studying New Media Design at Jönköping University. Check out my latest projects.">
    <meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/thumbnail.jpg">

    <?php wp_head(); ?>
  </head>
  <body>
      <?php
      //  if( !is_front_page() ) {
          ?>

              <header class="dark">
                  <div class="header-wrapper">
                    <a id="logo" href="<?php echo home_url(); ?>">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      	 width="22.9px" height="31.6px" viewBox="0 0 22.9 31.6" style="enable-background:new 0 0 22.9 31.6;" xml:space="preserve">
                      <style type="text/css">
                      	.st0{fill:#222326;}
                      </style>
                      <path class="st0" d="M22.9,9.6v12.5c0,5.2-1.9,8.2-5.5,9.2V8.9c0-3.3-1-4.4-3.9-4.4h-1.8V23c0,0.5-0.1,0.9-0.1,1.3
                      	c-0.5,3.8-2.3,6.1-5.3,6.9H6.2c-0.9,0.2-1.9,0.4-3,0.4H0v-4.5h2.4c2.7,0,3.7-0.9,3.9-3.6V0h8C19.9,0,22.9,3.1,22.9,9.6z"/>
                      </svg>
                    </a>
                    <button class="hamburgerBtn">
                      <span></span>
                      <span></span>
                      <span></span>
                    </button>
                    <?php wp_nav_menu(array('theme_location => header-menu')) ?>
                  </div>
              </header>

          <?php
    //    } else {
      ?>

<!--
          <header class="dark">
              <div class="header-wrapper">
                <a id="logo" href="<?php //echo home_url(); ?>"><img src="<?php// bloginfo('template_url'); ?>/img/logo.svg" alt="logo"></a>
                <button class="hamburgerBtn">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
                <?php// wp_nav_menu(array('theme_location => header-menu')) ?>
              </div>
          </header>

        -->
      <?php
    //    }
      ?>

    <header class="header-fixed">
        <div class="header-wrapper">
          <a id="logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-black.svg" alt="logo"></a>
          <button class="hamburgerBtn">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <?php wp_nav_menu(array('theme_location => header-menu')) ?>
        </div>
    </header>

    <div class="mobile-menu">
      <?php wp_nav_menu(array('theme_location => header-menu')) ?>
    </div>


    <script type="text/javascript">
      window.onscroll = function(){
        checkPos();
      };

      var revealVar = 66;

      var fixedHeader = document.querySelector(".header-fixed");

      function checkPos(){
        if(window.pageYOffset >= revealVar){
          fixedHeader.classList.add("revealed");
        }else{
          fixedHeader.classList.remove("revealed");
        }
      }
    </script>

    <script type="text/javascript">

      var hamburgerBtns = document.querySelectorAll(".hamburgerBtn");

      for(let i = 0; i<hamburgerBtns.length; i++){
        hamburgerBtns[i].addEventListener("click",toggleHamburger);
      }


      function toggleHamburger(){
        for(let i = 0; i<hamburgerBtns.length; i++){
          hamburgerBtns[i].classList.toggle("revealed");
        }
        document.querySelector(".mobile-menu").classList.toggle("revealed");

        if(document.querySelector(".dark")){
          document.querySelector(".dark").classList.toggle("revealed");
        }

        if(!document.querySelector(".mobile-menu").classList.contains("revealed")){
          document.querySelector(".mobile-menu").classList.add("hidden");
        }else{
          document.querySelector(".mobile-menu").classList.remove("hidden");
        }
      }

      document.querySelector(".mobile-menu .menu-header-menu-container").addEventListener("click",function(){
        toggleHamburger();
      });

      //Prevents so that the modal doesn't close when clicking on children within.
      document.querySelector(".mobile-menu .menu-header-menu-container").children[0].addEventListener("click",function(event){
        event.stopPropagation();
      });


    </script>
