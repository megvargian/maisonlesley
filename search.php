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
	'meta_query'     => array(
                'relation' => 'OR',
		array(
			'key'     => '_sku',
			'value'   => $search_term,
			'compare' => 'LIKE'
		),
		array(
			'key'     => '_price',
			'value'   => $search_term,
			'compare' => 'LIKE'
		)
	),
	'tax_query' => array(
		array(
			'taxonomy' => 'product_cat',
			'field'    => 'name',
			'terms'    => $search_term,
			'operator' => 'IN',
		)
	),
);
// Create a new query
$query = new WC_Product_Query( $args );

// Get the products
$products = $query->get_products();
?>
<pre><?php print_r($query); ?></pre>
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
			?>
				<div class="col-md-4 col-12">
					<a href="<?php echo get_permalink($product_obj->get_id()); ?>">
						<img class="w-100" src="<?php echo get_the_post_thumbnail_url( $product_obj->get_id()); ?>" alt="<?php echo $product_obj->get_name() ?>">
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
