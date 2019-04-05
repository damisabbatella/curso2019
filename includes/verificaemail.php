<?
include("inc_conectores.php");
$email=$_POST["correo"];

$sql="select * from alumnos where email='$email'";
$resultado=mysql_query($sql);
if(mysql_num_rows($resultado)==0){


echo 0;





}else{echo 1;}






?>