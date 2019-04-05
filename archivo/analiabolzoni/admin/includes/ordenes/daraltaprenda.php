 <?php
    include("../inc_conectores.php");

    $prenda=$_POST["prenda"];
    $talle=$_POST["talle"];
    $color=$_POST["color"];
    $cantidad=$_POST["cantidad"];
    $idorden=$_POST["idorden"];

    $sql="insert into itemsorden (idorden, idprenda, idtalle, idcolor, cantidad) 
    values ($idorden, $producto, $talle, $color, $cantidad)";
    mysql_query($sql);

    
  ?>  