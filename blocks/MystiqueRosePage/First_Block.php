<?php
/**
 * MystiqueRose First Block Template
 */
$Mystique_rose_first_block_fields = get_fields();
?>
<section class="py-5" style="background-color: <?php echo $Mystique_rose_first_block_fields['background_color']; ?>;">
    <div class="container">
        <div class="row text-center">
            <?php echo $Mystique_rose_first_block_fields['main_text']; ?>
        </div>
    </div>
</section>