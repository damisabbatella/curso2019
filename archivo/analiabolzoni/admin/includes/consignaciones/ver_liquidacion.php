<div id="cerrar" onClick="cerrar()">X</div>
<div id="formulario">
<div id="encabezado">
 <?php
    include("../inc_conectores.php");
    $sqlcon="select a.id, a.fecha, a.fechaliq, a.idconsignatario, a.estado,
    b.id,b.local, b.responsable, b.razon, b.direccion, b.telefono, b.cuit, b.iva,
    c.id, c.nomestado   
    from consignaciones a, consignatarios b, estados c 
    where a.id=".$_POST["idconsignacion"]." and 
    b.id=a.idconsignatario and
    c.id=a.estado
    ";
    $result=mysql_query($sqlcon);
    $cons=mysql_fetch_assoc($result);

   ?>  
  <p>Consignatario:<?php echo $cons["local"]?>  - <?php echo $cons["fecha"]?></p>
  <p>Direccion: <?php echo $cons["direccion"]?> - Telefono:<?php echo $cons["telefono"]?></p>
  
  <hr>
</div>


  
 
  <div id="detalle">
  
  <h5>DETALLE DE LA CONSIGNACION</h5>
<div id="titulos">
        <div class="col1 der">UN</div>
        <div class="col2">PRENDA</div>
        <div class="col50">TALLE</div>
        <div class="col70">COLOR</div>
        <div class="col45">P.UNIT</div>
        <div class="col70 der">TOTAL</div>
        <div class="col70">
        VEN &nbsp; DEV
        </div>

        
       
      </div>
   <?php 
    include("../inc_conectores.php");
$sql3 = "select a.id iditem ,a.idconsignacion, a.idproducto,a.idtalle,a.idcolor,a.cantidad,
  b.id, b.titulo producto, b.precio, 
  c.id, c.nombre talle,
  d.id, d.nombre color
  from items a, productos b, talles c, colores d
  where 
  a.idconsignacion = ".$_POST['idconsignacion']." and
  b.id=a.idproducto and
  c.id=a.idtalle and 
  d.id=a.idcolor  ";
  $res3 = mysql_query($sql3);
  $cont3 = 0;
  $items = "";
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
        <div class="col1 der" id="cantconsig<?php echo $fila3["iditem"] ?>"><?php echo $fila3["cantidad"] ?></div>
        <div class="col2"><?php echo $fila3["producto"] ?></div>
        <div class="col50"><?php echo $fila3["talle"] ?></div>
        <div class="col70"><?php echo $fila3["color"] ?></div>
        <div class="col45" id="precio<?php echo $fila3["iditem"] ?>"><?php echo $fila3["precio"] ?></div>
        <div class="col70 der"><?php echo $fila3["precio"]*$fila3["cantidad"] ?></div>
        <div class="col90">
        <input type="number" id="vendidos<?php echo $fila3["iditem"] ?>" max="<?php echo $fila3["cantidad"] ?>" min="0" class="cantliq" value="<?php echo $fila3["cantidad"] ?>" disabled="disabled"/> <input type="number" id="devueltos<?php echo $fila3["iditem"] ?>" max="<?php echo $fila3["cantidad"] ?>" min="0" class="cantliq" value="0" onChange="devolucion(<?php echo $fila3["iditem"] ?>)" disabled="disabled"/>
        </div>

        
       
      </div>
    <?php
    $subtotal=$subtotal+($fila3["precio"]*$fila3["cantidad"]);
      $items.= $fila3["iditem"]."|"; 
     }
     
    ?>
    <input type="hidden" id="items" value="<?php echo $items ?>">
    <hr>
    <h5>TOTAL CONSIGNACION: $<span id="totalconsignacion"><?php echo $subtotal ?></span></h5>  
    <h5>REMANENTE en LOCAL: $<span id="remanente">--</span></h5>
    <h5>TOTAL PRENDAS DEVUELTAS: $<span id="devueltas">--</span></h5>  
    <h3>TOTAL A PAGAR: $<span id="totalapagar">--</span></h3>
  </div>
  <div class="campos">
 
    <input type="button" id="aceptar" value="IMPRIMIR" onClick="imprimir(<?php echo $_POST['idconsignacion'] ?>)"/>
  </div>
</div>
