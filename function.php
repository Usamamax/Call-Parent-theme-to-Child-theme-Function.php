<?php
/*
=== Load parent Styles ===
*/
function dc_enqueue_styles() {
	wp_enqueue_style( 'divi-parent', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'divi-parent' ) );
	
	  wp_enqueue_style( 'divi-child-slider', get_stylesheet_directory_uri() . '/slick/css/slick.css' );
        wp_enqueue_style( 'divi-child-theme', get_stylesheet_directory_uri() . '/slick/css/slick-theme.css' );
		 wp_enqueue_script( 'divi-child-slick-js', get_stylesheet_directory_uri() . '/slick/js/slick.js' );
		 wp_enqueue_script( 'divi-child-custom-js', get_stylesheet_directory_uri() . '/custom-js.js' );
	
}
add_action( 'wp_enqueue_scripts', 'dc_enqueue_styles' );

?>
