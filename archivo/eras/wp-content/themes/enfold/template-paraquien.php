<?php
	/*
	Template Name: Para quien
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
<link href="http://216.55.131.99:8900/player/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://216.55.131.99:8900/player/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="http://216.55.131.99:8900/player/js/jquery.jplayer.inspector.js"></script>
<script src="/winkow.js" type="text/javascript"></script>
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
	
function foco(){
	setTimeout('document.getElementById("usuario").focus()',50)
	}	

</script>
</head>




<body id="top" <?php body_class($style." ".$avia_config['font_stack']." ".$blank); avia_markup_helper(array('context' => 'body')); ?> onload="cargar(); muestrausuario()">

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

 <?php
           include("/includes/inc_menusup.php");
		   ?>

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
	<div id='main'>

	



<title>Plataforma musical para Empresas by Winkow</title>
<script>

function cargar(){
$("#jquery_jplayer_1").jPlayer({
	 
		ready: function () {
			
			
			$(this).jPlayer("setMedia", {
				
				mp3:"/demosradios/demo_popmania.mp3",
				oga:"/demosradios/oga/demo_alo.ogg"
			});
			
			
		},
		swfPath: "js",
		solution: 'html, flash',
		supplied: "mp3, oga",
		wmode: "window",
		smoothPlayBar: true,
		keyEnabled: true
		
		
		

		});
		//$("#jplayer_inspector").jPlayerInspector({jPlayer:$("#jquery_jplayer_1")});

}
function clogo(alto){
	if(document.getElementById("radiomark").value==0){
		//no esta marcado - tiene que volver a cero
		
		var logo=alto
	}else{
		//esta marcado - tiene que volver a posicion logo
		
		if(alto==0){var logo=document.getElementById("radiomark").value
			
			 }else{var logo=alto
			}
		}
	document.getElementById("logosplataforma").style.backgroundPosition="0px -"+logo+"px"
	
		}

function lge(gen){
      for(x=1;x<11;x++){
		document.getElementById("gen"+x).className="solapab";
		
	  }


	muestraradios(gen)
	
	}
	

function muestraradios(gen){

	for(x=1;x<11;x++){
		setTimeout('document.getElementById("contgen'+x+'").style.display="none"',200);
		document.getElementById("contgen"+x).style.opacity=0.2;
		
	  }
	
	//document.getElementById("contgen"+gen).style.display="block";
	setTimeout('document.getElementById("contgen'+gen+'").style.display="block"',200);
	setTimeout('document.getElementById("contgen'+gen+'").style.opacity=1',210);
	//document.getElementById("contgen"+gen).style.opacity=1;
	document.getElementById("gen"+gen).className="solapa"+gen;
	document.getElementById("contradios"+gen).className="radio"+gen;
	}
	
function playradio(radio,alto,gen){
	var radios= new Array("","Popmania","Rockola","Zoom","Okay","Blondie","Deejay","Neo","BPM","FX","Juno","Platinum","Moonlight","Eighties","Nikita","Rouge","Pinky","Sweet","Frida","Katmandu","Rocket","Legiao","Kingston","Graffiti","Underground","Memphis","Nashville","Cafe Ibiza","Tatoo","Touch and go","Delikatessen","Caramel","Trendy","Female","Rainbow","Jade","Shangrila","Fragile","Vaudeville","Jazzy","Scotch and soda","Manhattan","After hour","Piano bar","Village","Easy","Bossanostra","Noogie","Jumping","Ray","Swing","Foxtrot","Gatsby","Cottonclub","Dixie","Avalon","7 lunas","Feelings","Z 95","Le Coin","Club 74","Help","Ebony","Motown","Always","Rockabilly","Picnic","Oye tu","Alo","Babylon","Ji Jo","Muevete","Danzon","Inolvidable","Cantares","Slowly","Paradise","Melody","Lullaby","Splendor","Zen","Celtic","Malibu","Bongo","Opus","Pizzicato","Gala","Viena","Caruso","Diva","Pianissimo","Gotan","Pasional","Libertango","Tanghetto","Raices","Beija flor","Cidade","Ipanema","Saiba","Pigalle","Bistro","Cherie","Volare","Ciao","Fad omeu","Voyage","Travesia","Iupi","Kinder","Baby box","Gulubu")
	var archivos= new Array("","demo_popmania.mp3","demo_rockola.mp3","demo_zoom.mp3","demo_okay.mp3","demo_blondie.mp3","demo_deejay.mp3","demo_neo.mp3","demo_bpm.mp3","demo_fx.mp3","demo_juno.mp3","demo_platinum.mp3","demo_moonlight.mp3","demo_eighties.mp3","demo_nikita.mp3","demo_rouge.mp3","demo_pinky.mp3","demo_sweet.mp3","demo_frida.mp3","demo_katmandu.mp3","demo_rocket.mp3","demo_legiao.mp3","demo_kingston.mp3","demo_graffiti.mp3","demo_underground.mp3","demo_memphis.mp3","demo_nashville.mp3","demo_cafeibiza.mp3","demo_tatoo.mp3","demo_touchandgo.mp3","demo_delikatessen.mp3","demo_caramel.mp3","demo_trendy.mp3","demo_female.mp3","demo_rainbow.mp3","demo_jade.mp3","demo_shangrila.mp3","demo_fragile.mp3","demo_vaudeville.mp3","demo_jazzy.mp3","demo_scotchandsoda.mp3","demo_manhattan.mp3","demo_afterhour.mp3","demo_pianobar.mp3","demo_village.mp3","demo_easy.mp3","demo_bossanostra.mp3","demo_boogie.mp3","demo_jumping.mp3","demo_ray.mp3","demo_swing.mp3","demo_foxtrot.mp3","demo_gatsby.mp3","demo_cottonclub.mp3","demo_dixie.mp3","demo_avalon.mp3","demo_7lunas.mp3","demo_feelings.mp3","demo_z95.mp3","demo_lecoin.mp3","demo_club74.mp3","demo_help.mp3","demo_ebony.mp3","demo_motown.mp3","demo_always.mp3","demo_rockabilly.mp3","demo_picnic.mp3","demo_oyetu.mp3","demo_alo.mp3","demo_babylon.mp3","demo_jijo.mp3","demo_muevete.mp3","demo_danzon.mp3","demo_inolvidable.mp3","demo_cantares.mp3","demo_slowly.mp3","demo_paradise.mp3","demo_melody.mp3","demo_lullaby.mp3","demo_splendor.mp3","demo_zen.mp3","demo_celtic.mp3","demo_malibu.mp3","demo_bongobongo.mp3","demo_opus1.mp3","demo_pizzicato.mp3","demo_gala.mp3","demo_viena.mp3","demo_caruso.mp3","demo_diva.mp3","demo_pianissimo.mp3","demo_gotan.mp3","demo_pasional.mp3","demo_libertango.mp3","demo_tanghetto.mp3","demo_raices.mp3","demo_beijaflor.mp3","demo_cidade.mp3","demo_ipanema.mp3","demo_saiba.mp3","demo_pigalle.mp3","demo_bistro.mp3","demo_cherie.mp3","demo_volare.mp3","demo_ciao.mp3","demo_fadomeu.mp3","demo_voyage.mp3","demo_travesia.mp3","demo_iupi.mp3","demo_kinder.mp3","demo_babybox.mp3","demo_gulubu.mp3")
	

	document.getElementById("pie").style.bottom="0px";
	document.getElementById("nombreradio").innerHTML="Estás escuchando la demo de Estación "+radios[radio]
	
	document.getElementById("logosbarra").style.backgroundPosition="0px -"+parseInt((radio*50)-50)+"px"
	  


	// darle play
$("#jquery_jplayer_1").jPlayer("destroy");	
 $("#jquery_jplayer_1").jPlayer({
	 
		ready: function () {
			
			$(this).jPlayer("setMedia", {
				mp3:"/demosradios/"+archivos[radio]
			});
			$(this).jPlayer("play");
			
		},
		swfPath: "js",
		supplied: "mp3",
		wmode: "window",
		smoothPlayBar: true,
		keyEnabled: true
		});
	
	}	
	
</script>

		<div class='container_wrap container_wrap_first  <?php avia_layout_class( 'main' ); ?>'>

			


		<main class='template-page content  <?php avia_layout_class( 'content' ); ?> units' <?php avia_markup_helper(array('context' => 'content','post_type'=>'page'));?>>

                    <?php
                    /* Run the loop to output the posts.
                    * If you want to overload this in a child theme then include a file
                    * called loop-page.php and that will be used instead.
                    */

                    $avia_config['size'] = avia_layout_class( 'main' , false) == 'entry_without_sidebar' ? '' : 'entry_with_sidebar';
                    get_template_part( 'includes/loop', 'page' );
                    ?>

				<!--end content-->
				</main>
