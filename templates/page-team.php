<?php
/**
* The template for displaying team page
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage schoolsUOL
* @author     Jez Thompson <jthompson@lincoln.ac.uk>
* @since 1.0
* @version 1.0
*
*
Template Name: Meet The Team Page
*/

get_header(); ?>
<main id="main" class="site-main site-module teams-page">

		<div class="module-inner-wrap">

			<?php if ( have_posts() ) : ?>

			<div class="author-columns-wrap">
					
					<?php while ( have_posts() ) : the_post(); ?>



					<?php
					// Output the authors list.
					$contributor_ids = get_users( array(
					'fields'  => 'ID',
					'orderby' => 'post_count',
					'order'   => 'DESC',
					'who'     => 'authors',
					));



					foreach ( $contributor_ids as $contributor_id ) :
						$post_count = count_user_posts( $contributor_id );
						// Move on if user has not published a post (yet).
						if ( ! $post_count ) {
							continue;
						}
						
						$bio_detail = get_the_author_meta( 'description', $contributor_id);
						$first_name = get_the_author_meta( 'first_name', $contributor_id);
						$last_name = get_the_author_meta( 'last_name', $contributor_id);
//						$user_email = get_the_author_meta( 'user_email', $contributor_id);
						
					
					?>

					

							<div class="author-column">


								<div class="author-bio-card">
									
									<span class="author-bio-image"><?php echo get_avatar( $contributor_id ); ?></span>


									<div class="author-bio-detail">
										
										<?php if ($first_name): ?>
										<h3 class="author-bio-title"><?php echo $first_name; ?><br><?php echo $last_name; ?></h3>
										<?php endif; ?>
										
										<!--<?php if ($user_email): ?>
										<p class="author-bio-contact"> <a href="mailto:<?php echo $user_email; ?><"><?php echo $user_email; ?></a>
										<?php endif; ?>	-->
										
										<?php if ($bio_detail): ?>
										<p class="author-bio-detail-copy"><?php echo $bio_detail; ?></p>
										<?php endif; ?>
										
										
									</div>
									
									
									<a class="author-bio-articles" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
										<?php printf( _n( '%d Article', '%d Articles', $post_count, 'dyad' ), $post_count ); ?>
									</a>
									
								</div> <!--author-bio-card-->

							</div> <!--column-->


					<?php endforeach; ?>



				<?php endwhile; ?>

		
			
			</div> <!--columns-wrap-->
			
		<?php endif;  wp_reset_query(); ?>






</div> <!--module-inner-wrap-->



</main><!-- #main -->

<?php get_footer();  ?>
