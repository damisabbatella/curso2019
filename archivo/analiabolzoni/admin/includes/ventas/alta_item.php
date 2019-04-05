<div id="cerrar" onClick="cerrar()">X</div>
<div id="formulario">
<div id="encabezado">
 <?php
    include("../inc_conectores.php");
    $sqlcon="select a.id, a.fecha,  a.idcliente, a.estado,
    b.id,b.local, b.responsable, b.razon, b.direccion, b.telefono, b.cuit, b.iva,
    c.id, c.nomestado   
    from ventas a, clientes b, estados c 
    where a.id=".$_POST["idconsignacion"]." and 
    b.id=a.idcliente and
    c.id=a.estado
    ";
    $result=mysql_query($sqlcon);
    $cons=mysql_fetch_assoc($result);

   ?>  
  <p>Cliente:<?php echo $cons["local"]?>  - <?php echo $cons["fecha"]?></p>
  <p>Direccion: <?php echo $cons["direccion"]?> - Telefono:<?php echo $cons["telefono"]?></p>
  
  <hr>
</div>


  
 
  <div id="detalle">
    <div class="entrada">
    <select id="campo2" onchange="filtratalle()">
    <option value="0">producto</option>
    <?php
    include("../inc_conectores.php");
  $sql="select a.idproductos,a.cantidad, sum(cantidad) as cant, b.id, b.titulo 
  from stockproductos a, productos b 
  where b.id=a.idproductos group by a.idproductos  ";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["idproductos"].'">'.$fila["titulo"].'('.$fila["cant"].')</option>';
    }
  ?>
    </select>
  </div>
 
  <div class="entrada">
    <select id="campo4" disabled="disabled" onchange="filtracolor()">
    <option value="0">talle</option>
    
    </select>
  </div>
   <div class="entrada">
    <select id="campo5" disabled="disabled" onchange="filtramaximo()">
    <option value="0">color</option>
    
    </select>
  </div>
  <div class="entrada">
    <input id="campo6" type="text" placeholder="cantidad" disabled="disabled"/>
  </div>
  <div class="entrada">
    <input type="button" id="aceptar" value="AGREGAR" onClick="altaitem(<?php echo $_POST['idconsignacion']?>)"/>
    </div>
  <hr>
  <h5>DETALLE DE LA VENTA</h5>

   <?php 
    include("../inc_conectores.php");
$sql3 = "select a.id iditem ,a.idventa, a.idproducto,a.idtalle,a.idcolor,a.cantidad,
  b.id, b.titulo producto, b.precio, 
  c.id, c.nombre talle,
  d.id, d.nombre color
  from itemsventas a, productos b, talles c, colores d
  where 
  a.idventa = ".$_POST['idconsignacion']." and
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
        <div class="col70"><?php echo $fila3["precio"] ?></div>
        <div class="col70"><?php echo $fila3["precio"]*$fila3["cantidad"] ?></div>
        <div class="col1"><button onclick="eliminarprenda(<?php echo $fila3["iditem"] ?>,<?php echo $_POST['idconsignacion'] ?>,<?php echo $fila3["idproducto"] ?>,<?php echo $fila3["idtalle"] ?>,<?php echo $fila3["idcolor"] ?>,<?php echo $fila3["cantidad"] ?>)">X</button></div>

        
       
      </div>
    <?php
    $subtotal=$subtotal+($fila3["precio"]*$fila3["cantidad"]);
     }

    ?>
    <hr>
    <h3>TOTAL VENTA: $<?php echo $subtotal ?></h3> 

  </div>
  <div class="campos">
    <input type="button" id="aceptar" value="FINALIZAR" onClick="finalizar(<?php echo $_POST['idconsignacion'] ?>)"/>
  </div>
</div>
