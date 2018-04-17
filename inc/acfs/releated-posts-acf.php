<?php

	
	/**
	 * Enable ACF Releated Posts/Page
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	
	acf_add_local_field_group(array(
		'key' => 'group_5a8d663200f06',
		'title' => 'Related Posts/Pages',
		'fields' => array(
			array(
				'key' => 'field_5a8d663206990',
				'label' => 'Choose box destinations',
				'name' => 'featured_box_desitinations',
				'type' => 'group',
				'instructions' => 'Choose any related posts/pages that will appear as link boxes on the page.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_5a8d66320887d',
						'label' => 'Box Choices',
						'name' => 'box_choices',
						'type' => 'flexible_content',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'layouts' => array(
							'5a7ace52b4a83' => array(
								'key' => '5a7ace52b4a83',
								'name' => 'internal_page',
								'label' => 'Internal Page',
								'display' => 'block',
								'sub_fields' => array(
									array(
										'key' => 'field_5a8d66320a8b1',
										'label' => 'Instruction',
										'name' => '',
										'type' => 'message',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'message' => 'Please ensure your chosen page/post has a featured image attached, as this will be the image used within the related link box.
	
	A reasonable length title will also need to be considered',
										'new_lines' => 'wpautop',
										'esc_html' => 0,
									),
									array(
										'key' => 'field_5a8d66320a8d1',
										'label' => 'Link to page',
										'name' => 'link_to_page',
										'type' => 'post_object',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'post_type' => array(
											0 => 'page',
											1 => 'jetpack-portfolio',
										),
										'taxonomy' => array(
										),
										'allow_null' => 0,
										'multiple' => 0,
										'return_format' => 'object',
										'ui' => 1,
									),
								),
								'min' => '',
								'max' => '',
							),
							'5a8d617115e9a' => array(
								'key' => '5a8d617115e9a',
								'name' => 'internal_post',
								'label' => 'Internal Post',
								'display' => 'block',
								'sub_fields' => array(
									array(
										'key' => 'field_5a8d66320a8ea',
										'label' => 'Instruction',
										'name' => '',
										'type' => 'message',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'message' => 'Please ensure your chosen page/post has a featured image attached, as this will be the image used within the related link box.
	
	A reasonable length title will also need to be considered',
										'new_lines' => 'wpautop',
										'esc_html' => 0,
									),
									array(
										'key' => 'field_5a8d66320a8f4',
										'label' => 'Link to post',
										'name' => 'link_to_post',
										'type' => 'post_object',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'post_type' => array(
											0 => 'post',
											1 => 'innovations',
										),
										'taxonomy' => array(
										),
										'allow_null' => 0,
										'multiple' => 0,
										'return_format' => '',
										'ui' => 1,
									),
								),
								'min' => '',
								'max' => '',
							),
							'5a8d618f15e9d' => array(
								'key' => '5a8d618f15e9d',
								'name' => 'internal_event',
								'label' => 'Internal Event',
								'display' => 'block',
								'sub_fields' => array(
									array(
										'key' => 'field_5a8d66320a8fd',
										'label' => 'Instruction',
										'name' => '',
										'type' => 'message',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'message' => 'Please ensure your chosen page/post has a featured image attached, as this will be the image used within the related link box.
	
	A reasonable length title will also need to be considered',
										'new_lines' => 'wpautop',
										'esc_html' => 0,
									),
									array(
										'key' => 'field_5a8d66320a907',
										'label' => 'Link to event',
										'name' => 'link_to_event',
										'type' => 'post_object',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'post_type' => array(
											0 => 'tribe_events',
										),
										'taxonomy' => array(
										),
										'allow_null' => 0,
										'multiple' => 0,
										'return_format' => 'object',
										'ui' => 1,
									),
								),
								'min' => '',
								'max' => '',
							),
							'5a7ad4396cbfc' => array(
								'key' => '5a7ad4396cbfc',
								'name' => 'external_page',
								'label' => 'External Page',
								'display' => 'block',
								'sub_fields' => array(
									array(
										'key' => 'field_5a8d66320a910',
										'label' => 'Link to page',
										'name' => 'link_to_page',
										'type' => 'url',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '50',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
									),
									array(
										'key' => 'field_5a8d66320a91a',
										'label' => 'Page Title',
										'name' => 'page_title',
										'type' => 'text',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '50',
											'class' => '',
											'id' => '',
										),
										'default_value' => '',
										'placeholder' => '',
										'prepend' => '',
										'append' => '',
										'maxlength' => '',
									),
									array(
										'key' => 'field_5a8d66320a923',
										'label' => 'Image Choice',
										'name' => 'image_choice',
										'type' => 'image',
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => 0,
										'wrapper' => array(
											'width' => '',
											'class' => '',
											'id' => '',
										),
										'return_format' => 'array',
										'preview_size' => 'thumbnail',
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
								'min' => '',
								'max' => '',
							),
						),
						'button_label' => 'Add Box',
						'min' => '',
						'max' => 4,
					),
				),
			),
		),
		'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'page',
					),
				),
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'jetpack-portfolio',
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