<?php 

/**
 * Enqueue Scripts and Styles
 * @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */

 function lisa_enqueue_scripts_and_styles() {
    wp_enqueue_style( 'lisa_style', get_stylesheet_uri() );
 }

 add_action('wp_enqueue_scripts', 'lisa_enqueue_scripts_and_styles');

//  Connects javascript to wordpress (menu functions)

 function js_menu() {
    wp_enqueue_script( 'js-menu', get_stylesheet_directory_uri( ) . '/js/menu.js', array('jquery'), false, false);
   }

add_action( 'wp_enqueue_scripts', 'js_menu');