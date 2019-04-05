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
	$sql = "select a.id,a.$col[0],a.$col[1],a.$col[2],a.$col[3],a.$col[4],a.$col[5],a.$col[6],a.status, 
	b.id, b.nommov, 
	c.id, c.nombre material, 
	d.id, d.local cliente, 
	e.id, e.nombre color
	from $tabla a, tipomov b, materiales c, clientes d, colores e 
	where a.status=1 
	and b.id=a.tipo 
	and c.id=a.idproducto 
	and d.id=a.idcliente
	and e.id=a.idcolor  
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
        <div class="col3"><?php echo $fila["material"] ?></div>
        <div class="col4"><?php echo $fila["cliente"] ?></div>
        <div class="col150"><?php echo $fila["color"] ?></div>
        <div class="col8"><?php echo $fila[$col[5]] ?></div>
        <div class="col150"><?php echo $fila[$col[6]] ?></div>
        
       
      </div>
	  <?php }
	  ?>
       <?php include("../inc_paginador.php"); ?>