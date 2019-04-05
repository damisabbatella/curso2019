
<?php
include("../inc_conectores.php");

$sqlinc="update consignaciones set estado=5 
  where id=".$_POST['idconsignacion'];  
  mysql_query($sqlinc);
	
?>