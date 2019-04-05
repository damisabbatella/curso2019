<? include ("includes/inc_conectoresi.php");
 session_start();


?>

<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Curso[it]</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="js/jquery.js"></script>
    <script src="js/funcionesfront.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top fondo">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Cambiar navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Curso[it]</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

      
            
                            <ul class="nav navbar-nav navbar-right">
                    <li>
                        <p id="sesion"><?if($_SESSION){echo "  Bienvenido/a &nbsp; <i> "  . $_SESSION ["nombre"]."</i>";}?></p>
                    </li>
                    <li>
                        <a class="page-scroll" href="miscursos.php">Mis cursos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#cursos">Mensajes</a>

                    </li>

                    <li class="dropdown" 
                    >
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" >Mi perfil</a>
                        <ul class="dropdown-menu">
                          <li>ajuste de cuenta</li>  
<li>comprar creditos</li> 
 

                        </ul>
                    </li>
                   <li><a class="page-scroll" href="salir.php">salir</a></li> 
                    
                </ul>
                        
               

                   
              
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->

    </nav>
  
    <!-- Header -->
    <header>
        
    </header>

    <!-- Desarrollo -->
    

    <!-- Cursos -->
    <section id="cursos" class="bg-light-gray">
        <div class="container">
           
            <div class="row">
            <div class="col-lg-3">
            <ul class="list-group">
                        <?


                        
$sql="SELECT * from cursos where status=1";
$resultado=mysqli_query($con,$sql);
$sql1="SELECT * from rel_cursos_alumnos where idalumno=".$_SESSION["idusuario"];
$resultado1=mysqli_query($con,$sql1);
$cantidad=mysqli_num_rows($resultado1);
while($fila=mysqli_fetch_assoc($resultado)){

                    ?>

                    <li class="list-group-item" onclick="mostracurso(<?=$fila["id"]?>)"><span id="cursos" class="badge"><?=$cantidad?></span> <button class="btn btn-info btn-lg"><?=$fila["curso"] ?></button></li>

                <?} 

                ?>
                </ul>
                </div>
                    <div class="col-lg-9 text-center">
                    <h2 class="section-heading">Cursos</h2>
                    <h3 class="section-subheading text-muted">Todo lo que necesitas aprender para ser un Desarrollador Web.</h3>
                    <div class="col-lg-12 text-center" id="numero">
                       
<h3>Estas inscripto en</h3>
</br>
</br>  
<div class="col-lg-12">

 

  </div>
</div>
</div>








 





</div>


                    </div>
                     

                </div>
            </div>

        </div>
</div>
    </section>

    <!-- Tarifas -->
    
    <!-- Preguntas -->
    
    
    <!-- Contacto -->
    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Curso IT 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacidad</a>
                        </li>
                        <li><a href="#">Condiciones de uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
      <?
$sql="SELECT * from cursos where status=1";
$resultado=mysqli_query($con,$sql);
while($fila=mysqli_fetch_assoc($resultado)){

                    ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?=$fila["id"]?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?=$fila["curso"]?></h2>
                            <p class="item-intro text-muted"><?=$fila["descripcion"]?></p>
                            <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                            <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                            <p>
                                <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> CERRAR VENTANA</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <? } ?>





<div class="container">
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="ventanainiciosesion" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Iniciar sesion</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" id="login" action="login.php" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input type="text" class="form-control" id="usuario" placeholder="Ingrese email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
              <input type="text" class="form-control" id="contrasena" placeholder="Ingrese contraseña">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Recordarme</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" onclick="login()"><span class="glyphicon glyphicon-off"></span> Ingresar</button>
          </form>
        </div>
        <div class="modal-footer">
          
          <p>No estas registrado? <a href="#" id="ventanaregistro1"> registrate</a></p>
          <p>Olvidaste <a href="#">tu contraseña ?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>

 <div class="container">
  
  <!-- Trigger the modal with a button -->
  

  <!-- Modal -->
  <div class="modal fade" id="ventanaregistrarse" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Registrate</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"></label>
              <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre">
            </div>
            <div class="form-group">
              <label for="psw"></label>
              <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido">
            </div>
            <div class="form-group" id="campoemail">
              <label  id="mensajeemail"></label>
              <input type="text" onblur="verificaemail()" class="form-control" id="correo" placeholder="Ingrese email">
            </div>
 <select  id="nacion" class="form-control">
  <option value="#">Seleccione pais</option>
              <?
$sql="SELECT * from pais";
$resultado=mysqli_query($con,$sql);
while($paises=mysqli_fetch_assoc($resultado)){



         ?>



             
              <option value="<?=$paises["id"]?>"><?=$paises["paisnombre"]?></option>
              
            

<? } ?> 
</select>
            <div class="form-group">
              <label for="psw"></label>
              <input type="password" class="form-control" id="contrasenat" placeholder="Ingrese contraseña">
            </div>
            <div class="form-group">
              <label for="psw"></label>
              <input type="password" class="form-control" id="contra1" placeholder="Ingrese contraseña">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" id="aceptar" >aceptar condiciones</label>
            </div>
              <button type="button" class="btn btn-success btn-block" onclick="registrar()">registrate</button>
          </form>
          <div id="mensajecampos"></div>
           <div id="mensajecampos1"></div>
        <div id="mensajedeemail"></div>
        <div id="mensajeformu"></div>
        </div>
        
      </div>
      
    </div>
  </div> 
</div>
<script>
$(document).ready(function(){
    $("#ventanainicio").click(function(){
        $("#ventanainiciosesion").modal();
    });
});
</script>

<script>
$(document).ready(function(){
    $("#ventanaregistro").click(function(){
        $("#ventanaregistrarse").modal();
    });
});
</script>

 <script>
$(document).ready(function(){

    $("#ventanaregistro1").click(function(){
        $("#ventanaregistrarse").modal();
    });
});
</script>   



</body>

</html>
