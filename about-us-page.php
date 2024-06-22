<?php
/**
 * Template Name: About Us Page
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
                <section class="">
                    <div class="accordion w-100" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Corporate
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="sub-menus-footer">
                                        <li>Find a boutique</li>
                                        <li>Careers</li>
                                        <li>Size guide</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header mt-0" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Legal Area
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="sub-menus-footer">
                                        <li>Privacy Policy</li>
                                        <li>Cookie Policy</li>
                                        <li>Your cookie prefrences</li>
                                        <li>legal notes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();