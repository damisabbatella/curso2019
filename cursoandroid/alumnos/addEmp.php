<?php 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Getting values
		$name = $_POST['name'];
		$desg = $_POST['desg'];
		$sal = $_POST['salary'];
		
		//Creating an sql query
		$sql = "INSERT INTO employee (name,designation,salary) VALUES ('$name','$desg','$sal')";
		
		//Importing our db connection script
		require_once('dbConnect.php');
		
		//Executing query to database
		if(mysqli_query($con,$sql)){
			echo 'agregado correctamente';
		}else{
			echo 'No se puede agregar ';
		}
		
		//Closing the database 
		mysqli_close($con);
	}