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
	$sql = "select id,$col[0],$col[1],$col[2],$col[3],$col[4],$col[5],$col[6],status from $tabla where status=1 $buscador limit $inicio,$paso";
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
          <input id="check<?php echo $cont?>" type="checkbox" onClick="resaltar(<?php echo $cont?>)" value="<?php echo $fila['id']?>"/>
        </div>
        <div class="col120"><?php echo substr($fila[$col[0]],0,12) ?></div>
        <div class="col120"><?php echo substr($fila[$col[1]],0,10) ?></div>
        <div class="col3"><?php echo substr($fila[$col[2]],0,18) ?></div>
        <div class="col3"><?php echo substr($fila[$col[3]],0,18) ?></div>
        <div class="col120"><?php echo substr($fila[$col[4]],0,12) ?></div>
        <div class="col2"><?php echo substr($fila[$col[6]],0,10) ?></div>
        <div class="col120"><?php echo substr($fila[$col[5]],0,19) ?></div>
       
      </div>
	  <?php }
	  ?>

      <?php include("../inc_paginador.php"); ?>
