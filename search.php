<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header();

$args = array(
	'post_type'      => 'product', // WooCommerce products are stored as 'product'
	'post_status'    => 'publish', // Only show published products
	'posts_per_page' => -1, // Number of products to return (-1 for all)
	's'              => $get_search_query,
);

// Create a new query
$query = new WC_Product_Query( $args );

// Get the products
$products = $query->get_products();

// Loop through the products and display their information
foreach ( $products as $product ) {
	// Get product object
	$product_obj = wc_get_product( $product->get_id() );

	// Display product information
	echo 'Product ID: ' . $product_obj->get_id() . '<br>';
	echo 'Product Name: ' . $product_obj->get_name() . '<br>';
	echo 'Product Price: ' . $product_obj->get_price() . '<br>';
	echo 'Product SKU: ' . $product_obj->get_sku() . '<br>';
	echo 'Product Stock Status: ' . $product_obj->get_stock_status() . '<br>';
	echo '<br>';
}
?>
<section class="single_search">
	<div class="container">
		<div class="row text-center pb-5">
			<h1 class="page-title"><?php echo esc_html__(get_search_query()); ?></h1>
		</div>
	</div>
</section>
<script>
jQuery(document).ready(function($) {
});
</script>
<?php
get_footer();
