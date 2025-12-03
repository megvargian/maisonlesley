
<?php
/**
 * MystiqueRose Full Width Grid Section Block Template
 */
$Mystique_rose_full_width_grid_section_fields = get_fields();
?>
<!-- Full Width Grid Section -->
<section class="full-width-grid-section">
    <div class="full-width-grid">
        <?php
        foreach ($Mystique_rose_full_width_grid_section_fields['categories'] as $category) :
        ?>
        <a href="<?php echo esc_url($category['url']); ?>" class="grid-item">
            <img src="<?php echo esc_url($category['main_image']); ?>" alt="<?php echo esc_attr($category['title']); ?>">
            <div class="grid-item-overlay">
                <h3 class="grid-item-title"><?php echo esc_html($category['title']); ?></h3>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</section>