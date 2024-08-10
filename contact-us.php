<?php
/**
 * Template Name: Contact Us Page
 */
get_header();
$all_feilds = get_fields();
?>
<section  class="contact_us_content py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-3 col-12 position-sticky p-0">
				<?php get_template_part('template-parts/side', 'menu'); ?>
			</div>
			<div class="col-xl-7 col-lg-9 col-12 px-0 px-lg-5 pt-lg-0 pt-3">
				<h1 class="mb-4"><?php the_title(); ?></h1>
				<p class="mb-3"><?php echo $all_feilds['sub_title']; ?></p>
				<div class="contact-box d-flex justify-content-between p-4 mb-3">
					<!-- <div class="row w-100 justify-content-between">
						<div class="col-3 d-flex justify-content-start align-items-center"> -->
							<div class="icon-contact">
								<h4 class="mb-0"><?php echo $all_feilds['contact_us']['title']; ?></h4>
							</div>
						<!-- </div>
						<div class="col"> -->
							<p>
								<?php echo $all_feilds['contact_us']['sub_title']; ?>
							</p>
						<!-- </div>
						<div class="col-3"> -->
							<p>
								<a href="tel:<?php echo $all_feilds['contact_us']['tel_number']; ?>">
									<?php echo $all_feilds['contact_us']['tel_number']; ?>
								</a>
							</p>
						<!-- </div>
					</div> -->
				</div>
				<div class="chat-box p-4">
					<div class="row w-100 justify-content-between">
						<div class="col-3 d-flex justify-content-start align-items-center">
							<div class="icon-chat">
								<h4 class="mb-0"><?php echo $all_feilds['chat']['title']; ?></h4>
							</div>
						</div>
						<div class="col">
							<p>
								<?php echo $all_feilds['chat']['sub_title']; ?>
							</p>
						</div>
						<div class="col-3 justify-content-end d-flex px-0">
							<p>
								<a href="<?php echo $all_feilds['chat']['chat_link']; ?>">
									<?php echo $all_feilds['chat']['chat_text']; ?>
								</a>
							</p>
						</div>
					</div>
				</div>
				<div class="contact-form-box p-4 mt-3">
					<div class="row w-100 justify-content-between email-box pb-3 mx-0">
						<div class="col-3 d-flex justify-content-start align-items-center px-0">
							<div class="icon-email">
								<h4 class="mb-0"><?php echo $all_feilds['contact_us_section']['title']; ?></h4>
							</div>
						</div>
						<div class="col px-0">
							<p>
								<?php echo $all_feilds['contact_us_section']['sub_title']; ?>
							</p>
						</div>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="786fd68" title="Contact form 1"]') ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <div class="g-recaptcha" data-sitekey="6Lduc_8pAAAAAJDfVdJ5UT2-KbdaxA6IgSFY5fDG" data-callback="onSubmit" data-action="submit"></div>			 -->

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