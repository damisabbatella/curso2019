<div id="cerrar" onClick="cerrar()">X</div>
<div id="titulos">
      <div class="col50">CAN</div>
      <div class="col150">MATERIAL</div>
      <div class="col210">COLOR</div>
      <div class="col8">PROPIETARIO</div>
    
    </div>
<?php
include("../inc_conectores.php");
$sql3 = "select a.id,a.idmaterial,a.cantidad,a.idpropietario,a.status, 
  b.id, b.nombre,
  c.id, c.local cliente,
  d.id, d.nombre color, d.codigo
  from stockmateriales a, materiales b, terceros c, colores d
  where a.status=1 
  and a.idmaterial=".$_POST["idmat"]."
  and a.cantidad>0 
  and b.id=a.idmaterial 
  and c.id=a.idpropietario
  and d.id=a.idcolor 
  ";
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
        <div class="col50 der"><?php echo $fila3["cantidad"] ?></div>
        <div class="col150"><?php echo $fila3["nombre"] ?></div>
        <div class="col210"><?php echo $fila3["codigo"] ?>-<?php echo $fila3["color"] ?></div>
        <div class="col8"><?php echo $fila3["cliente"] ?></div>

       

        
       
      </div>
 <?php   
}
    ?>
