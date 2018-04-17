<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage schoolsUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>


<?php schoolsUOL_content_bottom(); ?>
	
</div><!-- .sitebody-content -->

<?php schoolsUOL_content_after(); ?>


<footer class="site-footer">
	
  
  
  
  <?php if ( is_active_sidebar( 'footer-left' ) || is_active_sidebar( 'footer-middle') ) : ?>
  	
  	<div class="footer-top site-module">
  	
  	
	  	<div class="module-inner-wrap">
	  	
		  	<div class="columns-wrap flex-controlled">
		  			
		  		
		  			<?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
		  			
		  				<div class="column-spacings column column--1-of-3  column--small-1-of-2">
		  				
		  					<div class="widgets">
		  			
		  						<?php dynamic_sidebar( 'footer-left' ); ?>
		  											
		  					</div>
		  					
		  				</div>
		  				
		  			<?php endif; ?><!-- .footer-a -->
		  				
		  			<?php if ( is_active_sidebar( 'footer-middle' ) ) : ?>
		  			
		  				<div class="column-spacings column column--1-of-3  column--small-1-of-2">
		  				
		  					<div class="widgets">
		  			
		  						<?php dynamic_sidebar( 'footer-middle' ); ?>
		  											
		  					</div><!-- .widgets -->
		  					
		  				</div>
		  				
		  			<?php endif; ?><!-- .footer-b -->
		  								
		  			
		  				
		  			<?php if( function_exists('acf_add_local_field_group') )	:?>
		  				
		  				<div class="column-spacings column column--1-of-3  column--small-1-of-2">
		  					
		  					<div class="widgets">
		  					
			  					<!--Display Social Media List-->
			  					<?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>
		  					
		  					</div><!-- .widgets -->
		  					
		  				</div>	 <!--column-->
		  				
		  			<?php endif; ?>
		  			
		  	</div><!-- .footer -->
		
	  	</div> <!--module-inner-wrap-->
  	
  	
  	</div> <!--footer-top-->
	
  <?php endif; ?>
  
  
  <div class="footer-top">


  	

  </div>  <!-- footer-top -->

  <div class="site-footer__bottom site-module">
  		
  		<div class="module-inner-wrap  flex-controlled">
  		
  	
				  	
				  	
				  	<div class="credits-inner flex-column-end">
				  	
				  		<p class="title">	<?php bloginfo( 'name' ); ?></p>
					  	
					    <p class="copy">	&#169; University of Lincoln. All rights reserved</p>
				  	
				  	</div> <!--credits-inner-->
				 
				  	
				  	<a class="site-footer__hero-logo  flex-column-end" href="<?php echo esc_url('lincoln.ac.uk/home' ); ?>" rel="University Of Lincoln Logo" target="_blank" rel="noopener noreferrer">
				  			<?php get_template_part( 'template-parts/site/uol-logo', 'portrait' ); ?>
				  		</a>
				  	
  		
  		</div> <!--module-inner-wrap-->
  		
  		
  </div> <!-- footer-bottom -->



</footer> <!-- site-footer-->


<?php wp_footer(); ?>

</body>
</html>
