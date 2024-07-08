<?php
/**
* A Simple Category Template
*/

get_header();
$count = 0;
$args = array(
    'cat' => get_query_var('cat'),
    'post_type'         =>  'product',
    'posts_per_page'    =>    6,
    'order'             =>  'DSC',
    'orderby'           =>  'date',
);
$query = new WP_Query($args);
?>
<pre><?php print_r($query); ?></pre>
<section class="single_category">
    <div class="container">
        <div class="row text-center pb-5">
            <h1><?php echo single_cat_title(); ?></h1>
        </div>
        <div id="post-container" class="row gx-md-5">
            <?php
                if ( $query -> have_posts() ) :
                    while ( $query -> have_posts() ) :  $query -> the_post();
                        $count++;
            ?>

            <?php
                   endwhile;
                endif;
            ?>
        </div>
        <div class="row text-center justify-content-center d-flex pt-5">
            <button id="load-more-button">
                <?php echo 'Read More'; ?>
            </button>
        </div>
    </div>
</section>
<script>
jQuery(document).ready(function($) {
    var page = 2; // Set the initial page number
    var category_id = <?php echo get_query_var('cat'); ?>; // Get the current category ID

    <?php if($count < 6 ){ ?>
        $('#load-more-button').hide();
    <?php } ?>

    // Function to load more posts via AJAX
    function loadMorePosts() {
        $.ajax({
            type: 'POST',
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            data: {
                action: 'load_more_posts',
                page: page,
                category_id: category_id,
            },
            success: function(response) {
                if (response === ''){
                    $('#load-more-button').hide();
                }
                if (response) {
                    $('#post-container').append(response);
                    page++;
                } else {
                    // No more posts to load
                    $('#load-more-button').hide();
                }
            },
        });
    }
    // Trigger the AJAX call when the button is clicked
    $('#load-more-button').click(function() {
        loadMorePosts();
    });
});
</script>
<?php get_footer(); ?>