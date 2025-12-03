<?php
/**
 * MystiqueRose Signle Width Image Section Block Template
 */
$Mystique_rose_single_width_image_section_fields = get_fields();
?>

<!-- Single Full Width Image Section -->
<section class="single-image-section p-1">
    <a href="<?php echo esc_url($Mystique_rose_single_width_image_section_fields['url']); ?>" class="single-image-item">
        <img src="<?php echo esc_url($Mystique_rose_single_width_image_section_fields['main_image']); ?>" alt="<?php echo esc_attr($Mystique_rose_single_width_image_section_fields['title']); ?>">
        <div class="single-image-overlay">
            <h3 class="single-image-title"><?php echo esc_html($Mystique_rose_single_width_image_section_fields['title']); ?></h3>
        </div>
    </a>
</section>