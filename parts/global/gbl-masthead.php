<header id="gbl-masthead" class="masthead" role="banner">
	
	<div class="container">
		
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="logo-wrap">
					<a href="<?php echo get_option('home'); ?>/" class="logo"><span class="sr-only"><?php bloginfo('name'); ?></span></a>
				</div>
			</div>
		</div>
		
		<button id="main-nav-btn" class="btn btn-default btn-block"><span class="menu-label txt-col-wht tk-azo-sans-uber">Menu</span><i class="fa fa-bars fa-lg"></i></button>
		<?php if ($_SERVER['SERVER_NAME']=='www.chaseparkfestival.co.uk') { ?>
			<button id="reciteme-btn" class="reciteme btn btn-default tk-azo-sans-uber"><i class="fa fa-universal-access"></i> Accessibility</button>
		<?php } ?>
	</div>
	
	<div class="breadcrumbs bg-col-orange tk-azo-sans-uber wht-drop-shad" typeof="BreadcrumbList" vocab="http://schema.org/">
		<div class="container">
		<?php if(function_exists('bcn_display')){ bcn_display(); }?>
		</div>
	</div>
	
</header>