<?
session_start(); 

include("inc_conectoresi.php");

$sql="SELECT * from cursos where id=".$_POST["numero"];
$resultado=mysqli_query($con,$sql);
$fila=mysqli_fetch_assoc($resultado);


?>
<div class="col-lg-12">
<div class="col-lg-6"><img class="img-thumbnail" src="/img/portfolio/<?=$fila["imagen"]?>"/></div>	
<div class="col-lg-6">
	<div class="col-lg-12"><h1><?=$fila["curso"]?></h1></div>
	<?
$sql1="SELECT * from rel_cursos_alumnos where idcurso=".$_POST["numero"]." and idalumno=".$_SESSION['idusuario'];

$resultado1=mysqli_query($con,$sql1);

if(mysqli_num_rows($resultado1)==0){




	?>
	<div class="col-lg-12">usd 50</div>
	<div class="col-lg-12"><button class="btn btn-success btn-lg" onclick="inscripcion(<?=$fila["id"]?>,<?=$_SESSION["idusuario"]?>)">inscribirse</button></div>
	<div class="col-lg-12"><?=$fila["descripcion"]?></div>
<div class="col-lg-12" id="vercurso">

</div>

</div>
</div>
<?}else{
?>


<button class="btn btn-info btn-lg" id="cursob"><a href='vercurso.php?tipo=<?=$fila["id"]?>'>Ir al curso</button>



 <? }

mysqli_close($con);
  ?>


 
