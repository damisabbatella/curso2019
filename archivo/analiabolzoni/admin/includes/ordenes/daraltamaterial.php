 <?php
    include("../inc_conectores.php");

    $material=$_POST["material"];
    $color=$_POST["color"];
    $cantidad=$_POST["cantidad"];
    $idorden=$_POST["idorden"];

    $sql="insert into itemsorden (idorden, idmaterial,  idcolor, cantidad) 
    values ($idorden, $material, $color, $cantidad)";
    mysql_query($sql);

    //debita del stock
    $consulta="select * from stockmateriales 
where idmaterial=$material and idpropietario=2 
and idcolor=$color";
$res=mysql_query($consulta);
$existente=mysql_fetch_assoc($res);
$cantactualizada=$existente["cantidad"]-$cantidad;
$sqlinc="update stockmateriales set cantidad=$cantactualizada 
  where id=".$existente['id'];  
  mysql_query($sqlinc);
  ?>  