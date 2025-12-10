<?php
/**
 * MystiqueRose Products Section Block Template
 */
$Mystique_rose_products_section_fields = get_fields();
?>

<!-- Products Section -->
<section class="products-section">
    <div class="container-fluid px-1">
        <div class="products-grid">
            <?php
            // Prefer ACF repeater 'products' (each row contains a sub-field 'product' with the product ID)
            $acf_products = $Mystique_rose_products_section_fields['products'];
            $rendered = 0;

            if ( is_array( $acf_products ) && ! empty( $acf_products ) ) :
                foreach ( $acf_products as $row ) :
                    if ( $rendered >= 4 ) break; // limit to 4 items

                    // Support storing either the ID or a post object
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

                    $wc_product = wc_get_product( $product_id );
                    if ( ! $wc_product ) continue;

                    $permalink = get_permalink( $product_id );
                    $title = get_the_title( $product_id );
                    $price_html = $wc_product->get_price_html();
                    $thumbnail = get_the_post_thumbnail( $product_id, 'mystique_rose_product', array('style' => 'width: 100%; height: auto; aspect-ratio: 2/3; object-fit: cover;') );
                    ?>
                    <a href="<?php echo esc_url( $permalink ); ?>" class="product-card">
                        <div class="product-image-wrapper">
                            <?php echo $thumbnail; ?>
                            <div class="product-info">
                                <h3 class="product-title"><?php echo esc_html( $title ); ?></h3>
                                <div class="product-price"><?php echo $price_html; ?></div>
                            </div>
                        </div>
                    </a>
                    <?php
                    $rendered++;
                endforeach;

                // If repeater had fewer than 4 items, fill remaining slots with placeholders
                if ( $rendered < 4 ) :
                    for ( $i = $rendered + 1; $i <= 4; $i++ ) :
                        ?>
                        <a href="#" class="product-card">
                            <div class="product-image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main-img-mystique-rose.avif" alt="Product <?php echo $i; ?>" style="width: 100%; height: auto; aspect-ratio: 2/3; object-fit: cover;">
                                <div class="product-info">
                                    <h3 class="product-title">Product Title <?php echo $i; ?></h3>
                                    <div class="product-price">$0.00</div>
                                </div>
                            </div>
                        </a>
                        <?php
                    endfor;
                endif;

            else :
                // Fallback: Get WooCommerce products from Mystique Rose category
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'term_id',
                            'terms' => array(17, 23, 18, 25, 20), // Mystique Rose categories
                            'operator' => 'IN'
                        )
                    )
                );
                $products = new WP_Query($args);
                if ($products->have_posts()) :
                    while ($products->have_posts()) : $products->the_post();
                        global $product;
                        ?>
                        <a href="<?php echo get_permalink(); ?>" class="product-card">
                            <div class="product-image-wrapper">
                                <?php echo get_the_post_thumbnail( get_the_ID(), 'mystique_rose_product', array('style' => 'width: 100%; height: auto; aspect-ratio: 2/3; object-fit: cover;') ); ?>
                                <div class="product-info">
                                    <h3 class="product-title"><?php the_title(); ?></h3>
                                    <div class="product-price"><?php echo $product->get_price_html(); ?></div>
                                </div>
                            </div>
                        </a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Placeholder products if no products exist
                    for ($i = 1; $i <= 4; $i++) :
                        ?>
                        <a href="#" class="product-card">
                            <div class="product-image-wrapper">
                                <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main-img-mystique-rose.avif" alt="Product <?php echo $i; ?>" style="width: 100%; height: auto; aspect-ratio: 2/3; object-fit: cover;">
                                <div class="product-info">
                                    <h3 class="product-title">Product Title <?php echo $i; ?></h3>
                                    <div class="product-price">$0.00</div>
                                </div>
                            </div>
                        </a>
                        <?php
                    endfor;
                endif;
            endif;
            ?>
        </div>
    </div>
</section>