<?php
/**
 * Panel: WPCustomize
 *
 * Basic Customizer panel with basic controls.
 *
 * @since 	1.0.0
 * @package WPc
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Customize function.
if ( ! function_exists( 'wpc_panel_wpcustomize' ) ) {
	// Customize Register action.
	add_action( 'customize_register', 'wpc_panel_wpcustomize' );

	/**
	 * Customize Panel.
	 *
	 * Adds a Panel, Section with basic controls.
	 *
	 * @param  object WP_Customize $wp_customize Instance of the WP_Customize_Manager class.
	 * @since  1.0.0
	 */
	function wpc_panel_wpcustomize( $wp_customize ) {
	
				// Panel: Basic.
//				$wp_customize->add_panel( 'wpc_panel_wpcustomize', array(
//					'priority'       => 10,
//					'title'          => __( 'Theme Choice', 'WPC' ),
//					'description'    => __( 'Choose which version of the theme you woud like to load', 'WPC' ),
//					'capability'     => 'edit_theme_options'
//				) );
		
		
				// Panel: Basic.
				$wp_customize->add_section( 'wpc_section_basic', array(
					'priority'       => 10,
					'title'          => __( 'Theme Choice', 'WPC' ),
					'description'    => __( 'Choose which version of the theme you woud like to load', 'WPC' ),
					'capability'     => 'edit_theme_options'
				) );
		
				// Setting: Radio.
						$wp_customize->add_setting( 'schools_theme_choice', array(
							'type'                 => 'theme_mod',
							'default'              => 'default-layout',
							'transport'            => 'refresh', // Options: refresh or postMessage.
							'capability'           => 'edit_theme_options',
							'sanitize_callback'    => 'wpc_sanitize_select', // Custom function in customizer-sanitization.php file.
						) );
				
						// Control: Radio.
						$wp_customize->add_control( 'schools_theme_choice', array(
							'label'       => __( 'Theme Choice', 'WPC' ),
							'description' => __( 'Default or visual', 'WPC' ),
							'section'     => 'wpc_section_basic',
							'type'        => 'radio',
							'choices'  => array(
								'default-layout'  => 'Default',
								'visual-layout' => 'Visual'
							)
						) );
		
	}
}
