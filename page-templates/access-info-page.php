<?php 
/*
Template Name: Access Information page page template
*/
 ?>
 
 <?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php  
$year = date("Y", time());
$access_info_active = get_field('access_info_active', 'options');
?>

<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<?php if ($access_info_active) { ?>
<main id="main-content">

	<article <?php post_class(); ?>>
	
		<div class="main-txt with-pad">
			<div class="container">
			<?php the_content(); ?>
			</div>
		</div>
		
		<div class="info-panels">
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
		
		<section id="map-and-directions-section" class="pg-section-full">
			<div id="map-wrapper">
				<h2 class="text-center bg-col-blue-dk txt-col-wht tk-azo-sans-uber">Parking and travel</h2>
				<div id="map"></div>
			</div>
			<div class="info-2-cols orange-border">
				<h2 class="text-center bg-col-orange txt-col-wht tk-azo-sans-uber">Getting here…</h2>
				<div class="container">
						
				</div>
			</div>
		</section>
		
		<section id="service-assistance-section" class="pg-section-full bg-col-orange">
			<div class="info-2-cols">
				<h2 class="text-center bg-col-wht txt-col-orange tk-azo-sans-uber">Service and assistance</h2>
				<div class="container">
						
				</div>
			</div>
		</section>
		
		<div id="attitude-plug">
			<div class="container">
				<div class="row">
					<div class="col-xs-3">
						<div class="plug-logo"></div>
					</div>
					<div class="col-xs-6">
						Improving deaf and disabled people's access to live music.
					</div>
					<div class="col-xs-3">
						<a href="" class="btn btn-default btn-block btn-lg">Find out more</a>
					</div>
				</div>
			</div>
		</div>
		
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