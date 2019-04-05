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
		$buscador=" and a.$col[0] like '%$clave%'";
	}
	include("../inc_paso.php"); 
	$sql = "select a.id idfila,a.fecha,a.idconsignatario,a.estado,a.fechaliq,a.status,
	b.id, b.local consignatario, 
	c.id, c.nomestado
	from $tabla a, consignatarios b, estados c
	where a.status=1 and
	b.id=a.idconsignatario and
	c.id=a.estado 
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
          <input id="check<?php echo $cont?>" type="checkbox" onClick="resaltar(<?php echo $cont?>)" value="<?php echo $fila['idfila']?>"/>
        </div>
        <div class="col3"><?php echo $fila[$col[0]] ?></div>
        <div class="col3"><?php echo $fila["consignatario"] ?></div>
        <div class="col4"><?php echo $fila["nomestado"] ?></div>
        <div class="col4"><?php echo $fila["fechaliq"] ?></div>
        <div class="col4">
        <?php
        if($fila['estado']==1){?>
        	<button onclick="nuevaprenda(<?php echo $fila['idfila']?>)">agregar prendas</button>
        <?php } ?>
         <?php
        if($fila['estado']==5){?>
        	<button onclick="verorden(<?php echo $fila['idfila']?>)">ver consignacion</button>
        	<button onclick="liquidarorden(<?php echo $fila['idfila']?>)">liquidar</button>
        <?php } 	
                if($fila['estado']==4){?>
        	<button onclick="verliquidacion(<?php echo $fila['idfila']?>)">ver liquidacion</button>

        <?php } ?>		
        </div>

        
       
      </div>
	  <?php }
	  ?>
       <?php include("../inc_paginador.php"); ?>