<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="container">
	<?php
	while ( have_posts() ) : the_post();?>
		<img class="w-100" src="<?php echo get_the_post_thumbnail(get_the_ID()); ?>" alt="test-1">
	<?php endwhile; // End of the loop.
	?>
</div>
<?php
get_footer();
