<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  

  <div class="entry-content clearfix">

  	<?php the_content(); ?>

  </div> <!-- end .entry-content -->

  

  <?php echo contango_link_pages(); ?>

  

</article> <!-- end #post-<?php the_ID(); ?> .post_class -->



<?php comments_template( '', true ); ?>