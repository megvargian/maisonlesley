<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WP_Bootstrap_Starter
 */

get_header();
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
