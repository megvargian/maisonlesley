<div class="side-menu">
    <nav>
        <ul>
            <li>
                <a class="<?=is_page('contact-us') ? 'active': '';?>" href="<?php echo get_permalink('contact-us'); ?>">
                    <?php echo get_the_title(75) ?>
                </a>
            </li>
            <li>
                <a class="<?=is_page('faqs') ? 'active': '';?>" href="<?php echo get_permalink('faqs'); ?>">
                    <?php echo get_the_title(79) ?>
                </a>
            </li>
            <li>
                <a class="<?=is_page('shipping-info') ? 'active': '';?>" href="<?php echo get_permalink('shipping-info'); ?>">
                    <?php echo get_the_title(81) ?>
                </a>
            </li>
            <li>
                <a class="<?=is_page('return-and-refunds') ? 'active': '';?>" href="<?php echo get_permalink('return-and-refunds'); ?>">
                    <?php echo get_the_title(83) ?>
                </a>
            </li>
            <li>
                <a class="<?=is_page('payment-security') ? 'active': '';?>" href="<?php echo get_permalink('payment-security'); ?>">
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