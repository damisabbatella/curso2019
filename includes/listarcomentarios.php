<?
 include("inc_conectoresi.php");
session_start();

$sql="SELECT * from comentarios where status=2";
$resultado=mysqli_query($con,$sql);
while($listadocomentarios=mysqli_fetch_assoc($resultado)){
?>

                    <div class="col-lg-12$listadocomentarios['id']">
                   


<div class="col-lg-9"><?=$listadocomentarios["pregunta"]?></div>
<div class="col-lg-9"><?=$listadocomentarios["respuesta"]?></div>




</div>

<?}



?>