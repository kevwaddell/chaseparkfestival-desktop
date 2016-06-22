<?php 
/*
Template Name: Contact page with form template
*/
 ?>

<?php get_header(); ?>	

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
<?php 
$form_active = get_field('form_active');	

$gbl_contact_name = get_field('gbl_contact_name', 'options');
$gbl_contact_email = get_field('gbl_contact_email', 'options');
$gbl_contact_telephone = get_field('gbl_contact_telephone', 'options');

$gbl_ae_contact_name = get_field('gbl_ae_contact_name', 'options');
$gbl_ae_contact_email = get_field('gbl_ae_contact_email', 'options');
$gbl_ae_contact_telephone = get_field('gbl_ae_contact_telephone', 'options');

/* TICKET DATA */
$ticket_provider_http = get_field('gbl_ticket_provider', 'options');
$ticket_provider = split("http://", $ticket_provider_http);
$tickets_url = get_field('gbl_tickets_url', 'options');
?>
<div class="strip-header bg-col-blue-dk txt-col-wht tk-azo-sans-uber">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<main id="main-content"> 

		<article <?php post_class(); ?>>
			<div class="container">
			
				<div class="main-txt pad-top-30">
					<?php the_content(); ?>
				</div>
			
				<section class="contact-section">
					
					<div class="row mag-bot-30">	
						<div class="col-xs-6">
							<div class="info-panel panel-orange">
								<h3 class="panel-header tk-azo-sans-uber text-center txt-col-orange">General Enquiries</h3>
								<div class="panel-inner">
									<div class="contact-info panel-name text-center txt-col-wht tk-azo-sans-uber"><?php echo $gbl_contact_name; ?></div>
									<div class="contact-info panel-email text-center bold"><a href="mailto:<?php echo $gbl_contact_email; ?>"><?php echo $gbl_contact_email; ?></a></div>
									<div class="contact-info panel-tel text-center txt-col-wht bold"><?php echo $gbl_contact_telephone; ?></div>
								</div>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="info-panel panel-blue">
								<h3 class="panel-header tk-azo-sans-uber text-center txt-col-orange">Artists Enquiries</h3>
								<div class="panel-inner">
									<div class="contact-info panel-name text-center txt-col-wht tk-azo-sans-uber"><?php echo $gbl_ae_contact_name; ?></div>
									<div class="contact-info panel-email text-center bold"><a href="mailto:<?php echo $gbl_ae_contact_email; ?>"><?php echo $gbl_ae_contact_email; ?></a></div>
									<div class="contact-info panel-tel text-center txt-col-wht bold"><?php echo $gbl_ae_contact_telephone; ?></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="ticket-info text-center pad-bot-60">
						<span class="bold txt-col-blue-dk">Tickets are available for purchase from</span><br />
						<a href="<?php echo $ticket_provider_http; ?>" class="mag-bot-10 block bold site-link"><?php echo $ticket_provider[1]; ?></a>
						<a href="<?php echo $tickets_url; ?>" target="_blank" class="btn btn-default btn-block book-tickets-btn tk-azo-sans-uber">Book Your Tickets</a>
					</div>
				</section>

			</div>	
			
			<?php if ($form_active) { 
			 $form = get_field('form');
			 gravity_form_enqueue_scripts($form['id'], true);
			?>
			<section id="contact-form" class="bg-col-orange pad-bot-40">
				<div class="container">
				<h3 class="section-header tk-azo-sans-uber txt-col-blue text-center">Enquiry form</h3>
				<?php gravity_form($form['id'], false, true, false, '', true, 1);  ?>	
				</div>
			</section>		
			<?php } ?>
			
		</article>

</main><!-- #main-content -->
<?php endwhile; ?>
<?php endif; ?>

<?php get_template_part( 'parts/sections/section', 'social' ); ?>

<?php get_footer(); ?>