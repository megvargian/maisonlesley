<?php
/**
 * Block2 Block Template
 */
$block3_fields = get_fields();
?>

<section class="team_structure_third_section">
    <div class="container">
        <div class="row">
            <h2 class="h2_style">
                <?php echo $block3_fields['title']; ?>
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="on_hover_animation">
                    <div class="background_img" style="background-image: url(<?php echo $block3_fields['image'] ?>);"></div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="inner_section">
                    <h2 class="h2_style_yellow h2_style"><?php echo $block3_fields['sub_title'] ?></h2>
                    <?php echo $block3_fields['paragraph'] ?>
                    <div class="padding_custom">
                        <?php if($block3_fields['button_text']){ ?>
                            <a href="<?php echo $block3_fields['button_link'] ?>">
                                <button type="button" class="buttonstyle_white">
                                    <?php echo $block3_fields['button_text'] ?>
                                </button>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>