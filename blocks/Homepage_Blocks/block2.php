<?php
/**
 * Block2 Block Template
 */
$block2_fields = get_fields();
?>

<section class="second_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="inner_section">
                    <h2 class="h2_style"><?php echo $block2_fields['title'] ?></h2>
                    <div class="on_hover_animation on_responsive_image">
                        <div class="background_img" style="background-image: url(<?php echo $block2_fields['image'] ?>);"></div>
                    </div>
                    <?php echo $block2_fields['paragraph'] ?>
                    <?php if($block2_fields['button_text']){ ?>
                        <a href="<?php echo $block2_fields['button_link'] ?>">
                            <button type="button" class="buttonstyle_white">
                                <?php echo $block2_fields['button_text'] ?>
                            </button>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div style="position: relative;">
                    <div class="on_hover_animation on_responsive_d_none">
                        <div class="background_img" style="background-image: url(<?php echo $block2_fields['image'] ?>);"></div>
                        <div class="yellow_block_image"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>