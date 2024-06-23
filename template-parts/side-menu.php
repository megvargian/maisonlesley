<?php
$getGeneralFields = get_fields('options');
$side_menu = $getGeneralFields['side_menu'];
?>
<pre><?php print_r($side_menu); ?></pre>
<div class="side-menu">
    <nav>
        <ul>
            <?php foreach( $side_menu as $page){ ?>
                <pre><?php print_r($page['post_name']); ?></pre>
                <pre><?php print_r($page['ID']); ?></pre>
                <pre><?php echo $page -> post_name; ?></pre>
                <pre><?php echo $page -> ID; ?></pre>
                <li>
                    <a class="<?=is_page($page -> post_name) ? 'active': '';?>" href="<?php echo get_permalink($page -> ID); ?>">
                        <?php echo get_the_title($page -> ID) ?>
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