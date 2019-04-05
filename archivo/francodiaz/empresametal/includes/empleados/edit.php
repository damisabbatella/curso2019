<?php
include("../inc_conectores.php");
//selecciono de la base de datos el registro elegido
$id=$_POST["id"];
$sql="select * from empleados where id=".$id;
$resultado=mysql_query($sql);
$empleado=mysql_fetch_assoc($resultado);


?>       
        <div id="cerrar" onclick="cerrareditar()">X</div>
        <form class="col-md-6" action="includes/empleados/update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id ?>"/>
        <h4>ALTA</h4>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $empleado["nombre"] ?>">
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" class="form-control" name="apellido" value="<?php echo $empleado["apellido"] ?>">
            </div>
            <div class="form-group">
                <label>Dni</label>
                <input type="text" class="form-control" name="dni" value="<?php echo $empleado["dni"] ?>">
            </div>
            <div class="form-group">
                <button class="btn btn-info" type="submit">Enviar</button>
                <button class="btn btn-danger" onclick="cerrareditar()" type="button">Cancelar</button>
            </div>
            </form>