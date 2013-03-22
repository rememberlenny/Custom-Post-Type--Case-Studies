<?php
/*
Plugin Name: Case Studies AI
Plugin URI: http://github.com/lkbgift
Description: Declares a plugin that will create a custom post type displaying Acquinity Interactive's Case Studies.
Version: 1.0
Author: Leonard Bogdonoff
Author URI: http://lkb.cc
License: GPLv2
*/

add_action( 'init', 'create_case_studies_post' );

// 
// Adds Case Study
// 
  function create_case_studies_post() {
    register_post_type(
      'case-study', array( 
        'label' => 'Case Studies',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => ''),
        'query_var' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'supports' => array( 
          'title','editor','excerpt','trackbacks',
          'custom-fields','comments','revisions',
          'thumbnail','author','page-attributes',
        ),
        'labels' => array (
          'name' => 'Case Studies',
          'singular_name' => 'Case Study',
          'menu_name' => 'Case Studies',
          'add_new' => 'Add Case Study',
          'add_new_item' => 'Add New Case Study',
          'edit' => 'Edit',
          'edit_item' => 'Edit Case Study',
          'new_item' => 'New Case Study',
          'view' => 'View Case Study',
          'view_item' => 'View Case Study',
          'search_items' => 'Search Case Studies',
          'not_found' => 'No Case Studies Found',
          'not_found_in_trash' => 'No Case Studies Found in Trash',
          'parent' => 'Parent Case Study',
        ),
      ) 
    );
  }

?>
