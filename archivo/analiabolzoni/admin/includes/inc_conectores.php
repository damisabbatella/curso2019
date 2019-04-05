<?php
//Me conecto a la base de datos
$host = "68.178.217.3";
$usuario = "analiabolzoni";
$contrasena = "Edgardo1971!";
$base = "analiabolzoni";
$db=mysql_connect($host,$usuario,$contrasena);
mysql_query("SET NAMES 'utf8'");//configurar los acentos y la ñ en castellano
mysql_select_db($base,$db);
?>