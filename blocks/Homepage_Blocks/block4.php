<?php
/**
 * Block4 Block Template
 */
$block4_fields = get_fields();
$projects = $block4_fields['projects'];
?>

<section class="fourth_section">
    <div class="container">
        <div class="row">
            <h2 class="h2_style"><?php echo $block4_fields['title']; ?></h2>
        </div>
        <div class="row">
            <p class="sub_title p_style"><?php echo $block4_fields['sub_title']; ?></p>
        </div>
        <div class="row">
            <?php foreach($projects as $project){ ?>
                <?php 
                    $category =get_the_category($project['project'] );
                    $tag = get_the_tags($project['project']); 
                ?>
                <!-- <pre><?php // print_r($project) ?></pre> -->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-12" style="padding-bottom: 3rem;">
                    <a href="<?php echo get_the_permalink($project['project']); ?>">
                        <div class="inner_section_project">
                            <div class="on_hover_animation">
                                <div class="background_img" style="background-image: url(<?php echo get_the_post_thumbnail_url($project['project']); ?>);"></div>
                            </div>
                            <div class="title_section">
                                <p><?php echo get_field('status', $project['project']); ?></p>
                                <h2 class="h2_style">
                                    <?php echo get_the_title($project['project']) ?>
                                </h2>
                                <div class="button_section">
                                    <div class="inner_button_section">     
                                        <button type="button" class="button_style" style="border-right: none;">
                                            <?php echo $category[0] -> name; ?>
                                        </button>                                         
                                        <div class="button_border"></div>                                   
                                        <button type="button" class="button_style" style="border-left: none;">
                                            <?php echo $tag[0] -> name; ?>
                                        </button>                                          
                                    </div>
                                </div>

                            </div>
                        </div>
                        </a>
                    </div>
            <?php }?>
        </div>
        <div class="row justify-content-center p-3">
                <?php if($block4_fields['button_text_view_all']) {?>
                    <a href="<?php echo $block4_fields['button_link_view_all'] ?>" class="buttonstyle_white">
                        <?php echo $block4_fields['button_text_view_all'] ?>
                    </a>
                <?php } ?>
        </div>
    </div>
</section>