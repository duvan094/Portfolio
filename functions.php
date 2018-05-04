<?php
  require('inc/reg_post_types.php');
  require('inc/reg_taxonomies.php');
  require('inc/reg_media.php');
  require('inc/reg_hooks.php');
  require('inc/shortcodes.php');
  require('inc/reg_page_menu.php');
  require('inc/reg_widgets.php');


  add_action("wp_ajax_loadPosts", "loadPosts");
  add_action("wp_ajax_nopriv_loadPosts", "loadPosts");


  function loadPosts(){
    // Grab php file output from server
    ob_start();
    echo "";
    $pageNumber =  $_POST["pageNumber"];
    include('partials/post-grid-parts.php');

    die();
  }

/*  function loadPosts() {
        // Grab php file output from server
        ob_start();
        include('partials/post-grid-parts.php');
        die();
  }*/
 ?>
