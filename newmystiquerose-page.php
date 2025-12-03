<?php
/**
 * Template Name: New Mystique Rose Page
 */
get_header();

// Get Mystique Rose logo from ACF options
$all_generalFields = get_fields('options');
$main_logo_mystiquerose = $all_generalFields['main_logo_mystiquerose'];
?>
<style>
    /* Reset and Base Styles */
    .mystique-new-page {
        font-family: "Rutan-Light", sans-serif;
        color: #000;
        background-color: #fff;
    }

    /* Hero Section */
    .mystique-hero {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .mystique-hero img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    /* Animated Logo Overlay */
    .mystique-logo-overlay {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        z-index: 1000;
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        pointer-events: none;
        will-change: transform, top;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .mystique-logo-overlay img {
        width: 500px;
        height: auto;
        display: block;
        transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    /* When scrolled - logo moves to header position */
    body.scrolled .mystique-logo-overlay {
        top: 100px;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
    }

    body.scrolled .mystique-logo-overlay img {
        width: 340px;
    }

    /* Hide original header logo initially on Mystique Rose page */
    body.new-mystiquerose-page .main-logo-section {
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    /* Collection Navigation */
    .collection-nav {
        background-color: #fff;
        border-top: 1px solid #e0e0e0;
        border-bottom: 1px solid #e0e0e0;
        padding: 20px 0;
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .collection-nav ul {
        display: flex;
        justify-content: center;
        gap: 40px;
        list-style: none;
        margin: 0;
        padding: 0;
        flex-wrap: wrap;
    }

    .collection-nav a {
        font-size: 0.9rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #000;
        text-decoration: none;
        padding: 10px 0;
        position: relative;
        transition: all 0.3s ease;
    }

    .collection-nav a:hover {
        color: #666;
    }

    .collection-nav a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 1px;
        background-color: #000;
        transition: width 0.3s ease;
    }

    .collection-nav a:hover::after {
        width: 100%;
    }

    /* Products Grid */
    .products-section {
        padding: .25rem 0;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        font-family: "Rutan-Light", sans-serif;
        font-weight: 300;
        letter-spacing: 4px;
        text-transform: uppercase;
        margin-bottom: 50px;
        color: #000;
    }

    .products-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0;
        padding: 0;
    }

    .products-grid-standard {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 40px;
        padding: 0 20px;
    }

    .product-card {
        text-align: center;
        text-decoration: none;
        color: #000;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        margin: .25rem;
    }

    .product-image-wrapper {
        position: relative;
        overflow: hidden;
        background-color: #f5f5f5;
        margin-bottom: 0;
        aspect-ratio: 3/4;
        width: 100%;
    }

    .product-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-card:hover .product-image-wrapper img {
        transform: scale(1.05);
    }

    .product-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .product-card:hover .product-info {
        opacity: 1;
    }

    .product-title {
        font-size: 0.9rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 5px;
        font-family: "Rutan-Regular", sans-serif;
        color: #fff;
    }

    .product-price {
        font-size: 0.85rem;
        color: #fff;
        font-family: "Rutan-Light", sans-serif;
    }

    /* Full Width Grid Section */
    .full-width-grid-section {
        padding: 0;
        margin: 0;
    }

    .full-width-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0;
    }

    .grid-item {
        position: relative;
        overflow: hidden;
        min-height: 700px;
        height: 80vh;
        display: block;
        text-decoration: none;
        margin: 0 0.25rem;
    }

    .grid-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
    }

    .grid-item:hover img {
        transform: scale(1.08);
    }

    .grid-item-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0);
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
        padding: 40px;
        transition: background 0.4s ease;
    }

    .grid-item:hover .grid-item-overlay {
        background: rgba(0, 0, 0, 0.3);
    }

    .grid-item-title {
        font-size: 2rem;
        font-family: "Rutan-Light", sans-serif;
        font-weight: 400;
        letter-spacing: 2px;
        color: #fff;
        text-transform: capitalize;
        margin: 0;
        opacity: 1;
        transform: translateY(0);
        transition: all 0.4s ease;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    }

    .grid-item:hover .grid-item-title {
        transform: translateY(-5px);
    }

    /* Single Full Width Image Section */
    .single-image-section {
        padding: 0;
        margin: 0;
    }

    .single-image-item {
        position: relative;
        overflow: hidden;
        min-height: 700px;
        height: 80vh;
        background-color: #000;
        display: block;
        text-decoration: none;
        width: 100%;
    }

    .single-image-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.6s ease;
    }

    .single-image-item:hover img {
        transform: scale(1.08);
    }

    .single-image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0);
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
        padding: 40px;
        transition: background 0.4s ease;
    }

    .single-image-item:hover .single-image-overlay {
        background: rgba(0, 0, 0, 0.3);
    }

    .single-image-title {
        font-size: 2rem;
        font-family: "Rutan-Light", sans-serif;
        font-weight: 400;
        letter-spacing: 2px;
        color: #fff;
        text-transform: capitalize;
        margin: 0;
        opacity: 1;
        transform: translateY(0);
        transition: all 0.4s ease;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    }

    .single-image-item:hover .single-image-title {
        transform: translateY(-5px);
    }

    /* CTA Section */
    .cta-section {
        background-color: #f8f8f8;
        padding: 100px 20px;
        text-align: center;
    }

    .cta-section h2 {
        font-size: 3rem;
        font-family: "Rutan-Light", sans-serif;
        font-weight: 300;
        letter-spacing: 6px;
        text-transform: uppercase;
        margin-bottom: 30px;
        color: #000;
    }

    .cta-section p {
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 40px;
        letter-spacing: 1px;
    }

    .cta-button {
        display: inline-block;
        padding: 15px 50px;
        background-color: #000;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        border: 2px solid #000;
    }

    .cta-button:hover {
        background-color: #fff;
        color: #000;
    }

    /* Newsletter Section */
    .newsletter-section {
        padding: 80px 20px;
        background-color: #fff;
        border-top: 1px solid #e0e0e0;
    }

    .newsletter-container {
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
    }

    .newsletter-section h3 {
        font-size: 1.5rem;
        font-family: "Rutan-Light", sans-serif;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin-bottom: 20px;
        color: #000;
    }

    .newsletter-section p {
        font-size: 0.9rem;
        color: #666;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .newsletter-form {
        display: flex;
        gap: 10px;
        max-width: 500px;
        margin: 0 auto;
    }

    .newsletter-input {
        flex: 1;
        padding: 15px 20px;
        border: 1px solid #e0e0e0;
        font-size: 0.9rem;
        font-family: "Rutan-Light", sans-serif;
        outline: none;
        transition: border-color 0.3s ease;
    }

    .newsletter-input:focus {
        border-color: #000;
    }

    .newsletter-button {
        padding: 15px 40px;
        background-color: #000;
        color: #fff;
        border: none;
        cursor: pointer;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 0.9rem;
        transition: background-color 0.3s ease;
        font-family: "Rutan-Regular", sans-serif;
    }

    .newsletter-button:hover {
        background-color: #333;
    }

    /* Best Sellers Section */
    .best-sellers-section {
        padding: 80px 0;
        background-color: #fff;
    }

    .best-sellers-header {
        padding: 0 40px 40px;
    }

    .best-sellers-title {
        font-size: 1.8rem;
        font-family: "Rutan-Light", sans-serif;
        font-weight: 300;
        letter-spacing: 2px;
        text-transform: capitalize;
        margin: 0;
        color: #000;
    }

    .best-sellers-swiper {
        padding: 0 40px;
    }

    .best-seller-card {
        display: block;
        text-decoration: none;
        color: #000;
        position: relative;
    }

    .best-seller-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #000;
        color: #fff;
        padding: 5px 15px;
        font-size: 0.65rem;
        font-family: "Rutan-Regular", sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        z-index: 10;
    }

    .best-seller-image-wrapper {
        position: relative;
        overflow: hidden;
        background-color: #f5f5f5;
        margin-bottom: 20px;
        aspect-ratio: 3/4;
    }

    .best-seller-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: none;
    }

    .best-seller-wishlist {
        position: absolute;
        top: 15px;
        right: 15px;
        width: 35px;
        height: 35px;
        background-color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 10;
        cursor: pointer;
    }

    .best-seller-wishlist svg {
        width: 18px;
        height: 18px;
        stroke: #000;
        fill: none;
        stroke-width: 2;
    }

    .best-seller-card:hover .best-seller-wishlist {
        opacity: 1;
    }

    .best-seller-sizes {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        display: flex;
        gap: 8px;
        padding: 25px 15px;
        justify-content: center;
        opacity: 0;
        transform: translateY(10px);
        transition: all 0.3s ease;
        background-color: rgba(241, 241, 241, 0.75);
    }

    .best-seller-card:hover .best-seller-sizes {
        opacity: 1;
        transform: translateY(0);
    }

    .size-option {
        min-width: 35px;
        height: 35px;
        padding: 0 8px;
        background-color: transparent;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
        font-family: "Rutan-Regular", sans-serif;
        color: #000;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .size-option:hover {
        background-color: rgba(200, 200, 200, 0.5);
        color: #000;
    }

    .best-seller-info h3 {
        font-size: 0.9rem;
        font-family: "Rutan-Regular", sans-serif;
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0 0 8px 0;
        line-height: 1.4;
    }

    .best-seller-price {
        font-size: 0.85rem;
        font-family: "Rutan-Light", sans-serif;
        color: #666;
    }

    .best-seller-color {
        display: inline-block;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #000;
        margin-left: 5px;
        vertical-align: middle;
    }

    /* Swiper Scrollbar */
    .best-sellers-section .swiper-scrollbar {
        position: relative;
        height: 2px;
        background: #e0e0e0;
        margin-top: 40px;
        margin-left: 40px;
        margin-right: 40px;
    }

    .best-sellers-section .swiper-scrollbar-drag {
        background: #000;
        cursor: grab;
    }

    .best-sellers-section .swiper-scrollbar-drag:active {
        cursor: grabbing;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .mystique-hero h1 {
            font-size: 2.5rem;
            letter-spacing: 4px;
        }

        .mystique-hero p {
            font-size: 1rem;
            letter-spacing: 1px;
        }

        .section-title {
            font-size: 1.8rem;
            letter-spacing: 2px;
        }

        .products-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .full-width-grid {
            grid-template-columns: 1fr;
        }

        .products-grid-standard {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .collection-nav ul {
            gap: 20px;
            padding: 0 20px;
        }        .collection-nav a {
            font-size: 0.75rem;
        }

        .cta-section h2 {
            font-size: 2rem;
            letter-spacing: 3px;
        }

        .newsletter-form {
            flex-direction: column;
        }

        .newsletter-button {
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .mystique-logo-overlay img {
            width: 300px;
        }

        body.scrolled .mystique-logo-overlay img {
            width: 220px;
        }

        body.scrolled .mystique-logo-overlay {
            top: 105px;
        }
    }
    @media (max-width: 576px) {
        body.scrolled .mystique-logo-overlay {
            top: 84px;
        }
    }

    @media (max-width: 480px) {
        .mystique-hero {
            height: 100vh;
        }

        .mystique-logo-overlay img {
            width: 240px;
        }

        body.scrolled .mystique-logo-overlay img {
            width: 170px;
        }

        body.scrolled .mystique-logo-overlay {
            top: 84px;
        }

        .products-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .full-width-grid {
            grid-template-columns: 1fr;
        }

        .products-grid-standard {
            grid-template-columns: 1fr;
            gap: 40px;
        }
    }
</style>
<script>
    jQuery(document).ready(function($) {
        // Add body class for Mystique Rose page
        $('body').addClass('new-mystiquerose-page');

        $(window).scroll(function() {
            var scrollPosition = $(window).scrollTop();

            // Add 'scrolled' class after 100px scroll
            if (scrollPosition > 100) {
                $('body').addClass('scrolled');
            } else {
                $('body').removeClass('scrolled');
            }
        });
    });
</script>

<div class="mystique-new-page">
    <!-- Animated Logo Overlay -->
    <div class="mystique-logo-overlay">
        <img src="<?php echo $main_logo_mystiquerose; ?>" alt="Mystique Rose">
    </div>

    <!-- Hero Section -->
    <!-- <section class="mystique-hero">
        <img src="<?php //echo get_template_directory_uri(); ?>/inc/assets/images/main-img.webp"
             alt="Mystique Rose Collection">
    </section> -->
    <?php
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    ?>

    <!-- Full Width Grid Section -->
    <!-- <section class="full-width-grid-section">
        <div class="full-width-grid">
            <?php
            // Get two category images - you can customize these category IDs
            $categories = array(
                array(
                    'id' => 17, // Replace with your category ID
                    'name' => 'Ready To Wear',
                    'image' => get_template_directory_uri() . '/inc/assets/images/RTW-SS26_1.webp'
                ),
                array(
                    'id' => 23, // Replace with your category ID
                    'name' => 'Couture',
                    'image' => get_template_directory_uri() . '/inc/assets/images/bridal_2026.webp'
                )
            );

            foreach ($categories as $category) :
                // Get category link
                $category_link = get_term_link($category['id'], 'product_cat');
                if (is_wp_error($category_link)) {
                    $category_link = '#';
                }
            ?>
            <a href="<?php echo esc_url($category_link); ?>" class="grid-item">
                <img src="<?php echo esc_url($category['image']); ?>" alt="<?php echo esc_attr($category['name']); ?>">
                <div class="grid-item-overlay">
                    <h3 class="grid-item-title"><?php echo esc_html($category['name']); ?></h3>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </section> -->

    <!-- Products Section -->
    <!-- <section class="products-section">
        <div class="container-fluid px-1">
            <div class="products-grid">
                <?php
                // Get WooCommerce products from Mystique Rose category
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
                                <?php echo woocommerce_get_product_thumbnail(); ?>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main-img-mystique-rose.avif"
                                 alt="Product <?php echo $i; ?>">
                            <div class="product-info">
                                <h3 class="product-title">Product Title <?php echo $i; ?></h3>
                                <div class="product-price">$0.00</div>
                            </div>
                        </div>
                    </a>
                    <?php
                    endfor;
                endif;
                ?>
            </div>
        </div>
    </section> -->

    <!-- Single Full Width Image Section -->
    <!-- <section class="single-image-section p-1">
        <?php
        // Single category image - customize as needed
        $single_category = array(
            'id' => 18, // Replace with your category ID
            'name' => 'Couture',
            'image' => get_template_directory_uri() . '/inc/assets/images/saiid-kobeisy-banner-couture.webp'
        );

        // Get category link
        $single_category_link = get_term_link($single_category['id'], 'product_cat');
        if (is_wp_error($single_category_link)) {
            $single_category_link = '#';
        }
        ?>
        <a href="<?php echo esc_url($single_category_link); ?>" class="single-image-item">
            <img src="<?php echo esc_url($single_category['image']); ?>" alt="<?php echo esc_attr($single_category['name']); ?>">
            <div class="single-image-overlay">
                <h3 class="single-image-title"><?php echo esc_html($single_category['name']); ?></h3>
            </div>
        </a>
    </section> -->

    <!-- <section class="products-section">
        <div class="container-fluid px-1">
            <div class="products-grid">
                <?php
                // Get WooCommerce products from Mystique Rose category
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
                                <?php echo woocommerce_get_product_thumbnail(); ?>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main-img-mystique-rose.avif"
                                 alt="Product <?php echo $i; ?>">
                            <div class="product-info">
                                <h3 class="product-title">Product Title <?php echo $i; ?></h3>
                                <div class="product-price">$0.00</div>
                            </div>
                        </div>
                    </a>
                    <?php
                    endfor;
                endif;
                ?>
            </div>
        </div>
    </section> -->
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const bestSellersSwiper = new Swiper('.best-sellers-swiper', {
        slidesPerView: 1.2,
        spaceBetween: 20,
        scrollbar: {
            el: '.best-sellers-section .swiper-scrollbar',
            draggable: true,
            dragSize: 100,
        },
        breakpoints: {
            640: {
                slidesPerView: 2.2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2.5,
                spaceBetween: 25,
            },
            1024: {
                slidesPerView: 3.2,
                spaceBetween: 30,
            },
            1280: {
                slidesPerView: 3.5,
                spaceBetween: 30,
            },
        },
    });
});
</script>

<?php
get_footer();
