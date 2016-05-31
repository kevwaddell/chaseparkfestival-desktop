<?php get_header(); ?>	

<main id="main-content">
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	<article <?php post_class("hp-content"); ?>>
		<div class="container">
			<div class="main-txt">
			<?php the_content(); ?>
			</div>
		</div>
	</article>
<?php endwhile; ?>
<?php endif; ?>
</main><!-- #main-content -->

<?php get_footer(); ?>