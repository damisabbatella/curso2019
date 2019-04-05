<?php
include("../inc_conectores.php");
$seleccionados=$_GET["seleccionados"];
$sel=explode("|",$seleccionados);
$id=$sel[0];
$sql="delete from  empleados where id=$id";
mysql_query($sql);
header("location:../../index.php");
?>