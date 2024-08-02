<?php
/**
 * Variable product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/variable.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 6.1.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Get available variations and their attributes
$variations = $product->get_available_variations();
$attributes = $product->get_variation_attributes();

// Display attributes dropdowns for size and color
foreach ($attributes as $attribute_name => $options) {
    // Replace 'pa_' prefix with 'attribute_' for the attribute name
    $attribute_label = wc_attribute_label(str_replace('attribute_', '', $attribute_name));
    $attribute_name = sanitize_title($attribute_name);
    ?>
    <select id="<?php echo esc_attr($attribute_name); ?>" name="attribute_<?php echo esc_attr($attribute_name); ?>">
        <option value=""><?php echo 'Choose ' . esc_html($attribute_label); ?></option>
        <?php
        foreach ($options as $option) {
            echo '<option value="' . esc_attr($option) . '">' . esc_html($option) . '</option>';
        }
        ?>
    </select>
    <?php
}
?>

<!-- Script to handle attribute selection validation -->
<script>
    jQuery(function ($) {
        $('form.variations_form').on('submit', function () {
            var isValid = true;
            // Check if all attribute dropdowns are selected
            $(this).find('select').each(function () {
                if (!$(this).val()) {
                    isValid = false;
                }
            });

            if (!isValid) {
                alert('Please select all options before adding to cart.');
                return false; // Prevent form submission
            }
        });
    });
</script>
