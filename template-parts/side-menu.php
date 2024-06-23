<?php
$getGeneralFields = get_fields('options');
$side_menu = $getGeneralFields['side_menu'];
?>
<div class="side-menu">
    <nav>
        <ul>
            <?php foreach ($side_menu as $page) { ?>
                <li>
                    <a class="<?= is_page($page['page']->post_name) ? 'active' : ''; ?>" href="<?php echo get_permalink($page['page']->ID); ?>">
                        <?php echo get_the_title($page['page']->ID) ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>
<script>
    jQuery(document).ready(function($) {
        $('.side-menu li a').click(function() {
            $('.side-menu li a').removeClass('active');
            $(this).addClass('active');
        })
    });
</script>