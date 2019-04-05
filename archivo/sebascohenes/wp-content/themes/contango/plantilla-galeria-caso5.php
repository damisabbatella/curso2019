

<?php 

/*

Template Name: plantilla galeria caso 5

*/





/** Header */

get_header();

?>
<script>

function activagaleria() {
document.getElementById("galeria").className="activo";
 setTimeout(function(){ document.getElementById("galeria").className="inactivo";},3000)
}

function abre(imagen){
	document.getElementById("grande").style.opacity=0
	
	setTimeout(function(){
		document.getElementById("grande").src=imagen
	    document.getElementById("grande").style.opacity=1},300)
	
	}
	

</script>

<div id="content" class="site-content clearfix">



  <?php get_template_part( 'loop-meta' ); ?>

    

  <div class="container_16 clearfix">

    

    <div class="grid_16">

      

      <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">
<div id="menu-lateral">
    <div id="menu-lateral">
    <ul id="navigationMenu">
      <li> <a class="inicio" href="http://seca.com.ar/sebascohenes/mapa-2"> </a>
        <div class="txtbotones">inicio</div>
      </li>
      <li> <a class="info" href="http://seca.com.ar/sebascohenes/bloque2/caso5-info"> </a>
        <div class="txtbotones">info</div>
      </li>
      <li> <a class="googlemaps" href="http://seca.com.ar/sebascohenes/bloque2/caso5-gmaps/"> </a>
        <div class="txtbotones">google maps</div>
      </li>
      <li> <a class="foto" href="http://seca.com.ar/sebascohenes/bloque2/caso5-galeria"> </a>
        <div class="txtbotones">fotos</div>
      </li>
      <li> <a class="video" href="http://seca.com.ar/sebascohenes/bloque2/caso5-video/"> </a>
        <div class="txtbotones">video</div>
      </li>
      <li> <a class="actividades" href="http://seca.com.ar/sebascohenes/bloque2/caso5-actividades/"> </a>
        <div class="txtbotones">actividades</div>
      </li>
    </ul>
  </div>
  </div>
          <div id="filtro-foto"><img id="grande" src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-1.jpg"  alt=""/></div>
  <div id="padregal">
  <div id="vermas"><img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/foto.png" width="40" height="37" /></div>
          <div id="galeria"> <blockquote id="contgal">
          
    <div id="img1" onclick="abre('http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-1.jpg')"><img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-1.jpg" width="140em" height="100em"/> </div>
    <div id="img2" onclick="abre('http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-2.jpg')"><img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-2.jpg" width="140em" height="100em"/> </div>
    <div id="img3" onclick="abre('http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-3.jpg')"><img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-3.jpg" width="140em" height="100em"/> </div>
     <div id="img4" onclick="abre('http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-4.jpg')"><img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-4.jpg" width="140em" height="100em"/> </div>
       <div id="img5" onclick="abre('http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-5.jpg')"><img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-5.jpg" width="140em" height="100em"/> </div>
    <div id="img6" onclick="abre('http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-6.jpg')"><img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/19253-05-6.jpg" width="140em" height="100em"/> </div>
    
    

          <?php contango_breadcrumbs(); ?>



          <?php if ( have_posts() ) : ?>

            

              <?php while ( have_posts() ) : the_post(); ?>

              

                <?php get_template_part( 'content', 'page' ); ?>

              

              <?php endwhile; ?>

            

          <?php else : ?>

                        

              <?php get_template_part( 'loop-error' ); ?>

            

          <?php endif; ?>

        
          </div><!-- #contgal -->

      </div><!-- #primary -->

    

    </div>



  </div><!-- .container_16 -->

  
</div><!-- #content -->

</body>
<script>
activagaleria();
</script>
</html>

<?php //get_footer(); ?>