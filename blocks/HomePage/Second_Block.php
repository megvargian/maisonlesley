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
                <a href="<?php echo $single_field['button_url']; ?>">
                    <div class="row gx-0">
                        <div class="col-3 px-0">
                            <img class="w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/second-img-mobile.jpg" alt="">
                        </div>
                        <div class="col px-0 d-flex justify-content-start align-items-center position-relative">
                            <div class="d-block">
                                <div class="">
                                    <h3 style="padding-left: 13px;"><?php echo $single_field['title']; ?></h3>
                                </div>
                                <div class="arrow-right"></div>
                            </div>
                        </div>
                    </div>
                </a>
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
                            <img class="w-100" src="<?php echo $mutli_fields[0]['image']; ?>" alt="<?php echo $mutli_fields[0]['title']; ?>">
                            <h3 class="pt-3"><?php echo $mutli_fields[0]['title']; ?></h3>
                            <a href="<?php echo $mutli_fields[0]['button_url']; ?>" class="main-link mt-4">
                                <?php echo $mutli_fields[0]['button_text']; ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="pt-sm-5 mt-5 pt-0">
                        <img class="w-100" src="<?php echo $mutli_fields[1]['image']; ?>" alt="<?php echo $mutli_fields[1]['title']; ?>">
                            <h3 class="pt-3"><?php echo $mutli_fields[1]['title']; ?></h3>
                            <a href="<?php echo $mutli_fields[1]['button_url']; ?>" class="main-link mt-4">
                                <?php echo $mutli_fields[1]['button_text']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>