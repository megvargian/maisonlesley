<?php
/**
 * Block6 Block Template
 */
$block8_fields = get_fields();
?>

<section class="team_structure_heighth_section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="inner_section">
                    <h2 class="h2_style"><?php echo $block8_fields['title'] ?></h2>
                    <div class="padding_custom">
                        <?php echo $block8_fields['paragraph'] ?>
                    </div>                    
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div style="position: relative;">
                    <div class="on_hover_animation">
                        <div class="background_img" style="background-image: url(<?php echo $block8_fields['image'] ?>);"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>