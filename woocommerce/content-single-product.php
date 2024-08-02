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

?>
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
                    do_action( 'woocommerce_after_single_product_summary' );
                    ?>
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