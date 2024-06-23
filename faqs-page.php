<?php
/**
 * Template Name: FAQs page
 */
get_header();
?>
<section  class="info_content py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-3 col-12 position-sticky p-0">
				<?php get_template_part('template-parts/side', 'menu'); ?>
			</div>
			<div class="col-xl-7 col-lg-9 col-12 px-0 px-lg-5 pt-lg-0 pt-3">
                <h1 class="mb-4"><?php the_title(); ?></h1>
                <?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();