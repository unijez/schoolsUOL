<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage schoolsUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

if ( ! function_exists( 'schoolsUOL_post_meta' ) ) {

	
	function schoolsUOL_post_meta() { ?>
		
		
		<?php if( get_theme_mod('schools_theme_choice') == 'visual-layout'  && is_front_page() ): ?>
		
				
					<?php 
						
						$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
						if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
							$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
						}
				
						$time_string = sprintf( $time_string,
							esc_attr( get_the_date( 'c' ) ),
							esc_html( get_the_date( 'F jS, Y' ) ),
							esc_attr( get_the_modified_date( 'c' ) ),
							esc_html( get_the_modified_date() )
						);
				
						$posted_on = sprintf(
							/* translators: %s: post date. */
							esc_html_x( '%s', 'post date', 'schoolsUOL' ),
							'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
						);
						
						
						
						
						
						?>
						
						
						
								
						<div class="date"><i class="fas fa-calendar-alt fa-2x"></i><?php echo($posted_on) ?></div>
						
						<ul class="flex-controlled post-meta-likes">		
									<?php if ( function_exists( 'nice_likes' ) ) {
										echo('<li class="likes">');
											 nice_likes( array( 'echo' => true ) );
										echo('</li>');
									
									} ?>
								
								
									<?php if ( comments_open() ) {
										
										echo('<li class="comments">');
										echo('<i class="fas fa-comments fa-2x"></i>');
									
										comments_popup_link( '0', '1', '%', 'post-comments' );
										
										echo('</li>');
									} ?>
						</ul>
						
						
				
		
		
		<?php else : ?>
	
		
		
				<?php 
				
				$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
				if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
					$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
				}
		
				$time_string = sprintf( $time_string,
					esc_attr( get_the_date( 'c' ) ),
					esc_html( get_the_date( 'F jS, Y' ) ),
					esc_attr( get_the_modified_date( 'c' ) ),
					esc_html( get_the_modified_date() )
				);
		
				$posted_on = sprintf(
					/* translators: %s: post date. */
					esc_html_x( '%s', 'post date', 'schoolsUOL' ),
					'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
				);
				
				
				
				
				
				?>
		
				<ul class="flex-controlled post-meta-likes">		
				
					<li class="date"><i class="fas fa-calendar-alt fa-2x"></i><?php echo($posted_on) ?></li>
				
					<?php if ( function_exists( 'nice_likes' ) ) {
						echo('<li class="likes">');
							 nice_likes( array( 'echo' => true ) );
						echo('</li>');
					
					} ?>
				
				
					<?php if ( comments_open() ) {
						
						echo('<li class="comments">');
						echo('<i class="fas fa-comments fa-2x"></i>');
					
						comments_popup_link( '0', '1', '%', 'post-comments' );
						
						echo('</li>');
					} ?>
				</ul>
		
		
		
		<?php endif; ?>
		
		
	<?php
	}

}


if ( ! function_exists( 'schoolsUOL_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function schoolsUOL_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'schoolsUOL' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'schoolsUOL' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'schoolsUOL' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'schoolsUOL' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'schoolsUOL' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'schoolsUOL' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;




/**
 * Post Permalink Button
 *
 * @since  1.0.0
 * @access public
 * @return void
 */



if ( ! function_exists( 'schoolsUOL_permalink_button' ) ) {

	
	function schoolsUOL_permalink_button() { ?>
			
			<?php if( get_theme_mod('schools_theme_choice') == 'visual-layout'  && is_front_page() ): ?>
			
				
				<a class="read-more main-btn block-button button-spacing" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
				
				
			<?php else : ?>
			
				<a class="read-more main-btn block-button-icon with-icon button-spacing" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More<span class=""><i class="fas fa-long-arrow-right fa-fw fa-2x"></i></span></a>
			
			<?php endif; ?>
			
	<?php
	}

}
	
	
/**
 * Custom Featured Image ALT Tag
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
 



function image_alt_tag_featured( $post_id = null ){
	
	if ( $post_id === NULL ) {
			global $post;
			$post_id = $post->ID;
	}
	
	//vars
	$page_title = get_the_title();
	$site_title = get_bloginfo('name');
	$attachment_id = get_post_thumbnail_id( $post_id );
	
	if ( $attachment_id ) {
	
		// Get the attachment alt text.
		$alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true );
		
		// Get the attachment caption.
		$caption = get_post_field( 'post_excerpt', $attachment_id );
		
		// Get the attachment title.
		$title = get_the_title( $attachment_id );

		echo $site_title;
		echo ' - ';
		
		if( $alt ) {
		
			echo $alt;
			
		} elseif( $title ) {
		
			echo $title;
		
		} elseif( $caption ) {
		
			echo $caption;
			
		
			
		} else {
			echo $page_title;
		}
	
	}

}	
	
	

/**
 * University Footer Credits
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
 
 
 function university_links() {
 
 	$sccessibility = esc_url('lincoln.ac.uk/home/abouttheuniversity/accessibility/' );
 	$contacting = esc_url('lincoln.ac.uk/home/contactus/' );
 	$legal = esc_url('lincoln.ac.uk/home/abouttheuniversity/governance/universitypolicies/' );
 	$privacy = esc_url('lincoln.ac.uk/home/abouttheuniversity/governance/universitypolicies/websiteandpublicationsinformationliability/' );
 	$disclaimer = esc_url('lincoln.ac.uk/home/abouttheuniversity/governance/universitypolicies/websiteandpublicationsinformationliability/' );
 	$freedom = esc_url('secretariat.blogs.lincoln.ac.uk/information-compliance/freedom-of-information/' );
 	
	echo('<ul class="university-links">');
		
	 	echo('<li><a href="' . $sccessibility. '" title="Accessibility">' . 'Accessibility'. '</a></li>');
	 	echo('<li><a href="' . $contacting. '" title="Contacting the University">' . 'Contacting the University'. '</a></li>');
	 	echo('<li><a href="' . $legal. '" title="Legal">' . 'Legal'. '</a></li>');
	 	echo('<li><a href="' . $privacy. '" title="Privacy">' . 'Privacy'. '</a></li>');
	 	echo('<li><a href="' . $disclaimer. '" title="Disclaimer">' . 'Disclaimer'. '</a></li>');
	 	echo('<li><a href="' . $freedom. '" title="Freedom of Information">' . 'Freedom of Information'. '</a></li>');
		
	echo('</ul>');
	
 };
 
	
