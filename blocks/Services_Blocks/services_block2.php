<?php
/**
 * Block2 about us Block Template
 */
$block2_fields = get_fields();
?>

<section class="second_section_services">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="inner_section">
                    <h2 class="h2_style"><?php echo $block2_fields['title'] ?></h2>
                    <div class="on_hover_animation d-block d-sm-none pb-5">
                        <div class="background_img" style="background-image: url(<?php echo $block2_fields['image']['sizes']['services_img'] ?>);"></div>
                    </div>
                    <div class="row">
                        <?php echo $block2_fields['paragraph']['first_list'] ?>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <?php echo $block2_fields['paragraph']['second_list'] ?>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <?php echo $block2_fields['paragraph']['third_list'] ?>
                        </div>
                    </div>
                    <div class="padding_for_button">
                        <?php if($block2_fields['button_text']) { ?>
                            <a href="<?php echo $block2_fields['button_link'] ?>">
                                <button type="button" class="buttonstyle_white">
                                    <?php echo $block2_fields['button_text'] ?>
                                </button>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 d-none d-sm-block">
                <div style="position: relative;">
                    <div class="on_hover_animation">
                        <div class="background_img" style="background-image: url(<?php echo $block2_fields['image']['sizes']['services_img'] ?>);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>