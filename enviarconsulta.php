<?
include("inc_conectores.php");
$time=time();
$fecha=date("Y-m-d", $time);
$hora= date("H:i:s",$time);
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$celular=$_POST["celular"];
$consulta=$_POST["consulta"];
$sql="insert into consultas (fecha,hora,nombre,email,telefono,consulta,estado,status) values ('$fecha','$hora','$nombre','$email','$celular','$consulta','enviado',1)";
mysqli_query($con,$sql);
//Una vez insertada la consulta inserto en otra tabla la consulta con hora dia idconsulta tabla mensajes

?>