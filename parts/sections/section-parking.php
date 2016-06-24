<?php  
$travel_info_left_text = get_field('travel_info_left_text', 'options');	
$travel_info_right_text = get_field('travel_info_right_text', 'options');		
?>

<section id="map-and-directions-section">
	<div id="map-wrapper" class="pg-section-full">
		<h2 class="section-header text-center bg-col-blue-dk txt-col-wht tk-azo-sans-uber">Parking and travel</h2>
		<div id="map"></div>
	</div>
	<div class="pg-section-full orange-border">
		<h2 class="section-header text-center bg-col-orange txt-col-wht tk-azo-sans-uber">Getting here…</h2>
		<div class="container">
			<div class="row">
				
				<div class="col-xs-6">
				<?php if (!empty($travel_info_left_text)) { ?>
				<dl class="info-list">
					<?php foreach ($travel_info_left_text as $item) { ?>
					<dt class="text-uppercase txt-col-orange"><i class="fa <?php echo $item['Icon']; ?> text-center bg-col-blue txt-col-wht"></i><?php echo $item['title']; ?></dt>
					<dd><?php echo $item['text']; ?></dd>
					<?php } ?>
				</dl>
				<?php } ?>
				</div>	
				
				<div class="col-xs-6">
				<?php if (!empty($travel_info_right_text)) { ?>
				<dl class="info-list">
					<?php foreach ($travel_info_right_text as $item) { ?>
					<dt class="text-uppercase txt-col-orange"><i class="fa <?php echo $item['Icon']; ?> text-center bg-col-blue txt-col-wht"></i><?php echo $item['title']; ?></dt>
					<dd><?php echo $item['text']; ?></dd>
					<?php } ?>
				</dl>
				<?php } ?>
				</div>	
			</div>	
		</div>
	</div>
</section>
