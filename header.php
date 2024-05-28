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
        <header>
            <section class="first-header bg-black">
                <div class="container">
                    <div class="row justify-content-between custom-first-header-padding">
                        <div class="col">
                            <div class="d-flex float-left">
                                <a class="default-button">Customer service</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="icon-pin d-flex float-right" href="#">
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
                    <nav class="text-left main-nav">
                        <ul class="d-flex justify-content-start main-menu-list">
                            <li class="main-menu-link">
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
                                                    <img class="w-100 px-0" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/sub-menu-image-1.jpg" alt="sub-menu-image-1">
                                                    <p class="sub-menu-image-text">Test1</p>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a class="sub-menu-image-link" href="#">
                                                    <img class="w-100 px-0" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/sub-menu-image-1.jpg" alt="sub-menu-image-1">
                                                    <p class="sub-menu-image-text">Test1</p>
                                                </a>
                                            </div>
                                            <div class="col-3">
                                                <a class="sub-menu-image-link" href="#">
                                                    <img class="w-100 px-0" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/sub-menu-image-1.jpg" alt="sub-menu-image-1">
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
                    </nav>
                </div>
            </section>
        </header>
        <script>
            jQuery(document).ready(function($) {
                $(window).scroll(function(){
                    var currentScreenPosition  = $(document).scrollTop();
                    if (currentScreenPosition > 250) {
                        $("header").addClass("active");
                        $('.main-nav-section').addClass("active");
                        $('.main-logo-section').addClass("active");
                    }
                    if (currentScreenPosition < 125){
                        $("header").removeClass("active");
                        $('.main-nav-section').removeClass("active");
                        $('.main-logo-section').removeClass("active");
                    }
                });
            });
        </script>
        <div id="content" class="site-content">