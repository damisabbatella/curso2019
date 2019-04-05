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
    <option value="3">alta productos</option>
    <option value="4">baja productos</option>
    </select>
  </div>

 
  <div class="campos">
    <p>producto</p>
    <select id="campo2">
    <option value="0">seleccione producto</option>
    <?php
    include("../inc_conectores.php");
  $sql="select * from productos where status =1";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["titulo"].'</option>';
    }
  ?>
    </select>
  </div>

    <div class="campos">
    <p>propietario</p>
    <select id="campo3">
    <option value="0">seleccione propietario</option>
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
    <p>talle</p>
    <select id="campo4">
    <option value="0">seleccione talle</option>
    <?php
    include("../inc_conectores.php");
  $sql="select * from talles where status =1";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
    }
  ?>
    </select>
  </div>
      <div class="campos">
    <p>Codigo  - Color</p>
    <input id="campo5o" type="text" size="1" onblur="marcacolorp()">
    <input id="campo5" type="hidden" size="2" >
    <select id="campo5a" onchange="asignacolorp()">

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
    <input id="campo6" type="text"/>
  </div>
  <div class="campos">
    <p>observaciones</p>
    <input id="campo7" type="text"/>
  </div>
  
  <div class="campos">
    <input type="button" id="aceptar" value="Aceptar" onClick="validarprod(0)"/>
    <input type="button" id="cancelar" value="Cancelar" onClick="cerrar()"/>
  </div>
</div>
