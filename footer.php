<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
$getGeneralFields = get_fields('options');
$main_footer_fields = $getGeneralFields['footer_sub_menu'];
?>
</div><!-- #content -->
<footer>
    <section class="py-5 pb-md-5 pb-0" style="background-color: #f0f0f0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-12">
                            <div>
                                <h3>Maison Lesley News</h3>
                                <p>Sign up to our newsletter and receive updates on <br> events, collections and exclusive promotions.</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-12 pb-md-0 pb-3">
                            <form class="w-100" action="/" method="post">
                                <div class="position-relative">
                                    <input class="input-newsletter w-100" placeholder="Email" type="email" requierd>
                                    <button class="subscription-button">
                                        <span class="submit-txt">Submit</span>
                                    </button>
                                </div>
                                <div class="check-policy d-flex justify-content-start mt-3">
                                    <input class="input-checkbox" name="policy-check" type="checkbox" required>
                                    <label for="policy-check" style="margin-left: 5px;">
                                        I have read the <a href="#">Privacy Policy</a>
                                    </label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="border-1 d-md-none d-block">
            <a href="#" class="w-100">
                <div class="py-3 px-3" style="border-top: 1px solid #d8d8d8;">
                    <div class="d-flex justify-content-start align-items-center location-mobile">
                        <span class="default-button text-black">Find your nearest store</span>
                    </div>
                </div>
            </a>
            <a href="#" class="w-100">
                <div class="py-3 px-3" style="border-top: 1px solid #d8d8d8;">
                    <div class="d-flex justify-content-start align-items-center call-mobile">
                        <span class="default-button text-black">Customer service 08001114431</span>
                    </div>
                </div>
            </a>
        </section>
    </section>
    <section class="bg-white py-5 w-100 pt-md-5 pt-0">
        <div class="container d-md-block d-none">
            <div class="row">
                <?php foreach($main_footer_fields as $single_footer_feilds){?>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                        <div class="first-col">
                            <div>
                                <h5 class="mb-3"><?php echo $single_footer_feilds['main_label']; ?></h5>
                                <ul class="sub-menus-footer">
                                    <?php foreach($single_footer_feilds['sub_menu_button'] as $single_button){ ?>
                                        <li>
                                            <a href="<?php echo $single_button['sub_menu_button_link']; ?>">
                                                <?php echo $single_button['sub_menu_button_text']; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 third-col social-links">
                    <div class="row">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-0 col"></div>
            </div>
        </div>
        <section class="mobile-footer d-block d-md-none">
            <div class="accordion w-100" id="accordionExample-footer">
                <?php foreach($main_footer_fields as $single_footer_feilds){ $count++?>
                    <div class="accordion-item">
                        <h2 class="accordion-header mt-0" id="headingOne-footer-<?php echo $count;?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-footer-<?php echo $count; ?>" aria-expanded="true" aria-controls="collapseOne-footer-<?php echo $count; ?>">
                                <?php echo $single_footer_feilds['main_label']; ?>
                            </button>
                        </h2>
                        <div id="collapseOne-footer-<?php echo $count; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne-footer-<?php echo $count;?>" data-bs-parent="#accordionExample-footer">
                            <div class="accordion-body">
                                <ul class="sub-menus-footer">
                                    <?php foreach($single_footer_feilds['sub_menu_button'] as $single_button){ ?>
                                        <li>
                                            <a href="<?php echo $single_button['sub_menu_button_link']; ?>">
                                                <?php echo $single_button['sub_menu_button_text']; ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="border-bottom third-col social-links py-3">
                <ul class="d-flex justify-content-center align-items-center">
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </section>
    <?php  get_template_part('template-parts/footer', 'after'); ?>
</footer>
<!-- Modal -->
<div class="modal fade" id="size-guide" tabindex="-1" role="dialog" aria-labelledby="size-guideTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Accordion Item #1
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div><!-- #page -->
<script>
    jQuery(document).ready(function($) {
        $('#custom-filter').change(function() {
            $('#custom-filter-form').submit();
        });
        $('#custom-add-to-cart-button').on('click', function() {
            var product_id = $(this).data('product-id');
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'custom_add_to_cart',
                    product_id: product_id,
                },
                success: function(response) {
                    if (response.success) {
                        window.location.href = '/cart/';
                    } else {
                        $('.response').text('There was an error adding the product to the cart.');
                    }
                }
            });
        });
        // select attribute and make it active
        $('.product-attributes-size li').on('click', function(){
            $('.product-attributes-size li button').removeClass('active');
            $(this).find('button').addClass('active');
            if($('.product-attributes-color').length > 0){
                if($('.product-attributes-color li').find('button.active').length > 0){
                    $('#form-add-to-cart-button').removeAttr('disabled');
                }
            }else{
                $('#form-add-to-cart-button').removeAttr('disabled');
            }
        });
        $('.product-attributes-color li').on('click', function(){
            $('.product-attributes-color li button').removeClass('active');
            $(this).find('button').addClass('active');
            if($('.product-attributes-size').length > 0){
                if($('.product-attributes-size li').find('button.active').length > 0){
                    $('#form-add-to-cart-button').removeAttr('disabled');
                }
            }else{
                $('#form-add-to-cart-button').removeAttr('disabled');
            }
        });
        // add to cart with selected attribute
        $('#form-add-to-cart-button').on('click', function() {
            var product_id = $(this).data('product-id');
            var selected_attr_size = $('.product-attributes-size').find('button.active').text();
            var selected_attr_color = $('.product-attributes-color').find('button.active').find('span').text();
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'form_custom_add_to_cart',
                    product_id: product_id,
                    selected_attr_size: selected_attr_size,
                    selected_attr_color: selected_attr_color,
                },
                success: function(response) {
                    if (response.success) {
                        $('#form-add-to-cart-button').prop('disabled', true);
                        window.location.href = '/cart/';
                    } else {
                        $('#form-add-to-cart-button').prop('disabled', true);
                        $('.response').text('There was an error adding the product to the cart.');
                    }
                }
            });
        });
        // Apply FancyBox to product images
        $('a.fancybox').fancybox({
            // FancyBox options can be added here
            buttons: [
                'zoom',
                'close'
            ]
        });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>