<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="js/funciones.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0">
    <title>Empresa Metal</title>
</head>

<body>
    <div id="contenido">
        <div class="row col-md-12 encabezado">
            <h4 class="col-md-12">Empresa Metal</h4>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="list-group">
                <a href="#" class="list-group-item active">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
                <a href="#" class="list-group-item">Link</a>
            </div>
        </div>
        <div class="col-xs-12 col-md-10">
            <div class=" row comando">
                <form class="form-inline col-md-8">
                    <div class="form-group">
                        <input type="text" class="form-control" />
                        <button type="button" class="btn btn-default">buscar</button>
                        <button type="button" class="btn btn-default">mostrar todos</button>
                    </div>
                </form>
                <form class="form-inline col-md-4">
                    <div class="form-group">
                        <button type="button" class="btn btn-success" onclick="nuevo()">nuevo</button>
                        <button type="button" class="btn btn-info" onclick="editar()">editar</button>
                        <button type="button" class="btn btn-danger" onclick="borrar()">borrar</button>
                    </div>
                </form>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="check0" onclick="checkeartodo()" />
                        </th>
                        <th>id</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>dni</th>
                    </tr>
                </thead>
                <?php 
              //esto es codigo php
              //Me conecto a la base de datos
include("includes/inc_conectores.php");

$sql="select * from empleados";
$resultado=mysql_query($sql);
$cont=0;
while($fila=mysql_fetch_assoc($resultado)){
    $cont++;
              ?>  
                <tr>
                    <td>
                        <input type="checkbox" id="check<?php echo $cont ?>" value="<?php echo $fila["id"] ?>"/>
                    </td>
                    <td><?php echo $fila["id"] ?></td>
                    <td><?php echo $fila["nombre"] ?></td>
                    <td><?php echo $fila["apellido"] ?></td>
                    <td><?php echo $fila["dni"] ?></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <div id="fondo"></div>
    <div id="ventana">
<?php include("includes/empleados/create.php") ?>
    </div>
    <div id="ventanaeditar"></div>
    </form>
    </div>
    <input type="hidden" id="cantfilas" value="<?php echo mysql_num_rows($resultado) ?>">
</body>

</html>
