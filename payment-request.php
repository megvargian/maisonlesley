<?php
/**
 * Template Name: Payment Request
 */
session_start();
if(isset($_GET['id'])){
    $order_id = $_GET['id'];
}else{
    echo "<h2>Could not authenticate with payment gateway";
    die;
}
$order = new WC_Order( $order_id );
$order_data = $order -> get_data();
$order->update_status('proccessing', __( 'Awaiting cheque payment', 'woocommerce' ));
$items = $order -> get_items();
$endpointUrl = 'https://creditlibanais-netcommerce.gateway.mastercard.com/api/rest/version/60/merchant/';
$merchant_id = 'TEST05881900';
$username = "merchant." . $merchant_id;
$password = "bcd5cf4aaf48d9faffc6e4631e9e1c7a";
$all_item_description = '';
foreach($items as $item){
    $all_item_description .= $item->get_name() . ' ';
}
$data = array(
    "apiOperation" => "CREATE_CHECKOUT_SESSION",
    "interaction" => array("operation" => "PURCHASE"),
    "order" => array("currency" => $order_data['currency'] , "id" => $order_id, "amount" => $order_data['total'] ),
);

$data_string = json_encode($data);

$ch = curl_init( $endpointUrl . $merchant_id . '/session');
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

$result = curl_exec($ch);
curl_close($ch);

$result_ar = json_decode( $result, true );

if ( $result_ar['result'] == 'SUCCESS' ){
    $_unique_session = $result_ar['session']['id'];
}
if ( !$_unique_session ){
  echo "<h2>Could not authenticate with payment gateway";
  die;
}
?>
<html>
    <head>
        <script src="https://creditlibanais-netcommerce.gateway.mastercard.com/checkout/version/60/checkout.js"
                data-error="errorCallback"
                data-cancel="cancelCallback"
                data-complete="https://maisonlesley.com/checkout/order-received/<?php echo $order_id; ?>/?key=<?php echo $order_data['order_key'] ?>">
        </script>

        <script type="text/javascript">
            function errorCallback(error) {
                console.log(JSON.stringify(error));
                window.location = "https://maisonlesley.com/"
            }
            function cancelCallback() {
                console.log('Payment cancelled');
                window.location = "https://maisonlesley.com/"
            }

            Checkout.configure({
                merchant: '<?php echo $merchant_id; ?>',
                order: {
                    amount: '<?php echo $order_data['total']; ?>',
                    currency: '<?php echo $order_data['currency']; ?>',
                    description: "<?php echo $all_item_description; ?>",
                    id: "<?php echo $order_id; ?>",
                },
                session: {
                    id: "<?php echo $_unique_session; ?>",
                },
                interaction: {
                    operation: 'PURCHASE',
                    merchant: {
                        name: "Aqua Sante",
                        address: {
                            line1: "Park tower building, Independence street, Achrafieh, Beirut",
                            line2: ""
                        }
                    }
                }
            });
            //Checkout.showLightbox();
            Checkout.showPaymentPage();
        </script>
    </head>
</html>
