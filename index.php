    <?php
/**
 * Template Name: Homepage
 */
get_header();
?>

<section>
    <div class="container">
        <div class="row">
            <img class="w-100 px-0" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/first-img.jpg" alt="">
        </div>
        <div class="row text-left">
            <h2 class="px-3 px-sm-0">Max Mara's Magic Circus</h2>
            <a class=" px-3 px-sm-0 main-link" href="#">Discover more</a>
        </div>
    </div>
</section>
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
<section class="py-5 pb-md-5 pb-0" style="background-color: #f0f0f0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-12">
                        <div>
                            <h3>Maison Lesley News</h3>
                            <p>Sign up to our newsletter and receive updates on <br> events, collections and exclusive promotions.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-12 pb-md-0 pb-3">
                        <form class="w-100" action="/" method="post">
                            <div class="position-relative">
                                <input class="input-newsletter w-100" placeholder="Email" type="email" requierd>
                                <button class="subscription-button">
                                    <span class="submit-txt">Submit</span>
                                </button>
                            </div>
                            <div class="check-policy d-flex justify-content-start mt-3">
                                <input class="input-checkbox" name="policy-check" type="checkbox" required>
                                <label for="policy-check" style="margin-left: 5px;">
                                    I have read the <a href="#">Privacy Policy</a>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="border-1 d-md-none d-block">
        <a href="#" class="w-100">
            <div class="py-3 px-3" style="border-top: 1px solid #d8d8d8;">
                <div class="d-flex justify-content-start align-items-center location-mobile">
                    <span class="default-button text-black">Find your nearest store</span>
                </div>
            </div>
        </a>
        <a href="#" class="w-100">
            <div class="py-3 px-3" style="border-top: 1px solid #d8d8d8;">
                <div class="d-flex justify-content-start align-items-center call-mobile">
                    <span class="default-button text-black">Customer service 08001114431</span>
                </div>
            </div>
        </a>
    </section>
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
    });
</script>

<?php
get_footer();