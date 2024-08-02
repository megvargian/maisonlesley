<?php
/**
 * Template Name: Product Contact Page
 */
get_header();
$all_feilds = get_fields();
?>
<section  class="contact_us_content py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 px-0 px-lg-5 pt-lg-0 pt-3">
				<h1 class="mb-4"><?php the_title(); ?></h1>
				<div class="contact-form-box p-4 mt-3">
					<?php echo do_shortcode('[contact-form-7 id="de5be3e" title="Product Contact form"]') ?>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	jQuery(document).ready(function($) {
		var cf7form = $('.wpcf7');
		$('input[name="text-390"]').attr('readonly');
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