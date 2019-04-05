<?
include("includes/inc_conectoresi.php");
$sql="select * from alumnos where codigo='".$_GET["codigo"]."' and email='".$_GET['email']."'";
$resultado=mysqli_query($con,$sql);
if(mysqli_num_rows($resultado)!=0){


$sql="UPDATE alumnos set confirmar=1 , codigo='' where email='".$_GET['email']."'";
mysqli_query($con,$sql);
header("Location:http://www.cursoit.com");
}else{echo"No se pudo corfirmar el email";}









?>