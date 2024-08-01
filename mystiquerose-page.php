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

    <section class="background-img-section-second d-none d-md-flex" style="background-image: url('<?php echo get_template_directory_uri( ); ?>/inc/assets/images/cowgirl-control.avif');">
        <div class="container">
            <div class="row">
                <div class="col-6 justify-content-center py-5 text-center">
                    <h5>TODAY ONLY</h5>
                    <h3>Additional 10% off your Purchase</h3>
                    <p>Online only. Exclusion apply. <a href="#">Details</a></p>
                    <a href="#">Shop Now</a>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </section>
    <section class="d-md-none d-block">
        <div class="container-fluid px-sm-0 position-relative">
            <div class="row text-center position-absolute top-0 absolute-container-mobile pt-4 w-100">
                <h5>TODAY ONLY</h5>
                <h3>Additional 10% off your Purchase</h3>
                <p>Online only. Exclusion apply. <a href="#">Details</a></p>
                <a href="#">Shop Now</a>
            </div>
            <div class="row">
                <img class="w-100 px-0" src="<?php echo get_template_directory_uri( ); ?>/inc/assets/images/cowgirl-mob-control.avif" alt="">
            </div>
        </div>
    </section>
    <section class="py-4">
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
    </section>
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