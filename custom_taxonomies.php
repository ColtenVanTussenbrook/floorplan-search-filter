<?php

/**
*this file contains all the custom taxonomies required for this plugin to work
**/

//add new taxonomies for bathrooms, levels, etc.
function create_bathrooms_taxonomy () {
    register_taxonomy(
        'bathrooms',
        'product',
         array (
                  'label' => 'Bathrooms',
                  'hierarchical' => true,
           )
      );
  }
add_action('init', 'create_bathrooms_taxonomy');

function create_levels_taxonomy () {
    register_taxonomy(
        'levels',
        'product',
         array (
                  'label' => 'Levels',
                  'hierarchical' => true,
           )
      );
  }
add_action('init', 'create_levels_taxonomy');

function create_square_footage_taxonomy () {
    register_taxonomy(
        'square-footage',
        'product',
         array (
                  'label' => 'Square Footage',
                  'hierarchical' => true,
           )
      );
  }
add_action('init', 'create_square_footage_taxonomy');

function create_width_taxonomy () {
    register_taxonomy(
        'width',
        'product',
         array (
                  'label' => 'Width',
                  'hierarchical' => true,
           )
      );
  }
add_action('init', 'create_width_taxonomy');

function create_depth_taxonomy () {
    register_taxonomy(
        'depth',
        'product',
         array (
                  'label' => 'Depth',
                  'hierarchical' => true,
           )
      );
  }
add_action('init', 'create_depth_taxonomy');
?>