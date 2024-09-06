<?php
/**
 * Template Name: Payment Request Completed
 */

if(isset($_GET['id'])){
    $order_id = $_GET['id'];
}else{
    echo "<h2>Could not authenticate with payment gateway";
    die;
}
$order = new WC_Order( $order_id );
$order->update_status( "completed" );
$order->reduce_order_stock();
$order_data = $order -> get_data();
$redirect = "https://gspa.me/checkout/order-received/" . $order_id."/?key=" . $order_data['order_key'];
header("Location: ". $redirect);