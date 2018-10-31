<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package WordPress
 * @subpackage schoolsUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */



/**
 * Theme Choice Class
 *
 * @since  1.0.0
 * @access public
 * @return void
 */



function theme_choice_class() {

        if( get_theme_mod('schools_theme_choice') == 'visual-layout'  ) {

             echo('visual-layout') ;

        }

    	elseif( get_theme_mod('schools_theme_choice') == 'default-layout'  ) {

    	     echo('default-layout') ;

    	}
}


function theme_choice_body($classes) {

        if( get_theme_mod('schools_theme_choice') == 'visual-layout'  ) {

             $classes[] = 'visual-layout';

        }

    	elseif( get_theme_mod('schools_theme_choice') == 'default-layout'  ) {

    	    $classes[] = 'default-layout';

    	}
    	return $classes;
}


//Now add test class to the filter
add_filter('body_class','theme_choice_body');
add_filter('post_class','theme_choice_body');



/**
 * Odd Even add to Post_Class
 *
 * @since  1.0.0
 * @access public
 * @return void
 */


if( !function_exists( 'post_odd_or_even' ) ) {
  global $current_class;
  $current_class = 'odd-post';

  function post_odd_or_even ( $classes ) {
    global $current_class;
    $classes[] = $current_class;

    $current_class = ($current_class == 'odd-post') ? 'even-post' : 'odd-post';

    return $classes;
  }
}
add_filter ( 'post_class' , 'post_odd_or_even' );



/**
 * Featured Image Alt Function
 *
 * @since  1.0.0
 * @access public
 * @return void
 */



function lazy_featured_image( $image_size = 'thumbnail' ) {

        if ( has_post_thumbnail() ) {

                global $post;
              	$post_url = get_permalink($post->ID);



              	$article_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $image_size );


         		printf(
         				'<a href="%4$s"><img class="lazyload" data-srcset="%1$s" data-src="%1$s" src="%1$s"  data-width="%2$s" height="%3$s"></a>',
         		    esc_url( $article_image_url[0] ),
         		    $article_image_url[1],
         		    $article_image_url[2],
         		    esc_url( $post_url )

         		);

            } else {
            	echo('<div class="empty-image-container">');
            	get_template_part( 'template-parts/site/uol-logo', 'portrait' );
            	echo('</div>');

       }




}






/**
 * Display Page x of x image
 *
 * @since  1.0.0
 * @access public
 * @return void
 */


function current_paged( $var = '' ) {
    if( empty( $var ) ) {
        global $wp_query;
        if( !isset( $wp_query->max_num_pages ) )
            return;
        $pages = $wp_query->max_num_pages;
    }
    else {
        global $$var;
            if( !is_a( $$var, 'WP_Query' ) )
                return;
        if( !isset( $$var->max_num_pages ) || !isset( $$var ) )
            return;
        $pages = absint( $$var->max_num_pages );
    }
    if( $pages < 1 )
        return;
    $page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    echo 'Page ' . $page . ' of ' . $pages;
}



/**
 * Slick Slider
 *
 * @since  1.0.0
 * @access public
 * @return void
 */



	function schoolsUOL_slickslider( $gallery = 'post_gallery_items', $size = 'post-thumbnail' ) {

		$id = get_the_ID();

		$post_gallery_items_images = get_field('post_gallery_items', $id);

		if ( $post_gallery_items_images ) { ?>

			<div class="post-slider">

				<ul class="slick-slider">

					<?php foreach ( $post_gallery_items_images as $post_gallery_items_image ): ?>
					<li class="slick-slide">
							<img src="<?php echo $post_gallery_items_image['sizes'][$size]; ?>" alt="<?php echo $post_gallery_items_image['alt']; ?>" />
					</li>
					<?php endforeach; ?>

				</ul>


			</div><!-- .flexslider -->

			<?php

		}
	}





/**
 * Custom Excerpt Length
 *
 * @since  1.0.0
 * @access public
 * @return void
 */


if ( ! function_exists( 'schoolsUOL_custom_excerpt_length' ) ) {

	function schoolsUOL_custom_excerpt_length($limit) {
	  $excerpt = explode(' ', get_the_excerpt(), $limit);
	  if (count($excerpt)>=$limit) {
	    array_pop($excerpt);
	    $excerpt = implode(" ",$excerpt).'...';
	  } else {
	    $excerpt = implode(" ",$excerpt);
	  }
	  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	  echo '<p>';
	  	echo $excerpt;
	  echo '</p>';
	}

}


if ( ! function_exists( 'custom_biography' ) ) {
	function custom_biography($biography, $limit) {
	  $b_bio = explode(' ', $biography, $limit);
	  if (count($b_bio)>=$limit) {
	    array_pop($b_bio);
	    $b_bio = implode(" ",$b_bio).'...';
	  } else {
	    $b_bio = implode(" ",$b_bio);
	  }
	  $b_bio = preg_replace('`[[^]]*]`','',$b_bio);
	  echo $b_bio;
	}
}

/**
 * Remove Comment Form Intro
 *
 * @since  1.0.0
 * @access public
 * @return void
 */



function schoolsUOL_remove_comments_intro($fields) {

	$fields['comment_notes_before'] = '';
	return $fields;

}

add_filter('comment_form_defaults','schoolsUOL_remove_comments_intro');





