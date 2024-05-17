<?php
/**
 * Block3 about us Block Template
 */
$block4_fields = get_fields();
?>

<section class="fourth_section_about_us">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                
                <div class="inner_section">
                    <h2 class="h2_style"><?php echo $block4_fields['title'] ?></h2>
                    <?php echo $block4_fields['paragraph'] ?>
                    <div class="pt-5">
                        <?php if($block4_fields['button_text']){ ?>
                            <a href="<?php echo $block4_fields['button_link'] ?>">
                                <button type="button" class="buttonstyle_white">
                                    <?php echo $block4_fields['button_text'] ?>
                                </button>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div style="position: relative;">
                    <div class="on_hover_animation">
                        <div class="background_img" style="background-image: url(<?php echo $block4_fields['image'] ?>);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>