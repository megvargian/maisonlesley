<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header();
$search_term = get_search_query();
$args = array(
	'post_type'      => 'product', // WooCommerce products are stored as 'product'
	'post_status'    => 'publish', // Only show published products
	'posts_per_page' =>  12, // Number of products to return (-1 for all)
	's'              => get_search_query(),
);
// Create a new query
$query = new WC_Product_Query( $args );

// Get the products
$products = $query->get_products();
?>
<section class="single_search">
	<div class="container">
		<div class="row text-center pb-5">
			<h1 class="page-title"><?php echo esc_html__(get_search_query()); ?></h1>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<?php foreach ( $products as $product ) {
				$product_obj = wc_get_product( $product->get_id() );
				$is_sold_out = false;
				if ( !$product_obj->is_in_stock() ) {
					$is_sold_out = true;
				} elseif ( $product_obj->is_type('variable') ) {
					$has_any_stock = false;
					foreach ( $product_obj->get_children() as $var_id ) {
						$var = wc_get_product($var_id);
						if ( $var && $var->get_status() === 'publish' ) {
							if ( $var->managing_stock() ) {
								if ( (int)$var->get_stock_quantity() > 0 ) { $has_any_stock = true; break; }
							} elseif ( $var->is_in_stock() ) {
								$has_any_stock = true; break;
							}
						}
					}
					$is_sold_out = !$has_any_stock;
				}
			?>
				<div class="col-md-4 col-12">
					<a href="<?php echo get_permalink($product_obj->get_id()); ?>">
						<div style="position: relative;">
							<?php if ($is_sold_out): ?><span class="best-seller-sold-out-tag">Sold out</span><?php endif; ?>
							<img class="w-100" src="<?php echo get_the_post_thumbnail_url( $product_obj->get_id()); ?>" alt="<?php echo $product_obj->get_name() ?>">
						</div>
						<h2><?php echo $product_obj->get_name() ?></h2>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<script>
jQuery(document).ready(function($) {
});
</script>
<?php
get_footer();
