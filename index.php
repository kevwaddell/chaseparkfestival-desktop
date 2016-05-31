<?php get_header(); ?>	

<main id="main-content">
<?php if ( have_posts() ): ?>
	<section id="blog-posts">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?>>
			<h1><?php the_title(); ?></h1>
			<div class="main-txt">
				<?php the_content(); ?>
			</div>
		</article>
<?php endwhile; ?>
	</section>
<?php endif; ?>
</main><!-- #main-content -->

<?php get_footer(); ?>