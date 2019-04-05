<?
//aca enviamos el formulario 
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$asunto=$_POST["asunto"];
$mensaje=$_POST["mensaje"];

$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= 'From:info@pabloaraujo.com.ar'. "\r\n";
$headers .= 'Reply-to:'.$email. "\r\n";


$cuerpo="<div style='color:gray,font-size:10px'>Name: $nombre</div>";
$cuerpo.="<div style='color:blue;font-size:14px'>Telephone: $asunto</div>";
$cuerpo.="<div style='color:black,font-size:12px'>Sent by: $email</div>";
$cuerpo.="<div style='color:gray,font-size:10px'>Message: $mensaje</div>";


mail("info@iterario.com","Message from web ",$cuerpo,$headers);

echo "enviado";
?>