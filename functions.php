<?php
/**
 * schoolsUOL functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package schoolsUOL
 */

if ( ! function_exists( 'schoolsUOL_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function schoolsUOL_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on schoolsUOL, use a find and replace
		 * to change 'schoolsUOL' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'schoolsUOL', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		// Post thumbnails
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'post-thumbnail', 600, 9999 );
		add_image_size( 'post-gallery-thumbnail', 480, 250, array( 'top', 'left')  );
		add_image_size( 'post-hero-banner', 1220, 420, array( 'top', 'left')  );
		add_image_size( 'post-hero-banner-inner', 1220, 570, array( 'top', 'left')  );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary', 'schoolsUOL' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'schoolsUOL_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Post formats
		add_theme_support( 'post-formats', array( 'video', 'gallery', 'image' ) );


		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'schoolsUOL_setup' );

/*
** REMOVE CATEGORY: AND TAG: AND AUTHOR: FROM SEARCHES AND THE DIFFERENT ARCHIVE PAGES
*/
function prefix_archive_title( $title ) {
	 if ( is_category() ) {
		 $title = single_cat_title( '', false );
	 } elseif ( is_tag() ) {
		 $title = single_tag_title( '', false );
	 } elseif ( is_author() ) {
		 $title = '<span class="vcard">' . get_the_author() . '</span>' ;
	 }
	 return $title;
}
add_filter( 'get_the_archive_title', 'prefix_archive_title' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function schoolsUOL_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'schoolsUOL_content_width', 640 );
}
add_action( 'after_setup_theme', 'schoolsUOL_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function schoolsUOL_widgets_init() {




			register_sidebar( array(
				'name' 			=> __( 'Footer Left', 'schoolsUOL' ),
				'id' 			=> 'footer-left',
				'description' 	=> __( 'Widgets in this area will be shown in the left column in the footer.', 'schoolsUOL' ),
				'before_title' 	=> '<h3 class="widget-title">',
				'after_title' 	=> '</h3>',
				'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
				'after_widget' 	=> '</div></div>'
			) );

			register_sidebar( array(
				'name' 			=> __( 'Footer Middle', 'schoolsUOL' ),
				'id' 			=> 'footer-middle',
				'description' 	=> __( 'Widgets in this area will be shown in the middle column in the footer.', 'schoolsUOL' ),
				'before_title' 	=> '<h3 class="widget-title">',
				'after_title' 	=> '</h3>',
				'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
				'after_widget' 	=> '</div></div>'
			) );


			register_sidebar( array(
						'name' 			=> __( 'Footer Right', 'schoolsUOL' ),
						'id' 			=> 'footer-right',
						'description' 	=> __( 'Widgets in this area will be shown in the right column in the footer.', 'schoolsUOL' ),
						'before_title' 	=> '<h3 class="widget-title">',
						'after_title' 	=> '</h3>',
						'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
						'after_widget' 	=> '</div></div>'
					) );



}
add_action( 'widgets_init', 'schoolsUOL_widgets_init' );



/**
 * Developer hooks.
 */
require get_template_directory() . '/inc/hooks.php';



/**
 * Load site scripts/styles
 */
require get_template_directory() . '/inc/template-scripts.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Implement ACF.
 */
require get_template_directory() . '/inc/functions-acf.php';

/**
 * Customize Init.
 *
 * WP Customize related stuff.
 *
 * @since 1.0.0
 */
if ( file_exists( get_template_directory() . '/inc/customizer/wpc-init.php' ) ) {
    require_once( get_template_directory() . '/inc/customizer/wpc-init.php' );
}


/**
 * Load Theme Update file.
 */
if ( file_exists( get_template_directory() . '/inc/plugin-update-checker/plugin-update-checker.php' ) ) {

	require get_template_directory() .  '/inc/plugin-update-checker/plugin-update-checker.php';

	$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
		'https://wordpress.uat.lincoln.ac.uk//wp-update-server/?action=get_metadata&slug=schoolsUOL',
		__FILE__, //Full path to the main plugin file or functions.php.
		'schoolsUOL'
	);


}
