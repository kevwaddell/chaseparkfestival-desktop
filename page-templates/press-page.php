<?php 
/*
Template Name: Press page template
*/
 ?>

<?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<?php  
$year = date("Y", time());
$press_active = get_field('press_active');
?>
<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<main id="main-content" class="notes-bg-orange"> 
	<div class="container">
<?php if ($press_active) { ?>
<?php  
$press = get_field('press');	
?>
	<article <?php post_class('pg-content'); ?>>

		<section id="press-section" class="video-grid">

				<?php foreach ($press as $article) { ?>
					<div class="press-item">
						<h3 class="txt-col-blue text-center"><?php echo $video['video_title']; ?></h3>
						<iframe width="500" height="281" src="<?php echo $video['video_url']; ?>" frameborder="0" allowfullscreen></iframe>
					</div>			
				<?php } ?>
				
		</section>

	</article>

<?php } else { ?>
	<?php get_template_part( 'parts/messages/press', 'message' ); ?>
<?php } ?>	
	</div>

</main><!-- #main-content -->
<?php endwhile; ?>
<?php endif; ?>



<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>