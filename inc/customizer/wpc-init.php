<?php
/**
 * WP Customize Init
 *
 * Base file for WPCustomize related stuff.
 *
 * @since 	1.0.0
 * @package WPC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Panel: WPCustomize.
 *
 * @since 1.0.0
 */
if ( file_exists( get_template_directory() . '/inc/customizer/customizer-sanitization.php' ) ) {
    require_once( get_template_directory() . '/inc/customizer/customizer-sanitization.php' );
}



/**
 * Panel: WPCustomize.
 *
 * @since 1.0.0
 */
if ( file_exists( get_template_directory() . '/inc/customizer/panel/wpcustomize.php' ) ) {
    require_once( get_template_directory() . '/inc/customizer/panel/wpcustomize.php' );
}


/**
 * Section: Basic.
 *
 * @since 1.0.0
 */
//if ( file_exists( get_template_directory() . '/inc/customizer/section/basic.php' ) ) {
//    require_once( get_template_directory() . '/inc/customizer/section/basic.php' );
//}
//
///**
// * Section: Advanced.
// *
// * @since 1.0.0
// */
//if ( file_exists( get_template_directory() . '/inc/customizer/section/advanced.php' ) ) {
//    require_once( get_template_directory() . '/inc/customizer/section/advanced.php' );
//}
