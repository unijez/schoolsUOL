<?php
/**
 * Section: Basic
 *
 * Basic Customizer section with basic controls.
 *
 * @since 	1.0.0
 * @package WPC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Customize function.
if ( ! function_exists( 'wpc_customize_panel_basic' ) ) {
	// Customize Register action.
	add_action( 'customize_register', 'wpc_customize_panel_basic' );

	/**
	 * Customize Panel.
	 *
	 * Adds a Panel, Section with basic controls.
	 *
	 * @param  object WP_Customize $wp_customize Instance of the WP_Customize_Manager class.
	 * @since  1.0.0
	 */
	function wpc_customize_panel_basic( $wp_customize ) {
		// Section: Basic.
		$wp_customize->add_section( 'wpc_section_basic', array(
			'priority'       => 10,
			'panel'          => 'wpc_panel_wpcustomize',
			'title'          => __( 'Basic Section Title', 'WPC' ),
			'description'    => __( 'Section Description.', 'WPC' ),
			'capability'     => 'edit_theme_options'
		) );

		// Setting: Text.
		$wp_customize->add_setting( 'wpc_text', array(
			'type'                 => 'theme_mod',
			'default'              => 'Placeholder.',
			'transport'            => 'refresh', // Options: refresh or postMessage.
			'capability'           => 'edit_theme_options',
			'sanitize_callback'    => 'esc_attr'
		) );

		// Control: Text.
		$wp_customize->add_control( 'wpc_text', array(
			'label'       => __( 'Text', 'WPC' ),
			'description' => __( 'Description', 'WPC' ),
			'section'     => 'wpc_section_basic',
			'type'        => 'text'
		) );

		// Setting: Textarea.
		$wp_customize->add_setting( 'wpc_textarea', array(
			'type'                 => 'theme_mod',
			'default'              => 'Placeholder textarea.',
			'transport'            => 'refresh', // Options: refresh or postMessage.
			'capability'           => 'edit_theme_options',
			'sanitize_callback'    => 'exc_textarea'
		) );

		// Control: Textarea.
		$wp_customize->add_control( 'wpc_textarea', array(
			'label'       => __( 'Textarea', 'WPC' ),
			'description' => __( 'Description', 'WPC' ),
			'section'     => 'wpc_section_basic',
			'type'        => 'textarea'
		) );

		// Setting: Checkbox.
		$wp_customize->add_setting( 'wpc_checkbox', array(
			'type'                 => 'theme_mod',
			'default'              => 'enable',
			'transport'            => 'refresh', // Options: refresh or postMessage.
			'capability'           => 'edit_theme_options',
			'sanitize_callback'    => 'wpc_sanitize_checkbox' // Custom function in customizer-sanitization.php file.
		) );

		// Control: Checkbox.
		$wp_customize->add_control( 'wpc_checkbox', array(
			'label'       => __( 'Checkbox', 'WPC' ),
			'description' => __( 'Description', 'WPC' ),
			'section'     => 'wpc_section_basic',
			'type'        => 'checkbox'
		) );

		// Setting: Radio.
		$wp_customize->add_setting( 'wpc_radio', array(
			'type'                 => 'theme_mod',
			'default'              => 'on',
			'transport'            => 'refresh', // Options: refresh or postMessage.
			'capability'           => 'edit_theme_options',
			'sanitize_callback'    => 'wpc_sanitize_select', // Custom function in customizer-sanitization.php file.
		) );

		// Control: Radio.
		$wp_customize->add_control( 'wpc_radio', array(
			'label'       => __( 'Radio', 'WPC' ),
			'description' => __( 'Description', 'WPC' ),
			'section'     => 'wpc_section_basic',
			'type'        => 'radio',
			'choices'  => array(
				'enable'  => 'Enable',
				'disable' => 'Disable'
			)
		) );

		// Setting: Select.
		$wp_customize->add_setting( 'wpc_select', array(
			'type'                 => 'theme_mod',
			'default'              => 'enable',
			'transport'            => 'refresh', // Options: refresh or postMessage.
			'capability'           => 'edit_theme_options',
			'sanitize_callback'    => 'wpc_sanitize_select' // Custom function in customizer-sanitization.php file.
		) );

		// Control: Select.
		$wp_customize->add_control( 'wpc_select', array(
			'label'       => __( 'Select', 'WPC' ),
			'description' => __( 'Description', 'WPC' ),
			'section'     => 'wpc_section_basic',
			'type'        => 'select',
			'choices'  => array(
				'enable'  => 'Enable',
				'disable' => 'Disable'
			)
		) );
	}
}
