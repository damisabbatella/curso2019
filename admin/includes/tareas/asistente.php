<?php
include("../../includes/inc_conectoresi.php");
$tabla=$_POST["alumnos"];
$buscador= $_POST["buscaralumnos"];



$sql="SELECT * from alumnos  where email like '%$buscador%' and status=1";
$res=mysqli_query($con,$sql);
while($fila=mysqli_fetch_assoc($res)){
	echo '<div id="email" onClick="validartareas(\''.$fila["email"].'\',\''.$fila["nombre"].'\')">'.$fila["email"]."</div>";
?>
<input type="hidden" id="alumno" name="alumno" value="<? echo $fila["nombre"]?>">

<?}


?>


