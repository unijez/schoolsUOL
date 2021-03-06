<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage schoolsUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<?php if( get_theme_mod('schools_theme_choice') == 'visual-layout'  ) : ?>

			
			<?php if ( has_post_thumbnail() ) : ?>
			
				<div class="post-entry-image">
				
					<?php lazy_featured_image('full'); ?>
				
							
				</div><!-- .featured-media -->
				
			<?php else: ?>	
			
			<div class="empty-image-container">
			
				<?php get_template_part( 'template-parts/site/uol-logo', 'portrait' ); ?>
			
			
			</div><!-- .empty-image-container -->
					
			<?php endif; ?>
								<?php
					if ( is_singular() ) :
						the_title( '<h1 class="post-title post-spacing">', '</h1>' );
					else :
						the_title( '<h2 class="post-title post-spacing"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
						?>
					
					
					<?php if ( 'post' === get_post_type() ) : ?> 
						
					<div class="post-entry-meta post-spacing">
						<?php schoolsUOL_post_meta(); ?>
					</div><!-- .entry-meta -->
					
					<?php endif; ?>
					
					
					<div class="post-entry-excerpt post-spacing post-copy">
						
						<?php schoolsUOL_custom_excerpt_length(25) ; ?>	
					
					</div><!-- .post-entry-excerpt -->
					
					
					<?php schoolsUOL_permalink_button(); ?>
		
		
			
				
				
				
<?php else : ?>


			<?php if ( 'post' === get_post_type() ) : ?> 
			
			<div class="post-entry-meta post-spacing">
				<?php schoolsUOL_post_meta(); ?>
			</div><!-- .entry-meta -->
			
			<?php
			endif; ?>
			
			
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="post-title post-spacing">', '</h1>' );
			else :
				the_title( '<h2 class="post-title post-spacing"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
				?>
			
			
			<?php if ( has_post_thumbnail() ) : ?>
			
				<div class="post-entry-image">
				
					<?php lazy_featured_image('post-thumbnail'); ?>
				
							
				</div><!-- .featured-media -->
					
			<?php else: ?>	
			
			<div class="empty-image-container">
			
				<?php get_template_part( 'template-parts/site/uol-logo', 'portrait' ); ?>
			
			
			</div><!-- .empty-image-container -->
					
			<?php endif; ?>
			
			
		<div class="post-entry-excerpt post-spacing post-copy">
		
			<?php schoolsUOL_custom_excerpt_length(50) ; ?>	
	
	
		</div><!-- .post-entry-excerpt -->



<?php endif; ?>

	
	