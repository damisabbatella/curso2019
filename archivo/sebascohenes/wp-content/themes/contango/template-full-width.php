<?php 

/*

Template Name: Full Width Template

*/



/** Header */

get_header();

?>



<div id="content" class="site-content clearfix">



  <?php get_template_part( 'loop-meta' ); ?>

    

  <div class="container_16 clearfix">

    

    <div class="grid_16">

      

      <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

      

          <?php contango_breadcrumbs(); ?>



          <?php if ( have_posts() ) : ?>

            

              <?php while ( have_posts() ) : the_post(); ?>

              

                <?php get_template_part( 'content', 'page' ); ?>

              

              <?php endwhile; ?>

            

          <?php else : ?>

                        

              <?php get_template_part( 'loop-error' ); ?>

            

          <?php endif; ?>

        

        </main><!-- #main -->

      </div><!-- #primary -->

    

    </div>



  </div><!-- .container_16 -->

  <video autoplay loop >
    <source src="videos/ciudad.mp4" type="video/mp4">
    <source src="videos/ciudad.webm" type="video/webm">
  </video>
</div><!-- #content -->



<?php get_footer(); ?>