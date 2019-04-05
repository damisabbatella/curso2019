<div id="headimg">



  <?php if ( get_header_image() ) : ?>

  

  <div id="logo-image">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
    
    
    <div id="logo-geo">
    <img src="images/logo-geo.png" width="800" height="145" /></div>

  </div><!-- end of #logo -->

  

  <?php else: ?>

  

  <div id="logo-text">

    <span class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
    <img src="wp-admin/images/logo.png"/><span class="site-description"><?php bloginfo( 'description' ); ?></span>

  </div><!-- end of #logo -->

  

  <?php endif; ?>



</div>