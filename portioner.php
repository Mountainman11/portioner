<?php
/**
* Plugin Name:  Portioner
* Description:  Create Recipes and convert them for different portions
* Author:       Jonmount
* Version:      1.0
 */

 function portioner_setup_post_type(){
    register_post_type('recipe', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'recipes'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
          'name' => 'Recipes',
          'add_new_item' => 'Add New Recipe',
          'edit_item' => 'Edit Recipies',
          'all_items' => 'All Recipies',
          'singular_name' => 'Recipe'
        ),
        'menu_icon' => 'dashicons-drumstick',
        'show_in_menu' => true,
        'show_ui' => true
      ));
 };
add_action('init', 'portioner_setupt_post_type');

 function port_activate(){
     port_setup_post_type('recipe');
     flush_rewrite_rules();
 }

 function port_deactivate(){
    unregister_post_type( 'recipe' );
    flush_rewrite_rules(  );
 }

register_activation_hook( Recipe/portioner.php, 'portioner_activate' )
register_deactivation_hook( Recipe/portioner.php, 'portioner_deactivate' )

 ?>