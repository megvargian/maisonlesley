<?php
/**
 * MystiqueRose Third Block Template
 */
$Mystique_rose_third_block_fields = get_fields();
?>
<section class="py-4 mystiquerose_third_block">
    <div class="container">
        <div class="row text-center py-4">
            <h3><?php echo $Mystique_rose_third_block_fields['title']; ?></h3>
        </div>
        <div class="row justify-content-center">
        <div class="col-11 px-0" style="position: relative;">
                <div class="swiper swiperProduct">
                    <div class="swiper-wrapper">
                        <?php
                            foreach($Mystique_rose_third_block_fields['products'] as $single_product_ID){
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