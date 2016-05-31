<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head id="www-chaseparkfestival-co-uk" data-template-set="chase-park-festival-theme">
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	
	<meta name="viewport" content ="width=device-width,user-scalable=yes" />
	
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class($body_classes); ?>>
	
	<nav id="main-nav">
<!-- 		<button id="close-nav" class="btn btn-block"><i class="fa fa-arrow-circle-left fa-3x"></i></button> -->
		<div class="nav-wrapper">
			<?php wp_nav_menu(array( 
			'container' => 'false', 
			'menu' => 'Main Navigation', 
			'menu_class'  => 'menu clearfix list-unstyled',
			'fallback_cb' => false ) ); 
			?>
		</div>
	</nav>
	
	<div class="cpf-wrapper nav-closed">
		
		<?php if (is_front_page()) { ?>
		<?php get_template_part( 'parts/homepage/hp', 'masthead' ); ?>
		<?php } else { ?>
		<?php get_template_part( 'parts/global/gbl', 'masthead' ); ?>
		<?php } ?>