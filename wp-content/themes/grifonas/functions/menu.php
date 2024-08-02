<?php

function register_theme_menu() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu', 'theme'),
      'footer-menu-1' => __( 'Footer Menu 1','theme' ),
      'footer-menu-2' => __( 'Footer Menu 2','theme' ),
    )
  );
}

add_action( 'init', 'register_theme_menu' );
