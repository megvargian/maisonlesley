    <?php
/**
 * Template Name: Homepage
 */
get_header();
?>
<?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
?>
<section class="py-5 d-sm-block d-none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-6">
                        <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/second-img.jpg" alt="second-img">
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <div class="d-block">
                            <div class="">
                                <h3>Yours new forever dress</h3>
                                <p>Timeless style is one easy piece</p>
                                <a href="#" class="main-link">Discover more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 d-sm-none d-block" style="background-color: #f0f0f0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 bg-white px-0">
                <div class="row gx-0">
                    <div class="col-3 px-0">
                        <img class="w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/second-img-mobile.jpg" alt="">
                    </div>
                    <div class="col px-0 d-flex justify-content-start align-items-center position-relative">
                        <div class="d-block">
                            <div class="">
                                <h3 style="padding-left: 13px;">Yours new forever dress</h3>
                            </div>
                            <div class="arrow-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-sm-0 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div>
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/third.jpg" alt="third">
                            <h3 class="pt-3">An Elgant Affair</h3>
                            <a href="#" class="main-link mt-4">Discover more</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="pt-sm-5 mt-5 pt-0">
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/fourth.jpg" alt="fourth">
                            <h3 class="pt-3">Perfect parters</h3>
                            <a href="#" class="main-link mt-4">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 my-5 swiper-products-section">
    <div class="container">
        <div class="row text-center justify-content-center pb-3">
            <h3>Trending now: the best loved styles</h3>
        </div>
        <div class="row justify-content-center">
           <div class="col-11 px-0" style="position: relative;">
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
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
           </div>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        var swiper = new Swiper(".swiperProduct", {
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
        var swiper = new Swiper(".Mainswiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            autoplay: {
                delay: 4000,
            },
            loop: true,
        });
    });
</script>

<?php
get_footer();