<?php 

/*

Template Name: plantilla info

*/



/** Header */

get_header();

?>
<div id="fondo"></div>


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