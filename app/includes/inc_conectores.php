<?php
//Me conecto a la base de datos
$host = "cursoit.db.12385338.hostedresource.com";
$usuario = "cursoit";
$contrasena = "Edgardo1971!";
$base = "cursoit";
$db=mysql_connect($host,$usuario,$contrasena);
mysql_query("SET NAMES 'utf8'");//configurar los acentos y la ñ en castellano
mysql_select_db($base,$db);
?>