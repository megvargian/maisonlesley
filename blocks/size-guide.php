<?php
/**
 * Info Content Block Template
 */
$all_generalFields = get_fields('options');
$get_size_guide_fields = $all_generalFields;
?>
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <?php echo $get_size_guide_fields['size_guide_label'];?>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show"
            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="sizeguide-table">
                    <div class="size-table-title-container">
                        <?php foreach ($get_size_guide_fields['size_guide_table']['labels'] as $label) {?>
                            <div class="size-table-title-element">
                                <?php echo $label['label']; ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="size-table-size-row-container">
                        <?php foreach ($get_size_guide_fields['size_guide_table']['rows'] as $rows) {?>
                            <div class="size-table-size-row">
                                <?php foreach ($rows['row'] as $main_text) { ?>
                                    <div class="size-table-size-element"><?php echo $main_text['main_text']; ?></div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php