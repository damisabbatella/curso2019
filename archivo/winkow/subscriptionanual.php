<?php

require_once "lib/Braintree.php";

Braintree_Configuration::environment("sandbox");
Braintree_Configuration::merchantId("wrdp386h38trkkqy");
Braintree_Configuration::publicKey("gst2yh24w83vqxx7");
Braintree_Configuration::privateKey("5b7fa0fc566e3fbfa1e3f1ab03663e6d");

try {
    $customer_id = $_GET["customer_id"];
    $customer = Braintree_Customer::find($customer_id);
    $payment_method_token = $customer->creditCards[0]->token;

    $result = Braintree_Subscription::create(array(
        'paymentMethodToken' => $payment_method_token,
        'planId' => 'winanual'
    ));

    if ($result->success) {
        echo("Suscripcion realizadad correctamente! <br>
            Codigo de Subscription " . $result->subscription->id . " <br>estado: " . $result->subscription->status);
    } else {
        echo("Validation errors:<br/>");
        foreach (($result->errors->deepAll()) as $error) {
            echo("- " . $error->message . "<br/>");
        }
    }
} catch (Braintree_Exception_NotFound $e) {
    echo("Error: No se encuentra el cliente: " . $_GET["customer_id"]);
}
?>