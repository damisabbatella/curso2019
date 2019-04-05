<?php
include("../inc_conectores.php");
$iditem=$_POST["iditem"];
$producto=$_POST["idproducto"];
$talle=$_POST["idtalle"];
$color=$_POST["idcolor"];
$cantidad=$_POST["cantidad"];

	$sql="delete from itemsventas where id=".$iditem;
	mysql_query($sql);
	
//devolver al stock
//el propiertario de una consignacion es siempre el administrador es decir id 2 
	$consulta="select * from stockproductos 
where idproductos=$producto and idpropietario=2 
and idcolor=$color and idtalle=$talle";
echo $consulta;
$res=mysql_query($consulta);
$existente=mysql_fetch_assoc($res);
$cantactualizada=$existente["cantidad"]+$cantidad;
$sqlinc="update stockproductos set cantidad=$cantactualizada 
  where id=".$existente['id'];  
  mysql_query($sqlinc);
	
?>