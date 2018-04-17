<?php

	
	/**
	 * Enable ACF Video Post Option
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	
	acf_add_local_field_group(array(
		'key' => 'group_5abb5d741de1b',
		'title' => 'Post Video',
		'fields' => array(
			array(
				'key' => 'field_5abb5d8067113',
				'label' => 'Post Video',
				'name' => 'post_video',
				'type' => 'oembed',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'width' => '',
				'height' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
				array(
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'video',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));