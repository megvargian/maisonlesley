<?php
/**
 * Template Name: Company team and structure
 */
get_header(); 
?>
<?php 
$company_main_fields = get_fields();

?>
<section class="main_company_section">
	<div class="main_company_img" style="background-image: url(<?php echo $company_main_fields['image']['sizes']['main_img_company_services'] ?>);">
		<div class="container">
			<div class="row">
				<h1 class="h1_style"><?php echo $company_main_fields['title'] ?></h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="nav_buttons">
						<?php wp_nav_menu(array(
							'menu' => 4
						)); ?>
					</div>
					<div class="nav_buttons_mobile ">
						<nav>
							<?php 
								wp_nav_menu(array(
									'menu' => 4,
									'menu_class' => 'swiper-wrapper',
									'add_li_class' => 'swiper-slide',
								)); 
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	 <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile; 
    ?>
<script>
(function($) {
	jQuery(document).ready(function() {
		$('.nav_buttons_mobile').find('.menu-company-menu-container').addClass('swiper swiper2');
		$('.swiper2').each(function(index, elem) {
			var mySwiper1 = new Swiper( elem, {
				slidesPerView: 3,
				freeMode: true,	
				spaceBetween: 0,
				slideToClickedSlide: true,
				breakpoints: {
					500: {
						slidesPerView: 3
					},
					400: {
						slidesPerView: 2
					},
					300: {
						slidesPerView: 1.5
					},
					200:{
						slidesPerView: 1
					}
				}
			})
		});
		$('.current-menu-item a').addClass('active');
		$('.menu-item').click(function(event){
			$('.current-menu-item').removeClass('active');
			$(this).find("a[aria-current='page']").addClass('active');
		});
		
	});
})(jQuery);
       
</script>
<?php
get_footer();