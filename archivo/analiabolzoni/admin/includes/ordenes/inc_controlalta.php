 <select id="campo2">
    <option value="0">hilado</option>
    <?php
    include("../inc_conectores.php");
  $sql="select *
  from materiales
  where status=1 ";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
    }
  ?>
    </select>
  </div>
 

   <div class="entrada">
    <select id="campo5">
    <option value="0">color</option>
     <?php
    include("../inc_conectores.php");
  $sql="select *
  from colores
  where status=1 ";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
    }
  ?>
    </select>
  </div>
  <div class="entrada">
    <input id="campo6" type="text" placeholder="cantidad" />
  </div>
  <div class="entrada">
    <input type="button" id="aceptar" value="AGREGAR" onClick="altamaterialorden(<?php echo $_POST['idorden']?>)"/>
    </div>
  <hr>


 <div class="entrada">
  <select id="campo2">
    <option value="0">producto</option>
    <?php
    include("../inc_conectores.php");
  $sql="select *
  from productos
  where status=1 ";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["titulo"].'</option>';
    }
  ?>
    </select>
  </div>
 
  <div class="entrada">
    <select id="campo4" >
    <option value="0">talle</option>
     <?php
    include("../inc_conectores.php");
  $sql="select *
  from talles
  where status=1 ";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
    }
  ?>
    </select>
  </div>
   <div class="entrada">
    <select id="campo5">
    <option value="0">color</option>
     <?php
    include("../inc_conectores.php");
  $sql="select *
  from colores
  where status=1 ";
  $res=mysql_query($sql);
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
    }
  ?>
    </select>
  </div>
  <div class="entrada">
    <input id="campo6" type="text" placeholder="cantidad" />
  </div>
  <div class="entrada">
    <input type="button" id="aceptar" value="AGREGAR" onClick="altaprendaorden(<?php echo $_POST['idorden']?>)"/>
    </div>
  <hr>