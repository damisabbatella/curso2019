<?php
	/*
	Template Name: Winkow Custom
	*/


	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */


	 global $avia_config, $more;
	 
	$style 		= $avia_config['box_class'];
	$responsive	= avia_get_option('responsive_layout','responsive');
	$blank 		= isset($avia_config['template']) ? $avia_config['template'] : "";
	$headerS	= !$blank ? avia_header_setting() : "";
	$headerMenu = $responsive ? avia_get_option('header_menu','mobile_drop_down') : "";

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo " html_$style ".$responsive." ".$headerS;?> ">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php if(function_exists('avia_set_title_tag')) { echo avia_set_title_tag(); } ?></title>
<!-- page title, displayed in your browser bar -->

<?php

	/*
	 * outputs a rel=follow or nofollow tag to circumvent google duplicate content for archives
	 * located in framework/php/function-set-avia-frontend.php
	 */
	 if (function_exists('avia_set_follow')) { echo avia_set_follow(); }


	 /*
	 * outputs a favicon if defined
	 */
	 if (function_exists('avia_favicon'))    { echo avia_favicon(avia_get_option('favicon')); }

?>


<!-- add feeds, pingback and stuff-->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> RSS2 Feed" href="<?php avia_option('feedburner',get_bloginfo('rss2_url')); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<!-- mobile setting -->
<?php

if( strpos($responsive, 'responsive') !== false ) echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">';

?>


<?php

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */

	wp_head();
?>


<script>
function muestralogin(){
	
	if(document.getElementById("div_usuario").style.display=="block"){
	//document.getElementById("div_usuario").style.top="0px";
	setTimeout('document.getElementById("div_usuario").style.display="none"',300)
	
	}else{
	document.getElementById("div_usuario").style.display="block";
 
	//setTimeout('document.getElementById("div_usuario").style.top="40px"',100)	
		}
	}
function reproducir(){
	url=leer_cookie("urlcustom")
	document.getElementById("WMP").URL=url;
	document.getElementById("usuario_logueado").style.display="block"
document.getElementById("login").style.display="none"
	
	
	}	

</script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    	<script>
	    !window.jQuery && document.write('<script src="/jquery-1.4.3.min.js"><\/script>');
	</script>
<script src="/winkow.js" type="text/javascript"></script>
	<script type="text/javascript" src="/aspnet/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="/aspnet/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="/aspnet/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
</head>




<body id="top" <?php body_class($style." ".$avia_config['font_stack']." ".$blank); avia_markup_helper(array('context' => 'body')); ?> onload="reproducir()">

	<div id='wrap_all'>

		<?php if(!$blank){ ?>

        <header id='header' class=' header_color <?php avia_is_dark_bg('header_color'); echo " ".$headerMenu; ?>' <?php avia_markup_helper(array('context' => 'header','post_type'=>'forum'));?>>

            <?php
            
            if($responsive && $headerMenu == 'mobile_slide_out')
            {
            	echo '<a id="advanced_menu_toggle" href="#" '.av_icon_string('mobile_menu').'></a>';
	    		echo '<a id="advanced_menu_hide" href="#" 	'.av_icon_string('close').'></a>';
            }
            

            $social_args = array('outside'=>'ul', 'inside'=>'li', 'append' => '');

            //subheader, only display when the user chooses a social header
            if(strpos($headerS,'social_header') !== false)
            {
            ?>
            <?php
           include("/includes/inc_menusup.php");
		   ?>
            <div id='header_meta' class='container_wrap container_wrap_meta'>

                  <div class='container'>
                  <?php
                        /*
                        *	display the themes social media icons, defined in the wordpress backend
                        *   the avia_social_media_icons function is located in includes/helper-social-media-php
                        */

                        if(strpos($headerS,'bottom_nav_header') === false) avia_social_media_icons($social_args);

                        //display the small submenu
                        echo "<nav class='sub_menu' ".avia_markup_helper(array('context' => 'nav', 'echo' => false)).">";
                            $avia_theme_location = 'avia2';
                            $avia_menu_class = $avia_theme_location . '-menu';
                            $args = array(
                                'theme_location'=>$avia_theme_location,
                                'menu_id' =>$avia_menu_class,
                                'container_class' =>$avia_menu_class,
                                'fallback_cb' => '',
                                'container'=>'',
                                'echo' =>false
                            );

                            $nav  = wp_nav_menu($args);
                            echo $nav;

                            $phone = avia_get_option('phone');
                            $phone_class = !empty($nav) ? "with_nav" : "";
                            if($phone) echo "<div class='phone-info {$phone_class}'><span>{$phone}</span></div>";


                            /*
                            * Hook that can be used for plugins and theme extensions (currently: the wpml language selector)
                            */
                            do_action('avia_meta_header');
                        echo '</nav>';
                    ?>
                  </div>
            </div>

            <?php } ?>



            <div  id='header_main' class='container_wrap container_wrap_logo'>

                    <?php
                    /*
                    * Hook that can be used for plugins and theme extensions (currently:  the woocommerce shopping cart)
                    */
                    do_action('ava_main_header');

                    ?>

                    <div class='container'>

                        <?php
                        /*
                        *	display the theme logo by checking if the default logo was overwritten in the backend.
                        *   the function is located at framework/php/function-set-avia-frontend-functions.php in case you need to edit the output
                        */
                        echo avia_logo(AVIA_BASE_URL.'images/layout/logo.png', false, 'strong');


                            if(strpos($headerS,'social_header') !== false && strpos($headerS,'bottom_nav_header') !== false) avia_social_media_icons($social_args);

                        /*
                        *	display the main navigation menu
                        *   modify the output in your wordpress admin backend at appearance->menus
                        */
                            $extraOpen = $extraClose = "";
                            if(strpos($headerS,'bottom_nav_header') !== false){ $extraClose = "</div></div><div id='header_main_alternate' class='container_wrap'><div class='container'>";  }

                            echo $extraClose;

                            echo "<nav class='main_menu' data-selectname='".__('Select a page','avia_framework')."' ".avia_markup_helper(array('context' => 'nav', 'echo' => false)).">";
                                $avia_theme_location = 'avia';
                                $avia_menu_class = $avia_theme_location . '-menu';
                               if($_COOKIE["id_usuario"]!=""){
									if($_COOKIE["radio_propia"]=="SI"){$estado=44;}else{$estado=45;}
									}else{
										$estado=28;
										}
										
								
								
                                $args = array(
                                    'theme_location'	=> $avia_theme_location,
									'menu' 			    =>  $estado,
                                    'menu_id' 			=> $avia_menu_class,
                                    'container_class'	=> $avia_menu_class,
                                    'fallback_cb' 		=> 'avia_fallback_menu',
                                    'walker' 			=> new avia_responsive_mega_menu()
                                );
//echo $args["menu"];

                                wp_nav_menu($args);
                            echo '</nav>';

                            /*
                            * Hook that can be used for plugins and theme extensions
                            */
                            do_action('ava_after_main_menu');
                        ?>
                    <!-- end container-->
                    </div>



            <!-- end container_wrap-->
            </div>

            <div class='header_bg'></div>

        <!-- end header -->
        </header>

	<?php } //end blank check ?>
	<div id='maincustom'>

	

