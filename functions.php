<?php
if ( ! function_exists( 'chaseparkfest_setup' ) ) :

function chaseparkfest_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => __( 'Main Menu',      'chaseparkfest' ),
		'primary_quick_links'  => __( 'Main menu Quick Links', 'chaseparkfest' ),
		'footer_left'  => __( 'Footer Menu Left', 'chaseparkfest' ),
		'footer_right'  => __( 'Footer Menu Right', 'chaseparkfest' ),
		'footer_base'  => __( 'Footer Base menu', 'chaseparkfest' )
	) );
	
if ( function_exists( 'register_sidebar' ) ) {
	
	$login_sb_args = array(
	'name'          => "User actions",
	'id'            => "user-actions",
	'description'   => 'Actions for logged in Users',
	'class'         => 'user-links',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '' 
	);
	register_sidebar( $login_sb_args );
}

}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'chaseparkfest_setup' );	
	
function chaseparkfest_scripts() {
	// Load stylesheets.
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', null, '3.3.6', 'All' );
	wp_enqueue_style( 'chaseparkfest-style', get_stylesheet_directory_uri().'/_/css/styles.css', array('bootstrap-css'), filemtime( get_stylesheet_directory().'/_/css/styles.css' ), 'screen' );
	
	// Load JS
	wp_enqueue_script( 'jQuery');
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'chaseparkfest-script', get_template_directory_uri() . '/_/js/functions.js', array( 'jquery', 'bootstrap-js' ), filemtime( get_stylesheet_directory().'/_/js/functions.js' ), true );
}
add_action( 'wp_enqueue_scripts', 'chaseparkfest_scripts' );

/*
*  AFC Options Page
*/

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('acf_add_options_sub_page') ) {
	
	acf_add_options_sub_page('Global settings');
	acf_add_options_sub_page('Homepage');
	acf_add_options_sub_page('Contact details');
	
}

?>