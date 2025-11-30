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
if(is_product()){
    $is_product_from_mystiquerose = has_term(17, 'product_cat', get_the_ID()) ||
                                    has_term(23, 'product_cat', get_the_ID()) ||
                                    has_term(18, 'product_cat', get_the_ID()) ||
                                    has_term(25, 'product_cat', get_the_ID()) ||
                                    has_term(20, 'product_cat', get_the_ID()) ? 1 : 0;
}
$all_generalFields = get_fields('options');
$top_header_fields = $all_generalFields['top_header_fields'];
$left_side_top_header_fields = $top_header_fields['left_side_top_header'];
$right_side_top_header_fields = $top_header_fields['right_side_top_header'];
$main_logo_image = $all_generalFields['main_logo'];
$main_logo_link = $all_generalFields['main_logo_link'];
$main_logo_mystiquerose = $all_generalFields['main_logo_mystiquerose'];
$main_logo_link_mystiquerose = $all_generalFields['main_logo_mystiquerose_link'];
$is_MystiqueRose = is_page(460) || is_page(2409) || is_product_category(17) || is_product_category(23) || is_product_category(18) || is_product_category(25) || is_product_category(20) || !empty($is_product_from_mystiquerose);
$header_menu = $is_MystiqueRose ? $all_generalFields['header_menu_mystique_rose'] : $all_generalFields['header_menu'];
$current_url = home_url(add_query_arg(array(), $wp->request));
$get_size_guide_fields = $all_generalFields;
if($_SERVER['REQUEST_URI'] == '/shop/'){
    header("Location: https://maisonlesley.com/");
    exit();
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}
        (window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '592188410290511'); // Replace YOUR_PIXEL_ID with your actual Facebook Pixel ID
        fbq('track', 'PageView');
    </script>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VZYBKLLT4J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VZYBKLLT4J');
