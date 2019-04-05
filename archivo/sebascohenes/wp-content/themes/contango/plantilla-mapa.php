
<?php 

/*

Template Name: plantilla mapa

*/





/** Header */

get_header();

?>
<div id="fondo-mapa">

  
  <div id="localizaciones">
    <a href="http://seca.com.ar/sebascohenes/bloque1/caso1-info/" id="circulo1"><span>La argentina en el mundo global</span>1</a>
    <a href="http://seca.com.ar/sebascohenes/bloque1/caso2-info/" id="circulo2"><span>África en la mira de Europa</span>2</a>
    <a href="http://seca.com.ar/sebascohenes/bloque1/caso3-info/" id="circulo3"><span>Brasil: crecimiento económico y desarrollo humano</span>3</a>
    <a href="http://seca.com.ar/sebascohenes/bloque1/caso4-info/" id="circulo4"><span>La ayuda humanitaria en Chad</span>4</a>
    <a href="http://seca.com.ar/sebascohenes/bloque2/caso5-info/" id="circulo5"><span>Derrame de petroleo en el golfo de México</span>5</a>
    <a href="http://seca.com.ar/sebascohenes/bloque2/caso6-info/" id="circulo6"><span>Biocombustibles en China</span>6</a>
    <a href="http://seca.com.ar/sebascohenes/bloque2/caso7-info/" id="circulo7"><span>La lenta desaparición del Mar Aral</span>7</a>
    <a href="http://seca.com.ar/sebascohenes/bloque3/caso8-info/" id="circulo8"><span>China e India los paises más poblados</span>8</a>
    <a href="http://seca.com.ar/sebascohenes/bloque3/caso9-info/" id="circulo9"><span>Estados Unidos y Mexico, una relacion complicada</span>9</a>
    <a href="http://seca.com.ar/sebascohenes/bloque4/caso10-info/" id="circulo10"><span>Megalópolis en Estados Unidos y China</span>10</a>
    <a href="http://seca.com.ar/sebascohenes/bloque4/caso11-info/" id="circulo11"><span>La segregación residencial en Santiago de Chile</span>11</a>
    <a href="http://seca.com.ar/sebascohenes/bloque4/caso12-info/" id="circulo12"><span>La agricultura, entre la tradición
y las innovaciones tecnológicas</span>12</a>
    
  </div>
</div>

<div id="content" class="site-content clearfix">



  <?php get_template_part( 'loop-meta' ); ?>

    

  <div class="container_16 clearfix">

    

    <div class="grid_16">

      

      <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

        <div id="txt">

          <?php contango_breadcrumbs(); ?>



          <?php if ( have_posts() ) : ?>

            

              <?php while ( have_posts() ) : the_post(); ?>

              

                <?php get_template_part( 'content', 'page' ); ?>

              

              <?php endwhile; ?>

            

          <?php else : ?>

                        

              <?php get_template_part( 'loop-error' ); ?>

            

          <?php endif; ?>

        
          </div><!-- #txt -->
        </main><!-- #main -->

      </div><!-- #primary -->

    

    </div>



  </div><!-- .container_16 -->

  
</div><!-- #content -->

</body>

</html>

<?php //get_footer(); ?>