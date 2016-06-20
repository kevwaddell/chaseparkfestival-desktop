<?php get_header(); ?>	

<main id="main-content" class="notes-bg-orange">
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<div class="container">
	
	<a href="#" class="btn btn-default btn-block btn-lg book-tickets-btn-lg tk-azo-sans-uber">Book Your Tickets</a>
	
	<article <?php post_class("hp-content"); ?>>
		<div class="row mag-bot-30">
			<div class="col-xs-8">
				<div class="main-txt">
					<?php the_content(); ?>
				</div>
			</div>
			
			<?php get_sidebar("home"); ?>
			
		</div>
		
		<?php get_template_part( 'parts/homepage/section', 'infopanel' ); ?>
		
		<?php get_template_part( 'parts/homepage/section', 'social' ); ?>
		
	</article>
</div>
<?php endwhile; ?>
<?php endif; ?>
</main><!-- #main-content -->

<?php get_footer(); ?>