<?php
/**
 * Template Name: Mytique Rose page
 */
get_header();
?>
<section class="mystique-rose-page">
    <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    ?>

    <!-- <section class="py-4">
        <div class="container">
            <div class="row text-center py-4">
                <h3>Going fast</h3>
            </div>
            <div class="row justify-content-center">
            <div class="col-11 px-0" style="position: relative;">
                    <div class="swiper swiperProduct">
                        <div class="swiper-wrapper">
                            <?php
                                for($i=1; $i<13; $i++){
                                ?>
                                <div class="swiper-slide">
                                    <img class="w-100" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/product-slider/slider-<?php echo $i; ?>.jpg" loading="lazy" alt="example-product">
                                    <div class="swiper-lazy-preloader"></div>
                                    <h4>Flowing cady trousers</h4>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="swiper-button-prev" style="background-color: rgb(244, 235, 221) !important;"></div>
                    <div class="swiper-button-next" style="background-color: rgb(244, 235, 221) !important;"></div>
            </div>
            </div>
        </div>
    </section> -->
</section>
<script>
    jQuery(document).ready(function($) {
        let swiper = new Swiper(".swiperProduct", {
            slidesPerView: 5,
            spaceBetween: 30,
            loop: false,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
				// when window width is >= 320px
				320: {
					slidesPerView: 2.5,
					spaceBetween: 20
				},
				// when window width is >= 480px
				480: {
					slidesPerView: 2.5,
					spaceBetween: 30
				},
				// when window width is >= 640px
				640: {
					slidesPerView: 3,
					spaceBetween: 30
				},
				991: {
					slidesPerView: 5,
					spaceBetween: 30
				}
			}
        });
    });
</script>
<?php
get_footer();