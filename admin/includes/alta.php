<?php
include("../includes/inc_conectoresi.php");
$datos = explode("|",$_POST["datos"]);
$col = explode("|",$_POST["columnas"]);
$tabla= $_POST["tabla"];

if($tabla=="alumnos"){      
	   

//echo $sql;

$contra=md5($datos[4]);

       $sql = "INSERT into alumnos 
       (nombre,apellido,email,pais,contrasena,status) 
       values
        ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$contra',1)";

mysqli_query($con,$sql);  

}

else{
$columnas="$col[0]";
     for ($i = 1; $i < count($col); $i++) {
              $columnas .=",$col[$i]";
           }
       $valores="'".$datos[0]."'";
     for ($i = 1; $i < count($col); $i++) {
              $valores .=",'".$datos[$i]."'";
           }
     
       $sql = "INSERT into $tabla ($columnas,status) values ($valores,1)";

mysqli_query($con,$sql);




}


?>




