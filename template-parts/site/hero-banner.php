<?php
/**
 * Hero Image Loader based on post format
 *
* @package WordPress
* @subpackage schoolsUOL
* @author     Jez Thompson <jthompson@lincoln.ac.uk>
* @since 1.0
* @version 1.0
 */

?>

	<?php

		$args = array(
		'post_type' => array('post','page'),
		'posts_per_page' => -1,
		'post__not_in' => get_option( 'sticky_posts' ), 
		'meta_query' => array( 
		   
		    array(
		      // Key = ACF Field Name (True/False field)
		      'key' => 'featured_post_page',
		      'value' => 'featured',
		      'compare' => '==' // not really needed, this is the default
		    )
		  )

		);


		$home_slider_posts = new WP_Query( $args );

		if ( $home_slider_posts->have_posts() ) :


	?>
	<div class="module-inner-wrap">

	 	<div class="home-hero-banner">
	 	
	 	
	 					<ul class="slick-slider">
	 	
	 	
	 	
     <?php while ( $home_slider_posts->have_posts() ) : $home_slider_posts->the_post() ?>

		
							<li class="slick-slide">
									
									
									
										<div class="home-hero-banner__transparent-block">
									
									
										 		<div class="home-hero-banner__detail post-spacing column column--1-of-3">
									
										 			<h2 class="home-hero-banner__title"><?php echo wp_trim_words( get_the_title(), 5 ); ?></h2>
									
										 			<?php schoolsUOL_post_meta(); ?>
									
										 			<?php schoolsUOL_permalink_button(); ?>
									
										 		</div>
									
									
										 	</div> <!--transparent-block-->		
									
										
										
										
												<?php if( has_post_format('gallery') || has_post_format('image') ): ?>
										
													<?php if ( has_post_thumbnail() ) : ?>
										
														<?php image_size_control()?>
										
											 			<?php else: ?>
										
												 		<?php image_size_control()?>
										
												 		<?php endif; ?>
												 		
												 <?php else : ?>		
												 		
												 		
												 		<?php image_size_control()?>
										
											 	<?php endif; wp_reset_query(); ?>
										
									
							</li>
		
	<?php endwhile ?>
	
		</ul><!-- .flexslider -->
		
		
					</div>
		
	
	
		</div> <!--home-hero-banner-->


	</div> <!--module-inner-wrap-->
	<?php endif; wp_reset_query(); ?>
