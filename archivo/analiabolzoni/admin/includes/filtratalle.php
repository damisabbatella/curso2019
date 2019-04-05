<?php
    include("inc_conectores.php");
  $sql="select a.idproductos, a.idtalle, a.cantidad, sum(cantidad) as cant, b.id, b.nombre 
  from stockproductos a, talles b 
  where a.idproductos=".$_POST["producto"]." and
  b.id=a.idtalle
  group by a.idtalle";
  $res=mysql_query($sql);
  echo '<option value="0">talle</option>';
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["idtalle"].'">'.$fila["nombre"].'('.$fila["cant"].')</option>';
    }
  ?>