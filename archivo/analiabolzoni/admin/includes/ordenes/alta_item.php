<div id="cerrar" onClick="cerrar()">X</div>
<div id="formulario">
<div id="encabezado">
 <?php
    include("../inc_conectores.php");
    $sqlcon="select a.id idorden, a.fecha,  a.tejedor, a.estado,
    c.id, c.nomestado   
    from ordenes a, estados c 
    where a.id=".$_POST["idorden"]." and 
    c.id=a.estado
    ";
    $result=mysql_query($sqlcon);
    $cons=mysql_fetch_assoc($result);

   ?> 
  <h3>Orden de Trabajo n° <?php echo $cons["idorden"]?></h3>  
  <p>Tejedor: <?php echo $cons["tejedor"]?>  - <?php echo $cons["fecha"]?></p>
  
  
  <hr>
</div>

<div id="detalle">
     <div class="entrada"> 
 <?php 
    include("inc_controlalta.php");
  ?>  
  
  <h5>Material Entregado</h5>

   <?php 
    include("../inc_conectores.php");
$sql3 = "select a.id iditem ,a.idorden, a.idmaterial,a.idcolor,a.cantidad,
  b.id, b.nombre material,
  d.id, d.nombre color
  from itemsorden a, materiales b, colores d
  where 
  a.idorden = ".$_POST['idorden']." and
  b.id=a.idmaterial and
  d.id=a.idcolor  ";
  $res3 = mysql_query($sql3);
  $cont3 = 0;
  $subtotal=0;
  while ($fila3 = mysql_fetch_assoc($res3)){
  $cont3++;
  if($cont3 % 2 ==0){
    $clase3 = "clara";
  }else{
    $clase3 = "oscuro";
  }
  ?>
      <div id="f<?php echo $cont3?>" class="fila <?php echo $clase3 ?>">
        <div class="col1"><?php echo $fila3["cantidad"] ?></div>
        <div class="col2"><?php echo $fila3["material"] ?></div>
        <div class="col2"><?php echo $fila3["color"] ?></div>
        <div class="col1"><button onclick="eliminarmaterialorden(<?php echo $fila3["iditem"] ?>,<?php echo $_POST['idorden'] ?>,<?php echo $fila3["idmaterial"] ?>,<?php echo $fila3["idcolor"] ?>,<?php echo $fila3["cantidad"] ?>)">X</button></div>

        
       
      </div>
    <?php
     }

    ?>
    <hr>

    <h5>Prendas Solicitadas</h5>

   <?php 
    include("../inc_conectores.php");
$sql3 = "select a.id iditem ,a.idorden, a.idproducto,a.idtalle,a.idcolor,a.cantidad,
  b.id, b.titulo producto, b.precio, 
  c.id, c.nombre talle,
  d.id, d.nombre color
  from itemsorden a, productos b, talles c, colores d
  where 
  a.idorden = ".$_POST['idorden']." and
  b.id=a.idproducto and
  c.id=a.idtalle and 
  d.id=a.idcolor  ";
  $res3 = mysql_query($sql3);
  $cont3 = 0;
  $subtotal=0;
  while ($fila3 = mysql_fetch_assoc($res3)){
  $cont3++;
  if($cont3 % 2 ==0){
    $clase3 = "clara";
  }else{
    $clase3 = "oscuro";
  }
  ?>
      <div id="f<?php echo $cont3?>" class="fila <?php echo $clase3 ?>">
        <div class="col1"><?php echo $fila3["cantidad"] ?></div>
        <div class="col2"><?php echo $fila3["producto"] ?></div>
        <div class="col1"><?php echo $fila3["talle"] ?></div>
        <div class="col2"><?php echo $fila3["color"] ?></div>
        <div class="col1"><button onclick="eliminarprenda(<?php echo $fila3["iditem"] ?>,<?php echo $_POST['idorden'] ?>,<?php echo $fila3["idproducto"] ?>,<?php echo $fila3["idtalle"] ?>,<?php echo $fila3["idcolor"] ?>,<?php echo $fila3["cantidad"] ?>)">X</button></div>

        
       
      </div>
    <?php
     }

    ?>
    <hr>

  </div>
  <div class="campos">
    <input type="button" id="aceptar" value="FINALIZAR" onClick="finalizar(<?php echo $_POST['idorden'] ?>)"/>
  </div>
</div>
