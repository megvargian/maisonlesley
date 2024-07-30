
<?php
/**
 * HomePage Third Block Template
 */
$homepage_third_block_fields = get_fields();
?>
<pre><?php print_r($homepage_third_block_fields['products']) ?></pre>
<section class="py-5 my-5 swiper-products-section">
    <div class="container">
        <div class="row text-center justify-content-center pb-3">
            <h3><?php echo $homepage_third_block_fields['title']; ?></h3>
        </div>
        <div class="row justify-content-center">
           <div class="col-11 px-0" style="position: relative;">
                <div class="swiper swiperProduct">
                    <div class="swiper-wrapper">
                        <?php
                            foreach($homepage_third_block_fields['products'] as $single_product){
                                echo '<div class="post-item">';
                                echo '<h2>Title: ' . esc_html($single_product->post_title) . '</h2>';
                                echo '<p>ID: ' . esc_html($single_product->ID) . '</p>';
                                echo '<p>Author: ' . esc_html(get_the_author_meta('display_name', $single_product->post_author)) . '</p>';
                                echo '<p>Date: ' . esc_html($single_product->post_date) . '</p>';
                                echo '<p>Status: ' . esc_html($single_product->post_status) . '</p>';
                                echo '<p>Content: ' . wp_kses_post($single_product->post_content) . '</p>';
                                echo '<p>Excerpt: ' . esc_html($single_product->post_excerpt) . '</p>';
                                echo '<p>Permalink: <a href="' . esc_url($single_product->guid) . '">' . esc_url($single_product->guid) . '</a></p>';
                                echo '</div>';
                        ?>
                            <div class="swiper-slide">
                                <img class="w-100" src="<?php echo get_the_post_thumbnail_url( $single_product->ID, 'medium' ); ?>" alt="<?php echo $single_product->post_title; ?>" loading="lazy">
                                <div class="swiper-lazy-preloader"></div>
                                <h4><?php echo $single_product->post_title; ?></h4>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
           </div>
        </div>
    </div>
</section>