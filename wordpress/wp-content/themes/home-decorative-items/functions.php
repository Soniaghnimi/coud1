<?php
/**
 * Home Decorative Items functions
 */

//Admin css
add_editor_style( array( 'assets/css/admin.css' ) );

if ( ! function_exists( 'home_decorative_items_setup' ) ) :
function home_decorative_items_setup() {

    load_theme_textdomain( 'home-decorative-items', get_template_directory() . '/languages' );	
}
endif; 
add_action( 'after_setup_theme', 'home_decorative_items_setup' );

if ( ! function_exists( 'home_decorative_items_styles' ) ) :
	function home_decorative_items_styles() {
		// Register theme stylesheet.
		wp_register_style('home-decorative-items-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'home-decorative-items-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'home_decorative_items_styles' );

/**
 * About Theme Function
 */
require get_theme_file_path( '/about-theme/about-theme.php' );

/**
 * Customizer
 */
require get_template_directory() . '/inc/customizer.php';
