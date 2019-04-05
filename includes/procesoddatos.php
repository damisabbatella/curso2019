<?
session_start();

include("inc_conectoresi.php");
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["correo"];
$estado=$_POST["nacion"];
$codigo=rand(0,999999999);
$contrasena=md5($_POST["contrasenat"]);
//REALIZAR UN SELECT PARA VER SI EXISTE ESE EMAIL REGISTRADO
$sql1="SELECT * from alumnos where email='$email'";
$resultado1=mysqli_query($con,$sql1);
if(mysqli_num_rows($resultado1)==0){


$sql="insert into alumnos(nombre,apellido,email,pais,contrasena,confirmar,codigo,status)value('$nombre','$apellido','$email','$estado','$contrasena',0,'$codigo',1)";
mysqli_query($con,$sql);


//aca envio el email de confirmacion


$headers  = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From:Curso [it]<info@cursoit.com>'."\r\n";

$cuerpo ="

<div style='background-color:#f1f1f1;width:100%;height:682px;margin:0 auto;padding-top:10px;'>
<div style='width:95%;height:50px;margin:0 auto;
background-color:#3289e7;
	box-shadow: 2px 2px 2px #ccc;color:#fff;text-align:center;font-size:13px;line-height:50px;'>

<h1 style='color:#fff;text-align:center;font-size:20px;line-height:50px;'>Curso [it]</h1>


</div>
<div style='width:95%;height:400px;margin:0 auto;
background-color:#fff;border:#999 solid 1px;'>

<div style='width:85%;height:380px;margin:10px auto;
background-color:#fff;'>

Estimado/a ".$nombre."<br><br>
Haga click en el siguiente link o peguelo en la barra de direcciones de su navegador
<a href='http://www.cursoit.com/confirmar_registro.php?email=".$email."&codigo=".$codigo."'>http://www.cursoit.com/confirmar_registro.php?email=".$email."&codigo=".$codigo."</a><br><br>Saluda Atte.
CURSO IT</div></div>
</div>";

mail($email,"Confirmar registro", $cuerpo ,$headers);
echo 0;
//inicio la sesion
$_SESSION["idusuario"]=mysqli_insert_id($con);
$_SESSION["nombre"]=$nombre;
mysqli_close($con);
}else{echo 1;}
?>