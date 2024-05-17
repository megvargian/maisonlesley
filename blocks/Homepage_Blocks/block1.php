<?php
/**
 * Block1 Block Template
 */
$block1_fields = get_fields();
?>

<section class="first_section background_img" style="background-image: url(<?php echo $block1_fields['image']['sizes']['main_homepage_img']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                <div class="inner_section">
                    <h1 class="h1_style animate_part_0 animate_part_0_active"><?php echo $block1_fields['title']; ?></h1>
                    <h6 class="p_style animate_part_0 animate_part_0_active" style="--homepage-delay-v: 0.3s"><?php echo $block1_fields['sub_title'] ?></h6>
                    <?php if($block1_fields['button_text']){ ?>
                        <a href="<?php echo $block1_fields['button_link'] ?>">
                            <button type="button" class="buttonstyle animate_part_0 animate_part_0_active" style="--homepage-delay-v: 0.6s">
                                <?php echo $block1_fields['button_text'] ?>
                            </button>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="mouse_icon" style="background-image: url(<?php //echo get_template_directory_uri() ?>/inc/assets/images/mouse-icon-without-scroll.svg);" ></div> -->
    <div class="mouse_icon"></div>
</section>