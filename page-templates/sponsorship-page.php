<?php 
/*
Template Name: Sponsorship page template
*/
 ?>

<?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<?php  
$year = date("Y", time());
$sponsor_active = get_field('sponsor_active');
?>
<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<main id="main-content" class="notes-bg-orange"> 
	<div class="container">
		
		<?php if ($sponsor_active) { ?>
		<article <?php post_class('pg-content'); ?>>
		
			<div class="main-txt">
				<?php the_content(); ?>
			</div>
			
		</article>
		
		<?php } else { ?>
		<?php get_template_part( 'parts/messages/sponsorship', 'message' ); ?>
		<?php } ?>
		
	</div>
</main><!-- #main-content -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>