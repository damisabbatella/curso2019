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
    <p>nombre</p>
    <input id="campo0" type="text" value="<?php echo $fila[$col[0]] ?>"/>
  </div>
  <div class="campos">
    <p>direccion</p>
    <input id="campo1" type="text" value="<?php echo $fila[$col[1]] ?>"/>
  </div>
  <div class="campos">
    <p>telefono</p>
    <input id="campo2" type="text" value="<?php echo $fila[$col[2]] ?>"/>
  </div>
  <div class="campos">
    <p>codigo</p>
    <input id="campo3" type="text" value="<?php echo $fila[$col[3]] ?>"/>
  </div>
  <div class="campos">
    <input type="button" id="aceptar" value="Aceptar" onClick="validar(<?php echo $fila['id'] ?>)"/>
    <input type="button" id="cancelar" value="Cancelar" onClick="cerrar()"/>
  </div>


 </div>