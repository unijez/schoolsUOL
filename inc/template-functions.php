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


