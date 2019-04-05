<? include ("inc_conectores.php"); ?>
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
    <nav class="navbar navbar-default navbar-fixed-top">
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

      
            
                            <ul class="nav navbar-nav navbar-right navbar1">

                    <li><a href="#" onclick="$('#ventanainiciosesion').modal()" ><i class="fa fa-lock navIcon1"></i>Iniciar Sesión</a></li>
                    <li ><a href="#"  onclick="$('#ventanaregistrarse').modal()"><i class="fa fa-user navIcon2"></i>Registrarme</a></li>
                   
                </ul>
                        
               

                   
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#desarrollo">Diseño y Desarrollo Web</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#cursos">Cursos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#tarifas">Tarifas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#preguntas">Preguntas Frecuentes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contacto">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->

    </nav>
  
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Un lugar para aprender Desarrollo Web!</div>
                <div class="intro-heading">Inscribite y empezá hoy mismo!</div>
                <a href="#contacto" class="page-scroll btn btn-xl">Consultar aqui</a>
            </div>
        </div>
    </header>

    <!-- Desarrollo -->
    <section id="desarrollo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cursos en video</h2>
                    <h3 class="section-subheading text-muted">Para aprender solo necesitás una computadora conectadad a internet. Una vez hecha la inscripción podes ver los videos, bajarte los PDF, hacer los ejercicios prácticos y por último un test en cada capítulo para probar tus conocimientos.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Preguntas al profesor </h4>
                    <p class="text-muted">De acuerdo al tipo de inscripción que hagas, podés enviarle preguntas al profesor y en 24 horas tendrás una respuesta. </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Clases en vivo on line</h4>
                    <p class="text-muted">Si necesitás conversar con el profesor, podés tener una video conferencia via skype + teamviewer totalmente personalizada, donde podés tratar todos los temas del curso o de tus desarrollos personales. </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Contenidos offline</h4>
                    <p class="text-muted">Bajate todos los contenidos para ver los videos sin conexión, estudiar los PDF y hacer las prácticas sin estar conectado a internet</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cursos -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cursos</h2>
                    <h3 class="section-subheading text-muted">Todo lo que necesitas aprender para ser un Desarrollador Web.</h3>
                </div>
            </div>
            <div class="row">
                        <?
$sql="SELECT * from cursos where status=1 order by orden";
$resultado=mysqli_query($con,$sql);
while($fila=mysqli_fetch_assoc($resultado)){

                    ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal<?=$fila["id"] ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/<?=$fila["imagen"] ?>" class="img-responsive" alt="">
                    </a>
                
                   
         
                    <div class="portfolio-caption">


                        <h4><?=$fila["curso"]?></h4>
                        <p class="text-muted"><?=$fila["descripcion"]?></p>
                    </div>
                </div>

              
                <?}?>
            </div>
        </div>
    </section>

    <!-- Tarifas -->
    <section id="tarifas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">TARIFAS</h2>
                    <h3 class="section-subheading text-muted">Podes elegir nuestros distintos servicios de acuerdo a tus necesidades</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">PLAN FREE</h4>
                    <p class="text-muted">Para acceder a los PDF donde encontraras toda la información para aprender desarrollo web</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">PLAN PLATA</h4>
                    <p class="text-muted">En este plan tenes acceso para ver los videos del curso, 10 preguntas al profesor durante 30 días. Acceso a los PDF y a los ejercicios prácticos y 1 test por cada capitulo</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">PLAN ORO</h4>
                    <p class="text-muted">En este plan tenés acceso a todos los videos del curso, para ver o descargar, preguntas ilimitadas y prioridad en el tiempo de respuesta durante 90 días. Download del manual completo en PDF. Podes repetir el test de cada capítulo cada 7 dias. Paquete de 4 horas de clase en vivo via skype con el profesor donde podés consultar todos los temas, inclusive de tus proyectos personales </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Preguntas -->
    <section id="preguntas" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Kay Garland</h4>
                        <p class="text-muted">Lead Designer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Contacto -->
    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contacto</h2>
                    <h3 class="section-subheading text-muted">Envianos tu consulta y en horario comercial te respondemos en el momento.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate action="enviarconsulta.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" Nombre *" id="name" name="nombre" required data-validation-required-message="Ingresa tu nombre completo.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" name="email" id="email" required data-validation-required-message="Ingresa tu email .">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="tu  Celular *" name="celular" id="phone" required data-validation-required-message="Ingresa tu celular.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mensaje *" name="consulta" id="message" required data-validation-required-message="Ingresa tu consulta."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar consulta</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
$sql="SELECT * from cursos where status=1 order by orden";
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
                            <img class="img-responsive img-centered" src="img/portfolio/<?=$fila["imagen"]?>" alt="">
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
          <form role="form" id="login" action="includes/login.php" enctype="multipart/form-data" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
              <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Ingrese contraseña">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Recordarme</label>
            </div>
              <button type="button" class="btn btn-success btn-block" onclick="login()"><span class="glyphicon glyphicon-off"></span> Ingresar</button>
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
         <div id="mensajecampos"></div>
         <div id="mensajecampos1"></div>
         <div id="mensajeformu"></div>
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
$resultado=mysql_query($sql);
while($paises=mysql_fetch_assoc($resultado)){



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
