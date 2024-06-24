<?php
/**
 * Info Content Block Template
 */
$info_content_block_fields = get_fields();
$main_content = $info_content_block_fields['main_content'];
$count = 0;
?>
<section class="">
    <div class="accordion w-100" id="accordionExample">
        <?php foreach($main_content as $content){ $count++?>
            <div class="accordion-item">
                <h2 class="accordion-header mt-0" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $count; ?>" aria-expanded="true" aria-controls="collapseOne-<?php echo $count; ?>">
                        <?php echo $content['title']; ?>
                    </button>
                </h2>
                <div id="collapseOne-<?php echo $count; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php echo $content['single_content']; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>