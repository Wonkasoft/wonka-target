 <?php
/*
 *  Author: Wonkasoft | @Wonkasoft
 *  URL: http://wonkasoft.com | 
 *  Custom functions, support, custom post types and more.
 */
 
function wonka_target_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wonka-target' );

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
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'wonka-target-featured-image', 2000, 1200, true );

	add_image_size( 'wonka-target-thumbnail-avatar', 100, 100, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'wonka-target' ),
		'submenu' => __( 'Sub Menu', 'wonka-target' ),
		'sidebar' => __( 'Side Menu', 'wonka-target' ),
		'footer' => __( 'Footer Menu', 'wonka-target' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-cart', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


}
add_action( 'after_setup_theme', 'wonka_target_setup' );
 
 function wonka_target_enqueues() {
 	wp_enqueue_style( 'style', get_stylesheet_uri());
 	wp_enqueue_style( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');

 	// enqueue JS files
 	wp_enqueue_script( 'ws-jquery', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', array(), '3.1.1', true );
 	wp_enqueue_script( 'ws-ajax', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array(), '1.4.0', true );
 	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array(), '4.0.0', true );

 }
add_action( 'wp_enqueue_scripts', 'wonka_target_enqueues' );

	// Define and register starter content to showcase the theme on new sites.
	$wonka_start = array(
		'top' => array(
			'name' => __('Top Menu','wonka-target'),
			'items' => array(
				'link_products',
				'page_about_us',
				'page_help',
				'page_contact_us',
				),
			),
		'submenu' => array(
			'name' => __('Sub Menu','wonka-target'),
			'items' => array(
				'link_cart',
				'page_account',
				),
			),
		);
	add_theme_support('starter-content', $wonka_start);
	
 ?>