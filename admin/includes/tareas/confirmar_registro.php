<?php include("../../includes/inc_conectoresi.php");
$sql="SELECT * from tareas where id=".$_GET['id'];
$resultado=mysqli_query($con,$sql);
if(mysqli_num_rows($resultado)!=0){


$sql1="UPDATE tareas set estado=1 where id=".$_GET['id'];
mysqli_query($con,$sql1);
/*header("Location:http://www.cursoit.com");*/
}









?>