<link rel="stylesheet" type="text/css" href="../estilos.css" />
<link href="/player/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>


<title>Plataforma musical para Empresas by Winkow</title>





		<div class='container_wrap container_wrap_first  <?php avia_layout_class( 'main' ); ?>'>

			<div class='container'>


    <?php include("includes/inc_winkowcustom.php")?>
 
</div>
			

			

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->




<?php
		global $avia_config;
		$blank = isset($avia_config['template']) ? $avia_config['template'] : "";

		//reset wordpress query in case we modified it
		wp_reset_query();


		//get footer display settings
		$the_id 				= avia_get_the_id(); //use avia get the id instead of default get id. prevents notice on 404 pages
		$footer 				= get_post_meta($the_id, 'footer', true);
		$footer_widget_setting 	= !empty($footer) ? $footer : avia_get_option('display_widgets_socket');


		//check if we should display a footer
		if(!$blank && $footer_widget_setting != 'nofooterarea' )
		{
			if( $footer_widget_setting != 'nofooterwidgets' )
			{
				//get columns
				$columns = avia_get_option('footer_columns');
		?>
				<div class='container_wrap footer_color' id='footer'>

					<div class='container'>

						<?php
						do_action('avia_before_footer_columns');

						//create the footer columns by iterating

						$firstCol = 'first';
				        switch($columns)
				        {
				        	case 1: $class = ''; break;
				        	case 2: $class = 'av_one_half'; break;
				        	case 3: $class = 'av_one_third'; break;
				        	case 4: $class = 'av_one_fourth'; break;
				        	case 5: $class = 'av_one_fifth'; break;
				        }

						//display the footer widget that was defined at appearenace->widgets in the wordpress backend
						//if no widget is defined display a dummy widget, located at the bottom of includes/register-widget-area.php
						for ($i = 1; $i <= $columns; $i++)
						{
							echo "<div class='flex_column $class $firstCol'>";
							if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer - column'.$i) ) : else : avia_dummy_widget($i); endif;
							echo "</div>";
							$firstCol = "";
						}

						do_action('avia_after_footer_columns');

						?>


					</div>


				<!-- ####### END FOOTER CONTAINER ####### -->
				</div>

	<?php   } //endif nofooterwidgets ?>



			<!-- end main -->
			</div>

			<?php

			//copyright
			$copyright = avia_get_option('copyright', "&copy; ".__('Copyright','avia_framework')."  - <a href='".home_url('/')."'>".get_bloginfo('name')."</a>");

			// you can filter and remove the backlink with an add_filter function
			// from your themes (or child themes) functions.php file if you dont want to edit this file
			// you can also just keep that link. I really do appreciate it ;)
			$kriesi_at_backlink =	apply_filters("kriesi_backlink", " - <a href='http://www.kriesi.at'>Enfold Theme by Kriesi</a>");


			//you can also remove the kriesi.at backlink by adding [nolink] to your custom copyright field in the admin area
			if($copyright && strpos($copyright, '[nolink]') !== false)
			{
				$kriesi_at_backlink = "";
				$copyright = str_replace("[nolink]","",$copyright);
			}

			if( $footer_widget_setting != 'nosocket' )
			{

			?>

				<footer class='container_wrap socket_color' id='socket' <?php avia_markup_helper(array('context' => 'footer')); ?>>
                    <div class='container'>

                        <span class='copyright'><?php echo $copyright . $kriesi_at_backlink; ?></span>

                        <?php
                            echo "<nav class='sub_menu_socket' ".avia_markup_helper(array('context' => 'nav', 'echo' => false)).">";
                                $avia_theme_location = 'avia3';
                                $avia_menu_class = $avia_theme_location . '-menu';

                               if($_COOKIE["id_usuario"]!=""){
									if($_COOKIE["radio_propia"]=="SI"){$estado=44;}else{$estado=45;}
									}else{
										$estado=28;
										}
									echo "es".$estado;	
																
                                $args = array(
                                    'theme_location'	=> $avia_theme_location,
									'menu' 			    =>  $estado,
                                    'menu_id' 			=> $avia_menu_class,
                                    'container_class'	=> $avia_menu_class,
                                    'fallback_cb' 		=> 'avia_fallback_menu',
                                    'walker' 			=> new avia_responsive_mega_menu()
                                );
//echo $args["menu"];

                                wp_nav_menu($args);
                            echo "</nav>";
                        ?>

                    </div>

	            <!-- ####### END SOCKET CONTAINER ####### -->
				</footer>
<!-- ####### PLAYER ####### -->


<!-- ####### Efin PLAYER ####### -->




			<?php
			} //end nosocket check


		}
		else
		{
			echo "<!-- end main --></div>";
		} //end blank & nofooterarea check

		//display link to previeous and next portfolio entry
		echo avia_post_nav();

		echo "<!-- end wrap_all --></div>";


		if(isset($avia_config['fullscreen_image']))
		{ ?>
			<!--[if lte IE 8]>
			<style type="text/css">
			.bg_container {
			-ms-filter:"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $avia_config['fullscreen_image']; ?>', sizingMethod='scale')";
			filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $avia_config['fullscreen_image']; ?>', sizingMethod='scale');
			}
			</style>
			<![endif]-->
		<?php
			echo "<div class='bg_container' style='background-image:url(".$avia_config['fullscreen_image'].");'></div>";
		}
	?>


