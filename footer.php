<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
</div><!-- #content -->
<footer>
    <section class="bg-white py-5 w-100 pt-md-5 pt-0">
        <div class="container d-md-block d-none">
            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="first-col">
                        <div>
                            <h5 class="mb-3">Corporate</h5>
                            <ul class="sub-menus-footer">
                                <li>Find a boutique</li>
                                <li>Careers</li>
                                <li>Size guide</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                    <div class="second-col">
                        <div>
                            <h5 class="mb-3">Legal Area</h5>
                            <ul class="sub-menus-footer">
                                <li>Privacy Policy</li>
                                <li>Cookie Policy</li>
                                <li>Your cookie prefrences</li>
                                <li>legal notes</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 third-col social-links">
                    <div class="row">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-social-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-0 col"></div>
            </div>
        </div>
        <section class="mobile-footer d-block d-md-none">
            <div class="accordion w-100" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header mt-0" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Corporate
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="sub-menus-footer">
                                <li>Find a boutique</li>
                                <li>Careers</li>
                                <li>Size guide</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header mt-0" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Legal Area
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="sub-menus-footer">
                                <li>Privacy Policy</li>
                                <li>Cookie Policy</li>
                                <li>Your cookie prefrences</li>
                                <li>legal notes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-bottom third-col social-links py-3">
                <ul class="d-flex justify-content-center align-items-center">
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-social-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </section>
    <?php  get_template_part('template-parts/footer', 'after'); ?>
</footer>
</div><!-- #page -->
<script>
    jQuery(document).ready(function($) {
    });
</script>
<?php wp_footer(); ?>
</body>
</html>