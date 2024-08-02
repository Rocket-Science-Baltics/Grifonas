<?php
/**
 * starter_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package starter_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


//Import functions
include get_template_directory() . '/functions/menu.php';
include get_template_directory() . '/functions/cleanup.php';
include get_template_directory() . '/functions/walker.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function starter_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on starter_theme, use a find and replace
		* to change 'starter_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'starter_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );


	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'starter_theme_setup' );

function my_theme_scripts() {
    wp_enqueue_script('jquery');
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

function starter_theme_scripts() {
    wp_enqueue_style('starter_theme-style', get_template_directory_uri() . '/dist/index.css');

    // Enqueue scripts with `$in_footer` set to true. Assuming vendors.js and runtime.js are dependencies for index.js
	wp_enqueue_script('starter_theme-index', get_template_directory_uri() . '/dist/index.js', array('starter_theme-vendors', 'starter_theme-runtime'), '1.0.1', true);
	wp_enqueue_script('starter_theme-vendors', get_template_directory_uri() . '/dist/vendors.js', array(), '1.0.1', true);
	wp_enqueue_script('starter_theme-runtime', get_template_directory_uri() . '/dist/runtime.js', array('starter_theme-vendors'), '1.0.1', true);
}

add_action('wp_enqueue_scripts', 'starter_theme_scripts', 20);

function cc_mime_types($mimes)
{
    $mimes['lottie'] = 'application/zip';
    $mimes['svg'] = 'image/svg+xml';
    $mimes['json'] = 'application/json';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

/**
 * Returns an SVG from images/svg
 *
 * Usage echo og_get_svg('icon-twitter.svg');
 */
function og_get_svg($svg_path, $class = '')
{
    $full_path = get_template_directory() . '/dist/img/';
    $full_path .=  $svg_path;

    if (!file_exists($full_path)) {
        return;
    }
    ob_start();
    include($full_path);
    $svg = ob_get_clean();
    
    // Adds the class to the svg element
    $svg = str_replace('<svg ', '<svg class="'.$class.'" ', $svg);
    
    return $svg;
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Enable WebP images
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

// Fix "This image cannot be processed" error
function fix_webp_upload_error($data, $file) {
    $filetype = wp_check_filetype($file, null);
    
    if($filetype['ext'] == 'webp') {
        $data['ext'] = 'jpg';
        $data['type'] = 'image/jpeg';
    }
    
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'fix_webp_upload_error', 10, 3);