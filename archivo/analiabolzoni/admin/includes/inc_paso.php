
<?php 
$cant_filas = mysql_num_rows(mysql_query("select id from $tabla where status=1 $buscador"));
  $inicio=($paso*$pagina)-$paso;
  if($paso*$pagina>$cant_filas){
    $maximo=$cant_filas;
  }else{
    $maximo=$paso*$pagina;
  }
  if($paso==5){
    $sel1="selected='selected'";  
  }else if($paso==10){
    $sel2="selected='selected'";
  }else if($paso==15){
    $sel3="selected='selected'";
  }
  ?>