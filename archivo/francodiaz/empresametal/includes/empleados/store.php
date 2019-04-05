<?php
include("../inc_conectores.php");
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$dni=$_POST["dni"];

$sql="insert into empleados (nombre,apellido,dni,status) values ('$nombre', '$apellido', '$dni',1)";
mysql_query($sql);
header("location:../../index.php");
?>