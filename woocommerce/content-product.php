<?php
/**
 * The template for displaying product content within loops.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this
 * as little as possible, but it does happen. When this occurs the version of the template file
 * will be bumped and the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
global $counter_products;
$product_id = $product->get_id();
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div id="product-<?php echo $product_id; ?>" class="cat-single-main-product" <?php wc_product_class( '', $product ); ?>>
        <?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        //do_action( 'woocommerce_before_shop_loop_item' );

        /**
         * Hook: woocommerce_before_shop_loop_item_title.
         *
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10
         */
        //do_action( 'woocommerce_before_shop_loop_item_title' );

        /**
         * Hook: woocommerce_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_product_title - 10
         */
        //do_action( 'woocommerce_shop_loop_item_title' );

        /**
         * Hook: woocommerce_after_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_rating - 5
         * @hooked woocommerce_template_loop_price - 10
         */
        // do_action( 'woocommerce_after_shop_loop_item_title' );

        /**
         * Hook: woocommerce_after_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_close - 5
         * @hooked woocommerce_template_loop_add_to_cart - 10
         */
        // do_action( 'woocommerce_after_shop_loop_item' );
        ?>
        <?php
        // Open the product link
        $attachment_ids = $product->get_gallery_image_ids();
        if ($attachment_ids && !empty($attachment_ids)) {
                $first_image_id = $attachment_ids[0]; // Get the first image ID
                $first_image_url = wp_get_attachment_url($first_image_id); // Get the URL of the first image
        } ?>
        <a class="w-100 h-100 d-block <?php echo $first_image_url ? 'cat-single-product' : '' ?>" href="<?php echo esc_url( $product->get_permalink() ) ?>">
        <?php
                $attachment_id = $product->get_image_id(); // Get the product image ID
                $image_url_mobile = wp_get_attachment_image_src($attachment_id, 'custom-woocommerce-thumbnail');
                $image_url = ($counter_products % 5 == 0) ? wp_get_attachment_image_src($attachment_id, 'custom-woocommerce-thumbnail') : wp_get_attachment_image_src($attachment_id) ;
                if ($image_url || $image_url_mobile) {
                        echo '<img class="d-md-block d-none main-img-product-'.$product_id.' main-thumbnail-img" src="' . esc_url($image_url[0]) . '" alt="' . esc_attr($product->get_name()) . '" width="500" height="500" />';
                        echo '<img class="d-md-none d-block" src="' . esc_url($image_url_mobile[0]) . '" alt="' . esc_attr($product->get_name()) . '" width="500" height="500" />';
                }
                 // Check if there are gallery images
                if ($first_image_url) {
                        echo '<img class="first-gallery-image d-none" src="' . esc_url($first_image_url) . '" alt="First Gallery Image">';
                }
                echo '<h2 class="woocommerce-loop-product__title">' . $product -> get_name() . '</h2>';
                echo '<span class="price">' . $product->get_price_html() . '</span>';
        // Close the product link
        echo '</a>';
        // Display the add to cart button
        // echo $counter_products > 1 ? '' : woocommerce_template_single_add_to_cart();
        ?>
</div>
<?php
