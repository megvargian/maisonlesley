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