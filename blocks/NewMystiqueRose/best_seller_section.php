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

                        // Get product sizes from attributes
                        $available_sizes = array();
                        if ( $product->has_attributes() ) {
                            foreach ( $product->get_attributes() as $attribute ) {
                                $attribute_label = wc_attribute_label( $attribute->get_name(), $product );

                                if ( $attribute_label == 'Size' || $attribute->get_name() == 'pa_size' || $attribute->get_name() == 'size' ) {
                                    $attribute_values = $attribute->get_options();
                                    if ( $attribute->is_taxonomy() ) {
                                        foreach ( $attribute_values as $term_id ) {
                                            $term = get_term( $term_id );
                                            if ( $term && ! is_wp_error( $term ) ) {
                                                $available_sizes[] = $term->name;
                                            }
                                        }
                                    } else {
                                        $available_sizes = $attribute_values;
                                    }
                                    break;
                                }
                            }
                        }

                        ?>
                        <div class="swiper-slide">
                            <a href="<?php echo esc_url( get_permalink( $product_id ) ); ?>" class="best-seller-card">
                                <span class="best-seller-badge"><?php echo esc_html( $Mystique_rose_best_seller_section_fields['badge_text'] ?? 'Collab Alert!' ); ?></span>
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
                                            foreach ( $available_sizes as $size ) :
                                                if ( $size_count >= 8 ) break;
                                                ?>
                                                <span class="size-option"><?php echo esc_html( $size ); ?></span>
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
                                        <span class="best-seller-color"></span>
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
                                    <span class="best-seller-badge"><?php echo esc_html( $Mystique_rose_best_seller_section_fields['badge_text'] ?? 'Collab Alert!' ); ?></span>
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