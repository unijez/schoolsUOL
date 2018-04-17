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

	<div class="entry-content">
		<?php
			the_content(); get_the_title() ;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'schoolsUOL' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php schoolsUOL_entry_footer(); ?>
	</footer><!-- .entry-footer -->
