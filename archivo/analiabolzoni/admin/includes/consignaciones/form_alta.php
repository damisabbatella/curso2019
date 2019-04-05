<div id="cerrar" onClick="cerrar()">X</div>
<div id="formulario">
  <div class="campos">
    <p>fecha</p>
    <input id="campo0" type="text" value="<?php echo  date ("Y-m-d"); ?>"/>
  </div>

  <div class="campos">
    <p>consignatario</p>
    <select id="campo1">
    <option value="0">seleccione consignatario</option>
    <?php
    include("../inc_conectores.php");
  $sql="select * from consignatarios where status =1";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["local"].'</option>';
    }
  ?>
    </select>
  </div>
    <div class="campos">
    <input type="hidden" value="1" id="campo2">

  </div>
  <div class="campos">
    <p>fecha de liquidacion</p>
    <input id="campo3" type="text" value="<?php  echo date ( 'Y-m-d', strtotime ( '+30 day' , strtotime ( date ("Y-m-d")) ) )  ?>"/>
  </div>
  <div class="campos">
    <input type="button" id="aceptar" value="Aceptar" onClick="validar(0)"/>
    <input type="button" id="cancelar" value="Cancelar" onClick="cerrar()"/>
  </div>
</div>
