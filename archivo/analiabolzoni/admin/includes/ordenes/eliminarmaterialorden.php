<?php
include("../inc_conectores.php");
$iditem=$_POST["iditem"];
$material=$_POST["idmaterial"];
$color=$_POST["idcolor"];
$cantidad=$_POST["cantidad"];

	$sql="delete from itemsorden where id=".$iditem;
	mysql_query($sql);
	
//devolver al stock
//el propiertario de una consignacion es siempre el administrador es decir id 2 
	$consulta="select * from stockmateriales 
where idmaterial=$producto and idpropietario=2 
and idcolor=$color";
echo $consulta;
$res=mysql_query($consulta);
$existente=mysql_fetch_assoc($res);
$cantactualizada=$existente["cantidad"]+$cantidad;
$sqlinc="update stockmateriales set cantidad=$cantactualizada 
  where id=".$existente['id'];  
  mysql_query($sqlinc);
	
?>