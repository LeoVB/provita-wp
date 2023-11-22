<?php 

define('__VERSION__', 'provita01');

function Provita_theme_support() {

    add_theme_support( 'title-tag' );
     add_theme_support( 'custom-logo' );
    // add_theme_support( 'post-thumbnails' );

}

add_action('after_setup_theme','Provita_theme_support');

function Provita_menus(){
    $locations = array(
        'primary' => "Desktop primary left sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus( $locations );
}

add_action("init","Provita_menus");



function Provita_register_style() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'ProvitaCSS', get_template_directory_uri() . "/assets/css/style.css", array('ProvitaBootstrapCSS'), $version, 'all' );
    wp_enqueue_style( 'ProvitaBootstrapCSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
    wp_enqueue_style( 'ProvitaFontAwesome', 'https://use.fontawesome.com/releases/v5.12.0/css/all.css', array(), '5.12.0', 'all' );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), __VERSION__ );
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), __VERSION__ );
}

add_action( 'wp_enqueue_scripts', 'Provita_register_style' );



function Provita_register_scripts() {

    wp_enqueue_script( 'Provita-Jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
    wp_enqueue_script( 'Provita-poper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
    wp_enqueue_script( 'Provita-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
    wp_enqueue_script( 'Provita-js', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), __VERSION__, true );


}

add_action( 'wp_enqueue_scripts', 'Provita_register_scripts' );

add_filter( 'show_admin_bar', '__return_false' );

?>