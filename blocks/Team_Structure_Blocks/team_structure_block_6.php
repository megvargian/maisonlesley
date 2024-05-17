<?php
/**
 * Block6 Block Template
 */
$block6_fields = get_fields();
?>

<section class="team_structure_sixth_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="inner_section">
                    <h2 class="h2_style"><?php echo $block6_fields['title'] ?></h2>
                    <?php echo $block6_fields['paragraph'] ?>
                    <div class="padding_custom">
                        <?php if($block6_fields['button_text']){ ?>
                            <a href="<?php echo $block6_fields['button_link'] ?>">
                                <button type="button" class="buttonstyle_white">
                                    <?php echo $block6_fields['button_text'] ?>
                                </button>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div style="position: relative;">
                    <div class="on_hover_animation">
                        <div class="background_img" style="background-image: url(<?php echo $block6_fields['image'] ?>);"></div>
                        <div class="yellow_block_image"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>