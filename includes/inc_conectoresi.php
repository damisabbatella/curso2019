<?php
//Me conecto a la base de datos
$host = "cursoit.db.12385338.hostedresource.com";
$usuario = "cursoit";
$contrasena = "Edgardo1971!";
$base = "cursoit";
$con=mysqli_connect($host,$usuario,$contrasena,$base);
mysqli_query($con,"SET NAMES 'utf8'");//configurar los acentos y la ñ en castellano

?>