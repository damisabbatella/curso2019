<?php
include("../includes/inc_conectores.php");
$sel=$_POST["seleccionados"];
$tabla=$_POST["tabla"];
$registros=explode("|", $sel);
for($x=0;$x<count($registros)-1;$x++){
	$sql="update $tabla set status=0 where id=".$registros[$x+1];
	mysql_query($sql);
	
}
?>