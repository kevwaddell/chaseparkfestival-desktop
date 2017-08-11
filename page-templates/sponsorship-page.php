<?php 
/*
Template Name: Sponsorship page template
*/
 ?>

<?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<?php  
$year = date("Y", time());
$sponsor_active = get_field('sponsor_active', 'options');

$gbl_contact_name = get_field('gbl_contact_name', 'options');
$gbl_contact_email = get_field('gbl_contact_email', 'options');
$gbl_contact_telephone = get_field('gbl_contact_telephone', 'options');
?>
<main id="main-content"> 

	<?php get_template_part( 'parts/sections/section', 'partner' ); ?>
	
	<div class="container">
		
		<?php if ($sponsor_active) { ?>
		<article <?php post_class('pg-content'); ?>>
			<div class="row">
				<div class="col-xs-8">
					<div class="main-txt with-pad">
						<h1 class="header-label"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
				<aside class="col-xs-4 sidebar pad-top-40 pad-bot-40">
					
					<?php get_template_part( 'parts/panels/sponsor', 'enquiries' ); ?>
					
					<?php get_template_part( 'parts/panels/download', 'package' ); ?>
					
				</aside>
			</div>
			
		</article>
		
	</div>
	
	<?php get_template_part( 'parts/sections/section', 'reason2sponsor' ); ?>
	
	<?php get_template_part( 'parts/sections/section', 'sponsorPackages' ); ?>
	
	<?php get_template_part( 'parts/sections/section', 'sponsorStage' ); ?>
	
	<?php } else { ?>
<main id="main-content" class="notes-bg-orange"> 
	<?php get_template_part( 'parts/messages/sponsorship', 'message' ); ?>
	<?php } ?>
</main><!-- #main-content -->

<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>