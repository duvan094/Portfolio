<!DOCTYPE html>
<html>
  <head>
    <title>Jacob Duvander</title>
    <meta charset="utf-8">
    <meta name="description" content="My portfolio website.">
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


    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="wrapper">
        <a id="logo" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="logo"></a>
      </div>
    </header>
