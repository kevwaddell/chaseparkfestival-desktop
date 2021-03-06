<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head id="www-chaseparkfestival-co-uk" data-template-set="chase-park-festival-theme">
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	<meta name="google-site-verification" content="KOXbWzYdh57SLZKWEXgtetyfbTPr2i_xIHiVeD5QS5E" />
	
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class($body_classes); ?>>
<?php if ($_SERVER['SERVER_NAME']=='www.chaseparkfestival.co.uk') { ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NSN2FV" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NSN2FV');</script>
<!-- End Google Tag Manager -->
<?php } ?>	
	<?php get_template_part( 'parts/global/main', 'nav' ); ?>
	
	<div class="cpf-wrapper nav-closed">
		
		<?php if ( !is_page_template( 'page-templates/sponsorship-page.php' ) ) { ?>
		<?php get_template_part( 'parts/global/gbl', 'advert' ); ?>
		<?php } ?>
		
		<?php if (is_front_page()) { ?>
		<?php get_template_part( 'parts/homepage/hp', 'masthead' ); ?>
		<?php } else { ?>
		<?php get_template_part( 'parts/global/gbl', 'masthead' ); ?>
		<?php } ?>