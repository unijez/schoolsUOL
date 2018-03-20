<?php
/**
 * schoolsUOL hook list.
 *
 * @package WordPress
 * @subpackage schoolsUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */



/**
 * HTML <body> hooks
 */
 function schoolsUOL_body_top() {
	 do_action( 'schoolsUOL_body_top' );
 }

 function schoolsUOL_body_bottom() {
	 do_action( 'schoolsUOL_body_bottom' );
 }

/**
 * HTML <header> hooks
 * Outside the <header> element, top & bottom.
 *
 */
function schoolsUOL_head_before() {
	do_action( 'schoolsUOL_head_before' );
}

function schoolsUOL_head_after() {
	do_action( 'schoolsUOL_head_after' );
}

/**
 * HTML <header> hooks
 * Inside the <header> element, top & bottom.
 *
 */
function schoolsUOL_header_top() {
	do_action( 'schoolsUOL_header_top' );
}

function schoolsUOL_header_bottom() {
	do_action( 'schoolsUOL_header_bottom' );
}

