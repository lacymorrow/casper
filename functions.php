<?php
/**
 * Casper functions and definitions
 *
 * @package Casper
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'casper_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function casper_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Casper, use a find and replace
	 * to change 'casper' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'casper', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'casper' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Enable support for a custom header image
	$defaults = array(
		'default-image'          => '',
		'width'                  => 0,
		'height'                 => 0,
		'uploads'                => true,
		'wp-head-callback'       => ''
	);
	global $wp_version;
	if ( version_compare( $wp_version, '3.4', '>=' ) ) :
		add_theme_support( 'custom-header', $defaults );
	else :
		add_custom_image_header( $wp_head_callback, $admin_head_callback );
	endif;

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'casper_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // casper_setup
add_action( 'after_setup_theme', 'casper_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function casper_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'casper' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'casper_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function casper_scripts() {
	wp_enqueue_style( 'casper-screen', get_template_directory_uri() . '/css/screen.css' );
//	wp_enqueue_style( 'casper-style', get_stylesheet_uri() );

	wp_enqueue_script( 'casper-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'casper-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'jquery-fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '1.0.0', true );
	wp_enqueue_script( 'casper-index', get_template_directory_uri() . '/js/index.js', array(), '1.0.0', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'casper_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Customizer hook
 */
function tcx_customizer_css() {
    ?>
    <style type="text/css">
        section a { color: <?php echo get_theme_mod( 'tcx_link_color' ); ?>; }
        header .blog-title a, header .blog-description { color: #<?php echo get_theme_mod('header_textcolor'); ?>; }
    </style>
    <?php
}
add_action( 'wp_head', 'tcx_customizer_css' );