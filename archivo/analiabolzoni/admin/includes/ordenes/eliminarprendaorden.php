<?php
include("../inc_conectores.php");
$iditem=$_POST["iditem"];


	$sql="delete from itemsorden where id=".$iditem;
	mysql_query($sql);
	

	
?>