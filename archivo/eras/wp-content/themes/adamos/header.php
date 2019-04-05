<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package adamos

 * @since adamos 2.0

 */

?><!DOCTYPE html>

<!--[if IE 8]>

<html id="ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 8) ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />



<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>

<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>

<![endif]-->



<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/adamos/css/estilos-responsive.css" type="text/css" />
<script src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/adamos/funciones.js" type="text/javascript" ></script>

</head>



<body <?php body_class(); ?><?php if(is_front_page()):?>onload="mover()"<?php endif; ?>  >
<?php if(is_front_page()):?>

<?php endif; ?>
<div id="uno">
  <div id="CONuno">
    <div id="SECuno1">contacto@eras.gov.ar</div>
    <div id="SECuno2">tel:0800-333-0200</div>
    <div id="SECuno3">ACCESIBILIDAD</div>
    <div id="SECuno4"  onClick="javascript:window.open('http://mail.eras.gov.ar:3000/')">INTRANET</div>
  </div>
</div>
<div id="wrap">

<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>

    <div id="masthead-wrap">

<header id="masthead" class="site-header header_container" role="banner">

    <?php if ( get_theme_mod( 'adamos_logo' ) ) : ?>

    <div class="site-logo">

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'adamos_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>

    </div>

<?php else : ?>



		<div class="site-introduction">

			<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<p class="site-description"><?php bloginfo( 'description' ); ?></p> 

		</div>

<?php endif; ?>


<div id="btnmovil"  onClick="menuM(1)">
        <div id="bar1" class="barritas"></div>
        <div id="bar2" class="barritas"></div>
        <div id="bar3" class="barritas"></div>
</div>
<nav id="nav" role="navigation" class="site-navigation1 main-navigation1">

			<h1 class="assistive-text"><?php _e( 'Menu', 'adamos' ); ?></h1>

			<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'adamos' ); ?>"><?php _e( 'Skip to content', 'adamos' ); ?></a></div>



			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

		</nav><!-- .site-navigation .main-navigation -->



	</header><!-- #masthead .site-header -->

	</div><!-- #masthead-wrap -->

    <div class="header-image">

	<?php $header_image = get_header_image();

		if ( ! empty( $header_image ) ) { ?>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

				<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />

			</a>

		<?php } // if ( ! empty( $header_image ) ) ?>

	</div>

    <?php if(is_front_page()):?>
<div id="tres">
  <div id="galeria">
    <div id="barraCONT">
      <div id="barraCAR"></div>
    </div>
    <div id="Gbotones">
      <div id="Gb1" class=" currentGb" onClick="correrIMG(0)"></div>
      <div id="Gb2" class="" onClick="correrIMG(1)"></div>
      <div id="Gb3" class="" onClick="correrIMG(2)"></div>
      <div id="Gb4" class="" onClick="correrIMG(3)"></div>
    </div>
    <div id="GbitextCONT">
      <div id="Gbimagtexto1"></div>
      <div id="Gbimagtexto2"></div>
    </div>
    <div id="Gbase">
      <div id="Gbaseimg1"></div>
      <div id="Gbaseimg2"></div>
      <div id="Gbaseimg3"></div>
      <div id="Gbaseimg4"></div>
    </div>
  </div>
</div>
<div id="cero">contáctenos 0800 333 0200</div>    
<div id="propacontenedor">
	<div id="propaCONT">
    	<div id="propaTOP" onClick="propa()"></div>
        <div id="propaBOT" onClick="propa()"></div>
    </div>
</div>
    

    <?php endif; ?>

	<div id="main" class="site-main">