<script>

function TamVentana() {
  var Tamanyo = [0, 0];
  if (typeof window.innerWidth != 'undefined')
  {
    Tamanyo = [
        window.innerWidth,
        window.innerHeight
    ];
  }
  else if (typeof document.documentElement != 'undefined'
      && typeof document.documentElement.clientWidth !=
      'undefined' && document.documentElement.clientWidth != 0)
  {
 Tamanyo = [
        document.documentElement.clientWidth,
        document.documentElement.clientHeight
    ];
  }
  else   {
    Tamanyo = [
        document.getElementsByTagName('body')[0].clientWidth,
        document.getElementsByTagName('body')[0].clientHeight
    ];
  }
  return Tamanyo;
}


function redimensiona() {
  var Tam = TamVentana();
  if(Tam[0]>840){
  var tamfuente=parseInt((Tam[0]*0.060))+"px";
document.getElementsByTagName("body")[0].style.fontSize=tamfuente

}
};
window.onload=redimensiona
window.onresize = redimensiona

function abre(imagen){
	document.getElementById("grande").style.opacity=0
	
	setTimeout(function(){
		document.getElementById("grande").src=imagen
	    document.getElementById("grande").style.opacity=1},300)
	
	}
	

</script>

<?php 

/*

Template Name: plantilla actividades caso 2

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
      <li> <a class="info" href="http://seca.com.ar/sebascohenes/bloque1/caso2-info"> </a>
        <div class="txtbotones">info</div>
      </li>
      <li> <a class="googlemaps" href="http://seca.com.ar/sebascohenes/bloque1/caso2-gmaps/"> </a>
        <div class="txtbotones">google maps</div>
      </li>
      <li> <a class="foto" href="http://seca.com.ar/sebascohenes/bloque1/caso2-galeria"> </a>
        <div class="txtbotones">fotos</div>
      </li>
      <li> <a class="video" href="http://seca.com.ar/sebascohenes/bloque1/caso2-video/"> </a>
        <div class="txtbotones">video</div>
      </li>
      <li> <a class="actividades" href="http://seca.com.ar/sebascohenes/bloque1/caso2-actividades/"> </a>
        <div class="txtbotones">actividades</div>
      </li>
    </ul>
  </div>
  </div>
<div id="fondo" class="caso2"></div>


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