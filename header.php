<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
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
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php schoolsUOL_body_top(); ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'schoolsUOL' ); ?></a>
	
	<div class="header-search site-module hide">
	
		<div class="module-inner-wrap">
		
			<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="search" placeholder="<?php _e( 'Type and press enter', 'schoolsUOL' ); ?>" name="s" id="s" />
			</form>
		
		</div> <!--module-inner-wrap-->
	
	</div> <!--header-search-->
	
	
	<header id="masthead" class="site-header site-module">
		
		<?php schoolsUOL_header_top(); ?>
		
		<div class="module-inner-wrap">
		
		
		<div class="site-branding  flex-controlled">
			
			<a class="site-branding__hero-logo"  href="<?php echo esc_url('lincoln.ac.uk/home' ); ?>" rel="University Of Lincoln Logo" target="_blank" rel="noopener noreferrer">
				<?php get_template_part( 'template-parts/site/uol-logo', 'landscape' ); ?>
			</a>
			
			<div class="site-branding__hero-wording flex-controlled">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title home-page"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;?>

			
			</div> <!--site-branding__hero-wording-->
			
		</div><!-- .site-branding -->

	


		<nav id="site-navigation" class="main-navigation">
			
	
			
			<ul class="primary-menu clear">
			
			<?php
		
				$nav_args = array( 
					'container' 		=> '', 
					'theme_location' => 'primary-menu',
					'items_wrap' 		=> '%3$s'
				);
				
				wp_nav_menu( $nav_args ); 
				
			?>
		
			<li class="search-toggle-menu"><button href="#" class="search-toggle main-btn" title="<?php _e( 'Show the search field', 'schoolsUOL' ); ?>"><i class="fas fa-search"></i></button></li>
			
			</ul>
			
		</nav><!-- #site-navigation -->
		
		
		<?php schoolsUOL_header_bottom(); ?>
		
		
		</div> <!--module-inner-wrap-->
		
	
		
		<ul class="mobile-header-control level-elements">
			
			<li class="search-toggle-menu-item"><button class="mobile-menu-button main-btn" aria-controls="primary-menu" aria-expanded="false"><i class="fal fa-align-left"></i></button></li>
			<li class="search-toggle-menu"><button href="#" class="search-toggle main-btn" title="<?php _e( 'Show the search field', 'schoolsUOL' ); ?>"><i class="fas fa-search"></i></button></li>
		
		</ul>
		
		
		<nav class="mobile-navigation hide">
							
			<ul class="primary-menu clear">
					
				<?php
		
					if ( has_nav_menu( 'primary-menu' ) ) {
																			
							wp_nav_menu( $nav_args ); 
		
					} else {
						
							wp_list_pages( $list_pages_args );
							
					} 
						
				?>
												
			</ul><!-- .main-menu -->
				
		</nav><!-- .mobile-navigation -->
		
		
	</header><!-- #masthead -->


<?php schoolsUOL_head_after(); ?>

<?php schoolsUOL_content_before(); ?>

<div class="sitebody-content">
		
	<?php schoolsUOL_content_top(); ?>

