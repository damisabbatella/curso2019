 <?php
    include("../inc_conectores.php");

    $producto=$_POST["producto"];
    $talle=$_POST["talle"];
    $color=$_POST["color"];
    $cantidad=$_POST["cantidad"];
    $idconsignacion=$_POST["idconsignacion"];

    $sql="insert into items (idconsignacion, idproducto, idtalle, idcolor, cantidad) 
    values ($idconsignacion, $producto, $talle, $color, $cantidad)";
    mysql_query($sql);

    //debita del stock
    $consulta="select * from stockproductos 
where idproductos=$producto and idpropietario=2 
and idcolor=$color and idtalle=$talle";
$res=mysql_query($consulta);
$existente=mysql_fetch_assoc($res);
$cantactualizada=$existente["cantidad"]-$cantidad;
$sqlinc="update stockproductos set cantidad=$cantactualizada 
  where id=".$existente['id'];  
  mysql_query($sqlinc);
  ?>  