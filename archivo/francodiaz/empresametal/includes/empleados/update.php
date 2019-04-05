<?php
include("../inc_conectores.php");
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$dni=$_POST["dni"];
$id=$_POST["id"];

$sql="update empleados set nombre='$nombre',apellido='$apellido',dni='$dni' where id=$id";
mysql_query($sql);
header("location:../../index.php");
?>