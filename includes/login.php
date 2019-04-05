<?
include("inc_conectoresi.php");
 session_start();
$usuario=$_POST["usuario"];
$contrasena=md5($_POST["contrasena"]);

$sql="select * from alumnos where email='$usuario' and contrasena='$contrasena'";

$resultado=mysqli_query($con,$sql);

if(mysqli_num_rows($resultado)!=0){
	$fila=mysqli_fetch_assoc($resultado);
    //login correcto 
	$_SESSION["idusuario"]=$fila["id"];
	$_SESSION["nombre"]=$fila["nombre"];
	header("location:../miscursos.php");
		}else{
		header("location:../index.php?error=1");
		}
		
mysqli_close($con);

		
		
		
		
			
			
			
			
	?>