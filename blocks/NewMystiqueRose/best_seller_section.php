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
                    // Prefer ACF repeater 'best_sellers' with sub-field 'product' (ID or post object)
                    $acf_best = $Mystique_rose_best_seller_section_fields['products'];
                    $max = 8;
                    $rendered = 0;
                    foreach ( $acf_best as $row ) :
                        if ( $rendered >= $max ) break;

                        $prod = isset( $row['product'] ) ? $row['product'] : null;
                        $product_id = 0;

                        if ( is_array( $prod ) && isset( $prod['ID'] ) ) {
                            $product_id = intval( $prod['ID'] );
                        } elseif ( is_object( $prod ) && isset( $prod->ID ) ) {
                            $product_id = intval( $prod->ID );
                        } else {
                            $product_id = intval( $prod );
                        }

                        if ( $product_id <= 0 ) continue;

                        $product = wc_get_product( $product_id );
                        if ( ! $product ) continue;

                        // Get product sizes from attributes with stock status
                        $available_sizes = array();
                        $product_colors = array();

                        if ( $product->has_attributes() ) {
                            foreach ( $product->get_attributes() as $attribute ) {
                                $attribute_label = wc_attribute_label( $attribute->get_name(), $product );
                                $attribute_name = $attribute->get_name();

                                if ( $attribute_label == 'Size' || $attribute_name == 'pa_size' || $attribute_name == 'size' ) {
                                    if ( $attribute->is_taxonomy() ) {
                                        // Get size terms for global attribute
                                        $terms = wc_get_product_terms($product_id, $attribute_name, array('fields' => 'all'));

                                        foreach ( $terms as $term ) {
                                            // Check stock for this specific size variation
                                            $is_in_stock = true;

                                            if ( $product->is_type('variable') ) {
                                                // Get all available variations
                                                $available_variations = $product->get_available_variations();
                                                $variation_in_stock = false;

                                                foreach ( $available_variations as $variation ) {
                                                    // Check if this variation matches the size (or accepts 'any' size)
                                                    $var_size = isset($variation['attributes']['attribute_pa_size']) ? $variation['attributes']['attribute_pa_size'] : '';

                                                    if ( $var_size === $term->slug || $var_size === '' ) {
                                                        // Get the actual variation product to check stock properly
                                                        $variation_obj = wc_get_product( $variation['variation_id'] );

                                                        if ( $variation_obj ) {
                                                            // Check if stock is managed
                                                            if ( $variation_obj->managing_stock() ) {
                                                                // If managing stock, check quantity
                                                                if ( $variation_obj->get_stock_quantity() > 0 && $variation_obj->is_in_stock() ) {
                                                                    $variation_in_stock = true;
                                                                    break;
                                                                }
                                                            } else {
                                                                // If not managing stock, just check stock status
                                                                if ( $variation_obj->is_in_stock() ) {
                                                                    $variation_in_stock = true;
                                                                    break;
                                                                }
                                                            }
                                                        }
                                                    }
                                                }

                                                if ( !$variation_in_stock ) {
                                                    $is_in_stock = false;
                                                }
                                            }

                                            // Store size with its stock status
                                            $available_sizes[] = array(
                                                'name' => $term->name,
                                                'in_stock' => $is_in_stock
                                            );
                                        }
                                    } else {
                                        // For non-taxonomy attributes, assume all sizes are in stock
                                        $attribute_values = $attribute->get_options();
                                        foreach ( $attribute_values as $size_value ) {
                                            $available_sizes[] = array(
                                                'name' => $size_value,
                                                'in_stock' => true
                                            );
                                        }
                                    }
                                }

                                // Get color attribute
                                if ( $attribute_label == 'Color' || $attribute_name == 'pa_color' || $attribute_name == 'color' ) {
                                    if ( $attribute->is_taxonomy() ) {
                                        $color_terms = wc_get_product_terms($product_id, $attribute_name, array('fields' => 'all'));
                                        foreach ( $color_terms as $color_term ) {
                                            // Get the hex color from term meta
                                            $color_hex = get_term_meta($color_term->term_id, 'mystique_color_hex', true);
                                            // Fallback to ACF if available
                                            if (!$color_hex && function_exists('get_field')) {
                                                $color_hex = get_field('mystique_color_hex', 'term_' . $color_term->term_id);
                                            }
                                            // Default color if neither exists
                                            if (!$color_hex) {
                                                $color_hex = '#d3d3d3';
                                            }
                                            $product_colors[] = array(
                                                'name' => $color_term->name,
                                                'hex' => $color_hex
                                            );
                                        }
                                    }
                                }
                            }
                        }

                        ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url( get_permalink( $product_id ) ); ?>" class="best-seller-card">
                                <!-- <span class="best-seller-badge"><?php //echo esc_html( $Mystique_rose_best_seller_section_fields['badge_text'] ?? 'Collab Alert!' ); ?></span> -->
                                <div class="best-seller-image-wrapper">
                                    <?php echo get_the_post_thumbnail( $product_id, 'full' ); ?>
                                    <div class="best-seller-wishlist">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                        </svg>
                                    </div>
                                    <div class="best-seller-sizes">
                                        <?php
                                        if ( ! empty( $available_sizes ) ) :
                                            $size_count = 0;
                                            foreach ( $available_sizes as $size_data ) :
                                                if ( $size_count >= 8 ) break;
                                                $out_of_stock_class = !$size_data['in_stock'] ? ' out-of-stock' : '';
                                                ?>
                                                <span class="size-option<?php echo $out_of_stock_class; ?>"><?php echo esc_html( $size_data['name'] ); ?></span>
                                                <?php
                                                $size_count++;
                                            endforeach;
                                        endif;
                                        ?>
                                    </div>
                                </div>
                                <div class="best-seller-info">
                                    <h3><?php echo esc_html( get_the_title( $product_id ) ); ?></h3>
                                    <div class="best-seller-price">
                                        <?php echo wp_kses_post( $product->get_price_html() ); ?>
                                        <?php if ( ! empty( $product_colors ) ) : ?>
                                            <span class="best-seller-colors-wrapper">
                                                <?php foreach ( $product_colors as $color_data ) : ?>
                                                    <span class="best-seller-color-swatch" style="background-color: <?php echo esc_attr($color_data['hex']); ?>;" title="<?php echo esc_attr($color_data['name']); ?>"></span>
                                                <?php endforeach; ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php

                        $rendered++;
                    endforeach;

                    // If none rendered, show placeholders
                    if ( $rendered === 0 ) {
                        for ( $i = 1; $i <= min(6, $max); $i++ ) :
                            ?>
                            <div class="swiper-slide">
                                <a href="#" class="best-seller-card">
                                    <!-- <span class="best-seller-badge"><?php //echo esc_html( $Mystique_rose_best_seller_section_fields['badge_text'] ?? 'Collab Alert!' ); ?></span> -->
                                    <div class="best-seller-image-wrapper">
                                        <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main-img-mystique-rose.avif" alt="Best Seller <?php echo $i; ?>">
                                        <div class="best-seller-wishlist">
                                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                            </svg>
                                        </div>
                                        <div class="best-seller-sizes">
                                            <span class="size-option">24</span>
                                            <span class="size-option">25</span>
                                            <span class="size-option">26</span>
                                        </div>
                                    </div>
                                    <div class="best-seller-info">
                                        <h3>Product Title <?php echo $i; ?></h3>
                                        <div class="best-seller-price">LBP 0 <span class="best-seller-color"></span></div>
                                    </div>
                                </a>
                            </div>
                            <?php
                        endfor;
                    }
                ?>
            </div>

            <!-- Scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</section>