
<?php
/**
 * HomePage Third Block Template
 */
$homepage_third_block_fields = get_fields();
?>
<section class="py-5 my-5 swiper-products-section">
    <div class="container">
        <div class="row text-center justify-content-center pb-3">
            <h3><?php echo $homepage_third_block_fields['title']; ?></h3>
        </div>
        <div class="row justify-content-center">
           <div class="col-11 px-0" style="position: relative;">
                <div class="swiper swiperProduct">
                    <div class="swiper-wrapper">
                        <?php
                            foreach($homepage_third_block_fields['products'] as $single_product_ID){
                                foreach ($single_product_ID as $single_ID) {
                                    $title = get_the_title($single_ID);
                        ?>
                            <div class="swiper-slide">
                                <a href="<?php echo get_permalink($single_ID); ?>">
                                    <img class="w-100" src="<?php echo get_the_post_thumbnail_url( $single_ID, 'medium' ); ?>" alt="<?php echo $title; ?>" loading="lazy">
                                    <div class="swiper-lazy-preloader"></div>
                                    <h4><?php echo $title; ?></h4>
                                </a>
                            </div>
                        <?php
                                }
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