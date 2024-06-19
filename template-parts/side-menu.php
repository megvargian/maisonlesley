<div class="side-menu">
    <nav>
        <ul>
            <li>
                <a class="active" href="#">
                    Contact Us
                </a>
            </li>
            <li>
                <a href="#">PSD2</a>
            </li>
            <li>
                <a href="#">
                    Special services
                </a>
            </li>
            <li>
                <a href="#">FAQs </a>
            </li>
            <li>
                <a href="#">Shipping </a>
            </li>
            <li>
                <a href="#">returns and refunds </a>
            </li>
            <li>
                <a href="#">Payment security </a>
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