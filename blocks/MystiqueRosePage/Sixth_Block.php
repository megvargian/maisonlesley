<?php
/**
 * MystiqueRose Sixth Block Template
 */
$Mystique_rose_sixth_block_fields = get_fields();
?>

<section class="background-img-section-second d-none d-md-flex" style="background-image: url('<?php echo $Mystique_rose_sixth_block_fields['main_image']; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-6 justify-content-center py-5 text-center">
                <?php echo $Mystique_rose_sixth_block_fields['main_text']; ?>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
</section>
<section class="d-md-none d-block">
    <div class="container-fluid px-sm-0 position-relative">
        <div class="row text-center position-absolute top-0 absolute-container-mobile pt-4 w-100">
            <?php echo $Mystique_rose_sixth_block_fields['main_text']; ?>
        </div>
        <div class="row">
            <img class="w-100 px-0" src="<?php echo $Mystique_rose_sixth_block_fields['main_image_mobile']; ?>">
        </div>
    </div>
</section>