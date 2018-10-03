<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

<section class="body-section blog-body site-module <?php theme_choice_class(); ?>">



		<?php get_template_part( 'template-parts/site/hero', 'banner' ); ?>



	<div class="module-inner-wrap">
		 		
		 		
		 			<?php if ( have_posts() ) : ?>
		 				
		 				<div class="posts-wrapper columns-wrap">
		 				
		 				
		 				<?php while ( have_posts() ) : the_post(); ?>
		 					
		 				
		 					
		 				
		 					
		 					<?php if( get_theme_mod('schools_theme_choice') == 'visual-layout'  ) : ?>
		 						
		 						
		 							
		 							
		 							
		 							<div class="post-article-container column-spacings column column--1-of-2 column--medium-1-of-1 column--small-1-of-1">
		 										
		 										<article id="post-article-<?php the_ID(); ?>" <?php post_class(); ?> >
		 											
		 											<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		 												
		 										</article>
		 										
		 										
		 								</div> <!--post-article-container-->
		 							
		 						
		 						
		 						
		 						
		 					<?php else : ?>
		 					
		 					
		 							
		 							
		 							<div class="post-article-container column-spacings column column--1-of-3 column--medium-1-of-2  column--small-1-of-2">
		 									
		 								
		 										<article id="post-article-<?php the_ID(); ?>" <?php post_class(); ?>>
		 										
		 										<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		 											
		 										</article>
		 									
		 									
		 							</div> <!--post-article-container-->
		 					
		 							
		 					
		 					
		 					
		 					
		 					
		 					<?php endif; ?>
		 					
		 					
		 					
		 					
		 				<?php endwhile; ?>
		 				
		 				</div> <!--posts-wrapper-->
		
		 			
					<?php endif;  wp_reset_query(); ?>
						
					
			
	</div> <!--module-inner-wrap-->
	
		<?php get_template_part( 'template-parts/site/loop', 'nav' ); ?>
	
	
</section>

<?php get_footer(); ?>