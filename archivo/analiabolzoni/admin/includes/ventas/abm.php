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
	$sql = "select a.id idfila,a.fecha,a.idcliente,a.estado,a.status,
	b.id, b.local cliente, 
	c.id, c.nomestado
	from $tabla a, clientes b, estados c
	where a.status=1 and
	b.id=a.idcliente and
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
        <div class="col3"><?php echo $fila["cliente"] ?></div>
        <div class="col4"><?php echo $fila["nomestado"] ?></div>
        <?php
        if($fila['estado']==1){?>
        <div class="col4"><button onclick="nuevaprenda(<?php echo $fila['idfila']?>)">agregar prendas</button></div>
        
        <?php }
     
                if($fila['estado']==6){?>
        <div class="col4"><button onclick="verventa(<?php echo $fila['idfila']?>)">ver</button></div>
        <?php } ?>
        
       
      </div>
	  <?php }
	  ?>
       <?php include("../inc_paginador.php"); ?>