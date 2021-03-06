<?php  
$sponsors_active = get_field('sponsors_active', 'options');		
?>

<?php if ($sponsors_active) { ?>
<?php  
$main_partners_active = get_field( 'main_partners_active', 'options' );
$section_title = get_field('gbl_sponsors_section_title', 'options');	
$sponsors_and_stalls = get_field('gbl_sponsors_and_stalls', 'options');	
$sponsor_counter = 0;
$slides_count = 1;
if ($main_partners_active) {
$main_partner_name = get_field( 'main_partner_name', 'options' );
$main_partner_website = get_field( 'main_partner_website', 'options' );	
$main_partner_logo = get_field( 'main_partner_logo', 'options' );		
$sponsors_and_stalls_extra = array('sponsor_name' => $main_partner_name,'sponsor_website' => $main_partner_website, 'sponsor_logo' => $main_partner_logo);
array_unshift($sponsors_and_stalls, $sponsors_and_stalls_extra);
}
$sponsors_total = count($sponsors_and_stalls);
$slides_total = ceil($sponsors_total / 5);
?>
<section id="sponsors-and-stalls" class="wide-panel bg-col-blue-dk text-center">
	<h3 class="panel-header in-block bg-col-wht tk-azo-sans-uber txt-col-orange"><?php echo $section_title; ?></h3>
	<div class="sponsors-outer-wrap">
		<div id="sponsor-slide-<?php echo $slides_count; ?>" class="sponsors-inner-wrap active">
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
			
			<?php if ($sponsor_counter % 5 == 0) { 
			$slides_count++;
			?>
			</div>
		</div>
		<div id="sponsor-slide-<?php echo $slides_count; ?>" class="sponsors-inner-wrap inactive">
			<div class="container">
			<?php } ?>
			
			<?php } ?>
			</div>
		</div>
	</div>
	<?php if ($slides_total > 1) { ?>
	<div class="slides-nav tk-azo-sans-uber text-center">
		<div class="container">
			<?php for($i = 1; $i <= $slides_total; $i++) { ?>
			<a href="#sponsor-slide-<?php echo $i; ?>" class="<?php echo ($i == 1) ? 'active':'inactive'; ?>"><?php echo $i; ?></a>
			<?php } ?>
		</div>
	</div>
	<?php } ?>
</section>
<?php } ?>