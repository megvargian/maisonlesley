<?php
/**
 * MystiqueRose First Block Template
 */
$Mystique_rose_first_block_fields = get_fields();
?>
<section class="py-5" style="background-color: #f5f5f5;">
    <div class="container">
        <div class="row text-center">
            <h5>TODAY ONLY</h5>
            <h3>Additional 10% off your Purchase</h3>
            <p>Online only. Exclusion apply. <a href="#">Details</a></p>
            <a href="#">Shop Now</a>
            <?php echo $Mystique_rose_first_block_fields['main_text']; ?>
        </div>
    </div>
</section>