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
		$buscador=" and a.titulo like '%$clave%'";
	}
	include("../inc_paso.php"); 
	$sql = "select a.id idfila, a.codigo, a.idcategoria, a.titulo, a.precio, a.preciomin, a.status, 
	b.id, b.titulo categoria
	from $tabla a, categorias b 
	where 
	a.status=1 and 
	b.id=a.idcategoria 
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
          <input id="check<?php echo $cont?>" type="checkbox" onClick="resaltar(<?php echo $cont?>)" value="<?php echo $fila['idfila'] ?>"/>
        </div>
        <div class="col9"><?php echo $fila[$col[0]] ?></div>
        <div class="col3"><?php echo $fila[$col[1]] ?></div>
        <div class="col3"><?php echo $fila["categoria"] ?></div>
        <div class="col3"><?php echo $fila[$col[3]] ?></div>
        <div class="col3"><?php echo $fila[$col[4]] ?></div>
        
       
      </div>
	  <?php }
	  ?>
      <?php include("../inc_paginador.php"); ?>