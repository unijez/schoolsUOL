<?php
/**
 * schoolsUOL: Load in scripts
 *
 * @package WordPress
 * @subpackage schoolsUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */



/**
 * Loads scripts, styles, and fonts on the front end.
 */
function schoolsUOL_scripts() {
	
	

	// Theme stylesheet.
	wp_enqueue_style( 'global-style', get_stylesheet_directory_uri() . '/css/global.css' );
	
//	//https://github.com/aFarkas/lazysizes
	wp_enqueue_script( 'lazysizes', get_template_directory_uri() . '/js/lazysizes.min.js', '4.0.2', null,  true );
		
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', '1.8.1', null,  true );
	
	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/js/fontawesome-all.min.js', '5.0.1', null,  true );
	
	
	wp_enqueue_script( 'site-scripts', get_template_directory_uri() . '/js/site-wide-min.js', array('jquery', 'masonry'), null, true );
//	
//	
//	wp_enqueue_style( 'global-style', get_stylesheet_directory_uri() . '/css/global.css' );
//	
	 
	//Comment Script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	
}
add_action( 'wp_enqueue_scripts',    'schoolsUOL_scripts');
