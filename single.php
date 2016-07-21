<?php get_header(); ?>	

<main id="main-content">
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<article <?php post_class(); ?>>
			<header class="post-header text-center">
				<?php if (has_post_thumbnail($post->ID)) { ?>
				<figure class="feat-img">
					<?php feat_img($post); ?>
				</figure>
				<?php } ?>

				<h1 class="txt-col-blue tk-azo-sans-uber"><?php the_title(); ?></h1>	
				<div class="post-date">Published on: <time><?php the_date(); ?></time></div>
			</header>
			<hr />
			<div class="main-txt">
				<?php the_content(); ?>
			</div>
		</article>
	</div>
<?php endwhile; ?>
<?php endif; ?>
</main><!-- #main-content -->

<div class="divider bg-col-blue"></div>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>