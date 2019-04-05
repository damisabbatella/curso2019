<div id="cerrar" onClick="cerrar()">X</div>
<div id="formulario">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
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
   <p><h1><b>CONSIGNACION Analia Bolzoni</b></h1> <span class="der"><b>Fecha: </b><?php echo date_format(date_create($cons['fecha']), 'd/m/Y')?>&nbsp; &nbsp; &nbsp;<b> Nº:</b> <?php echo $cons["id"]?></span></p>
  <p><b>Local:</b> <?php echo $cons["local"]?>  </p><p>  <b>Razon Social:</b> <?php echo $cons["razon"]?></p>
  <p><b>CUIT:</b> <?php echo $cons["cuit"]?>  &nbsp; &nbsp; &nbsp; &nbsp;  <b>IVA: </b><?php echo $cons["iva"]?></p>
  <p><b>Direccion:</b> <?php echo $cons["direccion"]?> &nbsp;  <b>Telefono: </b><?php echo $cons["telefono"]?></p>
  <p class="lineaprint">_____________________________________________________________________</p>

</div>


  
 
  <div id="detalle">
  
  <h5>DETALLE DE LA CONSIGNACION</h5>
<div id="titulos">
        <div class="col1 der">UN</div>
        <div class="col2">PRENDA</div>
        <div class="col50">TALLE</div>
        <div class="col120">COLOR</div>
        <div class="col45">P.UNIT</div>
        <div class="col70 der">TOTAL</div>
        

        
       
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
        <div class="col1 der"><?php echo $fila3["cantidad"] ?></div>
        <div class="col2"><?php echo $fila3["producto"] ?></div>
        <div class="col50"><?php echo $fila3["talle"] ?></div>
        <div class="col120"><?php echo $fila3["color"] ?></div>
        <div class="col45"><?php echo "$ ".$fila3["precio"] ?></div>
        <div class="col70 der"><?php echo "$ ".$fila3["precio"]*$fila3["cantidad"] ?></div>
        

        
       
      </div>
    <?php
    $subtotal=$subtotal+($fila3["precio"]*$fila3["cantidad"]);
     }

    ?>
    <hr>
    <h3>TOTAL CONSIGNACION: $<?php echo $subtotal ?></h3> 
    <h3>PROXIMA LIQUIDACION: <?php echo date_format(date_create($cons['fechaliq']), 'd/m/Y')?></h3> 

  </div>
  <div class="campos">
    <input type="button" id="aceptar" value="IMPRIMIR" onClick="imprimir(<?php echo $_POST['idconsignacion'] ?>)"/>
  </div>
</div>
