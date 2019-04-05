<?php
include("includes/inc_conectores.php");


$sql="select * FROM usuarios  where email='".$_POST["usuario"]."' and contrasena='".$_POST["contrasena"]."' ";

	$result=mysql_query($sql); 

if( mysql_num_rows($result)==1){
	$fila = mysql_fetch_array($result);
	session_start(); 
     $_SESSION['usuario'] = $_POST["usuario"];
	 $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");	
	header("location:panel.php");
}else{
	header("location:index.php?error=1");
	}

?>