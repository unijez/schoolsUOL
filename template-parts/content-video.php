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

//Vars
$post_video = get_field('post_video');


?>

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

	<?php if( $post_video ): ?>
	
		<div class="post-entry-video">
		
			<?php echo $post_video; ?>
		
					
		</div><!-- .featured-media -->
			
	<?php endif; ?>