<?php




	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */


	wp_footer();


?>
<a href='#top' id='scroll-top-link' <?php echo av_icon_string( 'scrolltop' ); ?>></a>
<div id="fb-root"></div>
<a id="inline" href="#divSucursales"></a>

<div id="divSucursales" style="width:200px;height:220px;overflow:auto;position:absolute; z-index:10000; left:50%;top:40px;margin-left:200px;background-color:#FFF;box-shadow:1px 1px 2px rgba(0,0,0,0.5);display:none" >
Seleccione la sucursal:<br />
<select multiple="multiple" id="lstSucursales" onchange="if (this.selectedIndex != -1) seleccionar_sucursal()" size="10">
</select>
</div>

<div id="zocalocustom">
<div id="contzocalo">
<div id="logocustomzocalo"></div>
<div id="logosclientescustom"><img src="/images/wkw-custom/logosclientes/<?php echo $_COOKIE["id_empresa"] ?>-logo.jpg" width="182" height="72"></div>
<div id="playerwinzocalo">
<script>
      if(-1 != navigator.userAgent.indexOf("MSIE"))
      {
        document.write('<div align="center" style="width:100%"><OBJECT id="WMP"');
        document.write(' classid="clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6"');
        document.write(' width="515" height="70"><PARAM NAME="ShowControls" VALUE="false"><PARAM NAME="uiMode" VALUE="mini"></OBJECT></div>');
      }
      else 
      {
        document.write('<div align="center" style="width:100%"><OBJECT id="WMP"'); 
        document.write(' type="application/x-ms-wmp"'); 
        document.write(' width="515" height="70"><PARAM NAME="ShowControls" VALUE="true"><PARAM NAME="uiMode" VALUE="mini"></OBJECT></div>');
      }         
</script>
<script type="text/javascript" language="Javascript" event="PlayStateChange(NewState)" for="WMP">
	console.log('Estado:' + NewState);
	OnDSPlayStateChangeEvt(NewState);
</script>
</div>

</div>
</div>
</body>
</html>

