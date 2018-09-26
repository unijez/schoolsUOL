<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage schoolsUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 * Template Name: Authors
 */

 get_header(); ?>

 		<main id="main" class="site-main">

      <div class="module-inner-wrap">
        <?php get_all_users(); ?>
      </div>

 		</main><!-- #main -->

 	<?php get_footer(); ?>
