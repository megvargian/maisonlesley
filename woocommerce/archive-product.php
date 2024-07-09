<?php
/**
* Template Name: Archive Product (Custom Filter)
*
* @package WooCommerce
*/

defined( 'ABSPATH' ) || exit;

wc_get_template_header(); ?>

<main id="main" class="site-main">
    <?php
    /**
     * Hook: woocommerce_archive_before_loop.
     *
     * @hooked woocommerce_show_page_title - 5
     */
    do_action( 'woocommerce_archive_before_loop' );

    if ( have_posts() ) {

        /**
         * Filter: woocommerce_archive_product_attributes.
         *
         * @param array $attributes An array of attribute taxonomies that should be displayed on the archive page.
         * @return array Maybe modified array of attribute taxonomies.
         */
        $filter_attributes = apply_filters( 'woocommerce_archive_product_attributes', array( 'pa_color', 'pa_size' ) ); // Replace 'pa_color' and 'pa_size' with your actual attribute slugs

        if ( ! empty( $filter_attributes ) ) {
            echo '<div class="custom-product-filter">';
            woocommerce_layered_nav(
                array(
                    'taxonomy' => $filter_attributes,
                    'query_type' => 'and', // Adjust to 'or' if you want products matching any selected attribute
                )
            );
            echo '</div>';
        }

        /**
         * Hook: woocommerce_archive_content.
         */
        do_action( 'woocommerce_archive_content' );

    } else {
        /**
         * Hook: woocommerce_archive_empty.
         *
         * @hooked wc_get_template_part - 5
         *
         * @action woocommerce_archive_empty
         */
        do_action( 'woocommerce_archive_empty' );
    }

    /**
     * Hook: woocommerce_archive_after_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action( 'woocommerce_archive_after_loop' );
    ?>
</main>

<?php
wc_get_template_footer();