  <?php
	include("../../includes/inc_conectores.php");
	$paso= $_POST['paso'];
	$pagina= $_POST['pagina'];
	$tabla=$_POST["tabla"];
	$columnas=$_POST["columnas"];
	$col = explode("|",$_POST["columnas"]);
	$clave= $_POST["clave"];
	$sel1="";
	$sel2="";
	$sel3="";
	if($clave==""){
		$buscador="";
	}else{
		$buscador=" and $col[0] like '%$clave%'";
	}
	include("../inc_paso.php"); 
	$sql = "select a.id,a.fecha,a.tipo,a.idproducto,a.idpropietario,a.cantidad,a.observaciones,a.status,
	 b.id, b.nommov, 
	 c.id, c.titulo producto,
	 d.id, d.nombre talle,
	 e.id, e.nombre color,
	 f.id, f.local propietario

	from $tabla a, tipomov b, productos c, talles d, colores e, terceros f
	where a.status=1 
	and b.id=a.tipo 
	and c.id=a.idproducto
	and d.id=a.idtalle 
	and e.id=a.idcolor 
	and f.id=a.idpropietario  
	$buscador limit $inicio,$paso";
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
      <div id="f<?php echo $cont?>" class="fila <?php echo $clase ?>">
        <div class="col1">
          
        </div>
        <div class="col8"><?php echo $fila[$col[0]] ?></div>
        <div class="col8"><?php echo $fila["nommov"] ?></div>
        <div class="col3"><?php echo $fila["producto"] ?></div>
        <div class="col8"><?php echo $fila["talle"] ?></div>
        <div class="col8"><?php echo $fila["color"] ?></div>
        <div class="col3"><?php echo $fila["propietario"] ?></div>
        <div class="col8"><?php echo $fila["cantidad"] ?></div>
        <div class="col8"><?php echo $fila["observaciones"] ?></div>
        
       
      </div>
	  <?php }
	  ?>
      <?php include("../inc_paginador.php"); ?>