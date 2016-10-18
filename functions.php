<?php
/**
 * Mia functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mia
 */

if ( ! function_exists( 'mia_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mia_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Mia, use a find and replace
	 * to change 'mia' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mia', get_template_directory() . '/languages' );

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

	if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'mia' ),
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
	add_theme_support( 'custom-background', apply_filters( 'mia_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'mia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mia_content_width', 640 );
}
add_action( 'after_setup_theme', 'mia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mia_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mia' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mia' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mia_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mia_scripts() {
	wp_enqueue_style( 'mia-style', get_stylesheet_uri() );
    // Add Bootstrap Style
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/css/main.min.css',array(),'3.3.7' );
    // Add Bootstrap Scripts
    if( !is_admin()){
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', false,'3.1.1',true);
    wp_enqueue_script('jquery');
}
    wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '3.3.7', true );

		wp_enqueue_script('isotope-pkgd-min-js', get_template_directory_uri() . '/assets/isotope/isotope.pkgd.min.js', array(), '3.0.1', true );

    wp_enqueue_script( 'mia-scripts-js', get_template_directory_uri() . '/assets/js/mia-scripts.js', array(), '1.0.0', true );

		wp_enqueue_script( 'mia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

		wp_enqueue_script( 'mia-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mia_scripts' );

/**
 * Enqueue Google Fonts
 */
function mia_add_google_fonts() {

wp_enqueue_style( 'mia-google-fonts', 'https://fonts.googleapis.com/css?family=Exo:700,900', false );
}

add_action( 'wp_enqueue_scripts', 'mia_add_google_fonts' );
/**
 * Page Slug Body Class
 */
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if( is_category() ) {
    $post_type = get_query_var('post_type');
    if($post_type)
        $post_type = $post_type;
    else
        $post_type = array('nav_menu_item', 'post', 'portfolio'); // don't forget nav_menu_item to allow menus to work!
    $query->set('post_type',$post_type);
    return $query;
    }
}

/**

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Portfolio file.
 */
require get_template_directory() . '/inc/portfolio-section.php';

/**
 * Navigation Bootstrap
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
