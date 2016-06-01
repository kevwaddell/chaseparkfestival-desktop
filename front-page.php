<?php get_header(); ?>	

<main id="main-content" class="notes-bg-orange">
<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<div class="container">
	<article <?php post_class("hp-content"); ?>>
		<div class="row">
			<div class="col-xs-8">
				<div class="main-txt">
					<?php the_content(); ?>
				</div>
			</div>
			<aside class="col-xs-4">
				
			</aside>
		</div>
		<section class="col-panel bg-col-blue-dk">
			<div class="row">
				<div class="col-xs-4">
					
				</div>
				<div class="col-xs-8">
					<div class="panel-txt txt-col-wht bold txt-cols-2">
						<p>The whole idea behind the event is to be inclusive for everyone regardless of ability. Factors such as remote locations, high expense, access and poor facilities can often mean many mainstream outdoor music festivals can often exclude people with disabilities.</p> 

<p>Chase Park Festival also aims to helping break down cultural barriers and stereotypes often associated with people with disabilities by engaging with the whole community.</p>

<p>The festival uses music as the foundation to get people from all walks of life together to enjoy a fun-packed carnival atmosphere.</p>

<p>As part of their rehabilitation programmes, our clients are actively involved in the whole process of producing the event, from inputting to the design and distribution of promotional materials to recording podcasts in the run up to the event for example. As well as being a really accessible event Chase Park Festival is very family friendly and there are loads of activities for kids!</p>
					</div>
				</div>
			</div>
		</section>
	</article>
</div>
<?php endwhile; ?>
<?php endif; ?>
</main><!-- #main-content -->

<?php get_footer(); ?>