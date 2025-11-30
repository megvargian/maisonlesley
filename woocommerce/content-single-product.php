<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
$mystique_cat_ids = array(17, 23, 18, 25, 20);
$product_id = $product->get_id();
$terms = get_the_terms($product_id, 'product_cat');
$is_mystique = false;
if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        if (in_array($term->term_id, $mystique_cat_ids)) {
            $is_mystique = true;
            break;
        }
    }
}

if ($is_mystique) {
        // Get color attribute terms for the product
        $color_terms = wc_get_product_terms($product->get_id(), 'pa_color', array('fields' => 'all'));
        if (!empty($color_terms)) {
        ?>
        <div class="mb-4">
            <div class="mb-2" style="font-size:1.1em;font-weight:500;">Colour:
                <span id="selected-color-label">
                    <?php echo esc_html($color_terms[0]->name); ?>
                </span>
            </div>
            <ul class="mystique-color-list d-flex gap-3" style="list-style:none;padding-left:0;">
                <?php foreach ($color_terms as $term) {
                    // Get hex color from ACF or term meta
                    $hex = get_field('color', $term->taxonomy . '_' . $term->term_id);
                    if (!$hex) $hex = '#e0e0e0';
                ?>
                <li>
                    <button type="button" class="mystique-color-circle" data-color-label="<?php echo esc_attr($term->name); ?>" style="background:<?php echo esc_attr($hex); ?>;width:40px;height:40px;border-radius:50%;border:2px solid #eee;outline:none;cursor:pointer;display:inline-block;"></button>
                </li>
                <?php } ?>
            </ul>
        </div>
        <style>
            .mystique-color-circle.selected {
                border: 3px solid #bfc7d5 !important;
                box-shadow: 0 0 0 2px #fff;
            }
        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var colorCircles = document.querySelectorAll('.mystique-color-circle');
                var label = document.getElementById('selected-color-label');
                if(colorCircles.length) {
                    colorCircles[0].classList.add('selected');
                    colorCircles.forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            colorCircles.forEach(function(b){b.classList.remove('selected');});
                            btn.classList.add('selected');
                            label.textContent = btn.getAttribute('data-color-label');
                        });
                    });
                }
            });
        </script>
        <?php }
    // Custom Dissh-style layout for Mystique Rose products
    ?>
    <div class="dissh-mystique-product container-fluid py-5">
        <div class="row gx-4 justify-content-start">
            <div class="col-md-7 col-12 mb-4 mb-lg-0">
                <!-- Desktop gallery -->
                <div class="dissh-gallery row gx-2 d-none d-md-flex">
                    <?php do_action('woocommerce_before_single_product_summary'); ?>
                </div>
                <!-- Mobile Swiper gallery -->
                <div class="d-block d-md-none position-relative product-gallery-main pb-4">
                    <div class="swiper-container product-gallery-swiper" style="overflow: hidden;">
                        <div class="swiper-wrapper">
                            <?php
                            // Main product image
                            $main_image_id = $product->get_image_id();
                            if ($main_image_id) {
                                $main_image_url = wp_get_attachment_image_url($main_image_id, 'large');
                                echo '<div class="swiper-slide"><img src="' . esc_url($main_image_url) . '" class="img-fluid w-100" alt="Product image"></div>';
                            }
                            // Gallery images
                            $attachment_ids = $product->get_gallery_image_ids();
                            if (!empty($attachment_ids)) {
                                foreach ($attachment_ids as $attach_id) {
                                    $img_url = wp_get_attachment_image_url($attach_id, 'large');
                                    echo '<div class="swiper-slide"><img src="' . esc_url($img_url) . '" class="img-fluid w-100" alt="Product gallery image"></div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="swiper-pagination product-gallery-pagination"></div>
                </div>
            </div>
            <div class="col-xxl-3 col-xxl-4 col-lg-4 col-md-5 col-12">
                <div class="dissh-summary">
                    <?php
                    // Color circles above size section
                    $color_terms = wc_get_product_terms($product->get_id(), 'pa_color', array('fields' => 'all'));
                    if (!empty($color_terms)) {
                    ?>
                    <div class="mb-4">
                        <div class="mb-2" style="font-size:1.1em;font-weight:500;">Colour:
                            <span id="selected-color-label">
                                <?php echo esc_html($color_terms[0]->name); ?>
                            </span>
                        </div>
                        <ul class="mystique-color-list d-flex gap-3" style="list-style:none;padding-left:0;">
                            <?php foreach ($color_terms as $term) {
                                $hex = get_field('color', $term->taxonomy . '_' . $term->term_id);
                                if (!$hex) $hex = '#e0e0e0';
                            ?>
                            <li>
                                <button type="button" class="mystique-color-circle" data-color-label="<?php echo esc_attr($term->name); ?>" style="background:<?php echo esc_attr($hex); ?>;width:40px;height:40px;border-radius:50%;border:2px solid #eee;outline:none;cursor:pointer;display:inline-block;"></button>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <style>
                        .mystique-color-circle.selected {
                            border: 3px solid #bfc7d5 !important;
                            box-shadow: 0 0 0 2px #fff;
                        }
                    </style>
                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var colorCircles = document.querySelectorAll('.mystique-color-circle');
                        var label = document.getElementById('selected-color-label');
                        if(colorCircles.length) {
                            colorCircles[0].classList.add('selected');
                            colorCircles.forEach(function(btn) {
                                btn.addEventListener('click', function() {
                                    colorCircles.forEach(function(b){b.classList.remove('selected');});
                                    btn.classList.add('selected');
                                    label.textContent = btn.getAttribute('data-color-label');
                                });
                            });
                        }
                    });
                    </script>
                    <?php }
                    // Size and other summary content
                    do_action('woocommerce_single_product_summary');
                    ?>
                    <div class="dissh-shipping-info mt-3">
                        <ul class="list-unstyled">
                            <li><strong>Free Express Shipping Over $150</strong></li>
                            <li>Estimated Delivery 2-4 Business Days</li>
                            <li>Instant Refunds</li>
                        </ul>
                    </div>
                </div>
                <div class="dissh-accordion mt-4">
                    <div class="accordion" id="accordionDissh">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingDesignNotes">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDesignNotes" aria-expanded="false" aria-controls="collapseDesignNotes">
                                    Design Notes
                                    <span class="custom-accordion-icon"><span class="plus">+</span><span class="minus" style="display:none">-</span></span>
                                </button>
                            </h2>
                            <div id="collapseDesignNotes" class="accordion-collapse collapse" aria-labelledby="headingDesignNotes" data-bs-parent="#accordionDissh">
                                <div class="accordion-body">
                                    <?php echo $product->get_description(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingReturns">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReturns" aria-expanded="false" aria-controls="collapseReturns">
                                    Delivery & Returns
                                    <span class="custom-accordion-icon"><span class="plus">+</span><span class="minus" style="display:none">-</span></span>
                                </button>
                            </h2>
                            <div id="collapseReturns" class="accordion-collapse collapse" aria-labelledby="headingReturns" data-bs-parent="#accordionDissh">
                                <div class="accordion-body">
                                    <p>See our <a href="/shipping">Shipping</a> and <a href="/returns">Returns</a> pages for more info.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="pb-5">You May Also Like</h3>
                <!-- Desktop grid -->
                <div class="row d-none d-md-flex">
                    <?php
                    $related_products = wc_get_related_products($product->get_id(), 4);
                    if (!empty($related_products)) {
                        foreach ($related_products as $related_product_id) {
                            $post_object = get_post($related_product_id);
                            setup_postdata($GLOBALS['post'] =& $post_object);
                            echo '<div class="col-md-3 col-12 mb-3">';
                            wc_get_template_part('content', 'product');
                            echo '</div>';
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </div>
                <!-- Mobile swiper -->
                <div class="d-block d-md-none position-relative you-may-also-like-main">
                    <div class="swiper-container you-may-also-like-swiper" style="overflow: hidden;">
                        <div class="swiper-wrapper">
                            <?php
                            $related_products = wc_get_related_products($product->get_id(), 4);
                            if (!empty($related_products)) {
                                foreach ($related_products as $related_product_id) {
                                    $post_object = get_post($related_product_id);
                                    setup_postdata($GLOBALS['post'] =& $post_object);
                                    echo '<div class="swiper-slide">';
                                    wc_get_template_part('content', 'product');
                                    echo '</div>';
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </div>
                    </div>
                    <div class="swiper-pagination you-may-also-like-swiper-position"></div>
                </div>
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    if (window.Swiper) {
                        new Swiper('.you-may-also-like-swiper', {
                            slidesPerView: 1,
                            spaceBetween: 16,
                            pagination: {
                                el: '.you-may-also-like-swiper-position',
                                clickable: true,
                            },
                        });
                        new Swiper('.product-gallery-swiper', {
                            slidesPerView: 1,
                            spaceBetween: 16,
                            pagination: {
                                el: '.product-gallery-pagination',
                                clickable: true,
                            },
                        });
                    }
                });
                </script>
            </div>
        </div>
    </div>
    <style>
        .dissh-mystique-product { background: #fff; font-weight: 300 !important;}
        .dissh-gallery img { width: 100%; border-radius: 0px; }
        .dissh-summary { font-size: 1.1rem; }
        .dissh-shipping-info ul { padding-left: 0; }
        .dissh-shipping-info li { margin-bottom: 4px;  }
        .dissh-accordion .accordion-button { font-weight: bold; position: relative; }
        .dissh-accordion .accordion-body { background: #fff; }
        .dissh-accordion .accordion-button::after { display: none !important; }
        .custom-accordion-icon { position: absolute; right: 20px; top: 50%; transform: translateY(-50%); font-size: 1.5em; pointer-events: none; }
        .custom-accordion-icon .minus { color: #333; font-weight: 300; }
        .custom-accordion-icon .plus { color: #333; font-weight: 300; }
        /* Swiper bullets for you-may-also-like-swiper and product-gallery-swiper */
        .you-may-also-like-swiper .swiper-pagination-bullet,
        .product-gallery-swiper .swiper-pagination-bullet {
            background: #e0e0e0 !important;
            border-radius: 50%;
            width: 10px;
            height: 10px;
            opacity: 1;
            margin: 0 4px !important;
            border: none;
            transition: background 0.2s;
        }
        .you-may-also-like-main .swiper-pagination-bullet-active,
        .product-gallery-main .swiper-pagination-bullet-active {
            background: #000 !important;
        }
        .you-may-also-like-swiper-position, .product-gallery-pagination{
            top: 100% !important;
        }
    </style>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var buttons = document.querySelectorAll('.dissh-accordion .accordion-button');
        buttons.forEach(function(btn) {
            btn.addEventListener('click', function() {
                setTimeout(function() {
                    var icon = btn.querySelector('.custom-accordion-icon');
                    if (btn.classList.contains('collapsed')) {
                        icon.querySelector('.plus').style.display = '';
                        icon.querySelector('.minus').style.display = 'none';
                    } else {
                        icon.querySelector('.plus').style.display = 'none';
                        icon.querySelector('.minus').style.display = '';
                    }
                }, 200);
            });
        });
    });
    </script>
    <?php
} else {  ?>
    <div class="container">
        <div class="row">
            <?php
            /**
             * Hook: woocommerce_before_single_product.
             *
             * @hooked woocommerce_output_all_notices - 10
             */
            do_action( 'woocommerce_before_single_product' );
            ?>
        </div>
    </div>
    <?php
    if ( post_password_required() ) {
        echo get_the_password_form(); // WPCS: XSS ok.
        return;
    }
    ?>
    <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?> class="px-0">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                   <div class="row px-0">
                        <?php
                        /**
                         * Hook: woocommerce_before_single_product_summary.
                         *
                         * @hooked woocommerce_show_product_sale_flash - 10
                         * @hooked woocommerce_show_product_images - 20
                         */
                        do_action( 'woocommerce_before_single_product_summary' );
                        ?>
                   </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="summary entry-summary w-100">
                        <?php
                        /**
                         * Hook: woocommerce_single_product_summary.
                         *
                         * @hooked woocommerce_template_single_title - 5
                         * @hooked woocommerce_template_single_rating - 10
                         * @hooked woocommerce_template_single_price - 10
                         * @hooked woocommerce_template_single_excerpt - 20
                         * @hooked woocommerce_template_single_add_to_cart - 30
                         * @hooked woocommerce_template_single_meta - 40
                         * @hooked woocommerce_template_single_sharing - 50
                         * @hooked WC_Structured_Data::generate_product_data() - 60
                         */
                        do_action( 'woocommerce_single_product_summary' );
                        ?>
                    </div>
                    <div class="after-summary">
                        <?php
                        /**
                         * Hook: woocommerce_after_single_product_summary.
                         *
                         * @hooked woocommerce_output_product_data_tabs - 10
                         * @hooked woocommerce_upsell_display - 15
                         */
                        // do_action( 'woocommerce_after_single_product_summary' );
                        $long_description = $product->get_description();
                        if($long_description){
                        ?>
                        <div class="single-description-section">
                            <div class="accordion w-100" id="accordionExample-description">
                                <div class="accordion-item" style="border-top: none !important; border-left: none !important; border-right: none !important;">
                                    <h2 class="accordion-header mt-0" id="heading-description">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-description" aria-expanded="true" aria-controls="collapse-description">
                                            Description
                                        </button>
                                    </h2>
                                    <div id="collapse-description" class="accordion-collapse collapse" aria-labelledby="heading-description" data-bs-parent="#accordionExample-description">
                                        <div class="accordion-body">
                                            <p><?php echo $long_description; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row related-products-container pt-4">
                <?php
                    $related_products = wc_get_related_products( $product->get_id(), $limit = 4 ); // Change limit as needed
                    if ( ! empty( $related_products ) ) {
                        // Start custom structure
                        ?>
                            <div class="container">
                                <div class="row text-left">
                                    <?php echo '<h2>' . __( 'Related Products', 'woocommerce' ) . '</h2>'; ?>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <?php foreach ( $related_products as $related_product_id ) { ?>
                                        <div class="col-md-3 col-12">
                                            <?php
                                                $post_object = get_post( $related_product_id );
                                                setup_postdata( $GLOBALS['post'] =& $post_object );
                                                wc_get_template_part( 'content', 'product' );
                                            ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php
                        wp_reset_postdata();
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php do_action( 'woocommerce_after_single_product' ); ?>
        </div>
    </div>
    <?php
}