<?php 
 $contact_us = get_field('contact_us_section', 'options');
 if(!is_page(15)){
?>
<div class="contact_us_footer" style="background-image:url(<?php echo $contact_us['image']['sizes']['footer_img']  ?>)">
    <div class="container">
        <div class="row justify-content-center">
            <h2 class="h2_style"><?php echo $contact_us['title'] ?></h2>
        </div>
        <div class="row justify-content-center">
            <div class="text-center py-2">
                <?php if($contact_us['button_text']){ ?>
                        <a href="<?php echo $contact_us['button_link'] ?>">
                            <button type="button" class="buttonstyle animate_part_0 animate_part_0_active" style="--homepage-delay-v: 0.6s">
                                <?php echo $contact_us['button_text'] ?>
                            </button>
                        </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>