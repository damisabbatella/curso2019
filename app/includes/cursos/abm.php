  <?php
	include("../../includes/inc_conectoresi.php");
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
	$sql = "select id,$col[0],$col[1],$col[2],$col[3],$col[4],status 
	from $tabla where status=1 $buscador 
	order by $col[3] limit $inicio,$paso";
	$res = mysqli_query($con,$sql);
	$cont = 0;
	while ($fila = mysqli_fetch_assoc($res)){
	$cont++;
	if($cont % 2 ==0){
		$clase = "clara";
	}else{
		$clase = "oscuro";
	}
	?>
      <tr id="f<?php echo $cont?>" class="fila <?php echo $clase ?>">
        <td style="width:30px">
          <input id="check<?php echo $cont?>" type="checkbox" onClick="resaltar(<?php echo $cont?>)" value="<?php echo $fila['id']?>"/>
        </td>
        <td  class="col-md-1">
<?

$imagen=($fila[$col[4]]!="")?$fila[$col[4]]:"sinimagen.jpg";
?>
<img  class="img-thumbnail"src="../img/portfolio/<?php echo $imagen ?>"/>

  </td>        
  <td ><?php echo $fila[$col[0]] ?></td>
        <td ><?php echo $fila[$col[1]] ?></td>
              <td ><?php echo $fila[$col[2]]?></td>
         <td ><input type="text" class="campo" value="<?php echo $fila[$col[3]]?>" onblur="orden(<?=$fila["id"]?>,this.value)"/></td>
         
      </tr>
	  <?php }
	  ?>
      <?php include("../inc_paginador.php"); ?>