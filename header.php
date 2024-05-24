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
            <section class="bg-white">
                <div class="container">
                    <div class="row justify-content-center pt-4">
                        <img class="main-logo" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main_logo.png" alt="">
                    </div>
                </div>
            </section>
            <section class="bg-white">
                <div class="container px-0">
                    <nav class="text-left main-nav">
                        <ul class="d-flex justify-content-start">
                            <li>
                                <a class="link" href="#">New Arrivals</a>
                                <!-- <div class="level-two">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6 col-lg-3 sub-menu-component">
                                                <div class="sub-navigation-links-list">
                                                    <ul class="list-default">
                                                        <li class="list-title d-none d-sm-block"><strong>Category</strong></li>
                                                        <li class="category"><a title="New Arrivals" href="/new-arrivals">New Arrivals</a></li>
                                                        <li class="category"><a title="MM Eyewear" href="/accessories/womens-sunglasses">MM Eyewear</a></li>
                                                        <li class="category"><a title="Ceremony" href="/editorial/ceremonies-evening-outfits">Ceremony</a></li>
                                                        <li class="category"><a title="Max Mara's Magic Circus" href="/editorial/pre-fall">Max Mara's Magic Circus</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3 sub-menu-component">
                                                <div class="sub-navigation-banner card horizontal single"><a href="/editorial/pre-fall" class="banner-link" title="Max Mara's Magic Circus" target="_self" rel=" ">
                                                        <figure>
                                                            <picture>
                                                                <source media="(max-width: 767px)" srcset="//world.maxmara.com/mediaObject/maxmara/Prefall-2024/Prefall-2024/dd-menu/original/dd-menu.jpg"><img class="image" src="//world.maxmara.com/mediaObject/maxmara/Prefall-2024/Prefall-2024/dd-menu/original/dd-menu.jpg" alt="Dd Menu Max Mara" title="Dd Menu Max Mara" data-image-ratio-md="1.0" data-image-ratio-sm="1.0" data-image-ratio-xs="1.0" data-image-ratio-lg="1.0">
                                                            </picture>
                                                            <figcaption class="">
                                                                <div class="caption ">
                                                                    <div class="">
                                                                        <div class="">
                                                                            <h2 data-link="/editorial/pre-fall" class="h2 h2-editorial-primary js-multiline-ellipsis-text">Max Mara's Magic Circus</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </a></div>
                                            </div>
                                            <div class="col-12 col-lg-3 sub-menu-component">
                                                <div class="sub-navigation-banner card horizontal single"><a href="/editorial/ceremonies-evening-outfits" class="banner-link" title="Ceremony" target="_self" rel=" ">
                                                        <figure>
                                                            <picture>
                                                                <source media="(max-width: 767px)" srcset="//world.maxmara.com/mediaObject/maxmara/HP_20_05/mobile-cerimonia/original/mobile+cerimonia.jpg"><img class="image" src="//world.maxmara.com/mediaObject/maxmara/HP_20_05/mobile-cerimonia/original/mobile+cerimonia.jpg" alt="Mobile Cerimonia Max Mara" title="Mobile Cerimonia Max Mara" data-image-ratio-md="1.0" data-image-ratio-sm="1.0" data-image-ratio-xs="1.0" data-image-ratio-lg="1.0">
                                                            </picture>
                                                            <figcaption class="">
                                                                <div class="caption ">
                                                                    <div class="">
                                                                        <div class="">
                                                                            <h2 data-link="/editorial/ceremonies-evening-outfits" class="h2 h2-editorial-primary js-multiline-ellipsis-text">Ceremony</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </a></div>
                                            </div>
                                            <div class="col-12 col-lg-3 sub-menu-component">
                                                <div class="sub-navigation-banner card horizontal single"><a href="/accessories/womens-sunglasses" class="banner-link" title="MM Eyewear" target="_self" rel=" ">
                                                        <figure>
                                                            <picture>
                                                                <source media="(max-width: 767px)" srcset="//world.maxmara.com/mediaObject/maxmara/HP-29-04/HP-29-04/Occhiali-mobile/original/Occhiali+mobile.jpg"><img class="image" src="//world.maxmara.com/mediaObject/maxmara/HP-29-04/HP-29-04/Occhiali-mobile/original/Occhiali+mobile.jpg" alt="Occhiali Mobile Max Mara" title="Occhiali Mobile Max Mara" data-image-ratio-md="1.0" data-image-ratio-sm="1.0" data-image-ratio-xs="1.0" data-image-ratio-lg="1.0">
                                                            </picture>
                                                            <figcaption class="">
                                                                <div class="caption ">
                                                                    <div class="">
                                                                        <div class="">
                                                                            <h2 data-link="/accessories/womens-sunglasses" class="h2 h2-editorial-primary js-multiline-ellipsis-text">MM Eyewear</h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </figcaption>
                                                        </figure>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </li>
                            <li>clothing</li>
                            <li>Coats and Jackets</li>
                            <li>Teddy ten</li>
                            <li>Bags and shoes</li>
                            <li>gifts</li>
                            <li>accesories</li>
                            <li>runway</li>
                            <li>bridal</li>
                            <li>mm world</li>
                        </ul>
                    </nav>
                </div>
            </section>
        </header>
        <script>
            jQuery(document).ready(function($) {});
        </script>
        <div id="content" class="site-content">