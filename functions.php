<?php
    if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
}
function register_my_menus() {
  register_nav_menus(
    array(
      'top_menu' => __( 'Sticky Menu' ),
      'main-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
?>