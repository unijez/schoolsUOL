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
		'post_type' => 'post',
		'posts_per_page' => 1,
			'tax_query' => array(
			'relation' => 'OR',
			    array(
			       	'taxonomy' => 'post_format',
			        'field' => 'slug',
			        'terms' => array( 'post-format-gallery' )
			    ),
			    array(
			       	'taxonomy' => 'post_format',
			        'field' => 'slug',
			        'terms' => array( 'post-format-image' )
			    )
			)
			
		);
		
		
		$home_slider_posts = new WP_Query( $args );
		
		if ( $home_slider_posts->have_posts() ) : 
		
		
	?>
	<div class="module-inner-wrap">
	 	
	 	<div class="home-hero-banner">
	 	
     <?php while ( $home_slider_posts->have_posts() ) : $home_slider_posts->the_post() ?>	
	 	
	 	
	 	
	 	<div class="home-hero-banner__transparent-block">
	 		
	 		
	 		<div class="home-hero-banner__detail post-spacing column column--1-of-3">
	 			
	 			<?php the_title( '<h2 class="home-hero-banner__title">', '</h2>' ); ?>
	 			
	 			
	 			<?php schoolsUOL_post_meta(); ?>
	 			
	 			<?php schoolsUOL_permalink_button(); ?>
	 			
	 		</div>
	 		
	 		
	 	</div> <!--transparent-block-->
	 	
	 	
	 	<?php if( has_post_format('gallery') ): ?>
		 	
		 	 <?php schoolsUOL_slickslider('post_gallery_items','post-hero-banner'); ?>
		 	
	 	<?php elseif (has_post_format('image')) : ?>
		 		
		 	<?php lazy_featured_image('post-hero-banner'); ?>	
		 		
	 	<?php endif; wp_reset_query(); ?>
	 	
	
	
	 	
		
		
	 	
		
	<?php endwhile ?>  
	
		</div> <!--home-hero-banner-->
	

	</div> <!--module-inner-wrap-->	
	<?php endif; wp_reset_query(); ?>	