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

?>
</div><!-- #content -->
<?php 
function ReplacePlusSignForSafari($text) {
$final_text = str_replace('+', '+', $text);
return $final_text;
}
$sign_up_section = get_field('sign_up_section', 'options');
?>


<div class="modal fade newsletter" id="NewsLetter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
      <div class="modal-content modal-style">         
          <div class="modal-header" style="border-bottom: 0;">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x" fill="" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
			    </svg>
              </button>
          </div>
          <div class="modal-body">
            <div class="modal_content_group">
                <div class="container">
                    <div class="row">
                        <div class="form_validation_parent newsletter_form">
                            <div class="newsletter_success_message cf7_success_message">
                                <div class="h1style"><?php echo __('Thank you.', 'contactuspage')?></div>
                                <div class="h5style"><?php echo __('You\'ve been added to our mailing list and will now be among the first to hear about new articles, arrivals and special offers.', 'contactuspage'); ?></div>
                            </div>
                            <div class="newsletter_fail_message cf7_fail_message">
                                <div class="h5style"><?php echo __('An error has occurred. Please try again!', 'contactuspage')?></div>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="493" title="Newsletter"]')?>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>


 <section class="heighthsection" style="background-image: url(<?php echo $sign_up_section['image']['url']?>);">
            <div class="background-img-8">
                    <div class="sign-up_svg">
                        <img src="<?php echo get_template_directory_uri() ?>/inc/assets/images/sign-up.svg" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-xl-5 col-md-12 col-12">
                            <div class="content_wrapper">
                                <h1 class="h1style-1"><?php echo $sign_up_section['title']?></h1>
                                <h6 class="h2style-1"><?php echo $sign_up_section['sub_title']?></h6>
                                <button class="buttonstyle" data-toggle="modal" data-target="#NewsLetter"><?php echo $sign_up_section['button_text']?> </button>
                            </div>
                            </div>
                        </div>
                    </div>              
            </div>
 </section>
