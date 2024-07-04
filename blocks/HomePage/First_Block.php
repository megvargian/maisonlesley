<?php
/**
 * HomePage First Block Template
 */
$homepage_first_block_fields = get_fields();
$count = 0;
?>
<section>
    <div class="container">
        <div class="row">
            <div class="swiper Mainswiper">
                <div class="swiper-wrapper">
                    <?php foreach($homepage_first_block_fields['images'] as $single_image){
                        $count++;?>
                        <div class="swiper-slide">
                            <img class="w-100 px-0" src="<?php echo $single_image['image']; ?>" alt="main-image-<?php echo $count; ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row text-left">
            <h2 class="pl-3 px-sm-0">
                <?php echo $homepage_first_block_fields['title']; ?>
            </h2>
            <a class="main-link padding-left" href="<?php echo $homepage_first_block_fields['button_url']; ?>">
                <?php echo $homepage_first_block_fields['button_text']; ?>
            </a>
        </div>
    </div>
</section>