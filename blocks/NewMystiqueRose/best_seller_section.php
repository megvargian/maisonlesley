<?php
/**
 * MystiqueRose Best Seller Section Block Template
 */
$Mystique_rose_best_seller_section_fields = get_fields();
?>
<section class="best-sellers-section">
    <div class="container-fluid">
        <div class="best-sellers-header">
            <h2 class="best-sellers-title"><?php echo esc_html($Mystique_rose_best_seller_section_fields['title']); ?></h2>
        </div>

        <div class="swiper best-sellers-swiper">
            <div class="swiper-wrapper">
                <?php
                // Get best selling products
                $bestseller_args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 8,
                    'meta_key' => 'total_sales',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'term_id',
                            'terms' => array(17, 23, 18, 25, 20),
                            'operator' => 'IN'
                        )
                    )
                );

                $bestseller_products = new WP_Query($bestseller_args);

                if ($bestseller_products->have_posts()) :
                    while ($bestseller_products->have_posts()) : $bestseller_products->the_post();
                        global $product;

                        // Get product sizes from attributes
                        $available_sizes = array();

                        if ($product->has_attributes()) {
                            foreach ($product->get_attributes() as $attribute) {
                                $attribute_label = wc_attribute_label($attribute->get_name(), $product);

                                // Check if this is the Size attribute
                                if ($attribute_label == 'Size' || $attribute->get_name() == 'pa_size') {
                                    $attribute_values = $attribute->get_options();

                                    // For taxonomy attributes (pa_size), get term names
                                    if ($attribute->is_taxonomy()) {
                                        foreach ($attribute_values as $term_id) {
                                            $term = get_term($term_id);
                                            if ($term && !is_wp_error($term)) {
                                                $available_sizes[] = $term->name;
                                            }
                                        }
                                    } else {
                                        // For custom attributes, values are already strings
                                        $available_sizes = $attribute_values;
                                    }
                                    break; // Found size attribute, no need to continue
                                }
                            }
                        }
                        ?>
                        <div class="swiper-slide">
                            <a href="<?php echo get_permalink(); ?>" class="best-seller-card">
                                <span class="best-seller-badge">Collab Alert!</span>
                                <div class="best-seller-image-wrapper">
                                    <?php echo woocommerce_get_product_thumbnail('full'); ?>
                                    <div class="best-seller-wishlist">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                        </svg>
                                    </div>
                                    <div class="best-seller-sizes">
                                        <?php
                                        if (!empty($available_sizes)) :
                                            $size_count = 0;
                                            foreach ($available_sizes as $size) :
                                                if ($size_count >= 8) break;
                                                ?>
                                                <span class="size-option"><?php echo esc_html($size); ?></span>
                                                <?php
                                                $size_count++;
                                            endforeach;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="best-seller-info">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="best-seller-price">
                                        <?php echo $product->get_price_html(); ?>
                                        <span class="best-seller-color"></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Placeholder products
                    for ($i = 1; $i <= 6; $i++) :
                    ?>
                    <div class="swiper-slide">
                        <a href="#" class="best-seller-card">
                            <span class="best-seller-badge">Collab Alert!</span>
                            <div class="best-seller-image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main-img-mystique-rose.avif"
                                        alt="Best Seller <?php echo $i; ?>">
                                <div class="best-seller-wishlist">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                    </svg>
                                </div>
                                <div class="best-seller-sizes">
                                    <span class="size-option">24</span>
                                    <span class="size-option">25</span>
                                    <span class="size-option">26</span>
                                    <span class="size-option">27</span>
                                    <span class="size-option">28</span>
                                    <span class="size-option">29</span>
                                    <span class="size-option">30</span>
                                    <span class="size-option">31</span>
                                </div>
                            </div>
                            <div class="best-seller-info">
                                <h3>A+O x Grateful Dead Product <?php echo $i; ?></h3>
                                <div class="best-seller-price">
                                    LBP 0
                                    <span class="best-seller-color"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                    endfor;
                endif;
                ?>
            </div>

            <!-- Scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</section>