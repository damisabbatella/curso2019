<?php
include("../includes/inc_conectores.php");

	   $col = explode("|",$_POST["columnas"]);
       $tabla = $_POST["tabla"];
       $datos = explode("|", $_POST["datos"]);
       $sql = "UPDATE $tabla SET $col[0]='" . $datos[0] . "'";
       for ($i = 1; $i < count($col); $i++) {
           $sql .= ", $col[$i]='" . $datos[$i] . "'";
       }
       $sql .= "where id=" . $_POST['seleccionados'];
	 
       mysql_query($sql);

?>