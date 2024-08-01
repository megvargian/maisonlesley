<?php
/**
 * MystiqueRose Fourth Block Template
 */
$Mystique_rose_fourth_block_fields = get_fields();
?>
<section class="background-img-section d-none d-md-flex" style="background-image: url('<?php echo $Mystique_rose_fourth_block_fields['main_image']; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-6"></div>
            <div class="col-6 justify-content-center py-5 text-center">
                <?php echo $Mystique_rose_fourth_block_fields['main_text']; ?>
            </div>
        </div>
    </div>
</section>
<section class="d-md-none d-block">
    <div class="container-fluid px-sm-0">
        <div class="row">
            <img class="w-100 px-0" src="<?php echo $Mystique_rose_fourth_block_fields['main_image']; ?>">
        </div>
    </div>
</section>
<section class="py-4 d-md-none d-block" style="background-color: <?php echo $Mystique_rose_fourth_block_fields['background_color_on_mobile']; ?>;">
    <div class="container">
        <div class="row text-center">
            <?php echo $Mystique_rose_fourth_block_fields['main_text']; ?>
        </div>
    </div>
</section>