<?php
if ( ! function_exists( 'chaseparkfest_setup' ) ) :

function chaseparkfest_setup() {

		add_theme_support( 'title-tag' );
	
		add_theme_support( 'post-thumbnails' );
	
		register_nav_menus( array(
			'primary' => __( 'Main Menu',      'chaseparkfest' ),
			'primary_quick_links'  => __( 'Main menu Quick Links', 'chaseparkfest' ),
			'footer_main'  => __( 'Footer Main Menu', 'chaseparkfest' ),
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
	
	require_once(STYLESHEETPATH . '/_/functions/artists-cpt.php');

}
endif; // chaseparkfest_setup
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

/* POST THUMBNAIL FUNCTIONS */

function bg_img ( $post ) {	
	
	if (has_post_thumbnail($post->ID)) {
		
		$post_thumbnail_id = get_post_thumbnail_id( $post );
		$feat_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumb_650x400' );
	
		echo $feat_img[0];
		
		//echo '<pre>';print_r($feat_img);echo '</pre>';
		
		//echo get_the_post_thumbnail($post->ID ,'feat-img');
	
	} else {
		
		echo get_stylesheet_directory_uri().'/_/img/default-artist-img.jpg';
		
	}
	
}

function feat_img ( $post ) {	
		
		$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
		$attachment = get_post( $post_thumbnail_id );
		$alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true);
		
		//echo '<pre>';print_r($attachment->post_excerpt);echo '</pre>';
		
		$img_atts = array(
		'class'	=> "img-responsive"
		);
		
		if (!empty($alt)){
		$img_atts['alt'] = 	trim(strip_tags( $alt ));
		}
		
		if (!empty($attachment->post_title)){
		$img_atts['title'] = trim(strip_tags( $attachment->post_title ));
		}
		
		echo get_the_post_thumbnail($post->ID ,'large', $img_atts );
	
}


?>