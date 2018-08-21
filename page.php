<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage schoolsUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<main id="main" class="site-main">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					
					<div class="module-inner-wrap">
					
					
					
					
					<?php 
					
					$post_format = get_post_format();
					
					if ( $post_format == 'gallery' ) : ?>
						
						<div class="post-entry">
						
							<?php schoolsUOL_slickslider('post_gallery_items','post-hero-banner-inner'); ?>
						
						</div> <!--post-entry-->
						
					<?php elseif ( $post_format == 'video' ) : 
					
						//Vars
						$post_video = get_field('post_video');
					?>
						
						
						
						
						<?php if( $post_video ): ?>
						
							<div class="post-entry post-entry-video">
							
								<?php echo $post_video; ?>
							
										
							</div><!-- .featured-media -->
								
						<?php endif; ?>
						
						
					<?php elseif ( has_post_thumbnail() ) : ?>
						
						<div class="post-entry">
						
							<?php the_post_thumbnail( 'post-hero-banner-inner' ); ?>
						</div> <!--post-entry-->
							
					<?php endif; ?>
						
					
					<div class="post-body narrow">
						
							
								<div class="post-head">
								
									<div class="post-entry-meta post-spacing">
										<?php schoolsUOL_post_meta(); ?>
									</div><!-- .entry-meta -->
										
									<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
									
								</div>  <!--post-head-->
							
								
							
						<div class="post-content">	
										<?php 
										
										the_content();
										
										$args = array(
											'before'           => '<div class="clear"></div><p class="page-links"><span class="title">' . __( 'Pages:','schoolsUOL' ) . '</span>',
											'after'            => '</p>',
											'link_before'      => '<span>',
											'link_after'       => '</span>',
											'separator'        => '',
											'pagelink'         => '%',
											'echo'             => 1
										);
									
										wp_link_pages( $args ); 
								    	?>
										
								    
						</div> <!--post-content-->
						   
							  <?php comments_template( '', true ); ?>
						   
						</div> <!--post-body-->  
					   
					 
					   
					</div> <!--module-inner-wrap-->
															                                    	        	        
				</div><!-- .post -->
		
		
	<?php endwhile; else: ?>
	 

	<?php endif; ?>  	
		
</main><!-- #main -->


<?php get_footer(); ?>