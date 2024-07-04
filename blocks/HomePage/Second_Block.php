<?php
/**
 * HomePage Second Block Template
 */
$homepage_second_block_fields = get_fields();
$single_field = $homepage_second_block_fields['single_field'];
$mutli_fields = $homepage_second_block_fields['multi_field'];
?>
<section class="py-5 d-sm-block d-none">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-6">
                        <img class="w-100" src="<?php echo $single_field['image']; ?>" alt="<?php echo $single_field['title']; ?>">
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <div class="d-block">
                            <div class="">
                                <h3><?php echo $single_field['title']; ?></h3>
                                <p><?php echo $single_field['sub_title']; ?></p>
                                <a href="<?php echo $single_field['button_url']; ?>" class="main-link">
                                    <?php echo $single_field['button_text']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 d-sm-none d-block" style="background-color: #f0f0f0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 bg-white px-0">
                <div class="row gx-0">
                    <div class="col-3 px-0">
                        <img class="w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/second-img-mobile.jpg" alt="">
                    </div>
                    <div class="col px-0 d-flex justify-content-start align-items-center position-relative">
                        <div class="d-block">
                            <div class="">
                                <h3 style="padding-left: 13px;">Yours new forever dress</h3>
                            </div>
                            <div class="arrow-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-sm-0 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <div>
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/third.jpg" alt="third">
                            <h3 class="pt-3">An Elgant Affair</h3>
                            <a href="#" class="main-link mt-4">Discover more</a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="pt-sm-5 mt-5 pt-0">
                            <img class="w-100" src="<?php echo get_template_directory_uri() ?>/inc/assets/images/fourth.jpg" alt="fourth">
                            <h3 class="pt-3">Perfect parters</h3>
                            <a href="#" class="main-link mt-4">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>