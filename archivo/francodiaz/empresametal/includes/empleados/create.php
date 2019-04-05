        <div id="cerrar" onclick="cerrar()">X</div>
        <form class="col-md-6" action="includes/empleados/store.php" method="post" enctype="multipart/form-data">
        <h4>ALTA</h4>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>
            <div class="form-group">
                <label>Dni</label>
                <input type="text" class="form-control" name="dni">
            </div>
            <div class="form-group">
                <button class="btn btn-info" type="submit">Enviar</button>
                <button class="btn btn-danger" onclick="cerrar()">Cancelar</button>
            </div>
            </form>