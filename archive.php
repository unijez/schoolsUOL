<?php
/**
 * The template for displaying archive pages
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

<section class="body-section blog-body site-module">



	<div class="module-inner-wrap">


		 			<div class="post-head post-archive">

		 					<h4 class="post-title">

		 							<?php
		 							if ( is_day() ) :
		 								printf( __( 'Date: %s', 'schoolsUOL' ), get_the_date() );

		 							elseif ( is_month() ) :
		 								printf( __( 'Month: %s', 'schoolsUOL' ), get_the_date( _x( 'F Y', 'F = Month, Y = Year', 'schoolsUOL' ) ) );

		 							elseif ( is_year() ) :
		 								printf( __( 'Year: %s', 'schoolsUOL' ), get_the_date( _x( 'Y', 'Y = Year', 'schoolsUOL' ) ) );

		 							elseif ( is_category() ) :
		 								printf( __( '%s', 'schoolsUOL' ), single_cat_title( '', false ) . '' );

		 							elseif ( is_tag() ) :
		 								printf( __( '%s', 'schoolsUOL' ), single_tag_title( '', false ) . '' );

		 							elseif ( is_author() ) :
		 								$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) );
		 								printf( __( '%s', 'schoolsUOL' ), $curauth->display_name );

		 							else :
		 								_e( 'Archive', 'schoolsUOL' );
		 							endif;


		 							?>

		 					</h4>

		 						<?php $paged = get_query_var( 'paged' ) ?: 1;

		 							if ( 1 < $wp_query->max_num_pages ) : ?>

		 								<h3><?php printf( __( '(page %s of %s)', 'schoolsUOL' ), $paged, $wp_query->max_num_pages ); ?></h3>

		 							<?php endif; ?>


		 						<?php
		 						$tag_description = tag_description();

		 						if ( ! empty( $tag_description ) ) {
		 							echo apply_filters( 'tag_archive_meta', '<div class="tag-meta">' . $tag_description . '</div>' );
		 						}
		 						?>

		 				</div>  <!--post-head-->




		 				<?php if ( have_posts() ) : ?>

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




		 				</div> <!--posts-wrapper-->



	</div> <!--module-inner-wrap-->

		<?php get_template_part( 'template-parts/site/loop', 'nav' ); ?>


</section>


<?php get_footer(); ?>
