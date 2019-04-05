<?php
include("../inc_conectores.php");
echo "hola";
$sqlinc="update ventas set estado=6 
  where id=".$_POST['idconsignacion'];  
  echo $sqlinc;
  mysql_query($sqlinc);
	
?>