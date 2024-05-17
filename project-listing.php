<?php
/**
 * Template Name: Project Listing 
 */

get_header(); 
if(have_posts()){
    while(have_posts()){
        the_post();
$project_listing_fields = get_fields();
$all_categories = get_categories();
$all_tags = get_tags();
if(isset($_GET['result'])){
    $result = $_GET['result'];
}
if(isset($_GET['project_type'])){
    $project_type = $_GET['project_type'];
}
if(isset($_GET['category'])){
    $category_slug = $_GET['category'];
}
// making a list of project type if its building or industrial
$building_tag = array();
$infrastructure_tag = array();
foreach($all_tags as $tag){
    if($tag -> slug == 'industrial' || $tag -> slug == 'public' || $tag -> slug == 'residential' ){
        array_push($building_tag, $tag);
    }
    else{
        array_push($infrastructure_tag, $tag);
    }
}
//if the user select the project type before the category 
// if($project_type == 'Industrial' || $project_type == 'Public' || $project_type == 'Residential'){
//     $category_slug = 'Building';
// }elseif($project_type == ''){
//     $category_slug = '';
// }else{
//     $category_slug ='Infrastructure';
// }
// echo $category_slug; echo $project_type;
// if($project_type !=''){
//     if($project_type == 'Industrial' || $project_type == 'Public' || $project_type == 'Residential'){
//         $category_slug = 'Building';
//     }
//     if($project_type == 'Electrical power network' || $project_type == 'Road Project' || $project_type == 'Telecom' || $project_type == 'Water Supply Network'){
//         $category_slug = 'Infrastructure';
//     }
// }
?>
<!-- <pre><?php //print_r($all_tags); ?></pre> -->
<section class="main_project_listing background_img" style="background-image: url(<?php echo $project_listing_fields['image']['sizes']['main_img_company_services'] ?>);">
		<div class="main_project_listing_inner">		
			<div class="container">
				<div class="row">
					<h1 class="h1_style"><?php echo $project_listing_fields['title'] ?></h1>
				</div>
			</div>
		</div>
</section>

<section class="project_listing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="row pt-3">
                    <?php if(count($all_categories) > 0){ ?>
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="category_dropdown">
                                <div class="main_dropdown_button">
                                    <?php if($category_slug){
                                        echo $category_slug;
                                    }else{
                                        echo 'Category';
                                    } ?>
                                </div>
                                <img class="arrow_down" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/down-arrow-black.svg" alt="">
                                <div class="inner_dropdown">
                                    <?php 
                                    foreach($all_categories as $category){
                                        if($category -> term_id != 1){
                                    ?>
                                        <div class="dropdown-item" value="<?php echo $category -> slug ?>" ><?php echo $category -> name; ?></div>
                                    <?php }} ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if(count($all_tags)){ ?>
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="project_type_dropdown">
                                <div class="main_dropdown_button">
                                    <?php if($project_type){
                                        echo $project_type;
                                    }else{
                                        echo 'Project Type';
                                    } ?>
                                </div>
                                <img class="arrow_down" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/down-arrow-black.svg" alt="">
                                <div class="inner_dropdown">
                                    <?php if($category_slug =='Infrastructure'){ 
                                            foreach($infrastructure_tag as $tag){    
                                    ?>
                                        <div class="dropdown-item" value="<?php echo $tag -> slug; ?>"><?php echo $tag -> name ?></div>
                                    <?php }}
                                        elseif($category_slug == 'Building'){
                                            foreach($building_tag as $tag){
                                    ?>
                                        <div class="dropdown-item" value="<?php echo $tag -> slug; ?>"><?php echo $tag -> name ?></div>
                                    <?php }}else{ ?>
                                    <?php foreach($all_tags as $tag){ ?>
                                        <div class="dropdown-item" value="<?php echo $tag -> slug; ?>"><?php echo $tag -> name ?></div>
                                    <?php }} ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <form action="<?php echo get_page_link(13) ?>" class="form_category_project_type">
                        <input type="text" 
                            hidden class="input_category" 
                            name="category" 
                            value="<?php if($category_slug){
                                        echo $category_slug;
                                    }else{ 
                                        echo '';
                                    } 
                            ?>"
                        >
                        <input type="text" 
                        hidden class="input_project_type"  
                        name="project_type"
                        value="<?php if($project_type){
                                        echo $project_type;
                                    }else{ 
                                        echo '';
                                    } 
                                ?>"
                        >
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="search_form">
                    <form action="<?php echo get_page_link(13) ?>" class="form_submit" >
                        <div class="inner_search_form">
                            <input 
                            class="search_input" 
                            type="text" 
                            name="result" 
                            placeholder="<?php if(isset($_GET['result'])){
                                echo $result;
                            }else{
                                echo 'Search...';
                            } ?>">
                            <img class="search_icon" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/loupe.svg" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php 
        $current_page = get_query_var('paged');
        $query_default_args = array(
            'paged'             =>         $current_page,
            'posts_per_page'    =>         9,
            'post_type'         =>         'all_projects',
            's'                 =>         $result,
            'category_name'     =>         $category_slug,
            'tag'               =>         str_replace(' ', '-', $project_type),
            // 'meta_key'          =>        'featured',
            // 'meta_value'        =>         1,
            // 'meta_compare'      =>        '=',
         ); 
         $query_default_projects = new WP_Query($query_default_args);

        // search for categories in search input if the result is zero  
        if($query_default_projects -> post_count == 0 && $result){
            $query_default_args = array(
                'paged'             =>         $current_page,
                'posts_per_page'    =>         9,
                'post_type'         =>         'all_projects',
                'category_name'     =>         $result,
             ); 
            $query_default_projects = new WP_Query($query_default_args);
        }
        // search for tags in search input if the result is zero  
        if($query_default_projects -> post_count == 0 && $result){
            $query_default_args = array(
                'paged'             =>         $current_page,
                'posts_per_page'    =>         9,
                'post_type'         =>         'all_projects',
                'tag'               =>         $result,
             ); 
             $query_default_projects = new WP_Query($query_default_args);
        }
        
        ?>
        <!-- <pre><?php // print_r($query_default_projects -> post_count) ?></pre> -->


        <div class="row">
            <?php
            if ($query_default_projects -> have_posts()) {
                while ($query_default_projects -> have_posts()) {
                    $query_default_projects -> the_post();
                    $all_fields = get_fields();
                    $category_result = get_the_category(get_the_ID());
                    $project_type_result= get_the_tags(get_the_ID());
            ?>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12 py-5">
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
                                            <?php echo $category_result[0] -> name; ?>
                                        </button>
                                        <div class="button_border"></div>
                                        <button type="button" class="button_style" style="border-left: none;">
                                            <?php echo $project_type_result[0] -> name ?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>             
            <?php }} ?>
        </div>
        <?php
            $big = 999999999; // need an unlikely integer
            $links = paginate_links( array(
                'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                'format'    => '?paged=%#%',
                'current'   => max( 1, get_query_var('paged') ),
                'total'     => $query_default_projects->max_num_pages,
                'prev_text' => __('<div class="arrow-left"><img src="'.get_template_directory_uri().'/inc/assets/images/arrow-left-black.svg"/></div>'),
                'next_text' => __('<div class="arrow-right"><img src="'.get_template_directory_uri().'/inc/assets/images/arrow-right-black.svg"/></div>'),
                'show_all'  => true,
                'type'      => 'array',
            ));
        ?>
        <?php if(!empty($links)){ ?>
        <div class="row justify-content-end">
            <div class="col">
                <div class="list">
                    <?php if (count($links) > 0)  :?>                          
                        <?php $counter = 0?>
                        <?php foreach ($links as $link) : ?>
                            <div class="page-number-<?php echo $counter ?> page">
                                <?php echo $link; ?>
                            </div>
                            <?php $counter=$counter +1; ?>
                        <?php endforeach; ?>                                                                         
                    <?php endif ?>
                </div>
            </div>
        
            <?php
            // Reset postdata
            wp_reset_postdata();
            ?>     
        </div>
        <?php } ?>
    </div>
</section>
<script>
    jQuery(document).ready(function($){
        $('.category_dropdown').click(function(event){
            $('.category_dropdown .inner_dropdown').toggleClass('active');
        });
        // $('.category_dropdown .dropdown-item').attr('value', '1').css('display', 'none');
        // $('.category_dropdown').hover(function(event){
        //     if(!$('.category_dropdown .inner_dropdown').hasClass('active')){
        //         $('.category_dropdown .inner_dropdown').toggleClass('active');
        //     }
        // });
        $('.project_type_dropdown').click(function(event){
            $('.project_type_dropdown .inner_dropdown').toggleClass('active');
        });
        // $('.project_type_dropdown').hover(function(event){
        //     if(!$('.project_type_dropdown .inner_dropdown').hasClass('active')){
        //         $('.project_type_dropdown .inner_dropdown').toggleClass('active');
        //     }
        // });
        $('.search_icon').click(function(event){
            $('.form_submit').submit();
        });
        $('.category_dropdown .inner_dropdown .dropdown-item').click(function(event){
            var category = $(this).text();
            $('.form_category_project_type').find('.input_category').val(category);
            $('.category_dropdown .main_dropdown_button').text(category);
            $('.form_category_project_type').submit();
        });
        $('.project_type_dropdown .inner_dropdown .dropdown-item').click(function(event){
            var project_type = $(this).text();
            $('.form_category_project_type').find('.input_project_type').val(project_type);
            $('.project_type_dropdown .main_dropdown_button').text(project_type);
            $('.form_category_project_type').submit();
        });
    });
</script>


<?php
    }
}
get_footer();