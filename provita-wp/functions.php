<?php
/**
 * provitapet Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package provitapet Theme
 */

define('__VERSION__', '1.0.0');

if ( ! function_exists( 'provitapet_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function provitapet_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Codeskill Theme Theme, use a find and replace
		 * to change 'provitapet' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'provitapet', get_template_directory() . '/languages' );

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

		// Custom image sizes
		add_image_size( 'provitapet-blog-small', 320, 212, true );
		add_image_size( 'provitapet-blog-small-2x', 640, 424, true );
		add_image_size( 'provitapet-square', 190, 190, true );
		add_image_size( 'provitapet-square-2x', 380, 380, true );
		add_image_size( 'provitapet-history', 1108, 613, true );


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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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

add_action( 'after_setup_theme', 'provitapet_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function provitapet_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'provitapet' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'provitapet' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'provitapet_widgets_init' );

function Provita_menus(){
    $locations = array(
        'primary' => "Header menu",
        'footer' => "Footer Menu Items"
    );
}
/**
 * Enqueue scripts and styles.
 */

function provitapet_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), __VERSION__ );
	wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.css', array(), __VERSION__ );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), __VERSION__ );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), __VERSION__ );
	wp_enqueue_style( 'animate.css', get_template_directory_uri() . '/assets/css/animate.min.css', array(), __VERSION__ );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

function scm_ajax_enqueue_scripts(){	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), __VERSION__, true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), __VERSION__, true );
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), __VERSION__, true );
	wp_enqueue_script( 'App', get_template_directory_uri() . '/assets/js/App.js', array('jquery'), __VERSION__, true );
}

add_action( 'wp_enqueue_scripts', 'provitapet_scripts' );
add_action( 'wp_enqueue_scripts', 'scm_ajax_enqueue_scripts' );
add_action( 'init', 'Provita_menus' );

// Desactivar Gutenberg y utilizar el editor clásico
add_filter('use_block_editor_for_post', '__return_false', 10);