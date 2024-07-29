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

$all_generalFields = get_fields('options');
$top_header_fields = $all_generalFields['top_header_fields'];
$left_side_top_header_fields = $top_header_fields['left_side_top_header'];
$right_side_top_header_fields = $top_header_fields['right_side_top_header'];
$main_logo_image = $all_generalFields['main_logo'];
$main_logo_link = $all_generalFields['main_logo_link'];
$header_menu = $all_generalFields['header_menu'];
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
                    <form action="/" method="post">
                        <div class="position-relative">
                            <input class="input-newsletter input-search w-100" type="text" name="s" requierd placeholder="Search">
                            <button class="search-button subscription-button" name="submit-search">
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
                            <div class="col px-0">
                                <div class="d-flex float-left hover-js-drop-down custom-first-header-padding">
                                    <a href="<?php echo $left_side_top_header_fields['main_link']; ?>" class="default-button">
                                        <?php echo $left_side_top_header_fields['main_text']; ?>
                                    </a>
                                    <div class="drop-down-customer-service">
                                        <div class="headeing text-center">
                                            <h6><?php echo $left_side_top_header_fields['sub_main_label']; ?></h6>
                                        </div>
                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <a href="<?php echo $left_side_top_header_fields['first_sub_text_link']; ?>" class="icon-mail">
                                                    <span><?php echo $left_side_top_header_fields['first_sub_text']; ?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $left_side_top_header_fields['second_sub_text_link']; ?>">
                                                    <span><?php echo $left_side_top_header_fields['second_sub_text']; ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col px-0">
                                <div class="icon-pin d-flex float-right custom-first-header-padding">
                                    <a class="default-button" href="<?php echo $right_side_top_header_fields['main_link'] ?>">
                                        <?php echo $right_side_top_header_fields['mian_text'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="second-header">
                    <div class="container px-0">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="<?php echo get_home_url(); ?>">
                                            <img class="second-header-main-pages <?= is_page($page['page']->post_name) ? 'active' : ''; ?>" style="height: 40px; width: 90px;" src="<?php echo $main_logo_image; ?>" alt="Maison Lesley">
                                        </a>
                                    </div>
                                    <div class="col-8">
                                        <a href="<?php echo get_permalink(460); ?>">
                                            <img class="second-header-main-pages <?= is_page($page['page']->post_name) ? 'active' : ''; ?>" style="height: 40px; width: 170px;" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/mystiquerose-logo.png" alt="Mystique Rose">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-white main-logo-section">
                    <div class="container">
                        <div class="row justify-content-center" style="padding-top: 70px;">
                            <a class="d-flex justify-content-center" style="width:fit-content;" href="<?php echo $main_logo_link;?>">
                                <img class="main-logo" src="<?php echo $main_logo_image; ?>" alt="Maison Lesley">
                            </a>
                        </div>
                    </div>
                </section>
                <section class="bg-white main-nav-section">
                    <div class="container px-0">
                        <nav class="text-left main-nav d-flex justify-content-between">
                            <ul class="d-flex justify-content-start main-menu-list">
                                <?php foreach($header_menu as $single_menu){ ?>
                                    <li class="main-menu-link <?php echo $single_menu['has_sub_menu'] ? 'sub-menu': ''; ?>">
                                        <a class="link" href="<?php echo $single_menu['url']; ?>">
                                            <?php echo $single_menu['text']; ?>
                                        </a>
                                        <?php if($single_menu['has_sub_menu']){?>
                                            <div class="sub-full-menu">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="sub-div">
                                                                <div class="sub-label mb-3">
                                                                    <h5><?php echo $single_menu['sub_menu_section']['left_side_menu_label'] ?></h5>
                                                                </div>
                                                                <ul class="sub-menu-list">
                                                                    <?php foreach($single_menu['sub_menu_section']['left_side_sub_menu_list'] as $single_sub_menu){ ?>
                                                                        <li class="sub-menu-link">
                                                                            <a href="<?php echo $single_sub_menu['url'] ?>">
                                                                                <?php echo $single_sub_menu['text']; ?>
                                                                            </a>
                                                                        </li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <?php foreach($single_menu['sub_menu_section']['right_side_images'] as $single_image_section){ ?>
                                                            <div class="col-3">
                                                                <a class="sub-menu-image-link" href="<?php echo $single_image_section['url']; ?>">
                                                                    <img class="w-100 px-0" src="<?php echo $single_image_section['image']; ?>" alt="<?php echo $single_image_section['text']; ?>">
                                                                    <p class="sub-menu-image-text"><?php echo $single_image_section['text']; ?></p>
                                                                </a>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="right-side">
                                <button class="search-icon" data-bs-toggle="modal" data-bs-target="#search" name="search-button">
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
                                    <a href="<?php echo $left_side_top_header_fields['main_link']; ?>" class="default-button">
                                        <?php echo $left_side_top_header_fields['main_text']; ?>
                                    </a>
                                    <div class="drop-down-customer-service">
                                        <div class="headeing text-center">
                                            <h6><?php echo $left_side_top_header_fields['sub_main_label']; ?></h6>
                                        </div>
                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <a class="icon-mail" href="<?php echo $left_side_top_header_fields['first_sub_text_link']; ?>">
                                                    <span><?php echo $left_side_top_header_fields['first_sub_text']; ?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $left_side_top_header_fields['second_sub_text_link']; ?>">
                                                    <span><?php echo $left_side_top_header_fields['second_sub_text']; ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="icon-pin d-flex float-right custom-first-header-padding">
                                    <a href="<?php echo $right_side_top_header_fields['main_link'] ?>" class="default-button">
                                        <?php echo $right_side_top_header_fields['mian_text'] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="second-header-tablet">
                    <div class="container px-0">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <div class="col-md-4 col-6 d-flex justify-content-center" style="height: 40px;">
                                        <a href="<?php echo get_home_url(); ?>">
                                            <img class="second-header-main-pages <?= is_page($page['page']->post_name) ? 'active' : ''; ?>" style="height: 40px; width: 90px;" src="<?php echo $main_logo_image; ?>" alt="Maison Lesley">
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-6 d-flex justify-content-center" style="height: 40px;">
                                        <a href="<?php echo get_permalink(460); ?>">
                                            <img class="second-header-main-pages <?= is_page($page['page']->post_name) ? 'active' : ''; ?>" style="height: 40px; width: 170px;" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/mystiquerose-logo.png" alt="Mystique Rose">
                                        </a>
                                    </div>
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
                                    <button class="hamburger hamburger--collapse mt-0" type="button" name="hamburger-button">
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
                                    <a href="<?php echo $main_logo_link;?>">
                                        <img class="main-logo-tablet ml-5" src="<?php echo $main_logo_image; ?>" alt="Maison Lesley">
                                    </a>
                                </li>
                            </ul>
                            <div class="right-side">
                                <button class="search-icon" data-bs-toggle="modal" data-bs-target="#search" name="search-button">
                                </button>
                            </div>
                            <div id="menu_mobile" class="menu_on_mobile">
                                <div class="menu_on_mobile_wrapper">
                                    <div class="menu_on_mobile_inner_wrapper" style="position: relative;">
                                        <div>
                                            <ul>
                                                <?php
                                                $count = 0;
                                                foreach($header_menu as $single_menu) {
                                                    if($single_menu['has_sub_menu']){
                                                        $count++;
                                                ?>
                                                    <li>
                                                        <div class="accordion" id="accordionExample-header">
                                                            <div class="accordion-item" style="border: none;">
                                                                <h2 class="accordion-header mt-0" id="headingOne-header-<?php echo $count;?>">
                                                                    <button class="accordion-button d-block mb-3 page_font animated_menu_el collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-header-<?php echo $count; ?>" aria-expanded="true" aria-controls="collapseOne-header-<?php echo $count; ?>">
                                                                        <?php echo $single_menu['text']; ?>
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne-header-<?php echo $count; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne-header-<?php echo $count;?>" data-bs-parent="#accordionExample-header">
                                                                    <div class="accordion-body">
                                                                        <ul class="sub-menus-header">
                                                                            <?php foreach($single_menu['sub_menu_section']['left_side_sub_menu_list'] as $single_sub_menu){ ?>
                                                                                <li class="mb-3">
                                                                                    <a href="<?php echo $single_sub_menu['url'] ?>">
                                                                                        <?php echo $single_sub_menu['text']; ?>
                                                                                    </a>
                                                                                </li>
                                                                            <?php } ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php } else { ?>
                                                    <li>
                                                        <a class="d-block mb-3 page_font animated_menu_el" href="<?php echo $single_menu['url']; ?>">
                                                            <div class="menu_item active_page line_animation">
                                                                <?php echo $single_menu['text']; ?>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php }}?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </section>
            </section>
        </header>
        <!-- <div class="header-active-background-gray"></div> -->
        <script>
            jQuery(document).ready(function($) {
                $(window).scroll(function(){
                    var currentScreenPosition  = $(document).scrollTop();
                    if (currentScreenPosition > 250) {
                        $("header").addClass("active");
                        $('.main-nav-section').addClass("active");
                        $('.main-logo-section').addClass("active");
                        $('.first-header').addClass("active");
                        $('.second-header').addClass("active");
                    }
                    if (currentScreenPosition < 125){
                        $("header").removeClass("active");
                        $('.main-nav-section').removeClass("active");
                        $('.main-logo-section').removeClass("active");
                        $('.first-header').removeClass("active");
                        $('.second-header').removeClass("active");
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