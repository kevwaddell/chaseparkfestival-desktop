<?php 
/*
Template Name: Access Information page template
*/
 ?>
 
 <?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php  
$year = date("Y", time());
$access_info_active = get_field('access_info_active', 'options');
$sp_access_info_active = get_field('sp_access_info_active', 'options');
?>

<?php if ($access_info_active) { ?>
<main id="main-content">

	<article <?php post_class(); ?>>
	
		<div class="main-txt with-pad">
			<div class="container">
			<h1 class="header-label text-center"><?php the_title(); ?></h1>
			<?php the_content(); ?>
			</div>
		</div>
		
		<div class="info-panels mag-bot-40">
			<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<?php get_template_part( 'parts/panels/around', 'site' ); ?>
				</div>
				<div class="col-xs-6">		
					<?php get_template_part( 'parts/panels/access', 'enquiries' ); ?>
				</div>
			</div>
			</div>
		</div>
		
		<?php if ($sp_access_info_active) { ?>
		<?php get_template_part( 'parts/sections/section', 'travel-swp' ); ?>
		<?php } else { ?>
		<?php get_template_part( 'parts/sections/section', 'parking' ); ?>
		<?php } ?>
		
		<?php get_template_part( 'parts/sections/section', 'assistance' ); ?>
		
		<?php get_template_part( 'parts/sections/attitude', 'plug' ); ?>
				
	</article>
	
<?php } else { ?>
<main id="main-content" class="notes-bg-orange"> 
	<?php get_template_part( 'parts/messages/access', 'message' ); ?>
<?php } ?>	

</main><!-- #main-content -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>