<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="site main_page_wrapper">
    <div class="contiainer-fluid bg-black">
        <div class="row justify-content-between">
            <div class="col">
                <div>
                    <button>customer service</button>
                </div>
            </div>
            <div class="col">
                <a class="icon-pin d-flex" href="#">
                    <span>Find your nearest store</span>
                </a>
            </div>
        </div>
    </div>

<script>
    jQuery(document).ready(function($) {
    });
</script>
<div id="content" class="site-content">
