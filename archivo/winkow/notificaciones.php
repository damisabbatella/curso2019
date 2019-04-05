<?php
$message="hola";

$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= 'From:winkow<info@cursoit.com>'. "\r\n";


mail("edgardovillafane@gmail.com","Notificacion Winkow ipn5 arranque 9:50",$message,$headers);

require_once "lib/Braintree.php";

Braintree_Configuration::environment("sandbox");
Braintree_Configuration::merchantId("wrdp386h38trkkqy");
Braintree_Configuration::publicKey("gst2yh24w83vqxx7");
Braintree_Configuration::privateKey("5b7fa0fc566e3fbfa1e3f1ab03663e6d");

if(isset($_GET["bt_challenge"])) {
    echo(Braintree_WebhookNotification::verify($_GET["bt_challenge"]));
}


if(
    isset($_POST["bt_signature"]) &&
    isset($_POST["bt_payload"])
) {
    $webhookNotification = Braintree_WebhookNotification::parse(
        $_POST["bt_signature"], $_POST["bt_payload"]
    );

    $message =
        "[Webhook Received " . $webhookNotification->timestamp->format('Y-m-d H:i:s') . "] "
        . "Kind: " . $webhookNotification->kind . " | "
        . "Subscription: " . $webhookNotification->subscription->id . "\n";

    file_put_contents("/tmp/webhook.log", $message, FILE_APPEND);
}
/*
if(
    isset($_POST["bt_signature"]) &&
    isset($_POST["bt_payload"])
) {
    $webhookNotification = Braintree_WebhookNotification::parse(
        $_POST["bt_signature"], $_POST["bt_payload"]
    );

    $message =
        "[Webhook Received " . $webhookNotification->timestamp->format('Y-m-d H:i:s') . "] "
        . "Kind: " . $webhookNotification->kind . " | "
        . "Subscription: " . $webhookNotification->subscription->id . "\n";



mail("edgardovillafane@gmail.com","Notificacion Winkow ipn7 notificaciones funciona 9:50",$message,$headers);
}



mail("edgardovillafane@gmail.com","Notificacion Winkow ipn6 final 9:50",$message,$headers);

*/
?>