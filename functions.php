<?php
/**
 * URI Modern Styleguide functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uri-modern-styleguide
 */

/**
 * Enqueue scripts and styles.
 */
function uri_modern_styleguide_enqueues() {

	$parent_style = 'uri-modern-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	wp_enqueue_style( 'uri-modern-styleguide-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get( 'Version' ) );

	/**
	 * Enqueue Google Code Prettify
	 *
	 * @link https://github.com/google/code-prettify
	 */
	wp_enqueue_script( 'google-code-prettify', 'https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js' );

}
add_action( 'wp_enqueue_scripts', 'uri_modern_styleguide_enqueues' );
