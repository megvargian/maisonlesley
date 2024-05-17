<?php
/**
 * Block3 Block Template
 */
$block3_fields = get_fields();
?>

<section class="third_section">
    <div class="container">
        <div class="row">
            <h2 class="h2_style">
                <?php echo $block3_fields['title'] ?>
            </h2>
        </div>
        <div class="row">
            <p class="sub_p_style p_style">
                <?php echo $block3_fields['sub_title'] ?>
            </p>
        </div>
        <div class="row">
            <?php 
                $services = $block3_fields['services'];
                foreach($services as $service){
            ?>    
                <div class="col-xl-4 col-lg-4 col-md-12 col-12" style="padding-bottom: 2rem;">
                    <a href="<?php echo $service['link'] ?>">
                       <div class="on_hover_animation">
                            <div class="background_img" style="background-image: url(<?php echo $service['image']; ?>)">
                                <h2><?php echo $service['title'] ?></h2>
                            </div>
                       </div>
                    </a>
                </div>
            <?php 
                }
            ?>
        </div>
        <div class="row justify-content-end">
            <div class="view_all_section">
                <?php if($block3_fields['button_text']){ ?>
                    <a href="<?php echo $block3_fields['button_link'] ?>" class="buttonstyle_underline_yellow">
                        <?php echo $block3_fields['button_text'] ?>
                        <!-- <img class="arrow_right" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/right-arrow.svg" alt=""> -->
                        <svg class="arrow_right"  version="1.1" id="Layer_1" fill="#FFDD00" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 476.213 476.213" style="enable-background:new 0 0 476.213 476.213;" xml:space="preserve">
                        <polygon points="345.606,107.5 324.394,128.713 418.787,223.107 0,223.107 0,253.107 418.787,253.107 324.394,347.5 
                            345.606,368.713 476.213,238.106 "/>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        </svg>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>