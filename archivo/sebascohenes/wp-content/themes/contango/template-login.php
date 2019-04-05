<?php 

/*

Template Name: login

*/



/** Header */

/*get_header();*/

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />



<?php  wp_head();?>

</head>



<body style="overflow:hidden">


<div id="pagelogin" class="wrapper hfeed site">  



<div id="content" style="overflow:hidden">



  <?php get_template_part( 'loop-meta' ); ?>

    

  <div class="container_16 clearfix">

    

    <div class="grid_16">

      

      <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">
<div id="encabezado"><img src="imagenes/logo-estrada-login.png"></div>
       <div id="logo-geo">
    <img src="imagenes/logogeo4-login.png"/>
       </div>

<div id="formulario">
  <div id="usuario"><div>Usuario</div>
    <input type="text">
  </div>
  <div id="contrasena"><div>Contraseña</div>
    <input type="password">
  </div>
  <input type="button" id="boton" value="Entrar">
  <div id="registrate"><a href="#">registrate</a><a href="#">recupera tu contraseña</a> </div>
</div>

        

        </main><!-- #main -->

      </div><!-- #primary -->

    

    </div>



  </div><!-- .container_16-->
 <div id="filtro"></div>
  <video autoplay loop >
    <source src="imagenes/ciudad.mp4" type="video/mp4">
    <source src="imagenes/ciudad.webm" type="video/webm">
  </video>
</div><!-- #content -->

<!-- #content1 -->

</div>
</body>
</html>