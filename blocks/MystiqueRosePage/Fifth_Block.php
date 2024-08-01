<?php
/**
 * MystiqueRose Fifth Block Template
 */
$Mystique_rose_fifth_block_fields = get_fields();
// /inc/assets/images/sexy-tee.jpg
// /inc/assets/images/home-mobile-sexy-tee.avif
?>
<section class="background-img-section-second d-none d-md-flex" style="background-image: url('<?php echo $Mystique_rose_fifth_block_fields['main_image']; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-6 justify-content-center py-5 text-center">
                <!-- <h5>TODAY ONLY</h5>
                <h3>Additional 10% off your Purchase</h3>
                <p>Online only. Exclusion apply. <a href="#">Details</a></p>
                <a href="#">Shop Now</a> -->
                <?php echo $Mystique_rose_fifth_block_fields['main_text']; ?>
            </div>
            <div class="col-6"></div>
        </div>
    </div>
</section>
<section class="d-md-none d-block">
    <div class="container-fluid px-sm-0">
        <div class="row">
            <img class="w-100 px-0" src="<?php echo $Mystique_rose_fifth_block_fields['main_image_mobile']; ?>">
        </div>
    </div>
</section>
<section class="py-4 d-md-none d-block">
    <div class="container">
        <div class="row text-center">
            <!-- <h5>TODAY ONLY</h5>
            <h3>Additional 10% off your Purchase</h3>
            <p>Online only. Exclusion apply. <a href="#">Details</a></p>
            <a href="#">Shop Now</a> -->
            <?php echo $Mystique_rose_fifth_block_fields['main_text']; ?>
        </div>
    </div>
</section>