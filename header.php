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
        if( is_singular() || is_archive() ) {
          ?>
              <header class="dark">
                  <div class="header-wrapper">
                    <a id="logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-black.svg" alt="logo"></a>
                    <?php wp_nav_menu(array('theme_location => header-menu')) ?>
                  </div>
              </header>
          <?php
        } else {
      ?>
          <header>
              <div class="header-wrapper">
                <a id="logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="logo"></a>
                <?php wp_nav_menu(array('theme_location => header-menu')) ?>
              </div>
          </header>
      <?php
        }
      ?>

    <header class="header-fixed">
        <div class="header-wrapper">
          <a id="logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-black.svg" alt="logo"></a>
          <?php wp_nav_menu(array('theme_location => header-menu')) ?>
        </div>
    </header>

    <script type="text/javascript">
      window.onscroll = function(){
        checkPos();
      };

      var revealVar = 100;

      var fixedHeader = document.querySelector(".header-fixed");

      function checkPos(){
        if(window.pageYOffset >= revealVar){
          fixedHeader.classList.add("revealed");
        }else{
          fixedHeader.classList.remove("revealed");
        }
      }


    </script>
