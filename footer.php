<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
</div><!-- #content -->
<?php  get_template_part('template-parts/footer', 'before'); ?>
<?php 
$header_fields = get_field('logo', 'options');
?>
<footer>
    <div class="main_footer_section">
        <div class="container">
           <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-sm-12 col-6"> 
                            <?php wp_nav_menu( array(
                                'menu' => 3
                            )) ?>
                        </div>
                        <div class="col-6 d-block d-sm-none">
                            <?php wp_nav_menu( array(
                                'menu' => 14
                            )) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-none d-sm-block">
                            <?php wp_nav_menu( array(
                                'menu' => 14
                            )) ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-4 d-none d-md-block">
                    <a href="<?php echo get_home_url(); ?>">
                        <img class="header-logo" src="<?php echo $header_fields; ?>" alt="">
                    </a>
                </div>
           </div>
        </div>
    </div>
    <?php  get_template_part('template-parts/footer', 'after'); ?>
</footer>
</div><!-- #page -->
<script>
    jQuery(document).ready(function($) {
        $("body").queryLoader2({
				onProgress: function(percentage, imagesLoaded, totalImages){
					$('.progress-bar').css('width', percentage + '%');
					$('.progress-bar').attr('aria-valuenow', percentage);
					$(document).load().scrollTop(0);
				},
				onComplete: function(){
					setTimeout(function(){
						$('.page_loader').slideUp(700, function() {
						});
						$('.second_color').slideUp(900, function() {
							
						});
						
					}, 500);
				
					setTimeout(function(){
						if ($(window).width() > 991) {
							$('.page_loader').remove();
						}
					}, 1200);	
					setTimeout(function(){
						// home();
						$('.animate_part_0').removeClass('animate_part_0_active');
						$('.animate_part_0_2').removeClass('animate_part_0_2_active');
						$('.animate_part_0_3').removeClass('animate_part_0_3_active');
						$('.nav-bar').removeClass('nav-bar-slide');
					}, 1400);
					setTimeout(function(){
						$('.nav-bar').css('transition', '0s');
					}, 1700);

				},
		});
        // if($('.first_section').visibale(true)) {
        //     $('.animate_part_0').removeClass('animate_part_0_active');
        // }
		$('.mouse_icon').click(function(event) {
			// Preventing default action of the event
			event.preventDefault();
			var n = $(document).height();
			$('html, body').animate({ scrollTop: 800 }, 300);
		});
    });
</script>
<?php wp_footer(); ?>
</body>
</html>