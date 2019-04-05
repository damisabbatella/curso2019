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
    <p>codigo</p>
    <input id="campo1" type="text" value="<?php echo $fila[$col[1]] ?>"/>
  </div>
  <div class="campos">
    <p>categoria</p>
    <select id="campo2">
    <option value="0">seleccione categoria</option>
    <?php
    include("../inc_conectores.php");
  $sql1="select * from categorias where status =1";
  $res=mysql_query($sql1);
  while($cat=mysql_fetch_assoc($res)){
    if($cat["id"]==$fila[$col[2]]){$sel="selected=selected";}else{$sel="";}
    echo '<option '.$sel.' value="'.$cat["id"].'">'.$cat["titulo"].'</option>';
    }
  ?>
    </select>
  </div>
  <div class="campos">
    <p>unidad</p>
    <input id="campo3" type="text" value="<?php echo $fila[$col[3]] ?>"/>
  </div>
  <div class="campos">
    <p>precio</p>
    <input id="campo4" type="text" value="<?php echo $fila[$col[4]] ?>"/>
  </div>
  
  <div class="campos">
    <input type="button" id="aceptar" value="Aceptar" onClick="validar(<?php echo $fila['id'] ?>)"/>
    <input type="button" id="cancelar" value="Cancelar" onClick="cerrar()"/>
  </div>


 </div>