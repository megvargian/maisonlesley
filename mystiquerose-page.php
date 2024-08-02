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