<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$desg = $_POST['desg'];
		$sal = $_POST['salary'];
		
		require_once('dbConnect.php');
		
		$sql = "UPDATE employee SET name = '$name', designation = '$desg', salary = '$sal' WHERE id = $id;";
		
		if(mysqli_query($con,$sql)){
			echo 'actualizado correctamente';
		}else{
			echo 'No se realizó la actualización. Intentelo nuevamente';
		}
		
		mysqli_close($con);
	}