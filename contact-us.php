<?php
/**
 * Template Name: Contact Us Page
 */
get_header();

$contact_us_fields = get_fields();
?>
<section class="main_contact_us background_img" style="background-image: url(<?php echo $contact_us_fields['image']['sizes']['main_img_company_services'] ?>);">
		<div class="main_contact_us_inner">		
			<div class="container">
				<div class="row">
					<h1 class="h1_style"><?php echo $contact_us_fields['title'] ?></h1>
				</div>
			</div>
		</div>
</section>

<section  class="contact_us_content">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12">
				<div class="h2_style">
					<?php the_title(); ?>
				</div>
				<div class="p_style">
					<?php echo $contact_us_fields['sub_title'] ?>
				</div>
				<div class="inner_contact_us">
					<div class="inner_section">
						<img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/svgs/mail.svg" alt="">
						<p>
							<a href="mailto:<?php echo $contact_us_fields['email'] ?>">
								<?php echo $contact_us_fields['email'] ?>
							</a>
						</p>
					</div>
					<div class="inner_section">
						<img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/svgs/telephone.svg" alt="">
						<p>
							<a href="tel:<?php echo $contact_us_fields['telephone_number_one'] ?>">
								<?php echo $contact_us_fields['telephone_number_one'] ?>
							</a>
							-
							<a href="tel:<?php echo $contact_us_fields['telephone_number_two'] ?>">
								<?php echo $contact_us_fields['telephone_number_two'] ?>
							</a>
						</p>
					</div>
					<div class="inner_section">
						<img src="<?php echo get_template_directory_uri() ?>/inc/assets/images/svgs/pin.svg" alt="">
						<a href="<?php echo $contact_us_fields['address_link']; ?>" target="_blank">
							<p>
								<?php echo $contact_us_fields['address']; ?>
							</p>
						</a>
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-12">
				<div class="form_validation_parent">
					<?php echo do_shortcode('[contact-form-7 id="388" title="Contact Us form"]') ?>
					<div class="contact_success_message">
						<?php echo __('All right reserved Your message has been sent and we will contact you as soon as possible. Thank you!', 'contactuspage')?>
					</div>
					<div class="contact_fail_message">
						<?php echo __('An error has occurred. Please try again!', 'contactuspage')?>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<script>
	jQuery(document).ready(function($) {
		var cf7form = $('.wpcf7');
		if (cf7form) {
			$(cf7form).each(function(index, el) {
			if (el) {
			$(el).find('form').submit(function(event) {
				$(el).find('form').find('.wpcf7-submit').addClass('disabled');
				$(el).parents('.form_validation_parent').find('.contact_success_message').hide();
				$(el).parents('.form_validation_parent').find('.contact_fail_message').hide();
			});
			el.addEventListener( 'wpcf7mailsent', function( event ) {
				$(el).parents('.form_validation_parent').find('.contact_success_message').slideDown(300);
			}, false );
			el.addEventListener( 'wpcf7mailfailed', function( event ) {
				$(el).find('form').find('.wpcf7-submit').removeClass('disabled');
				$(el).parents('.form_validation_parent').find('.contact_fail_message').slideDown(300);
			}, false );
			el.addEventListener( 'wpcf7spam', function( event ) {
				$(el).find('form').find('.wpcf7-submit').removeClass('disabled');
				$(el).parents('.form_validation_parent').find('.contact_fail_message').slideDown(300);
			}, false );
			el.addEventListener( 'wpcf7invalid', function( event ) {
				$(el).find('form').find('.wpcf7-submit').removeClass('disabled');
				$(el).parents('.form_validation_parent').find('.contact_fail_message').slideDown(300);
			}, false );
			}
	});
	}
});
</script>  

<?php
get_footer();