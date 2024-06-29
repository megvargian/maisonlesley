<?php
/**
 * Template Name: Mytique Rose page
 */
get_header();
?>
<section>
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-6" style="background-color: #D0212F;">

            </div>
            <div class="col-6 px-0">
                <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main-img-half-mystique-rose.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row text-center py-4">
            <h4>Going fast</h4>
        </div>
        <div class="row">
            <div class="swiper swiperProduct">
                <div class="swiper-wrapper">
                    <?php
                        for($i=1; $i<13; $i++){
                        ?>
                        <div class="swiper-slide">
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/product-slider/slider-<?php echo $i; ?>.jpg" alt="example-product">
                            <h4>Flowing cady trousers</h4>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
<section>
    <a href="#" class="d-flex" style="height: fit-content;">
        <img class="w-100" src="<?php echo get_template_directory_uri( ); ?>/inc/assets/images/second-img-mystique-rose.avif" alt="">
    </a>
</section>
<section>
    <a href="#" class="d-flex" style="height: fit-content;">
        <img class="w-100" src="<?php echo get_template_directory_uri( ); ?>/inc/assets/images/home-tote-mystique-rose.avif" alt="">
    </a>
</section>
<section>
    <a href="#" class="d-flex" style="height: fit-content;">
        <img class="w-100" src="<?php echo get_template_directory_uri( ); ?>/inc/assets/images/home-swim-mystique-rose.avif" alt="">
    </a>
</section>
<section>
    <a href="#" class="d-flex" style="height: fit-content;">
        <img class="w-100" src="<?php echo get_template_directory_uri( ); ?>/inc/assets/images/home-blue-mystique-rose.avif" alt="">
    </a>
</section>
<section>
    <div class="container">
        <div class="row text-center py-4">
            <h4>Going fast</h4>
        </div>
        <div class="row">
            <div class="swiper swiperProduct">
                <div class="swiper-wrapper">
                    <?php
                        for($i=1; $i<13; $i++){
                        ?>
                        <div class="swiper-slide">
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/product-slider/slider-<?php echo $i; ?>.jpg" alt="example-product">
                            <h4>Flowing cady trousers</h4>
                        </div>
                    <?php
                        }
                    ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        let swiper = new Swiper(".swiperProduct", {
            slidesPerView: 5,
            spaceBetween: 30,
            loop: true,
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