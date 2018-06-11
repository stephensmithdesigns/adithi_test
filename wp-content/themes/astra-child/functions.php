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
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' );
	// wp_enqueue_style( 'less_css', get_stylesheet_directory_uri() .'/style.less' );

}

	add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
	// wp_enqueue_script( 'less_js', 'https://cdnjs.cloudflare.com/ajax/libs/less.js/3.0.2/less.min.js')

}

add_action( 'wp_enqueue_scripts', 'theme_js');

function load_fonts() {
            wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300');
            wp_enqueue_style( 'et-googleFonts');
        }
    add_action('wp_print_styles', 'load_fonts');