</script>
<body <?php body_class(); ?>>
    <div id="page" class="site main_page_wrapper">
        <div class="modal fade" id="search" tabindex="-1" aria-labelledby="searchLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="/" method="post">
                        <div class="position-relative">
                            <input class="input-newsletter input-search w-100" type="text" name="s" requierd
                                placeholder="Search">
                            <button class="search-button subscription-button" name="submit-search">
                                <span class="submit-txt">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="sizeGuideSidebar" aria-labelledby="sizeGuideLabel" aria-hidden="true">
            <div class="offcanvas-header">
                <h2 id="sizeGuideLabel"><?php echo $get_size_guide_fields['title'];?></h2>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p><?php echo $get_size_guide_fields['sub_title']; ?></p>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo $get_size_guide_fields['size_guide_label'];?>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="sizeguide-table">
                                    <div class="size-table-title-container">
                                        <?php foreach ($get_size_guide_fields['size_guide_table']['labels'] as $label) {?>
                                            <div class="size-table-title-element">
                                                <?php echo $label['label']; ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="size-table-size-row-container">
                                        <?php foreach ($get_size_guide_fields['size_guide_table']['rows'] as $rows) {?>
                                            <div class="size-table-size-row">
                                                <?php foreach ($rows['row'] as $main_text) { ?>
                                                    <div class="size-table-size-element"><?php echo $main_text['main_text']; ?></div>
                                                <?php } ?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <a href="<?php echo $left_side_top_header_fields['main_link']; ?>"
                                        class="default-button">
                                        <?php echo $left_side_top_header_fields['main_text']; ?>
                                    </a>
                                    <!-- <div class="drop-down-customer-service">
                                        <div class="headeing text-center">
                                            <h6><?php // echo $left_side_top_header_fields['sub_main_label']; ?></h6>
                                        </div>
                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <a href="<?php // echo $left_side_top_header_fields['first_sub_text_link']; ?>" class="icon-mail">
                                                    <span><?php //echo $left_side_top_header_fields['first_sub_text']; ?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php //echo $left_side_top_header_fields['second_sub_text_link']; ?>">
                                                    <span><?php //echo $left_side_top_header_fields['second_sub_text']; ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <!-- <div class="col px-0">
                                <div class="icon-pin d-flex float-right custom-first-header-padding">
                                    <a class="default-button" href="<?php //echo $right_side_top_header_fields['main_link'] ?>">
                                        <?php //echo $right_side_top_header_fields['mian_text'] ?>
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </section>
                <section class="second-header" style="<?php echo is_page(2409) ? 'top: 25%;' : ''; ?>">
                    <div class="container h-100 px-0">
                        <div class="row h-100">
                            <div class="col-md-4 col-12 h-100">
                                <div class="row h-100">
                                    <div class="col-4 h-100">
                                        <a class="second-header-main-pages <?= empty($is_MystiqueRose) ? 'active' : ''; ?>"
                                            href="<?php echo get_home_url(); ?>">
                                            <img style="height: 40px; width: 90px;"
                                                src="<?php echo $main_logo_image; ?>" alt="Maison Lesley">
                                        </a>
                                    </div>
                                    <div class="col-1 px-0 d-flex justify-content-center"
                                        style="background-color: #d5d1d1; width: 1px; margin: 5px 0; height:30px"></div>
                                    <div class="col-7 h-100">
                                        <a class="second-header-main-pages <?= $is_MystiqueRose ? 'active' : ''; ?>"
                                            href="<?php echo $main_logo_link_mystiquerose; ?>">
                                            <img style="height: 40px; width: 170px;"
                                                src="<?php echo $main_logo_mystiquerose; ?>" alt="Mystique Rose">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-white main-logo-section">
                    <div class="container">
                        <div class="row justify-content-center"
                            style="<?php echo $is_MystiqueRose ? 'padding-top: 0px;' : 'padding-top: 70px;'; ?>">
                            <a class="d-flex justify-content-center" style="width:fit-content;"
                                href="<?php echo $is_MystiqueRose ? $main_logo_link_mystiquerose : $main_logo_link;?>">
                                <?php if($is_MystiqueRose){ ?>
                                <img class="main-logo" src="<?php echo $main_logo_mystiquerose; ?>" alt="Mystique Rose">
                                <?php } else { ?>
                                <img class="main-logo" src="<?php echo $main_logo_image; ?>" alt="Maison Lesley">
                                <?php } ?>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="bg-white main-nav-section" style="<?php echo is_page(2409); ? 'transform: translateY(20%);' : ''; ?>">
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
                                                <!-- <div class="col-3">
                                                            <div class="sub-div">
                                                                <div class="sub-label mb-3">
                                                                    <h5><?php // echo $single_menu['sub_menu_section']['left_side_menu_label'] ?></h5>
                                                                </div>
                                                                <ul class="sub-menu-list">
                                                                    <?php //foreach($single_menu['sub_menu_section']['left_side_sub_menu_list'] as $single_sub_menu){ ?>
                                                                        <li class="sub-menu-link">
                                                                            <a href="<?php //echo $single_sub_menu['url'] ?>">
                                                                                <?php //echo $single_sub_menu['text']; ?>
                                                                            </a>
                                                                        </li>
                                                                    <?php //} ?>
                                                                </ul>
                                                            </div>
                                                        </div> -->
                                                <?php foreach($single_menu['sub_menu_section']['right_side_images'] as $single_image_section){ ?>
                                                <div class="col-3">
                                                    <a class="sub-menu-image-link"
                                                        href="<?php echo $single_image_section['url']; ?>">
                                                        <img class="w-100 px-0"
                                                            src="<?php echo $single_image_section['image']; ?>"
                                                            alt="<?php echo $single_image_section['text']; ?>">
                                                        <p class="sub-menu-image-text">
                                                            <?php echo $single_image_section['text']; ?></p>
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
                               <ul class="d-flex">
                                    <li>
                                        <a class="my-account" href="/my-account"></a>
                                    </li>
                                    <li>
                                        <a class="whish-list" href="/wishlist"></a>
                                    </li>
                                    <li>
                                        <a class="add-to-cart" href="/cart"></a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <button class="search-icon" data-bs-toggle="modal" data-bs-target="#search"
                                            name="search-button">
                                        </button>
                                    </li>
                               </ul>
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
                                    <a href="<?php echo $left_side_top_header_fields['main_link']; ?>"
                                        class="default-button">
                                        <?php echo $left_side_top_header_fields['main_text']; ?>
                                    </a>
                                    <!-- <div class="drop-down-customer-service">
                                        <div class="headeing text-center">
                                            <h6><?php //echo $left_side_top_header_fields['sub_main_label']; ?></h6>
                                        </div>
                                        <ul class="d-flex justify-content-between align-items-center">
                                            <li>
                                                <a class="icon-mail" href="<?php //echo $left_side_top_header_fields['first_sub_text_link']; ?>">
                                                    <span><?php //echo $left_side_top_header_fields['first_sub_text']; ?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php //echo $left_side_top_header_fields['second_sub_text_link']; ?>">
                                                    <span><?php //echo $left_side_top_header_fields['second_sub_text']; ?></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <!-- <div class="col">
                                <div class="icon-pin d-flex float-right custom-first-header-padding">
                                    <a href="<?php //echo $right_side_top_header_fields['main_link'] ?>" class="default-button">
                                        <?php //echo $right_side_top_header_fields['mian_text'] ?>
                                    </a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </section>
                <section class="second-header-tablet">
                    <div class="container px-0">
                        <nav class="d-flex justify-content-around align-items-center">
                            <a class="second-header-main-pages <?= empty($is_MystiqueRose) ? 'active' : ''; ?>"
                                href="<?php echo get_home_url(); ?>">
                                <img style="height: 40px; width: 90px;" src="<?php echo $main_logo_image; ?>"
                                    alt="Maison Lesley">
                            </a>
                            <a class="second-header-main-pages <?= $is_MystiqueRose ? 'active' : ''; ?>"
                                href="<?php echo $main_logo_link_mystiquerose; ?>">
                                <img style="height: 40px; width: 170px;" src="<?php echo $main_logo_mystiquerose; ?>"
                                    alt="Mystique Rose">
                            </a>
                        </nav>
                    </div>
                </section>
                <section class="bg-white main-nav-section-tablet <?php echo is_page(2409) ? 'py-3' : ''; ?>">
                    <div class="container px-0 py-sm-0 py-2">
                        <nav class="text-left main-nav d-flex justify-content-between">
                            <ul class="d-flex justify-content-start main-menu-list align-items-center">
                                <li>
                                    <button class="hamburger hamburger--collapse mt-0" type="button"
                                        name="hamburger-button">
                                        <div class="menu_mobile_nav">
                                            <div class="hamburger_menu_icon">
                                                <div class="line"></div>
                                                <div class="line middle_line"></div>
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                    </button>
                                </li>
                                <li class="d-none d-sm-flex">
                                    <?php if($is_MystiqueRose){ ?>
                                    <!-- <a href="<?php //echo $main_logo_link_mystiquerose; ?>">
                                        <img class="main-logo-tablet ml-5" src="<?php //echo $main_logo_mystiquerose; ?>"
                                            alt="Mystique Rose">
                                    </a> -->
                                    <?php } else {?>
                                    <a href="<?php echo $main_logo_link;?>">
                                        <img class="main-logo-tablet ml-5" src="<?php echo $main_logo_image; ?>"
                                            alt="Maison Lesley">
                                    </a>
                                    <?php } ?>
                                </li>
                            </ul>
                            <div class="right-side">
                                <ul class="d-flex">
                                    <?php if(!is_page(2409)){ ?>
                                        <li>
                                            <a class="my-account" href="/my-account"></a>
                                        </li>
                                        <li>
                                            <a class="whish-list" href="/wishlist"></a>
                                        </li>
                                        <li>
                                            <a class="add-to-cart" href="/cart"></a>
                                        </li>
                                    <?php } ?>
                                    <li class="d-flex align-items-center">
                                        <button class="search-icon" data-bs-toggle="modal" data-bs-target="#search"
                                            name="search-button">
                                        </button>
                                    </li>
                                </ul>
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
                                                            <h2 class="accordion-header mt-0"
                                                                id="headingOne-header-<?php echo $count;?>">
                                                                <button
                                                                    class="accordion-button d-block mb-3 page_font animated_menu_el collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne-header-<?php echo $count; ?>"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne-header-<?php echo $count; ?>">
                                                                    <?php echo $single_menu['text']; ?>
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne-header-<?php echo $count; ?>"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingOne-header-<?php echo $count;?>"
                                                                data-bs-parent="#accordionExample-header">
                                                                <div class="accordion-body">
                                                                    <ul class="sub-menus-header">
                                                                        <?php foreach($single_menu['sub_menu_section']['right_side_images'] as $single_sub_menu){ ?>
                                                                        <li class="mb-3">
                                                                            <a
                                                                                href="<?php echo $single_sub_menu['url'] ?>">
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
                                                    <a class="d-block mb-3 page_font animated_menu_el"
                                                        href="<?php echo $single_menu['url']; ?>">
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
            <?php if(!is_page(2409)){ ?>
                $(window).scroll(function() {
                    var currentScreenPosition = $(document).scrollTop();
                    if (currentScreenPosition > 250) {
                        $("header").addClass("active");
                        $('.main-nav-section').addClass("active");
                        $('.main-logo-section').addClass("active");
                        $('.first-header').addClass("active");
                        $('.second-header').addClass("active");
                    }
                    if (currentScreenPosition < 125) {
                        $("header").removeClass("active");
                        $('.main-nav-section').removeClass("active");
                        $('.main-logo-section').removeClass("active");
                        $('.first-header').removeClass("active");
                        $('.second-header').removeClass("active");
                    }
                });
            <?php } ?>
            $('.main-menu-link.sub-menu').hover(function() {
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