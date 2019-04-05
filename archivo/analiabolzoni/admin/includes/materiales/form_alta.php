<div id="cerrar" onClick="cerrar()">X</div>
<div id="formulario">
  <div class="campos">
    <p>titulo</p>
    <input id="campo0" type="text"/>
  </div>
  <div class="campos">
    <p>codigo</p>
    <input id="campo1" type="text"/>
  </div>
   <div class="campos">
    <p>categoria</p>
    <select id="campo2">
    <option value="0">seleccione categoria</option>
    <?php
    include("../inc_conectores.php");
  $sql="select * from categorias where status =1";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["titulo"].'</option>';
    }
  ?>
    </select>
  </div>
  <div class="campos">
    <p>unidad</p>
    <input id="campo3" type="text"/>
  </div>
      <div class="campos">
    <p>precio</p>
    <input id="campo4" type="text"/>
  </div>
  <div class="campos">
    <input type="button" id="aceptar" value="Aceptar" onClick="validar(0)"/>
    <input type="button" id="cancelar" value="Cancelar" onClick="cerrar()"/>
  </div>
</div>
