<main id="main-content">
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	<?php
	$artist_links_active = get_field('artist_links_active');
	$post_content = get_extended( $post->post_content );
	$content_main = apply_filters('the_content', $post_content['main'] );
	$content_extended = apply_filters('the_content', $post_content['extended'] );	
	?>
	<article <?php post_class(); ?>>
		<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
			<div class="container">
				<?php echo get_the_title($post->post_parent); ?>
			</div>
		</div>
	
		<div class="main-txt with-pad">
			
			<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<header class="main-text-header">
						<?php if ($artist_links_active && in_array('social', $artist_links_active)) { 
						$artist_social_links = get_field('artist_social_links');
						?>
						<div class="social-links clearfix">
							<?php foreach ($artist_social_links as $sl) { 
							$bg_col = 'bg-col-'.strtolower($sl['title']);
							$icon = "fa-".strtolower($sl['title']);		
							?>
							<a href="<?php echo $sl['social_link_url']; ?>" class="<?php echo $bg_col; ?>"><i class="fa <?php echo $icon; ?>"></i><span class="sr-only"><?php echo $sl['title']; ?></span></a>
							<?php } ?>
						</div>
						<?php } ?>
						
						<h1 class="text-uppercase tk-azo-sans-uber txt-col-blue-dk"><?php the_title(); ?></h1>	
						<?php if ($artist_links_active && in_array('website', $artist_links_active)) { 
						$website = get_field('artist_website');	
						$strip_http = str_replace("http://", "", $website);
						?>
						<a href="<?php echo $website; ?>" target="_blank" class="artist-website" rel="no-index"><?php echo $strip_http; ?></a>
						<?php } ?>
						
	
					</header>
					
					<div class="main-text-body">
						<?php echo $content_main;  ?>
					</div><!-- .main-text-body -->
				</div><!-- .col-xs-6 -->
				
				<div class="col-xs-6">
					<div class="main-text-body">
						<?php if (has_post_thumbnail($post->ID)) { ?>
							<figure class="feat-img">
								<?php feat_img($post); ?>
							</figure>
						<?php } ?>
						
						<?php echo $content_extended;  ?>
					</div><!-- .main-text-body -->
				</div><!-- .col-xs-6 -->
				
			</div><!-- .row -->
				
			</div><!-- .container -->
			
		</div><!-- .main-txt -->
		
	</article>
	<?php endwhile; ?>
	<?php endif; ?>
		
	<?php get_template_part( 'parts/artists/artists', 'slider' ); ?>
	
</main>
