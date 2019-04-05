<div id="cerrar" onClick="cerrar()">X</div>
<div id="formulario">
  <div class="campos">
    <p>fecha</p>
    <input id="campo0" type="text" value="<?php echo  date ("Y-m-d"); ?>"/>
  </div>

  <div class="campos">
    <p>cliente</p>
    <select id="campo1">
    <option value="0">seleccione cliente</option>
    <?php
    include("../inc_conectores.php");
  $sql="select * from clientes where status =1";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["local"].'</option>';
    }
  ?>
    </select>
  </div>
    <div class="campos">
    <p>estado</p>
    <select id="campo2">
    <option value="1" selected=selected>iniciado</option>
    <option value="2">preparado</option>
    <option value="3">entregado</option>
    <option value="5">finalizado</option>
    </select>
  </div>
  
  <div class="campos">
    <input type="button" id="aceptar" value="Aceptar" onClick="validar(0)"/>
    <input type="button" id="cancelar" value="Cancelar" onClick="cerrar()"/>
  </div>
</div>
