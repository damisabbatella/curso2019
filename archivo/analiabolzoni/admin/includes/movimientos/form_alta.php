<div id="cerrar" onClick="cerrar()">X</div>
<div id="formulario">
  <div class="campos">
    <p>fecha</p>
    <input id="campo0" type="text" value="<?php echo  date ("Y-m-d"); ?>"/>
  </div>

  <div class="campos">
    <p>tipo</p>
    <select id="campo1">
    <option value="0">seleccione tipo</option>
    <option value="1">alta materiales</option>
    <option value="2">baja materiales</option>
    </select>
  </div>

  <div class="campos">
    <p>Producción a terceros</p>
    <select id="campo3">
    <option value="0">seleccione Tercero</option>
    <?php
    include("../inc_conectores.php");
  $sql="select * from terceros where status =1";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["local"].'</option>';
    }
  ?>
    </select>
  </div>

  <div class="campos">
    <p>Material</p>
    <select id="campo2">
    <option value="0">seleccione material</option>
    <?php
    include("../inc_conectores.php");
  $sql="select * from materiales where status =1";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
    }
  ?>
    </select>
  </div>
   <div class="campos">
    <p>Codigo  - Color</p>
    <input id="campo4o" type="text" size="1" onblur="marcacolor()">
    <input id="campo4" type="hidden" size="2" >
    <select id="campo4a" onchange="asignacolor()">

    <option value="0">seleccione color</option>
    <?php
    include("../inc_conectores.php");
  $sql="select * from colores where status =1";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["codigo"]." - ".$fila["nombre"].'</option>';
    }
  ?>
    </select>
  </div>
  <div class="campos">
    <p>cantidad</p>
    <input id="campo5" type="text"/>
  </div>
  <div class="campos">
    <p>observaciones</p>
    <input id="campo6" type="text"/>
  </div>
  
  <div class="campos">
    <input type="button" id="aceptar" value="Aceptar" onClick="validarmov(0)"/>
    <input type="button" id="cancelar" value="Cancelar" onClick="cerrar()"/>
  </div>
</div>
