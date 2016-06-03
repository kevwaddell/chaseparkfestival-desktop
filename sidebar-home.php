<?php  
$artists = false;	
/* SOCIAL MEDIA LINKS DATA */
$social_links = get_field('gbl_social_links', 'options');	
?>

<aside class="col-xs-4 sidebar">
	<div class="info-panel blue-grad with-icon">
		<i class="icon fa fa-microphone bg-col-blue-dk txt-col-wht text-center"></i>
		<h3 class="txt-col-orange text-center tk-azo-sans-uber">Artist Line up</h3>
		<?php if ($artists) { ?>
		
		<ul class="artist-list list-unstyled text-center text-uppercase mag-bot-0">
			<li><a href="#">Turin Brakes</a></li>
			<li><a href="#">Slug</a></li>
			<li><a href="#">Blizzard</a></li>
			<li><a href="#">Gallery Circus</a></li>
			<li><a href="#">Hulkenberg</a></li>
			<li><a href="#">Monogram</a></li>
			<li><a href="#">Hot soles</a></li>
			<li><a href="#">Beth Macari</a></li>
			<li><a href="#">Mc Creazy Legs</a></li>
		</ul>

		<?php } else { ?>
		<div class="well text-center bg-col-orange txt-col-wht bold">
			
			<figure class="line-up-img">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/_/img/line-up-panel-imgs.png" class="img-responsive" />
			</figure>
			
			<p>The line up for this years Festival will be available soon.</p>
			
			<?php if ($social_links) { ?>
			<p>Keep up to date by following us on Twitter or Liking us on Facebook.</p>
			
			<div class="social-links">
				<?php foreach ($social_links as $link) { ?>
					<a href="<?php echo $link['link_url']; ?>" target="_blank"><i class="fa <?php echo $link['link_icon']; ?>"></i><span class="sr-only"><?php echo $link['link_title']; ?></span></a>
				<?php } ?>
			</div>
			<?php } ?>
			
		</div>
		<?php } ?>
				
	</div>
</aside>