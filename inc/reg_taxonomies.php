<?php
function create_project_taxonomies() {

	$args = array(
    'label'                     => 'Project Type',
    'hierarchical'               => true,
    'public'                     => true,
  );

  register_taxonomy( 'project_type', array('project'), $args );

  $args = array(
    'label'                     => 'Project Skillz',
    'hierarchical'               => false,
    'public'                     => true,
  );

  register_taxonomy( 'project_skill', array('project'), $args );

}

add_action( 'init', 'create_project_taxonomies' );

 ?>
