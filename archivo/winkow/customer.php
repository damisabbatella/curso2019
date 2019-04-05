<?php

require_once "lib/Braintree.php";

Braintree_Configuration::environment("sandbox");
Braintree_Configuration::merchantId("wrdp386h38trkkqy");
Braintree_Configuration::publicKey("gst2yh24w83vqxx7");
Braintree_Configuration::privateKey("5b7fa0fc566e3fbfa1e3f1ab03663e6d");

$result = Braintree_Customer::create(array(
    "firstName" => $_POST["first_name"],
    "lastName" => $_POST["last_name"],
    "creditCard" => array(
        "number" => $_POST["number"],
        "expirationMonth" => $_POST["month"],
        "expirationYear" => $_POST["year"],
        "cvv" => $_POST["cvv"],
        "billingAddress" => array(
            "postalCode" => $_POST["postal_code"]
        )
    )
));

if ($result->success) {
    echo("Tarjeta Aprobada! <br>Cliente ID: " . $result->customer->id . "<br/><br/><br/>");
    echo("<a href='./subscriptionmensual.php?customer_id=" . $result->customer->id . "'>Suscripcion mensual U\$S 14.99 por mes</a>
        <br>
        <a href='./subscriptionanual.php?customer_id=" . $result->customer->id . "'>Suscripcion anual U\$S 9.99 por mes</a>");
} else {
    echo("Errores de validacion:<br/>");
    foreach (($result->errors->deepAll()) as $error) {
        echo("- " . $error->message . "<br/>");
    }
}
?>
