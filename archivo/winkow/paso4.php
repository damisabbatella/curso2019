<?php

require_once "lib/Braintree.php";

Braintree_Configuration::environment("sandbox");
Braintree_Configuration::merchantId("wrdp386h38trkkqy");
Braintree_Configuration::publicKey("gst2yh24w83vqxx7");
Braintree_Configuration::privateKey("5b7fa0fc566e3fbfa1e3f1ab03663e6d");

if($_GET["tipo"]==1){
    //mensual
    
        $planId="wkwambientmes".$_GET["sucursales"];
    
    }

if($_GET["tipo"]==2){
    //trimestral
     $planId="wkwambienttrimestre".$_GET["sucursales"];
}
if($_GET["tipo"]==3){
    //anual
     $planId="wkwambientanual".$_GET["sucursales"];
}

echo $planId;
try {
    $customer_id = $_GET["customer_id"];
    $customer = Braintree_Customer::find($customer_id);
    $payment_method_token = $customer->creditCards[0]->token;

    $result = Braintree_Subscription::create(array(
        'paymentMethodToken' => $payment_method_token,
        'planId' => $planId
    ));

    if ($result->success) {
        echo("Suscripcion realizadad correctamente! <br>
            Su plan es $planId<br>
            Codigo de Suscripcion " . $result->subscription->id . " <br>estado: " . $result->subscription->status);
?>
<h1>CREACION DE USUARIOS</h1>
<p>
    Crea los datosd e acceso para reproducir Winkow
</p>
Tu plan incluye dos usuarios

Usuario Administrador <br>
<input name="usuario" type="text" placeholder="Usuario 1"> <br>
<input name="contra1" type="password" placeholder="contra1"><br>
<input name="contra2" type="password" placeholder="contra2"><br>
<input name="suc1" type="texto" placeholder="Sucursal Asignada"><br>
<br>
USUARIOS ADICIONALES<br>
<input name="usuario2" type="text" placeholder="Usuario 2"> <br>
<input name="contra12" type="password" placeholder="contra12"><br>
<input name="contra22" type="password" placeholder="contra22"><br>
<input name="suc2" type="texto" placeholder="Sucursal Asignada"><br>

<button>Guardar Datos</button>
<?

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
