<?php
    include("inc_conectores.php");
  $sql="select a.idproductos, a.idcolor,a.idtalle, a.cantidad, sum(cantidad) as cant, 
  b.id, b.nombre 
  from stockproductos a, colores b
  where a.idproductos=".$_POST["producto"]." and
  a.idtalle=".$_POST["talle"]." and
  b.id=a.idcolor
  group by a.idcolor";
  $res=mysql_query($sql);
  echo '<option value="0">color</option>';
  while($fila=mysql_fetch_assoc($res)){
    echo '<option value="'.$fila["idcolor"].'" >'.$fila["nombre"].'('.$fila["cant"].')</option>';
    }
  ?>