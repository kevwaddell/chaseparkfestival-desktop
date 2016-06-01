<?php  
/* FESTIVAL LOCATION AND DATE DATA */
$fest_location = get_field('cpf_location', 'options');
$fest_date = get_field('cpf_date', 'options');
$fest_time = get_field('cpf_time', 'options');	
?>

<header id="hp-masthead" class="masthead" role="banner">
	<div class="mast-bg-imgs">
		<div class="mast-guitar-bg"></div>
		<div class="mast-grass-bg"></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1">
				<div class="logo-wrap">
					<div class="logo"><span class="sr-only"><?php bloginfo('name'); ?></span></div>
				</div>
				<div class="date-location text-center tk-azo-sans-uber">
					<time class="hp-mast-date dl-item"><span class="bg-col-blue wht-drop-shad"><?php echo $fest_date; ?></span></time>
					<div class="hp-mast-location dl-item"><span class="bg-col-orange wht-drop-shad"><?php echo $fest_location; ?></span></div>
					<time class="hp-mast-time dl-item"><span class="bg-col-blue-dk wht-drop-shad"><?php echo $fest_time; ?></span></time>
				</div>
			</div>
			<div class="col-xs-1">
				<button id="main-nav-btn" class="btn btn-default btn-block"><span class="menu-label txt-col-wht tk-azo-sans-uber">Menu</span><i class="fa fa-bars fa-lg"></i></button>
			</div>
		</div>
	</div>
	
</header>