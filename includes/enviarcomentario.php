<?
 include("inc_conectoresi.php");
 $time=time();
$fechapreg=date("Y-m-d H:i:s", $time);

$sql="insert into comentarios(idleccion,idusuario,fechapreg,pregunta,estado,status)
value(".$_POST['idleccion'].",".$_POST['idalumno'].",'".$fechapreg."','".$_POST['pregunta']."','enviado',1)";
mysqli_query($con,$sql);
mysqli_close($con);
?>