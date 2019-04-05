<?php 
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base = "francodiaz";
$db=mysql_connect($host,$usuario,$contrasena);
mysql_query("SET NAMES 'utf8'");//configurar los acentos y la ñ en castellano
mysql_select_db($base,$db);

?>