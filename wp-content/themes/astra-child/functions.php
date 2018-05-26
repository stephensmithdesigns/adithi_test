<?php
/**
 * astra_child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package astra_child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra_child-theme-css', get_stylesheet_directory_uri() .
	'/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


/**
 * Adding Social Icon Sizes
 */
add_filter( 'storm_social_icons_size', create_function( '', 'return "normal";' ) );
add_filter( 'storm_social_icons_size', create_function( '', 'return "large";' ) );
add_filter( 'storm_social_icons_size', create_function( '', 'return "2x";' ) );
add_filter( 'storm_social_icons_size', create_function( '', 'return "3x";' ) );
add_filter( 'storm_social_icons_size', create_function( '', 'return "4x";' ) );
