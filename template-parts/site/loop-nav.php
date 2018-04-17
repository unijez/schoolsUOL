<?php
/**
 * Loop Navigtions
 *
* @package WordPress
* @subpackage schoolsUOL
* @author     Jez Thompson <jthompson@lincoln.ac.uk>
* @since 1.0
* @version 1.0
 */

?>

<?php if ( is_singular() ) : // If viewing a single post page. ?>

<?php 

$prev_link = get_previous_post_link();
$next_link = get_next_post_link();

	echo '<pre>';
	var_dump( $prev_link );
	echo '</pre>';

	echo '<pre>';
	var_dump( $next_link );
	echo '</pre>';
 ?>
 
<?php if ($prev_link || $next_link): ?> 

<nav class="site-module">
	<ul class="site-module-inner level-elements">

		
		<li class="level-item  level-left media-nav column--1-of-3 mobile-full-width">

			<?php if ($prev_link) : ?>
			
					
						<a class="main-btn block-button dark" href="<?php echo get_permalink( $prev_link->ID ); ?>"><i class="fas fa-chevron-circle-left fa-lg"></i> Previous Memorial</a>
					
				
			<?php endif; ?>
		
		</li>
		
		<li class="level-item  has-text-centered media-pages column--1-of-3"><?php current_paged(); ?></li>
		
		<li class="level-item  level-right media-nav column--1-of-3 mobile-full-width">
		<?php if ($next_link) : ?>
				
				
					<a class="main-btn block-button dark" href="<?php echo get_permalink( $next_link->ID ); ?>">Next Memorial <i class="fas fa-chevron-circle-right fa-lg"></i></a>
					
				
		<?php endif; ?>
		</li>
 	</ul>
 </nav>
 
 
<?php endif; ?>
	
	
<?php elseif ( is_post_type_archive() || is_archive() ) :  ?>
	
		
	
		
		<?php 
		
		$prev_link = get_previous_post_link();
		$next_link = get_next_post_link();
		
		 ?>
		 
		<?php if ($prev_link || $next_link): ?> 
		
		<nav class="site-module">
			<ul class="site-module-inner level-elements">
		
				
				<li class="level-item  level-left media-nav column--1-of-3 mobile-full-width">
		
					<?php if ($prev_link) : ?>
					
						<?php $prev_link_url = get_previous_posts_page_link(); ?>
					
							
								<a class="main-btn block-button dark" href="<?php echo($prev_link_url); ?>"><i class="fas fa-chevron-circle-left fa-lg"></i> Previous Page</a>
											
					<?php endif; ?>
				
				</li>
				
				<li class="level-item  has-text-centered pages-out-pages column--1-of-3"><?php current_paged(); ?></li>
				
				<li class="level-item  level-right media-nav column--1-of-3 mobile-full-width">
				<?php if ($next_link) : ?>
				
				<?php $next_link_url = get_next_posts_page_link(); ?>
				
						<a class="main-btn block-button dark" href="<?php echo($next_link_url); ?>">Next Page <i class="fas fa-chevron-circle-right fa-lg"></i></a>
												
				<?php endif; ?>
				</li>
		 	</ul>
		 </nav>
		 
		 
		<?php endif; ?>

<?php elseif ( is_home() ||  is_search() ) :  ?>
	
		
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		
		<?php 
		$prev_link = get_previous_posts_link(__('&laquo; Older Entries'));
		$next_link = get_next_posts_link(__('Newer Entries &raquo;'));
		?>
		

		<nav class="page-nav site-module">
			<ul class="module-inner-wrap level-elements <?php if ($next_link ):?>page-nav__single-next<?php endif; ?><?php if ($prev_link ):?>page-nav__single-prev<?php endif; ?>">
		
				<?php if ($next_link ):?>
				<li class="level-item  level-left  column--1-of-3 mobile-full-width">
		
					
								<span class="main-btn block-button block-button-icon">
								
								<span class=" icon-left light-blue"><i class="fas fa-arrow-left"></i></span>
								
								<?php echo get_next_posts_link( '' . __( 'Older posts', 'schoolsUOL' ) ); ?>
								</span>
						
				
				</li>
				<?php endif; ?>
				<li class="level-item  has-text-centered  column--1-of-3"><?php current_paged(); ?></li>
				
				<?php if ($prev_link ):?>
				
				<li class="level-item  level-right column--1-of-3 mobile-full-width">
						
							<span class="main-btn block-button block-button-icon">
							
							<?php echo get_previous_posts_link( __( 'Newer posts', 'schoolsUOL') . '' ); ?>
							
							 <span class="icon-right light-blue"><i class="fas fa-arrow-right"></i></span>
							</span>
				
						
				</li>
				<?php endif; ?>
		 	</ul>
		 </nav>
		 
		 
		<?php endif; ?>
		
	
		
		
	
<?php endif;  ?>


