<?php
/**
 * Block6 Block Template
 */
$block7_fields = get_fields();
?>

<section class="team_structure_seventh_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 px-lg-4">
                <div style="position: relative;">
                    <div class="on_hover_animation">
                        <div class="background_img" style="background-image: url(<?php echo $block7_fields['image'] ?>);"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 pxs-lg-4">
                <div class="inner_section">
                    <h2 class="h2_style"><?php echo $block7_fields['title'] ?></h2>
                    <?php echo $block7_fields['paragraph'] ?>
                    <div class="padding_custom">
                        <?php if($block7_fields['button_text']){ ?>
                            <a href="<?php echo $block7_fields['button_link'] ?>">
                                <button type="button" class="buttonstyle_white">
                                    <?php echo $block7_fields['button_text'] ?>
                                </button>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>