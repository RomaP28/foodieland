<?php

function p($arr) {
  echo '<pre>';
  print_r($arr);
  echo '</pre>';
}

function foodieland_init() {
  add_theme_support( 'title-tag' );
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action( 'wp_head', 'wp_generator' );
  add_theme_support('post-thumbnails');
  add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'classic-theme-styles' );
  }, 20 );
  register_nav_menus(
    array(
      'header_menu' => esc_html__( 'Header Menu', 'foodieland' ),
      'footer_menu' => esc_html__( 'Footer Menu', 'foodieland' ),
    )
  );

  load_theme_textdomain( 'foodieland', get_template_directory() . '/lang' );

}

add_action( 'after_setup_theme', 'foodieland_init' );

function foodieland_scripts() {
  wp_enqueue_script( 'jquery-lib', get_template_directory_uri() . '/src/app/libs/jquery.min.js', '', '', true );
  wp_enqueue_script( 'swiper-lib', get_template_directory_uri() . '/src/app/libs/swiper-bundle.min.js', 'jquery-lib', '', true );
  wp_enqueue_script( 'scripts-main', get_template_directory_uri() . '/src/app/js/scripts.min.js', 'jquery-lib', '', true );
  wp_enqueue_style( 'swiper-styles', get_template_directory_uri() . '/src/app/libs/swiper-bundle.min.css');

  wp_localize_script(
    'scripts-main',
    'ajax_script',
    array(
      'ajaxurl' => admin_url('admin-ajax.php'),
      'nonce' => wp_create_nonce('ajax-nonce'),
      'theme_url' => get_template_directory() . '/lang',
    )
  );

  if(is_front_page()){
    wp_enqueue_style('home-styles', get_template_directory_uri() . '/src/app/css/home.min.css');
  } else {
    wp_enqueue_style('inner-styles', get_template_directory_uri() . '/src/app/css/inner.min.css');
  }

}

add_action( 'wp_enqueue_scripts', 'foodieland_scripts' );

function foodieland_recipes_init() {
  $labels = array(
    'name'                  => _x( 'Recipes', 'Post type general name', 'foodieland' ),
    'singular_name'         => _x( 'Recipe', 'Post type singular name', 'foodieland' ),
    'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'foodieland' ),
    'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'foodieland' ),
    'add_new'               => __( 'Add New', 'foodieland' ),
    'add_new_item'          => __( 'Add New Recipe', 'foodieland' ),
    'new_item'              => __( 'New Recipe', 'foodieland' ),
    'edit_item'             => __( 'Edit Recipe', 'foodieland' ),
    'view_item'             => __( 'View Recipe', 'foodieland' ),
    'all_items'             => __( 'All Recipes', 'foodieland' ),
    'search_items'          => __( 'Search Recipes', 'foodieland' ),
    'parent_item_colon'     => __( 'Parent Recipes:', 'foodieland' ),
    'not_found'             => __( 'No Recipes found.', 'foodieland' ),
    'not_found_in_trash'    => __( 'No Recipes found in Trash.', 'foodieland' ),
    'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'foodieland' ),
    'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'foodieland' ),
    'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'foodieland' ),
    'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'foodieland' ),
    'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'foodieland' ),
    'insert_into_item'      => _x( 'Insert into Recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'foodieland' ),
    'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'foodieland' ),
    'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'foodieland' ),
    'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'foodieland' ),
    'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'foodieland' ),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
//    'rewrite'            => array( 'slug' => 'book' ),
//    'capability_type'    => 'post',
//    'has_archive'        => false,
//    'hierarchical'       => false,
    'taxonomies' => array('category', 'post_tag'),
    'menu_position'      => null,
    'menu_icon'          => 'dashicons-food',
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt'),
  );

  register_post_type( 'recipe', $args );

  $args = array(
    'labels' => array(
      		'name'                     => 'Categories',
		      'singular_name'            => 'Category',
		      'menu_name'                => 'Categories',
    ),
    'public' => true,
  );

  register_taxonomy( 'custom_category', array( 'recipes' ), $args );
}

add_action( 'init', 'foodieland_recipes_init' );