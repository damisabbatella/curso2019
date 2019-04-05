<?php
//Me conecto a la base de datos
$host = "68.178.143.95";
$usuario = "cursoandroid";
$contrasena = "Edgardo1971!";
$base = "cursoandroid";
$con=mysqli_connect($host,$usuario,$contrasena,$base);
mysqli_query($con,"SET NAMES 'utf8'");//configurar los acentos y la ñ en castellano

?>