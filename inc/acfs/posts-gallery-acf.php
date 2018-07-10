<?php

	
	/**
	 * Enable ACF Gallery Post Option
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	
	acf_add_local_field_group(array(
		'key' => 'group_5ad600527264c',
		'title' => 'Post Gallery',
		'fields' => array(
			array(
				'key' => 'field_5ad60064f54a2',
				'label' => 'Post Gallery Items',
				'name' => 'post_gallery_items',
				'type' => 'gallery',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'min' => '',
				'max' => '',
				'insert' => 'append',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
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
					'value' => 'gallery',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	