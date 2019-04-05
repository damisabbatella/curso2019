<?php
include("includes/inc_conectores.php");
$contrasena=md5($_POST["contrasena"]);

$sql="select * FROM usuarios  where email='".$_POST["usuario"]."' and password='$contrasena'";

	$result=mysql_query($sql); 

if( mysql_num_rows($result)==1){
	$fila = mysql_fetch_array($result);
	session_start(); 
     $_SESSION['usuario'] = $_POST["usuario"];
	 $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");
	 // verifico que este chequeado el recordarme
	 if(isset($_POST["recordarme"])){
//escribo la cookie que expira 2038
	 	setcookie("usuario",$_POST["usuario"],2147483647);


	 }
	 header("location:comentarios.php");	
	
}else{
	header("location:index.php?error=1");
	}

?>