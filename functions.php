<?php
/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts()
{
    // load bootstrap css
    wp_enqueue_style('wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css');

    // fontawesome cdn
    wp_enqueue_style('wp-bootstrap-pro-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/font-awsome.css');
    // load bootstrap css

    // load WP Bootstrap Starter styles
    wp_enqueue_style('wp-bootstrap-starter-style', get_stylesheet_uri());

    // ============= Load Custom stylesheets =============

    wp_enqueue_style('maze-swiper', get_template_directory_uri() . '/inc/assets/css/swiper.min.css');

    if (is_front_page()) {
        // wp_enqueue_style( 'maze-animate_headlines', get_template_directory_uri() . '/inc/assets/css/animate_headlines.css' );
    }
    wp_enqueue_style('maze-custom_style', get_template_directory_uri() . '/inc/assets/css/custom_style.css', array(), '1.39');
    wp_enqueue_style('maze-responsive_style', get_template_directory_uri() . '/inc/assets/css/responsive.css', array(), '1.39');

    wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script('html5hiv', get_template_directory_uri() . '/inc/assets/js/html5.js', array(), '3.7.0', false);
    wp_script_add_data('html5hiv', 'conditional', 'lt IE 9');

    // load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true);

    // ========================================================================
    // Add all custom js libraries here
    wp_enqueue_script('maze-swiper-js', get_template_directory_uri() . '/inc/assets/js/swiper.min.js', array(), '1', true);

    // query loader
    wp_enqueue_script('queryloader2-js', get_template_directory_uri() . '/inc/assets/js/queryloader2.min.js', array(), '1', true);
    // jquery visibale
    wp_enqueue_script('queryvisible-js', get_template_directory_uri() . '/inc/assets/js/jquery.visible.js', array(), '1', true);
    // wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.js', array(), '', true );
    wp_enqueue_script('wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'wp_bootstrap_starter_scripts');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' => 'Website Settings',
            'menu_title' => 'Website Settings',
            'menu_slug' => 'website-settings',
            'capabality' => 'edit_posts'
        )
    );
}

add_image_size('main_homepage_img', 1903, 690, true);
add_image_size('main_img_company_services', 1903, 300, true);
add_image_size('services_img', 656, 580, true);
add_image_size('footer_img', 1903, 340, true);

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(
            array(
                'name'              => 'Block1',
                'title'             => __('Block1'),
                'description'       => __('This is the first Block of Homepage'),
                'render_template'   => 'blocks/test.php',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array('testimonial', 'quote'),
            )
        );

    }
}
