<div class="side-menu">
    <nav>
        <ul>
            <li>
                <a class="<?=is_page('contact-us') ? 'active': '';?>" href="<?php echo get_permalink(75); ?>">
                    <?php echo get_the_title(75) ?>
                </a>
            </li>
            <li>
                <a class="<?=is_page('faqs') ? 'active': '';?>" href="<?php echo get_permalink(79); ?>">
                    <?php echo get_the_title(79) ?>
                </a>
            </li>
            <li>
                <a class="<?=is_page('shipping-info') ? 'active': '';?>" href="<?php echo get_permalink(81); ?>">
                    <?php echo get_the_title(81) ?>
                </a>
            </li>
            <li>
                <a class="<?=is_page('return-and-refunds') ? 'active': '';?>" href="<?php echo get_permalink(83); ?>">
                    <?php echo get_the_title(83) ?>
                </a>
            </li>
            <li>
                <a class="<?=is_page('payment-security') ? 'active': '';?>" href="<?php echo get_permalink(85); ?>">
                    <?php echo get_the_title(85) ?>
                </a>
            </li>
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