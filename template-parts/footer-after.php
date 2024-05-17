<?php 

$social_media = get_field('social_media', 'options');

?>

<div class="copyright_cont">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-md-6">
                <div class="copyright_text">
                    <span class="copyright_line"></span> Crafted with <i class="pulse fas fa-heart"></i><strong><a target="_blank" href="https://www.wearemaze.com/"> Maze</a></strong>
                </div>
            </div>
            <div class="col-6 col-md-6">
                <div class="social_links">
                    <a href="<?php echo $social_media['instagram'] ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/inc/assets/images/instagarm-footer.svg" alt="">
                    </a>
                    <a href="<?php echo $social_media['facebook'] ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/inc/assets/images/facebook-footer.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>