/**
 * Remove Comment Form Intro
 *
 * @since  1.0.0
 * @access public
 * @return void
 */




if ( ! function_exists( 'schoolsUOL_comment' ) ) {

	function schoolsUOL_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
		?>

		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">

			<?php __( 'Pingback:', 'schoolsUOL' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'schoolsUOL' ), '<span class="edit-link">', '</span>' ); ?>

		</li>
		<?php
				break;
			default :
			global $post;
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">

			<div id="comment-<?php comment_ID(); ?>" class="comment">

				<?php

				echo get_avatar( $comment, 150 );
				static $comment_number; $comment_number++;
				$comment_number = str_pad( $comment_number, 2, '0', STR_PAD_LEFT );

				if ( $comment->user_id === $post->post_author ) { echo '<a href="' . esc_url( get_comment_link( $comment->comment_ID ) ) . '" title="' . __( 'Comment by post author', 'schoolsUOL' ) . '" class="by-post-author"> ' . __( '', 'schoolsUOL' ) . '</a>'; } ?>

				<div class="comment-inner">

					<div class="comment-header">

						<h4><?php printf( _x( '%s says:', 'Variable: Name of commenter', 'schoolsUOL' ), get_comment_author_link() . '<span>' ); ?></span></h4>

					</div>

					<div class="comment-actions">

							<p class="comment-date"><a class="comment-date-link" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>" title="<?php printf( _x( '%s at %s', 'Variables: Date, time', 'schoolsUOL' ), get_comment_date(), get_comment_time() ); ?>"><?php echo get_comment_date() . '<span> &mdash; ' . get_comment_time() . '</span>'; ?></a></p>

							<?php
												edit_comment_link( __( 'Edit', 'schoolsUOL' ), '<p class="comment-edit">', '</p>' );

												comment_reply_link( array_merge( $args,
												array(
													'reply_text' 	=>  	__( 'Reply', 'schoolsUOL' ),
													'depth'			=> 		$depth,
													'max_depth' 	=> 		$args['max_depth'],
													'before'		=>		'<p class="comment-reply">',
													'after'			=>		'</p>'
													)
												) );
								?>


					</div><!-- .comment-actions -->

					<div class="comment-content">

						<?php if ( 0 == $comment->comment_approved ) : ?>

							<p class="comment-awaiting-moderation"><?php __( 'Your comment is awaiting moderation.', 'schoolsUOL' ); ?></p>

						<?php endif; ?>

						<?php comment_text(); ?>

					</div><!-- .comment-content -->



				</div><!-- .comment-inner -->

			</div><!-- .comment-## -->

		<?php
			break;
		endswitch;
	}

}

function image_size_control() {
	global $post;
	$image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-hero-banner-inner', false);
	$img_width = $image_url[1];
	$img_height = $image_url[2];


	if(($img_width > 1200) && ($img_height > 500) && has_post_thumbnail() ) {
				printf(
							'<img class="lazyload" data-srcset="%1$s" data-src="%1$s" src="%1$s"  data-width="%2$s" height="%3$s">',
					    esc_url( $image_url[0] ),
					    $img_width[1],
					    $img_height[2]

					);
			} else {
				echo('<div class="empty-image-container">');
				get_template_part( 'template-parts/site/uol-logo', 'portrait' );
				echo('</div>');

	}

}

function get_all_users() {
  $all_users = get_users('orderby=post_count&order=DESC');

  ?>
  <ul class="authors-list">
  <?php
  foreach ($all_users as $author) {
    ?>
    <li>
    <div class="author-role
    <?php switch($author->roles[0]) {
            case 'administrator':
              echo ' administrator ';
              break;

            case 'editor':
              echo ' editor ';
              break;

            case 'author':
              echo ' author ';
              break;

            case 'contributor':
              echo ' contributor ';
              break;

            case 'subscriber':
              echo ' subscriber ';
              break;

          }
    ?>">
      <div class="avatar">
        <?php echo get_avatar( $author->user_email, '128' ); ?>
      </div>
      <div class="text">
      <h2 class="name">
        <?php echo $author->display_name; ?>
      </h2>
      <p class="desc">
        <?php echo get_user_meta($author->ID, 'description', true); ?>
      </p>
      <p class="links">
        <a href="<?php echo get_author_posts_url( $author->ID ); ?>">View Posts</a>
      </p>
      </div>
    </div>
    </li>
    <?php
  }
  ?></ul><?php
}



function custom_admin_js() {
	$screen = get_current_screen();
		if ( $screen->id != 'nav-menus' )
		return;
	?>
	<script type="text/javascript">
		jQuery(function($){
			var warn = false;
				$('.submit-add-to-menu').on('click', function(){
					var num_menu = $('#menu-to-edit').children('.menu-item-depth-0').length;
						num_menu += $('.menu-item-checkbox:checked').length;
							if ( !warn && ( num_menu > 5 ) ) {
							warn = true;
							alert('warning: Top level menu Items are limited to 6!');
							
							}
						});
						$('#update-nav-menu').on('submit', function(){
						var num_menu = $('#menu-to-edit').children('.menu-item-depth-0').length;
							if ( num_menu > 5 ) {
							alert('error: Top level menu Items are limited to 5!');
					return false;
				}
			});
		})
	</script>
	<?php
	}
add_action('admin_footer', 'custom_admin_js');