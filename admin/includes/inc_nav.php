<?session_start();


include("inc_conectoresi.php");



  

      ?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="index.html">Curso[it]</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav" id="nuevosmensajes">

            <?
            $sql="SELECT * from consultas where estado='enviado'";
$resultado=mysqli_query($con,$sql);
$nmensajes=mysqli_num_rows($resultado);
?>
           <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b> <?=$nmensajes?> consultas cursos</a>
                    <ul class="dropdown-menu message-dropdown">
                                 <?
        

while($fila=mysqli_fetch_assoc($resultado)){


            ?>
                
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                   
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?=$fila["nombre"]?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> <?=$fila["fecha"]?> a las <?=$fila["hora"]?></p>
                                        <p><?=$fila["consulta"]?></p>
                                    </div>
                                </div>
                                 <button type="button" class="btn btn-md btn-success" onClick="tuconsulta(<?=$fila["id"]?>)">Tu consulta</button>
                            </a>

                        </li>
                     
                        
                <?}?>
               
                        <input type="hidden" id="cantmensajes" value="<?=$nmensajes?>">
                    </ul>
                </li>
          <ul class="nav navbar-right top-nav" id="nuevomensajes">

            <?
            $sql="SELECT a.id idcomentario,a.idleccion,a.idusuario,a.fechapreg,a.pregunta,a.fecharesp,a.respuesta,a.estado,a.status,b.id,b.nombre from comentarios a,alumnos b where b.id= a.idusuario and estado='enviado'";
$resultado=mysqli_query($con,$sql);
$nmensajes=mysqli_num_rows($resultado);
?>
           <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-comment-o"></i> <b class="caret"></b> <?=$nmensajes?> comentarios cursos</a>
                    <ul class="dropdown-menu message-dropdown">
                                 <?
        

while($fila=mysqli_fetch_assoc($resultado)){


            ?>
                
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                   
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?=$fila["nombre"]?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> <?=$fila["fechapreg"]?></p>
                                        <p><?=$fila["pregunta"]?></p>
                                    </div>
                                </div>
                                 <button type="button" class="btn btn-md btn-success" onClick="tucomentario(<?=$fila["idcomentario"]?>)">Tu comentario</button>
                            </a>

                        </li>
                     
                        <?}?>
               
               
                        <input type="hidden" id="cantmensajes" value="<?=$nmensajes?>">
                    </ul>
                </li>
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Notificacion <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Notificacion <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Notificacion <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Notificacion <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Notificacion <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Notificacion <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  HOLA &nbsp;<?php echo $_SESSION["usuario"];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Bandeja Entrada</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="salir.php"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
                    
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse"> 
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Panel</a>
                    </li>
                    <li>
                        <a href="cursos.php"><i class="fa fa-fw fa-bar-chart-o"></i> Cursos</a>
                    </li>
                    <li>
                        <a href="capitulos.php"><i class="fa fa-fw fa-table"></i> Capitulos</a>
                    </li>
                    <li>
                        <a href="lecciones.php"><i class="fa fa-fw fa-edit"></i> Lecciones</a>
                    </li>
                    <li>
                        <a href="pruevas.php"><i class="fa fa-fw fa-desktop"></i>Pruebas </a>
                    </li>
                    <li>
                        <a href="alumnos.php"><i class="fa fa-fw fa-wrench"></i> Alumnos</a>
                    </li>
                    <li>
                        <a href="tareas.php"><i class="fa fa-fw fa-wrench"></i> Tareas</a>
                    </li>
                    <li>
                        <a href="usuarios.php"><i class="fa fa-fw fa-users"></i> Usuarios</a>
                    </li>
                    <li>
                        <a href="preguntas.php"><i class="fa fa-fw fa-wrench"></i> Preguntas</a>
                    </li>
                    <li>
                        <a href="consultas.php"><i class="fa fa-fw fa-wrench"></i> Consultas</a>
                    </li>
                    <li>
                        <a href="comentarios.php"><i class="fa fa-fw fa-wrench"></i> Comentarios</a>
                    </li>
                    <li>
                        <a href="recursos.php"><i class="fa fa-fw fa-wrench"></i> Recursos</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Desplegables <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Item 1</a>
                            </li>
                            <li>
                                <a href="#">Item 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="backup.php"><i class="fa fa-fw fa-file"></i> Backup</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i>Salir</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        