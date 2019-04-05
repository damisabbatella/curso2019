
<?php 

/*

Template Name: plantilla actividades caso 7

*/





/** Header */

get_header();

?>
<div id="menu-lateral">
    <div id="menu-lateral">
    <ul id="navigationMenu">
      <li> <a class="inicio" href="http://seca.com.ar/sebascohenes/mapa-2"> </a>
        <div class="txtbotones">inicio</div>
      </li>
      <li> <a class="info" href="http://seca.com.ar/sebascohenes/bloque2/caso7-info"> </a>
        <div class="txtbotones">info</div>
      </li>
      <li> <a class="googlemaps" href="http://seca.com.ar/sebascohenes/bloque2/caso7-gmaps/"> </a>
        <div class="txtbotones">google maps</div>
      </li>
      <li> <a class="foto" href="http://seca.com.ar/sebascohenes/bloque2/caso7-galeria"> </a>
        <div class="txtbotones">fotos</div>
      </li>
      <li> <a class="video" href="http://seca.com.ar/sebascohenes/bloque2/caso7-video/"> </a>
        <div class="txtbotones">video</div>
      </li>
      <li> <a class="actividades" href="http://seca.com.ar/sebascohenes/bloque2/caso7-actividades/"> </a>
        <div class="txtbotones">actividades</div>
      </li>
    </ul>
  </div>
  </div>
<div id="fondo" class="caso7"></div>


<div id="content" class="site-content clearfix">



  <?php get_template_part( 'loop-meta' ); ?>

    

  <div class="container_16 clearfix">

    

    <div class="grid_16">

      

      <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

  <blockquote id="txtvideo">

          <?php contango_breadcrumbs(); ?>



          <?php if ( have_posts() ) : ?>

            

              <?php while ( have_posts() ) : the_post(); ?>

              

                <?php get_template_part( 'content', 'page' ); ?>

              

              <?php endwhile; ?>

            

          <?php else : ?>

                        

              <?php get_template_part( 'loop-error' ); ?>

            

          <?php endif; ?>

        
          </div><!-- #txtvideo -->

      </div><!-- #primary -->

    

    </div>



  </div><!-- .container_16 -->

  
</div><!-- #content -->

</body>

</html>

<?php //get_footer(); ?>