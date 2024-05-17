<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

$header_fields = get_field('logo', 'options');
$white_logo = get_field('white_logo', 'options');
$social_media = get_field('social_media', 'options');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="site main_page_wrapper">
    <div id="homepage_loader  position-relative" style="z-index: 15;" >
        <div class="second_color"></div>
        <div class="page_loader background-image" style="background-image: url(<?php echo $loading_website_image; ?>); background-image: none!important; height: 100vh; width: 100%;">
            <div class="loader_info_cont">
                <div class="loader_info_cont_inner">
                    <div class="progress_cont">
                        <img class="img-fluid logo_loading" src="<?php echo $white_logo; ?>" alt="">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                            </div>
                        </div>
                        <div class="line_fixed w-100 d-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<header id="masthead" class="site-header navbar-static-top <?php if(is_single()){ echo 'shadow_class' ;} ?>" role="banner">
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-3">
						<a href="<?php echo get_home_url(); ?>">
							<img class="header-logo active" src="<?php echo $header_fields; ?>" alt="">
						</a>
					</div>
					<div class="col-9" style="position: relative;">
						<div class="header-style d-lg-block d-none">
							<?php wp_nav_menu( array(
								'menu' => 2
							)) ?>
						</div>
						<button class="hamburger hamburger--collapse" type="button">
                            <div class="menu_mobile_nav">
                                <div class="hamburger_menu_icon">
                                    <div class="line"></div>
                                    <!-- <div class="line middle_line"></div> -->
                                    <div class="line"></div>
                                </div>
                            </div>
                        </button>
					</div>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->
	<div class="mobile_menu">
		<div class="mobile_inner_cont">
            <?php
              wp_nav_menu(array(
                'menu' => 2,
                'menu_class' =>    'menu_elements play_emelemts ',
                'add_li_class' =>  'menu_el',                 
                )); 
            ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6 col-md-6">
                        <!-- <div class="copyright_text">
                            <span class="copyright_line"></span> Crafted with <i class="pulse fas fa-heart"></i><strong><a target="_blank" href="https://www.wearemaze.com/"> Maze</a></strong>
                        </div> -->
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="social_links">
                            <a href="<?php echo $social_media['instagram'] ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/inc/assets/images/instagarm-footer.svg" alt="">
                            </a>
                            <a href="<?php echo $social_media['facebook'] ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/inc/assets/images/facebook-footer.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="div menu_elements play_elements drop_right_els">
                <div class="menu_el dropright_el" data-name="collections">
                    <div class="menu_elements play_emelemts">
                        <div class="menu_el">
                            <a href="#"><?php // echo __('CATEGORIES', 'footerpage')?></a>
                        </div>
                    </div>
                    <span>
                    <svg class="menu-collection-arrow" width="1.9em" height="1.9em" viewBox="0 0 16 16"  class="bi bi-chevron-right"  xmlns="http://www.w3.org/2000/svg">
					    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
					</svg>
                    </span>
                </div>
            </div> -->
           <!-- <div class="kertesh-mobile-list">
             <?php
            //   wp_nav_menu(array(
            //     'menu' => 2,
            //     'menu_class' =>    'menu_elements play_emelemts ',
            //     'add_li_class' =>  'menu_el',                 
            //     )); 
             ?>
           </div> -->

            <!-- this is the call id of modal discount  -->
           <!-- data-toggle="modal" data-target="#ShopModal" -->

            <!-- <div id="last_part" class="menu_elements play_emelemts">
                <div class="menu_el">
                    <a href="https://zoughaibandco.com/clients/zoughaib/store/cart">
                        <span class="footer_link_icon_cont">
                            <svg width="24" height="24" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
                                <g>
                                    <path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
                                        c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
                                        C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
                                        H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
                                        c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z" fill="#262626"/>
                                </g>
                            </svg>
                        </span>
                        <span style="vertical-align: middle;"><?php //echo __('Cart', 'header')?> </span>
                    </a>
                </div>
                <div class="menu_el">
                    <a href="https://zoughaibandco.com/clients/zoughaib/store/account/settings">
                        <span class="footer_link_icon_cont">
                            <svg width="24" height="24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <path d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148
                                        C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962
                                        c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216
                                        h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40
                                        c59.551,0,108,48.448,108,108S315.551,256,256,256z" fill="#262626"/>
                                </g>
                            </svg>
                        </span>
                        <span style="vertical-align: middle;"><?php echo __('Account', 'header')?></span>
                    </a>
                </div>
                <div class="menu_el">
                    <a href="#" data-toggle="modal" data-target="#languageCurrency"><?php echo __('LANGUAGE/CURRENCY', 'headerpage') ?></a>
                </div>
            </div> -->
        </div>
    </div>
	


	<script>
		jQuery(document).ready(function($) {
			// var cf7form = $('.wpcf7');
			// if (cf7form) {
			// 	$(cf7form).each(function(index, el) {
			// 		if (el) {
			// 			$(el).find('form').submit(function(event) {
			// 				$(el).find('form').find('.wpcf7-submit').addClass('disabled');
			// 				$(el).parents('.form_validation_parent').find('.contact_success_message').hide();
			// 			});
			// 			el.addEventListener( 'wpcf7mailsent', function( event ) {
			// 				window.location.href = "<?php echo get_page_link(2253)?>";
			// 			}, false );
			// 			el.addEventListener( 'wpcf7mailfailed', function( event ) {
			// 				$(el).find('form').find('.wpcf7-submit').removeClass('disabled');
			// 				$(el).parents('.form_validation_parent').find('.contact_fail_message').slideDown(300);
			// 			}, false );
			// 			el.addEventListener( 'wpcf7spam', function( event ) {
			// 				$(el).find('form').find('.wpcf7-submit').removeClass('disabled');
			// 			}, false );
			// 			el.addEventListener( 'wpcf7invalid', function( event ) {
			// 				$(el).find('form').find('.wpcf7-submit').removeClass('disabled');
			// 			}, false );
			// 		}
			// 	});
			// }

			// $(window).scroll(function(event) {
				
			// });

			// $('.hamburger').click(function(event) {
			// 	$(this).toggleClass('is-active');
			// 	$('.mobile_menu').toggleClass('active');
			// });
			$('.hamburger').click(function(event) {
				$(this).toggleClass('is-active');
				$('.mobile_menu').toggleClass('active');
                $('html, body').toggleClass('noscroll');
                $('.menu_page_two_els').removeClass('active');
				$('.site-header').toggleClass('header_style_shadow');
                $('.menu_mobile_nav').toggleClass('active');
                $('.header-logo').toggleClass('active');
                $('.mobile_active_blur_part').toggleClass('active');
                // $('.menu_page_two_els').toggleClass('d-block');
            });
            $('.mobile_active_blur_part').click(function(event) {
				if($('.hamburger').hasClass('is-active')){
                    $('.hamburger').toggleClass('is-active');
                    $('.mobile_menu').toggleClass('active');
                    $('html, body').toggleClass('noscroll');
                    $('.menu_page_two_els').removeClass('active'
                    
                    );
                    $('.site-header').toggleClass('header_style_shadow');
                    $('.menu_mobile_nav').toggleClass('active');
                    $('.header-logo').toggleClass('active');
                    $('.mobile_active_blur_part').toggleClass('active');
                };
				
                // $('.menu_page_two_els').toggleClass('d-block');
            });
			$(".menu_elements.play_elements.drop_right_els").click(function(event){
                $('.menu_page_two_els').toggleClass('active');
                // $('html, body').css('overflow', 'auto');

            });
            $(".menu_back_btn").click(function(event){
				$('.menu_page_two_els').toggleClass('active');
                // $('html, body').css('overflow', 'hidden');
            });
            // page loader js
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
						$('.animate_part_0_1').removeClass('animate_part_0_1_active');
						$('.animate_part_0_2').removeClass('animate_part_0_2_active');
						$('.animate_part_0_3').removeClass('animate_part_0_3_active');
						$('.nav-bar').removeClass('nav-bar-slide');
					}, 1400);
					setTimeout(function(){
						$('.nav-bar').css('transition', '0s');
					}, 1700);

				},
			});
		});
	</script>
    <?php //if(wp_is_mobile()){ ?>
        <script>
            jQuery(document).ready(function($) {
                <?php if(is_page(136) || is_page(138)) {?>
                    $('.page_active a').addClass('active');
                    $('.page_active a').css('opacity', 1);
                <?php } ?>
                <?php if(is_single()) {?>
                    $('.project_active a').addClass('active');
                    $('.project_active a').css('opacity', 1);
                <?php }  ?>
            });
        </script>
    <?php //}else{ ?>
        <script>
            // jQuery(document).ready(function($) {
            //     <?php if(is_page(136) || is_page(138)) {?>
            //         $('.page_active a').addClass('active');
            //         $('.page_active a').css('opacity', 1);
            //     <?php } ?>
            //     <?php if(is_single()) {?>
            //         $('.project_active a').addClass('active');
            //         $('.project_active a').css('opacity', 1);
            //     <?php }  ?>
            // });
        </script>
    <?php // } ?>
    <div class="mobile_active_blur_part"></div>
	<div id="content" class="site-content">
