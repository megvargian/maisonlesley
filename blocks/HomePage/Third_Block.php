
<?php
/**
 * HomePage Third Block Template
 */
$homepage_third_block_fields = get_fields();
?>
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