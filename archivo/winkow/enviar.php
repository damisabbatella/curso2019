<?php

$message="hola";

$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= 'From:winkow<info@cursoit.com>'. "\r\n";


mail("info@iterario.com","Notificacion Winkow ",$message,$headers);

?>