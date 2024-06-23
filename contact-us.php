<?php
/**
 * Template Name: Contact Us Page
 */
get_header();

?>
<section  class="contact_us_content py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-3 col-12 position-sticky p-0">
				<?php get_template_part('template-parts/side', 'menu'); ?>
			</div>
			<div class="col-xl-7 col-lg-9 col-12 px-0 px-lg-5 pt-lg-0 pt-3">
				<h1 class="mb-4">Contact Us</h1>
				<p class="mb-3">If you have any questions or concerns, please contact our customer service by choosing the method you prefer.</p>
				<div class="contact-box p-4 mb-3">
					<div class="row w-100 justify-content-between">
						<div class="col-3 d-flex justify-content-start align-items-center">
							<div class="icon-contact">
								<h4 class="mb-0">Call us</h4>
							</div>
						</div>
						<div class="col">
							<p>
								We are available Monday to Friday, from 08:00am to 05:00pm
							</p>
						</div>
						<div class="col-1">
							<p>
								<a href="tel:11111111">111111111</a>
							</p>
						</div>
					</div>
				</div>
				<div class="chat-box p-4">
					<div class="row w-100 justify-content-between">
						<div class="col-3 d-flex justify-content-start align-items-center">
							<div class="icon-chat">
								<h4 class="mb-0">Chat</h4>
							</div>
						</div>
						<div class="col">
							<p>
								We are live Monday to Friday, from 08:00am to 05:00pm
							</p>
						</div>
						<div class="col-2 justify-content-end d-flex px-0">
							<p>
								<a href="tel:11111111">Chat with us</a>
							</p>
						</div>
					</div>
				</div>
				<div class="contact-form-box p-4 mt-3">
					<div class="row w-100 justify-content-between email-box pb-3 mx-0">
						<div class="col-3 d-flex justify-content-start align-items-center px-0">
							<div class="icon-email">
								<h4 class="mb-0">WRITE TO US</h4>
							</div>
						</div>
						<div class="col px-0">
							<p>
								Contact us by email by filling out the form below
							</p>
						</div>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="786fd68" title="Contact form 1"]') ?>
				</div>

				<div class="form_validation_parent">
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