<?php
/**
 * Block5 Block Template
 */
$block5_fields = get_fields();
?>

<section class="team_structire_fifth_section background-img" style="background-image: url(<?php echo $block5_fields['image']; ?>);">
    <div class="container">
        <div class="row">
            <h2 class="h2_style"><?php echo $block5_fields['title']; ?></h2>
        </div>
        <div class="row">
            <p class="p_style"><?php echo $block5_fields['sub_title'] ?></p>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="inner_section">
                    <?php echo $block5_fields['first_paragraph_list'] ?>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="inner_section">
                    <?php echo $block5_fields['second_paragraph_list'] ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="padding_for_button">
                <?php if($block5_fields['button_text']){ ?>
                    <a href="<?php echo $block5_fields['button_link'] ?>">
                        <button type="button" class="buttonstyle_white">
                            <?php echo $block5_fields['button_text'] ?>
                        </button>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>