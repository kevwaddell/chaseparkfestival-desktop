<?php  
$sponsors_active = get_field('sponsors_active', 'options');		
?>

<?php if ($sponsors_active) { ?>
<?php  
$section_title = get_field('gbl_sponsors_section_title', 'options');	
$sponsors_and_stalls = get_field('gbl_sponsors_and_stalls', 'options');	
$sponsors_total = count($sponsors_and_stalls);
$sponsor_counter = 0;
?>
<section class="wide-panel bg-col-blue-dk text-center">
	<h3 class="panel-header in-block bg-col-wht tk-azo-sans-uber txt-col-orange"><?php echo $section_title; ?></h3>
	<div class="sponsors-outer-wrap">
		<div class="sponsors-inner-wrap">
			<div class="container">
			<?php foreach ($sponsors_and_stalls as $sponsor) { 
			$sponsor_counter++;	
			?>
			
			<div class="sponsor-logo bg-col-wht" style="background-image: url(<?php echo $sponsor['sponsor_logo']; ?>);">
				<?php if ( !empty($sponsor['sponsor_website']) ) { ?>
				<a href="<?php echo $sponsor['sponsor_website']; ?>" target="_blank" rel="nofollow"><span class="sr-only"><?php echo $sponsor['sponsor_name']; ?></span></a>
				<?php } else { ?>
				<span class="sr-only"><?php echo $sponsor['sponsor_name']; ?></span>
				<?php } ?>
			</div>
			
			<?php if ($sponsor_counter % 5 == 0) { ?>
			</div>
		</div>
		<div class="sponsors-inner-wrap">
			<div class="container">
			<?php } ?>
			
			<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php } ?>