<div class='container'>
				<?php

				//get the sidebar
				$avia_config['currently_viewing'] = 'page';
				get_sidebar();

				?>



			

			

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

                                $args = array(
                                    'theme_location'=>$avia_theme_location,
                                    'menu_id' =>$avia_menu_class,
                                    'container_class' =>$avia_menu_class,
                                    'fallback_cb' => '',
                                    'depth'=>1
                                );

                                wp_nav_menu($args);
                            echo "</nav>";
                        ?>

                    </div>

	            <!-- ####### END SOCKET CONTAINER ####### -->
				</footer>
<!-- ####### PLAYER ####### -->


<div id="pie">
<div id="zocalodemo">
<div id="logosbarra"></div>
<div id="playerdemozocalo">
  <div id="jquery_jplayer_1" class="jp-jplayer"></div>
  <div id="jp_container_1" class="jp-audio">
  <div id="jplayer_inspector"></div>
    <div class="jp-type-single">
      <div class="jp-gui jp-interface">
        <ul class="jp-controls">
          <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
          <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
        </ul>
        <div class="jp-progress">
          <div class="jp-seek-bar">
            <div class="jp-play-bar"></div>
          </div>
        </div>
        <div class="jp-volume-bar">
          <div class="jp-volume-bar-value"></div>
        </div>
        <div id="parlantemenos"></div>
        <div id="parlantemas"></div>
        <div class="jp-time-holder">
          <div class="jp-current-time"></div>
          <div class="jp-duration"></div>
        </div>
      </div>
      <div class="jp-title">
        <ul>
          <li id="nombreradio"></li>
        </ul>
      </div>
      <div class="jp-no-solution"> <span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>. </div>
    </div>
  </div>
</div>
<div id="logoambientzocalo"></div>
</div>
</div>

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
</body>
</html>