<footer>
    <div class="main_footer_section">
        <div class="bg-white" style="padding-top: 50px;">
            <div class="container">
                <div class="row firstrow">
                    <div class="col-5 col-md-4 col-sm-12 col-12 col-lg-5 col-xl-5 padding_forFooter_Logo">
                        <a id="logo" href="<?php echo get_home_url()?>">
                        <?php 
                              $logo = get_field('logo','options');
                              if( !empty( $logo ) ): ?>
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" />
                        <?php endif; ?>
                        </a>
                    </div>
                    <div class="col-7 col-md-8 col-sm-12 col-12 col-lg-7 col-xl-7 ">
                            <div class="row">
                                <div class="col-4 col-md-4 col-sm-6 col-6 col-lg-4 col-lx-4 order-lg-first order-md-first order-lg-first padding_forFooter">
                                 <a id="red_titles"><?php echo __('CATEGORIES', 'footerpage')?></a>
                                  <?php
                                    wp_nav_menu(array(
                                     'menu' => 4 ,
                                    )); 
                                  ?>
                                </div>
                                <div class="col-4 col-md-4 col-sm-6 col-6 col-lg-4 col-lx-4 padding_forFooter">
                                  <a id="red_titles"><?php echo __('CATEGORIES', 'footerpage')?></a>
                                  <?php
                                    wp_nav_menu(array(
                                      'menu' => 3 ,
                                    )); 
                                  ?>
                                </div>
                                <div class="col-4 col-md-4 col-sm-6 col-6 col-lg-4 col-xl-4 order-sm-first order-first order-lg-last order-0-xl-last order-md-last padding_forFooter">
                                  <a id="red_titles">MOONA</a>
                                  <?php
                                    wp_nav_menu(array(
                                      'menu' => 2 ,
                                    )); 
                                  ?>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <?php $social_media_link = get_field('social_media_links', 'option')?>
                        <?php
                            wp_nav_menu(array(
                                'menu' => 5,
                                'container_class' => 'col-sm-9 col-12 policies',
                            )); 
                        ?>
                    <?php if ($social_media_link['facebook'] != ' ' || $social_media_link['instagram'] != ' '  ) { ?>
                    <div class="col-sm-3 col-12 icons">
                        <a id="instagram" href="<?php echo $social_media_link['instagram']?>"  target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a id="facebook" href="<?php echo $social_media_link['facebook']?>"  target="_blank">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="container footerstyle">
            <div class="row">
                <div class="col-sm-6 col-12 order-sm-first order-last maze_for_mobile">
                    <div class="copyright_text">
                        <span class="copyright_line"></span>
                          <?php echo __('Crafted with' , 'footerpage')?>
                        <i class="pulse fas fa-heart"></i>
                          <?php echo __('by','footerpage')?>                        
                        <a id="maze"target="_blank" href="https://www.wearemaze.com">MAZE</a>
                    </div>
                </div>
                <div id="moona2021"class="col-sm-6 col-12">
                    <div class="copyright_text">
                        <p>© Moona 2020 | <?php echo __(' All right reserved','footerpage')?> </p>
                    </div>
                </div>
                <!-- <div class="col-sm-4 col-6" style="text-align: right;">
                     <div class="copyright_text">
                         <span style="padding-right: 10px;">Secure Payment</span>
                         <svg width="109px" height="14px" viewBox="0 0 109 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Payment logos</title>
                            <g id="Website" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Kertesh---About-Us" transform="translate(-1182.000000, -2340.000000)">
                                    <g id="Payment-logos" transform="translate(1182.000000, 2340.000000)">
                                        <image id="Paypal-logo" x="0" y="2.34972678" width="40" height="11" xlink:href="data:image/png;base64,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"></image>
                                        <image id="Visa-logo" x="50" y="1.34972678" width="30" height="10" xlink:href="data:image/png;base64,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"></image>
                                        <image id="Mastercard-logo" x="89" y="0.349726776" width="20" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAaCAYAAAAqjnX1AAAABGdBTUEAALGOfPtRkwAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAAAKaADAAQAAAABAAAAGgAAAAAmoUYJAAAEBklEQVRYCc1YzW8TRxR/M7N2nMSxE9IAcUiFnShRXQmpIJWeKgQcatKGBiTq8tFKlVAPHBqp/0D+A3IGiQMoLYqEVAwWh1aR1fZEJSpQ6aFy4gpBlADNh6GxHe/O69uVdrXrbNe7K1XqXHbmvd977+eZeTNvzMBHm5mZ4T/dfziKAvcz5AmJsK1I+AsiauX7QmG5nYtvb99OaSqkEaCfAY+ChKom+J+VR7+UybdsZ8+8AMdOTI0BgzwiHOUM4m5YCvwUkN1rsMb8z8XiuomZm7vbJ6PyDGOQIx/7TLnji/AKERciivwmPzW16NDZBq4kc7lcYpvHviblhA3r2SWy24js2vvvHrg+8vahzxjHL8gg6mlkUzJgd7AmLp8/f6JqExvdHSSPTE6OCk3MkmJvK7jdmHEu3zt8+OnY2Pg+Jhhvh2/V04otc8anz53+cMmuczg6mvt4hAheCUVQcMhms1wI8eaz5WcOv/aAXn3aGilEeWXu1t2MHWc505eYMX6ZCCbsAL/9THoE+np7DXi9VoPVlVW/pk4cg16JcnZ+ft7KAYsk7cFpxjDltPA36tu1Cwb37nGAX1Wr8PfrLYfM70Cf0abonDbxBsnjE6dpevEjUxj0m06TuUt7+eK5i9SnCPGkuewGSQTMU3btSCI/7vRZ7OqMuUKbzWbo2UQiJKXM646FflA/WV6ZIYYdrpHaCIeHhyHe3e2JivdY28sT16oknkMHsuM3eOnBg0zYZNGdJpPJVt+OcY2SKHRjmBjJvpPhQhXpsE4URcFYh/cCaKoKUqOLNGxTIM2BM++p8HDOlYiv4LS3fOHcQlGtkDQSx035f5FR9tDVJXEzLCGpNn2dCJxTeRKySQEbXFO0Skh7UFWV1RsNT3O6J4GL8CRBhQo/cvDgEm2YHZWHZ2SbcnPTeyG6urps6IBdZNXF339dEqVSCTNj2SFaj7cCujDgVA/C7oGBfzXt7++HaIfvis3hh1wXv7r05Y9G4tChedOhDTBYX1uDrVrd1SISiUB3yINcd0h72eBlkPyheEtf8oJrJB/CSsVR/lkWbwzstvqBOwgFs660jqCorM9SZd32veIWTJ/N1efOYiLe0wPd8XD7US9+oa7MmrGE2SmXy4306Ph9qjM+oP3pfY2YRrbv+sY6JBMJiMViEOvshMHBVLiShd49EaFdOvvJ5Irp3ppJXbBw77tFTWgXaektgAls90VNwm+PH0tN054MpYb0EzhwoxlcRYkXWx9lO1yVCoUyLf1ZIloMEoXw9BCTV4W6lae3zlWy3Q5iD5TJrK58euHMyXKrnedN8F8/aemHvWYICxoXNz8/NfFHKzlz7EnSBNn/HADJkgisEfbPAS6hA4FvBvlz4B/DC3OzuVTqyQAAAABJRU5ErkJggg=="></image>
                                    </g>
                                </g>
                            </g>
                        </svg>
                     </div>   
                  </div> -->
               </div>
           </div>
    </div>
</footer>
</div>
        <script>
            	jQuery(document).ready(function($) {
                    var cf7form = $('.wpcf7');
                    if (cf7form) {
                        $(cf7form).each(function(index, el) {
                        if (el) {
                            $(el).find('form').submit(function(event) {
                                $(el).find('form').find('.wpcf7-submit').addClass('disabled');
                                $(el).parents('.form_validation_parent').find('.cf7_success_message').hide();
                                $(el).parents('.form_validation_parent').find('.cf7_fail_message').hide();
                            });
                            el.addEventListener( 'wpcf7mailsent', function( event ) {     
                                if($(el).parents('.form_validation_parent').hasClass('newsletter_form')){
                                    $(el).slideUp(300);
                                }       
                                $(el).parents('.form_validation_parent').find('.cf7_success_message').slideDown(300);
                            }, false );
                            el.addEventListener( 'wpcf7mailfailed', function( event ) {
                                $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                                $(el).parents('.form_validation_parent').find('.cf7_fail_message').slideDown(300);
                            }, false );
                            el.addEventListener( 'wpcf7spam', function( event ) {
                                $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                                $(el).parents('.form_validation_parent').find('.cf7_fail_message').slideDown(300);
                            }, false );
                            el.addEventListener( 'wpcf7invalid', function( event ) {
                                $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                                $(el).parents('.form_validation_parent').find('.cf7_fail_message').slideDown(300);
                            }, false );
                        }
                    });
                }
                 //#wpcf7-f755-o2
                 //#wpcf7-f601-o2
                 //#wpcf7-f493-o2
			    //   var cf7form = $('#wpcf7-f755-o2');
			    //    if (cf7form) {
                //         $(cf7form).each(function(index, el) {
                //         if (el) {
                //             $(el).find('form').submit(function(event) {
                //                 $(el).find('form').find('.wpcf7-submit').addClass('disabled');
                //                 $(el).parents('.form_validation_parent').find('.newsletter_success_message').hide();
                //                 $(el).parents('.form_validation_parent').find('.newsletter_fail_message').hide();
                //             });
                //             el.addEventListener( 'wpcf7mailsent', function( event ) {
                //                 $('.newsletter_success_message').css('z-index', '12');
                //                 $('.newsletter_success_message').slideDown(300);
                //                 // $(el).parents('.form_validation_parent').find('.newsletter_success_message').slideDown(300);			
                //             }, false );
                //             el.addEventListener( 'wpcf7mailfailed', function( event ) {
                //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                //                 $('#wpcf7-f755-o2').css('display', 'none');
                //                 $('.newsletter_fail_message').slideDown(300);
                //             }, false );
                //             el.addEventListener( 'wpcf7spam', function( event ) {
                //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                //                 $('#wpcf7-f755-o2').css('display', 'none');
                //                 $('.newsletter_fail_message').slideDown(300);
                //             }, false );
                //             el.addEventListener( 'wpcf7invalid', function( event ) {
                //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                //                 $('#wpcf7-f755-o2').css('display', 'none');
                //                 $('.newsletter_fail_message').slideDown(300);
                //             }, false );
                //         }
                //     });
                // }
                // var cf7form = $('#wpcf7-f601-o2');
			    //    if (cf7form) {
                //         $(cf7form).each(function(index, el) {
                //         if (el) {
                //             $(el).find('form').submit(function(event) {
                //                 $(el).find('form').find('.wpcf7-submit').addClass('disabled');
                //                 $(el).parents('.form_validation_parent').find('.newsletter_success_message').hide();
                //                 $(el).parents('.form_validation_parent').find('.newsletter_fail_message').hide();
                //             });
                //             el.addEventListener( 'wpcf7mailsent', function( event ) {
                //                 $('.newsletter_success_message').css('z-index', '12');
                //                 $('.newsletter_success_message').slideDown(300);	
                //                 // $(el).parents('.form_validation_parent').find('.newsletter_success_message').slideDown(300);
					
                //             }, false );
                //             el.addEventListener( 'wpcf7mailfailed', function( event ) {
                //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                //                 $('#wpcf7-f601-o2').css('display', 'none');
                //                 $('.newsletter_fail_message').slideDown(300);
                //             }, false );
                //             el.addEventListener( 'wpcf7spam', function( event ) {
                //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                //                 $('#wpcf7-f601-o2').css('display', 'none');
                //                 $('.newsletter_fail_message').slideDown(300);
                //             }, false );
                //             el.addEventListener( 'wpcf7invalid', function( event ) {
                //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                //                 $('#wpcf7-f601-o2').css('display', 'none');
                //                 $('.newsletter_fail_message').slideDown(300);
                //             }, false );
                //         }
                //     });
                // }

                // var cf7form = $('#wpcf7-f493-o2');
			    //    if (cf7form) {
                //         $(cf7form).each(function(index, el) {
                //         if (el) {
                //             $(el).find('form').submit(function(event) {
                //                 $(el).find('form').find('.wpcf7-submit').addClass('disabled');
                //                 $(el).parents('.form_validation_parent').find('.newsletter_success_message').hide();
                //                 $(el).parents('.form_validation_parent').find('.newsletter_fail_message').hide();
                //             });
                //             el.addEventListener( 'wpcf7mailsent', function( event ) {
                //                 $('.newsletter_success_message').css('z-index', '12');
                //                 $('.newsletter_success_message').slideDown(300);
                //                 // $(el).parents('.form_validation_parent').find('.newsletter_success_message').slideDown(300);
					
                //             }, false );
                //             el.addEventListener( 'wpcf7mailfailed', function( event ) {
                //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                //                 $('#wpcf7-f493-o2').css('display', 'none');
                //                 $('.newsletter_fail_message').slideDown(300);
                //             }, false );
                //             el.addEventListener( 'wpcf7spam', function( event ) {
                //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                //                 $('#wpcf7-f493-o2').css('display', 'none');
                //                 $('.newsletter_fail_message').slideDown(300);
                //             }, false );
                //             el.addEventListener( 'wpcf7invalid', function( event ) {
                //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                //                 $('#wpcf7-f493-o2').css('display', 'none');
                //                 $('.newsletter_fail_message').slideDown(300);
                //             }, false );
                //         }
                //     });
                // }

            //   $('.ContactUsButton').click(function(event) {
            //       $('.wpcf7').css('display', 'none');
            //       $('.newsletter_success_message').slideDown(300);
            //   });
              (jQuery);
            });
        </script>
<!-- #page -->
<?php wp_footer(); ?>
</body>

</html>