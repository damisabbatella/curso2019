<?php include("control.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listado</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<script src="js/funciones.js" type="text/javascript"></script>
</head>
<body>
<header>
  <h1>Analia Bolzoni</h1>
   </header>
<section>
  <aside>
    <nav>
       <?php include("includes/inc_menu.php") ?>
    </nav>
  </aside>
  <content>

    <h1>PANEL DE CONTROL</h1>
    <br>
    <h1>Materiales en stock</h1>
<div style="clear:both"></div>
    <div id="titulos">
      <div class="col1"></div>
      <div class="col9">MATERIAL</div>
      <div class="col3">CANTIDAD</div>
      <div class="col8 der">VALOR</div>
      <div class="col1"></div>
      <div class="col3"></div>
    
    </div>
  <?php
	include("includes/inc_conectores.php");
	$paso= 50;
	if(isset($_POST['pagina'])){
	$pagina= $_POST['pagina'];	
}else{$pagina=1;}

	$sel1="";
	$sel2="";
	$sel3="";
	
	$cant_filas = mysql_num_rows(mysql_query("select id from stockmateriales where status=1 "));
	$inicio=($paso*$pagina)-$paso;
	if($paso*$pagina>$cant_filas){
		$maximo=$cant_filas;
	}else{
		$maximo=$paso*$pagina;
	}
	if($paso==5){
		$sel1="selected='selected'";	
	}else if($paso==10){
		$sel2="selected='selected'";
	}else if($paso==15){
		$sel3="selected='selected'";
	}
	$sql = "select a.id,a.idmaterial,sum(a.cantidad) cantidad,a.idpropietario,a.status, 
	b.id, b.nombre, b.precio,
	c.id, c.local cliente,
	d.id, d.nombre color, d.codigo
	from stockmateriales a, materiales b, terceros c, colores d
	where a.status=1 
	and a.cantidad>0 
	and b.id=a.idmaterial 
	and c.id=a.idpropietario
	and d.id=a.idcolor 
	group by a.idmaterial 
    ";
	$res = mysql_query($sql);
	$cont = 0;
	while ($fila = mysql_fetch_assoc($res)){
	$cont++;
	if($cont % 2 ==0){
		$clase = "clara";
	}else{
		$clase = "oscuro";
	}
	?>
      <div id="f<?php echo $cont;?>" class="fila <?php echo $clase; ?>">
      <div class="col1"></div>
        <div class="col9"><?php echo $fila["nombre"]; ?></div>
         <div class="col3"><?php echo number_format($fila["cantidad"],3); ?></div>
        <div class="col8 der"><?php echo "$ ". (number_format($fila["cantidad"],3)*$fila["precio"]); ?></div>
        <div class="col1"></div>
        <div class="col3"><button onclick="detallestockmat(<?php echo $fila["idmaterial"]; ?>)">ver detalle</button></div>
        
        
       
      </div>
	  <?php }
	  ?>
      <div  style="clear:both; float:none; height:0; border-bottom:none;"></div>
      <div id="paginador">

      </div>
<br>
    <h1>Productos en stock</h1>
<div style="clear:both"></div>
    <div id="titulos">
      <div class="col1"></div>
      <div class="col9">PRODUCTO</div>
      <div class="col3">CANTIDAD</div>
      <div class="col8 der">VALOR</div>
      <div class="col1"></div>
      <div class="col3">PROPIETARIO</div>

    
    </div>
  <?php
	include("includes/inc_conectores.php");
	$paso= 50;
	if(isset($_POST['pagina'])){
	$pagina= $_POST['pagina'];	
}else{$pagina=1;}

	$sel1="";
	$sel2="";
	$sel3="";
	
	$cant_filas = mysql_num_rows(mysql_query("select id from stockproductos where status=1 "));
	$inicio=($paso*$pagina)-$paso;
	if($paso*$pagina>$cant_filas){
		$maximo=$cant_filas;
	}else{
		$maximo=$paso*$pagina;
	}
	if($paso==5){
		$sel1="selected='selected'";	
	}else if($paso==10){
		$sel2="selected='selected'";
	}else if($paso==15){
		$sel3="selected='selected'";
	}
	$sql = "select a.id,a.idproductos,sum(a.cantidad) cant,a.idtalle, a.idcolor, a.idpropietario, 
	b.id, b.titulo, b.precio,
	e.id, e.local propietario
	from stockproductos a, productos b, terceros e
	where a.cantidad>0 
	and b.id=a.idproductos
	and e.id=a.idpropietario 
	group by a.idproductos
	
    ";

	$res = mysql_query($sql);
	$cont = 0;
	while ($fila = mysql_fetch_assoc($res)){
	$cont++;
	if($cont % 2 ==0){
		$clase = "clara";
	}else{
		$clase = "oscuro";
	}
	?>
      <div id="f<?php echo $cont;?>" class="fila <?php echo $clase ;?>">
      <div class="col1"></div>
        <div class="col9"><?php echo $fila["titulo"] ;?></div>
        <div class="col3"><?php echo $fila["cant"] ;?></div>
        <div class="col8 der"><?php echo "$ ".$fila["cant"]*$fila["precio"] ;?></div>
        <div class="col1"></div>
        <div class="col3"><?php echo $fila["propietario"] ;?></div>
       
        
        
       
      </div>
	  <?php }
	  ?>
      <div  style="clear:both; float:none; height:0; border-bottom:none;"></div>
      <div id="paginador">

      </div>
  </content>
</section>
<div style="clear:both"></div>
<footer>Edgardo Villafañe 2015</footer>
<div id="fondo"></div>
<div id="ventana">
	
</div>
<input type="hidden" id="tabla" value="backup" />
</body>
</html>
