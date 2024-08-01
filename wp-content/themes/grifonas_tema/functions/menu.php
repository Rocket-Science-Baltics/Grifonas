<?php

function register_theme_menu() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu', 'theme')
    )
  );
}


add_action( 'init', 'register_theme_menu' );

function register_footer_legals_menu() {
    register_nav_menu('footer-legals-menu', 'Footer Legals Menu');
}
add_action('after_setup_theme', 'register_footer_legals_menu');
