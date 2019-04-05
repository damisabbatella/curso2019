<?php
include("../../includes/inc_conectores.php");
$registros=explode("|", $_POST["seleccionados"]);
$tabla=$_POST["tabla"];
$col = explode("|",$_POST["columnas"]);
$sql="select * from $tabla where id=".$registros[1];
$resultado=mysql_query($sql);
$fila=mysql_fetch_assoc($resultado);
?>
<div id="cerrar" onClick="cerrar()">X</div>
<div class="campos">
    <p>local</p>
    <input id="campo0" type="text" value="<?php echo $fila[$col[0]] ?>"/>
  </div>
  <div class="campos">
    <p>responsable</p>
    <input id="campo1" type="text" value="<?php echo $fila[$col[1]] ?>"/>
  </div>
  <div class="campos">
    <p>razon social</p>
    <input id="campo2" type="text" value="<?php echo $fila[$col[2]] ?>"/>
  </div>
  <div class="campos">
    <p>dirección</p>
    <input id="campo3" type="text" value="<?php echo $fila[$col[3]] ?>"/>
  </div>
  <div class="campos">
    <p>teléfono</p>
    <input id="campo4" type="text" value="<?php echo $fila[$col[4]] ?>"/>
  </div>
  <div class="campos">
    <p>cuit</p>
    <input id="campo5" type="text" value="<?php echo $fila[$col[5]] ?>"/>
  </div>
  <div class="campos">
    <p>iva</p>
    <input id="campo6" type="text" value="<?php echo $fila[$col[6]] ?>"/>
  </div>
  <div class="campos">
    <p>codigo</p>
    <input id="campo7" type="text" value="<?php echo $fila[$col[7]] ?>"/>
  </div>
  <div class="campos">
    <input type="button" id="aceptar" value="Aceptar" onClick="validar(<?php echo $fila['id'] ?>)"/>
    <input type="button" id="cancelar" value="Cancelar" onClick="cerrar()"/>
  </div>


 </div>