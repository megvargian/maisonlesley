<?php
/**
 * MystiqueRose Second Block Template
 */
$Mystique_rose_second_block_fields = get_fields();
?>
<section>
        <div class="container-fluid px-sm-0">
            <div class="row">
                <div class="col-md-6 col-12 px-0">
                    <!-- <img class="w-100 px-0" src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/main-img-half-mystique-rose.jpg" alt=""> -->
                    <img class="w-100 px-0" src="<?php echo $Mystique_rose_second_block_fields['main-image']; ?>" alt="mystique-rose">
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-center align-items-center" style="background-color: #D0212F;">
                    <div class="row py-3 py-md-0 justify-content-center d-flex align-items-center">
                        <div class="col-12 justify-content-center text-center pb-4">
                            <?php echo $Mystique_rose_second_block_fields['main_text']; ?>
                            <!-- <h6>THIS WEEKEND ONLY</h6>
                            <h2>10/$40</h2>
                            <h5>Panties</h5>
                            <p>Orig up to 1495 each. <a href="#">Details</a></p> -->
                        </div>
                        <div class="col-md-6 col-10">
                            <div class="row justify-content-center d-flex align-items-center">
                                <?php foreach ($Mystique_rose_second_block_fields['buttons'] as $button) {
                                    if($button['single_button']){
                                ?>
                                    <div class="col-12 d-flex justify-content-center align-items-center text-center px-1">
                                        <a class="bg-white w-100 py-2 px-4" href="<?php echo $button['url']; ?>">
                                            <?php echo $button['text']; ?>
                                        </a>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-6 px-1 mb-2 d-flex justify-content-center align-items-center text-center">
                                        <a class="bg-white w-100 py-2 px-4" href="<?php echo $button['url']; ?>">
                                            <?php echo $button['text']; ?>
                                        </a>
                                    </div>
                                <?php }
                                }?>

                                <!-- <div class="col-6 px-1 mb-2 d-flex justify-content-center align-items-center text-center">
                                    <a class="bg-white w-100 py-2 px-4" href="#">X-Small</a>
                                </div>
                                <div class="col-6 px-1 mb-2 d-flex justify-content-center align-items-center text-center">
                                    <a class="bg-white w-100 py-2 px-4" href="#">X-Small</a>
                                </div>
                                <div class="col-6 px-1 mb-2 d-flex justify-content-center align-items-center text-center">
                                    <a class="bg-white w-100 py-2 px-4" href="#">X-Small</a>
                                </div>
                                <div class="col-6 px-1 mb-2 d-flex justify-content-center align-items-center text-center">
                                    <a class="bg-white w-100 py-2 px-4" href="#">X-Small</a>
                                </div>
                                <div class="col-6 px-1 mb-2 d-flex justify-content-center align-items-center text-center">
                                    <a class="bg-white w-100 py-2 px-4" href="#">X-Small</a>
                                </div>
                                <div class="col-12 px-1 d-flex justify-content-center align-items-center text-center ">
                                    <a class="bg-white w-100 py-2 px-4" href="#">X-Small</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>