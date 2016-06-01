<?php get_header(); ?>	

<main id="main-content">
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	<article <?php post_class(); ?>>
		<header class="strap-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
			<div class="container">
				<h1 class="strap-header"><?php the_title(); ?></h1>
			</div>
		</header>
	
		<div class="main-txt">
			<div class="container">
			<?php the_content(); ?>
			</div>
		</div>
	</article>
<?php endwhile; ?>
<?php endif; ?>
</main><!-- #main-content -->

<?php get_footer(); ?>