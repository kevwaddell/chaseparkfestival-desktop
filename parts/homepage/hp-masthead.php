<?php  
/* FESTIVAL LOCATION AND DATE DATA */
$location_active = get_field('cpf_date_active', 'options');
$fest_location = get_field('cpf_location', 'options');
$fest_date = get_field('cpf_date', 'options');
$fest_time = get_field('cpf_time', 'options');	
$tickets_active = get_field('tickets_active', 'options');
$gbl_tickets_url = get_field('gbl_tickets_url', 'options');
?>

<header id="hp-masthead" class="masthead<?php echo($tickets_active) ? '':' no-tickets'; ?>" role="banner">
	
	<div class="container">
			
				<?php if ($location_active) { ?>
				<div class="date-location text-center tk-azo-sans-uber">
					<time class="hp-mast-date dl-item"><?php echo $fest_date; ?></time>
					<div class="hp-mast-location dl-item"><?php echo $fest_location; ?></div>
					<time class="hp-mast-time dl-item"><?php echo $fest_time; ?></time>
				</div>
				<?php } else { 
				$gbl_future_message = get_field('gbl_future_message', 'options');	
				?>
				<div class="hp-mast-message text-center tk-azo-sans-uber"><?php echo $gbl_future_message; ?></div>
				<?php } ?>
			
			<div class="logo-wrap">
				<div class="logo"><span class="sr-only"><?php bloginfo('name'); ?></span></div>
			</div>
			
			<div class="festival-tag text-center tk-azo-sans-uber txt-col-wht"><?php bloginfo('description'); ?></div>

			<button id="main-nav-btn" class="btn btn-default btn-block"><span class="menu-label txt-col-wht tk-azo-sans-uber">Menu</span><i class="fa fa-bars fa-lg"></i></button>
			<?php if ($_SERVER['SERVER_NAME']=='www.chaseparkfestival.co.uk') { ?>
		<button id="reciteme-btn" class="reciteme btn btn-default tk-azo-sans-uber"><i class="fa fa-universal-access"></i> Accessibility</button>
			<?php } ?>
			
		<?php if ($tickets_active) { ?>
		<a href="<?php echo $gbl_tickets_url; ?>" target="_blank" class="btn btn-default btn-block btn-lg book-tickets-btn-lg tk-azo-sans-uber">Book Your Tickets</a>			
		<?php } ?>
		
		
	</div>
	
</header>