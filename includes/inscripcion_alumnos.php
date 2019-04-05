<?
 include("inc_conectoresi.php");
$sql="insert into rel_cursos_alumnos(idcurso,idalumno)value(".$_POST['numcurso'].",".$_POST['idusuario'].")";
mysqli_query($con,$sql);
mysqli_close($con);
?>
