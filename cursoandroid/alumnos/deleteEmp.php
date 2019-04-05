<?php 
	$id = $_GET['id'];
	
	require_once('dbConnect.php');
	
	$sql = "DELETE FROM employee WHERE id=$id;";
	
	if(mysqli_query($con,$sql)){
		echo 'eliminado';
	}else{
		echo 'No se pudo eliminar el registro. Intente nuevamente';
	}
	
	mysqli_close($con);

?>	
