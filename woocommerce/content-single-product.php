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
    // Custom Dissh-style layout for Mystique Rose products
    ?>
    <div class="dissh-mystique-product container-fluid py-5">
        <div class="row gx-4 justify-content-start">
            <div class="col-md-7 col-12 mb-4 mb-lg-0">
                <div class="dissh-gallery row gx-2">
                    <?php do_action('woocommerce_before_single_product_summary'); ?>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="dissh-summary">
                    <?php do_action('woocommerce_single_product_summary'); ?>
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
                            <h2 class="accordion-header" id="headingSizeGuide">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSizeGuide" aria-expanded="false" aria-controls="collapseSizeGuide">
                                    Size Guide
                                    <span class="custom-accordion-icon"><span class="plus">+</span><span class="minus" style="display:none">-</span></span>
                                </button>
                            </h2>
                            <div id="collapseSizeGuide" class="accordion-collapse collapse" aria-labelledby="headingSizeGuide" data-bs-parent="#accordionDissh">
                                <div class="accordion-body">
                                    <!-- Example size guide table, replace with your actual data -->
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Bust (cm)</th>
                                                <th>Waist (cm)</th>
                                                <th>Hips (cm)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>79</td><td>63</td><td>90</td></tr>
                                            <tr><td>84</td><td>68</td><td>95</td></tr>
                                            <tr><td>89</td><td>73</td><td>100</td></tr>
                                            <tr><td>94</td><td>78</td><td>105</td></tr>
                                            <tr><td>99</td><td>83</td><td>110</td></tr>
                                            <tr><td>104</td><td>88</td><td>115</td></tr>
                                        </tbody>
                                    </table>
                                    <div class="mt-2">
                                        <strong>Measuring Guide:</strong>
                                        <ul>
                                            <li>Bust: Measure around your chest at the fullest part of your bra cup.</li>
                                            <li>Waist: Measure around the smallest part of your waistline.</li>
                                            <li>Hips: Measure around the fullest part of your hips and buttocks.</li>
                                        </ul>
                                    </div>
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
                <h3>You May Also Like</h3>
                <div class="row">
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
            </div>
        </div>
    </div>
    <style>
        .dissh-mystique-product { background: #fff; }
        .dissh-gallery img { width: 100%; border-radius: 0px; }
        .dissh-summary { font-size: 1.1rem; }
        .dissh-shipping-info ul { padding-left: 0; }
        .dissh-shipping-info li { margin-bottom: 4px; }
        .dissh-accordion .accordion-button { background: #f8f8f8; font-weight: bold; position: relative; }
        .dissh-accordion .accordion-body { background: #fff; }
        .dissh-accordion .accordion-button::after { display: none !important; }
        .custom-accordion-icon { position: absolute; right: 20px; top: 50%; transform: translateY(-50%); font-size: 1.5em; pointer-events: none; }
        .custom-accordion-icon .minus { color: #333; }
        .custom-accordion-icon .plus { color: #333; }
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