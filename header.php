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
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page" class="site main_page_wrapper">
        <div class="modal fade" id="search" tabindex="-1" aria-labelledby="searchLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <!-- <div class="modal-header justify-content-end" style="border: none;">
                        <button type="button" class="btn-close m-0 remove-border-onFocus" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> -->
                    <form action="/" method="post">
                        <!-- <div class="modal-body">
                            <input type="text" style="border: 1px solid black; border-radius: 30px; text-align: left" class="w-100" placeholder="Search" required name="s">
                        </div>
                        <div class="modal-footer  text-center d-flex justify-content-center" style="border: none;">
                            <button type="submit" class="main_button">Search</button>
                        </div> -->
                        <div class="position-relative">
                            <input class="input-newsletter input-search w-100" placeholder="Search" type="text" name="search" requierd>
                            <button class="search-button subscription-button">
                                <span class="submit-txt">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <header>
            <section class="desktop-header d-none d-lg-block">
                <section class="first-header bg-black">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col">
                                <div class="d-flex float-left hover-js-drop-down custom-first-header-padding">
                                    <a class="default-button">Customer service</a>
                                    <div class="drop-down-customer-service">
                                        <div class="headeing text-center">
                                            <h6>Need any Help?</h6>
                                        </div>
                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <a class="icon-mail" href="#">
                                                    <span>Write to us</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Send your request</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="icon-pin d-flex float-right custom-first-header-padding">
                                    <a class="default-button">Find your nearest store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-white main-logo-section">
                    <div class="container">
                        <div class="row justify-content-center pt-4">
                            <img class="main-logo" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main_logo.png" alt="">
                        </div>
                    </div>
                </section>
                <section class="bg-white main-nav-section">
                    <div class="container px-0">
                        <nav class="text-left main-nav d-flex justify-content-between">
                            <ul class="d-flex justify-content-start main-menu-list">
                                <li class="main-menu-link sub-menu">
                                    <a class="link" href="#">New Arrivals</a>
                                    <div class="sub-full-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="sub-div">
                                                        <div class="sub-label mb-3">
                                                            <h5>CATEGORY</h5>
                                                        </div>
                                                        <ul class="sub-menu-list">
                                                            <li class="sub-menu-link"><a href="#">Test1</a></li>
                                                            <li class="sub-menu-link"><a href="#">Test1</a></li>
                                                            <li class="sub-menu-link"><a href="#">Test1</a></li>
                                                            <li class="sub-menu-link"><a href="#">Test1</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <a class="sub-menu-image-link" href="#">
                                                        <img class="w-100 px-0" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/sub-menu-1.jpg" alt="sub-menu-image-1">
                                                        <p class="sub-menu-image-text">Test1</p>
                                                    </a>
                                                </div>
                                                <div class="col-3">
                                                    <a class="sub-menu-image-link" href="#">
                                                        <img class="w-100 px-0" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/sub-menu-2.jpg" alt="sub-menu-image-1">
                                                        <p class="sub-menu-image-text">Test1</p>
                                                    </a>
                                                </div>
                                                <div class="col-3">
                                                    <a class="sub-menu-image-link" href="#">
                                                        <img class="w-100 px-0" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/sub-menu-3.jpg" alt="sub-menu-image-1">
                                                        <p class="sub-menu-image-text">Test1</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="main-menu-link"><a href="#">clothing</a></li>
                                <li class="main-menu-link"><a href="#">Coats and Jackets</a></li>
                                <li class="main-menu-link"><a href="#">Teddy ten</a></li>
                                <li class="main-menu-link"><a href="#">Bags and shoes</a></li>
                                <li class="main-menu-link"><a href="#">gifts</a></li>
                                <li class="main-menu-link"><a href="#">accesories</a></li>
                                <li class="main-menu-link"><a href="#">runway</a></li>
                                <li class="main-menu-link"><a href="#">bridal</a></li>
                                <li class="main-menu-link"><a href="#">mm world</a></li>
                            </ul>
                            <div class="right-side">
                                <button class="search-icon" data-bs-toggle="modal" data-bs-target="#search">
                                </button>
                            </div>
                        </nav>
                    </div>
                </section>
            </section>
            <section class="tablet-header d-block d-lg-none">
                <section class="first-header-tablet bg-black d-sm-block d-none">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col">
                                <div class="d-flex float-left hover-js-drop-down custom-first-header-padding">
                                    <a class="default-button">Customer service</a>
                                    <div class="drop-down-customer-service">
                                        <div class="headeing text-center">
                                            <h6>Need any Help?</h6>
                                        </div>
                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <a class="icon-mail" href="#">
                                                    <span>Write to us</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Send your request</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="icon-pin d-flex float-right custom-first-header-padding">
                                    <a class="default-button">Find your nearest store</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-white main-nav-section-tablet">
                    <div class="container px-0">
                        <nav class="text-left main-nav d-flex justify-content-between">
                            <ul class="d-flex justify-content-start main-menu-list align-items-center">
                                <li>
                                    <button class="hamburger hamburger--collapse mt-0" type="button">
                                        <div class="menu_mobile_nav">
                                            <div class="hamburger_menu_icon">
                                                <div class="line"></div>
                                                <div class="line middle_line"></div>
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                    </button>
                                </li>
                                <li>
                                    <img class="main-logo-tablet ml-5" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main_logo.png" alt="">
                                </li>
                            </ul>
                            <div class="right-side">
                                <button class="search-icon" data-bs-toggle="modal" data-bs-target="#search">
                                </button>
                            </div>
                            <div id="menu_mobile" class="menu_on_mobile">
                                <div class="menu_on_mobile_wrapper">
                                    <div class="menu_on_mobile_inner_wrapper" style="position: relative;">
                                        <div>
                                            <a class="d-block mb-3 page_font animated_menu_el" href="#">
                                                <div class="menu_item active_page line_animation">
                                                    New Arrivals
                                                </div>
                                            </a>
                                            <a class="d-block mb-3 page_font animated_menu_el" href="#">
                                                <div class="menu_item active_page line_animation">
                                                    clothing
                                                </div>
                                            </a>
                                            <a class="d-block mb-3 page_font animated_menu_el" href="#">
                                                <div class="menu_item active_page line_animation">
                                                    Coats and Jackets
                                                </div>
                                            </a>
                                            <a class="d-block mb-3 page_font animated_menu_el" href="#">
                                                <div class="menu_item active_page line_animation">
                                                    Teddy ten
                                                </div>
                                            </a>
                                            <a class="d-block mb-3 page_font animated_menu_el" href="#">
                                                <div class="menu_item active_page line_animation">
                                                    Bags and shoes
                                                </div>
                                            </a>
                                            <a class="d-block mb-3 page_font animated_menu_el" href="#">
                                                <div class="menu_item active_page line_animation">
                                                    gifts
                                                </div>
                                            </a>
                                            <a class="d-block mb-3 page_font animated_menu_el" href="#">
                                                <div class="menu_item active_page line_animation">
                                                    accesories
                                                </div>
                                            </a>
                                            <a class="d-block mb-3 page_font animated_menu_el" href="#">
                                                <div class="menu_item active_page line_animation">
                                                    runway
                                                </div>
                                            </a>
                                            <a class="d-block mb-3 page_font animated_menu_el" href="#">
                                                <div class="menu_item active_page line_animation">
                                                    bridal
                                                </div>
                                            </a>
                                            <a class="d-block mb-3 page_font animated_menu_el" href="#">
                                                <div class="menu_item active_page line_animation">
                                                    mm world
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </section>
            </section>
        </header>
        <div class="header-active-background-gray"></div>
        <script>
            jQuery(document).ready(function($) {
                $(window).scroll(function(){
                    var currentScreenPosition  = $(document).scrollTop();
                    if (currentScreenPosition > 250) {
                        $("header").addClass("active");
                        $('.main-nav-section').addClass("active");
                        $('.main-logo-section').addClass("active");
                        $('.first-header').addClass("active");
                    }
                    if (currentScreenPosition < 125){
                        $("header").removeClass("active");
                        $('.main-nav-section').removeClass("active");
                        $('.main-logo-section').removeClass("active");
                        $('.first-header').removeClass("active");
                    }
                });
                $('.main-menu-link.sub-menu').hover(function(){
                    $('.header-active-background-gray').toggleClass("active");
                })
                $('.menu_mobile_nav').click(function(event) {
                    $(this).toggleClass('active');
                    $('html, body').toggleClass('hide_scroll');
                    $('.menu_on_mobile').toggleClass('active');
                    $('.display_background_of_the_page').toggleClass('mobile_active');
                });
            });
        </script>
        <div id="content" class="site-content">