<?php 
get_header();

$all_fields_single_project =  get_fields();
$cat = get_the_category();
$tag = get_the_tags();
?>
<!-- <pre><?php //print_r($cat) ?></pre> -->

<section class="single_project">
    <div class="container">
        <div class="row justify-content-start">
            <a class="back_project_list" href="<?php echo get_the_permalink(13) ?>">
                <img src="<?php echo get_template_directory_uri() ?>/inc/assets/images/back-arrow-black.svg" alt="">
                <div class="inner_text">
                    Back to projects
                </div>
            </a>
        </div>
        <div class="row">
            <h1 class="h1_style"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php foreach($all_fields_single_project['album'] as $photo){ ?>
                            <div class="swiper-slide" >
                                <div class="background_img" style="background-image: url(<?php echo $photo ?>);"></div>
                            </div>
                    <?php } ?>
                </div>
                <div class="swiper-button-next" style="color: #fff"></div>
                <div class="swiper-button-prev" style="color: #fff;"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-4">
            <div class="col-lg-6 col-md-12 col-12">
                <p class="p_style"> 
                    <strong>Client:</strong>
                     <?php echo $all_fields_single_project['client']  ?>
                </p>
                <p class="p_style"> 
                    <strong>Main contactor:</strong>
                     <?php echo $all_fields_single_project['main_contractor']  ?>
                </p>
                <p class="p_style"> 
                    <strong>Project value:</strong>
                     <?php echo $all_fields_single_project['project_value']  ?>
                </p>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="description">
                   <?php the_content(); ?>
                </div>   
        </div>
    </div>
</section>

<section class="related_projects">
    <div class="container">
        <div class="row">
            <h2 class="h2_style">View Similar Projects</h2>
        </div>
        <?php 
        $query_default_args = array(
            'posts_per_page'    =>         2,
            'post_type'         =>         'all_projects',
            'cat'               =>         $cat[0] -> term_id,
            'tag_id'            =>         $tag[0] -> term_id,
            'post__not_in'      =>        array( get_the_ID())
            // 'meta_key'          =>        'featured',
            // 'meta_value'        =>         1,
            // 'meta_compare'      =>        '=',
         );
        
         $query_related_projects = new WP_Query($query_default_args); 
        ?>
        <div class="row">
            <?php
            if ($query_related_projects -> have_posts()) {
                while ($query_related_projects -> have_posts()) {
                    $query_related_projects -> the_post();
                    $all_fields = get_fields();
                    $category = get_the_category(get_the_ID());
                    $project_type = get_the_tags(get_the_ID());
            ?>
                <div class="col-xl-6 col-lg-6 col-md-12 col-12 pb-md-4">
                    <a href="<?php echo get_permalink() ?>">
                        <div class="inner_section_project">
                            <div class="on_hover_animation">
                                <div class="background_img" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>"></div>
                            </div>
                            <div class="title_section">
                                <p><?php echo $all_fields['status'] ?></p>
                                <h2 class="h2_style">
                                    <?php echo the_title() ?>
                                </h2>
                                <div class="button_section">
                                    <div class="inner_button_section">
                                        <button type="button" class="button_style" style="border-right: none;">
                                            <?php echo $category[0] -> name; ?>
                                        </button>
                                        <div class="button_border"></div>
                                        <button type="button" class="button_style" style="border-left: none;">
                                            <?php echo $project_type[0] -> name ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>             
            <?php }} ?>
        </div>
    </div>
</section>


<script>
(function($) {
	jQuery(document).ready(function() {
        var mySwiper1 = new Swiper( '.mySwiper', {
            slidesPerView: 'auto',
            loop: true,
            // slideToClickedSlide: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay:{
                delay: 7000,
            },
            pagination: {
                el: ".swiper-pagination",
                type: 'bullets'
            },
        })
	});		
})(jQuery);

</script>

<?php 
get_footer();