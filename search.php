<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage schoolsUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<section class="body-section blog-body site-module">

	<?php if ( have_posts() ) : ?>

	<div class="module-inner-wrap">
		 			
		 			
		 			<div class="post-head post-archive">
			
					
				
					
							
							<h1 class="post-title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'schoolsUOL' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
					
	
			 		</div>  <!--post-head-->		
			 				<div class="posts-wrapper columns-wrap">
			 				
			 				
			 				<?php while ( have_posts() ) : the_post(); ?>
			 					
			 					<div class="post-article-container column-spacings column column--1-of-3  column--small-1-of-2">
			 					
			 				
			 						<article id="post-article-<?php the_ID(); ?>" <?php post_class(); ?>>
			 						
										<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			 							
			 						</article>
			 					
			 					
			 					</div> <!--post-article-container-->
			 					
			 				<?php endwhile; ?>
			 				
			 				</div> <!--posts-wrapper-->
			
			 			
						<?php endif;  wp_reset_query(); ?>
							

</div> <!--module-inner-wrap-->
	
		<?php get_template_part( 'template-parts/site/loop', 'nav' ); ?>
	
	
</section>


<?php get_footer(); ?>