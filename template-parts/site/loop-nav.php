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
//Is there a next or previous post?
$prev_link = get_previous_post_link();
$next_link = get_next_post_link();

//Get the next or previous link url
$previous = get_previous_post();
$next = get_next_post();


 ?>

<?php if ($prev_link || $next_link): ?>

<nav class="page-nav site-module">

	<ul class="module-inner-wrap level-elements <?php if ($next_link ):?>page-nav__single-next<?php endif; ?> <?php if ($prev_link ):?>page-nav__single-prev<?php endif; ?>">


		<?php if ($prev_link) : ?>
		<li class="level-item  level-left  column--1-of-3 mobile-full-width">


								<span class="main-btn block-button block-button-icon">

								<span class=" icon-left light-blue"><i class="fas fa-arrow-left"></i></span>

								<a class="main-btn dark" href="<?php echo $previous->guid ?>">Previous Post</a>
								</span>


		</li>

		<?php else : //Empty cell for position purposes ?>

			<li class="level-item  level-left  column--1-of-3 mobile-full-width"></li>

		<?php endif; ?>


		<li class="level-item  has-text-centered media-pages column--1-of-3"><?php current_paged(); ?></li>

			<?php if ($next_link) : ?>

			<li class="level-item  level-right column--1-of-3 mobile-full-width">

						<span class="main-btn block-button block-button-icon">

						<a class="main-btn dark" href="<?php echo $next->guid ?>">Next Post</a>

						 <span class="icon-right light-blue"><i class="fas fa-arrow-right"></i></span>
						</span>


			</li>

			<?php else : //Empty cell for position purposes ?>

				<li class="level-item  level-right column--1-of-3 mobile-full-width">


			<?php endif; ?>
 	</ul>
 </nav>


<?php endif; ?>



<?php elseif ( is_home() ||  is_search() || is_post_type_archive() || is_archive()  ) :  ?>


		<?php if ( $wp_query->max_num_pages > 1 ) : ?>

		<?php
			$prev_link = get_previous_posts_link(__('&laquo; Older Entries'));
			$next_link = get_next_posts_link(__('Newer Entries &raquo;'));
		?>


		<nav class="page-nav site-module">

			<ul class="module-inner-wrap level-elements <?php if ($next_link ):?>page-nav__single-prev<?php endif; ?> <?php if ($prev_link ):?>page-nav__single-next<?php endif; ?>">

				<?php if ($next_link ):?>
				<li class="level-item  level-left  column--1-of-3 mobile-full-width">

                <?php
                $prev_a_link = get_next_posts_link( '' . __( 'Older posts', 'schoolsUOL' ) );
                if($prev_a_link):
                preg_match('/href=(["\'])([^\1]*)\1/i', $prev_a_link, $prev_link);
                ?>
								<a class="main-btn block-button block-button-icon" href="<?php echo $prev_link[2]; ?>">
  								<span class=" icon-left light-blue"><i class="fas fa-arrow-left"></i></span>
                  <span>Older Posts</span>
                </a>
                <?php
                endif;
                ?>
				</li>

				<?php else : //Empty cell for position purposes ?>

					<li class="level-item  level-left  column--1-of-3 mobile-full-width"></li>
				<?php endif; ?>

				<li class="level-item  has-text-centered  column--1-of-3"><?php current_paged(); ?></li>

				<?php if ($prev_link ):?>

				<li class="level-item  level-right column--1-of-3 mobile-full-width">

              <?php
              $next_a_link = get_previous_posts_link( __( 'Newer posts', 'schoolsUOL') . '' );
              if($next_a_link):
              preg_match('/href=(["\'])([^\1]*)\1/i', $next_a_link, $next_link);
              ?>
							<a class="main-btn block-button block-button-icon" href="<?php echo $next_link[2]; ?>">
                <span>Newer Posts</span>
							 <span class="icon-right light-blue"><i class="fas fa-arrow-right"></i></span>
             </a>
             <?php
              endif;
              ?>

				</li>

				<?php else : //Empty cell for position purposes ?>

					<li class="level-item  level-right column--1-of-3 mobile-full-width">

				<?php endif; ?>
		 	</ul>
		 </nav>


		<?php endif; ?>





<?php endif;  ?>
