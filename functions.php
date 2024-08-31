<?php

function p($arr) {
  echo '<pre>';
  print_r($arr);
  echo '</pre>';
}

register_nav_menus(
  array(
    'header_menu' => esc_html__( 'Header Menu', 'foodieland' ),
    'footer_menu' => esc_html__( 'Footer Menu', 'foodieland' ),
  )
);

function foodieland_scripts() {
  wp_enqueue_script( 'jquery-lib', get_template_directory_uri() . '/src/app/libs/jquery.min.js', '', '', false );
  wp_enqueue_script( 'swiper-lib', get_template_directory_uri() . '/src/app/libs/swiper-bundle.min.js', 'jquery-lib', '', false );
  wp_enqueue_script( 'scripts-main', get_template_directory_uri() . '/src/app/js/scripts.min.js', 'jquery-lib', '', true );
  wp_enqueue_style( 'swiper-styles', get_template_directory_uri() . '/src/app/libs/swiper-bundle.min.css');

  wp_localize_script(
    'scripts-main',
    'ajax_script',
    array(
      'ajaxurl' => admin_url('admin-ajax.php'),
      'nonce' => wp_create_nonce('ajax-nonce'),
    )
  );

  if(is_front_page()){
    wp_enqueue_style('home-styles', get_template_directory_uri() . '/src/app/css/home.min.css');
  } else {
    wp_enqueue_style('inner-styles', get_template_directory_uri() . '/src/app/css/inner.min.css', [], time());
  }

}

add_action( 'wp_enqueue_scripts', 'foodieland_scripts' );