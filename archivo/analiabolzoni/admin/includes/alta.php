<?php
include("../includes/inc_conectores.php");
$datos = explode("|",$_POST["datos"]);
$col = explode("|",$_POST["columnas"]);
$tabla= $_POST["tabla"];

      
	   $columnas="$col[0]";
	   for ($i = 1; $i < count($col); $i++) {
              $columnas .=",$col[$i]";
           }
	     $valores="'".$datos[0]."'";
	   for ($i = 1; $i < count($col); $i++) {
              $valores .=",'".$datos[$i]."'";
           }
	   
       $sql = "INSERT into $tabla ($columnas,status) values ($valores,1)";

mysql_query($sql);

if($tabla=="movimientos"){
$consulta="select * from stockmateriales 
where idmaterial=$datos[2] and idpropietario=$datos[3] 
and idcolor=$datos[4]";
$res=mysql_query($consulta);
$existente=mysql_fetch_assoc($res);
	if(mysql_num_rows($res)==0){
	//nuevo producto agregado al stock
	$sql1="insert into stockmateriales 
	(idmaterial,idpropietario,idcolor,cantidad,status) 
	values 
	($datos[2],$datos[3],$datos[4],$datos[5],1)";
	mysql_query($sql1);

	}else{
	
		if($datos[1]==1){
			//se incrementa la cantidad existente en stock
		
			$cantactualizada=$existente["cantidad"]+$datos[5];
	
		}else{
			//se decrementa la cantidad existente en stock	
			$cantactualizada=$existente["cantidad"]-$datos[5];
		}

	$sqlinc="update stockmateriales set cantidad=$cantactualizada 
	where id=".$existente['id'];	
	mysql_query($sqlinc);
	}
}

if($tabla=="movimientosprod"){
$consulta="select * from stockproductos 
where idproductos=$datos[2] and idpropietario=$datos[3] 
and idcolor=$datos[5] and idtalle=$datos[4]";
$res=mysql_query($consulta);
$existente=mysql_fetch_assoc($res);
	if(mysql_num_rows($res)==0){
	//nuevo producto agregado al stock
	$sql1="insert into stockproductos 
	(idproductos,idpropietario,idtalle,idcolor,cantidad,status) 
	values 
	($datos[2],$datos[3],$datos[4],$datos[5],$datos[6],1)";
	mysql_query($sql1);

	}else{
	
		if($datos[1]==3){
			//se incrementa la cantidad existente en stock
		
			$cantactualizada=$existente["cantidad"]+$datos[6];
	
		}else{
			//se decrementa la cantidad existente en stock	
			$cantactualizada=$existente["cantidad"]-$datos[6];
		}

	$sqlinc="update stockproductos set cantidad=$cantactualizada 
	where id=".$existente['id'];	
	mysql_query($sqlinc);
	}
}

?>