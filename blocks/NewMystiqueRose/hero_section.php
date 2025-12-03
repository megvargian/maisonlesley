<?php
/**
 * MystiqueRose Hero Section Block Template
 */
$Mystique_rose_hero_section_fields = get_fields();
?>
<!-- Hero Section -->
<section class="mystique-hero">
    <a href="<?php echo $Mystique_rose_hero_section_fields['url']?>">
        <img src="<?php echo $Mystique_rose_hero_section_fields['main_img']; ?>"
            alt="Mystique Rose Collection">
    </a>
</section>