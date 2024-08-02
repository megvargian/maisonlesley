<?php
/**
 * Template Name: Mytique Rose page
 */
get_header();
?>
<section class="mystique-rose-page">
    <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    ?>
</section>
<?php
get_footer();