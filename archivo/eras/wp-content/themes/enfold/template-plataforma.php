<?php
	/*
	Template Name: Plataforma
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script src="/winkow.js" type="text/javascript"></script>
	<script type="text/javascript" src="/aspnet/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="/aspnet/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="/aspnet/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

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




<body id="top" <?php body_class($style." ".$avia_config['font_stack']." ".$blank); avia_markup_helper(array('context' => 'body')); ?> onload="lge(1); cargar(); muestrausuario()">

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
	<div id='mainplataforma'>

	

<link rel="stylesheet" type="text/css" href="/estilos.css" />
<link href="/player/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="/player/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/player/js/jquery.jplayer.inspector.js"></script>

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
	
	lge(gen);
	document.getElementById("pie").style.bottom="0px";
	document.getElementById("nombreradio").innerHTML="Estás escuchando la demo de Estación "+radios[radio]
	
	 /*aca desmarca las radios en platafoma*/
	  for(x=1;x<112;x++){
		document.getElementById("r"+x).className="inactivo";
		
	  }
	  
	  
	  /*aca desmarca las radios en solapas - cambiar 4 x 111 cuando esté terminado*/
	   for(x=1;x<112;x++){
		document.getElementById("s"+x).className="radios inactivo";
		
	  }

	document.getElementById("r"+radio).className="activo"
	document.getElementById("s"+radio).className  ="radios activo"
	document.getElementById("radiomark").value=alto;
	
	clogo(alto)
	
	//marca logo barra reproducción
	
		document.getElementById("logosbarra").style.backgroundPosition="0px -"+parseInt((radio*50)-50)+"px"
	
	
	// darle play
$("#jquery_jplayer_1").jPlayer("destroy");	
 $("#jquery_jplayer_1").jPlayer({
	 
		ready: function () {
			
			$(this).jPlayer("setMedia", {
				
				mp3:"/demosradios/"+archivos[radio],
				oga:"/demosradios/oga/demo_alo.ogg"
			});
			$(this).jPlayer("play");
			
		},
		swfPath: "js",
		solution: 'html, flash',
		supplied: "mp3, oga",
		wmode: "window",
		smoothPlayBar: true,
		keyEnabled: true
		});
	
	}	
	
</script>
<div id="sectorlogos">
  <div id="logosplataforma"> </div>
</div>

		<div class='container_wrap container_wrap_first  <?php avia_layout_class( 'main' ); ?>'>

			<div class='container'>
<input type="hidden" id="radiomark" value="0" />

<div id="bananitaslocas"> </div>
<div id="plataforma">
  <ul class="col1">
    <span id="banana1"></span>
    <p>radio hits</p>
    <li><a href="#" onmouseover="clogo(73)" onmouseout="clogo(0)" onclick="playradio(1,73,1)" id="r1">Popmania</a></li>
    <li><a href="#" onmouseover="clogo(146)" onmouseout="clogo(0)" onclick="playradio(2,146,1)" id="r2">Rockola</a></li>
    <li><a href="#" onmouseover="clogo(219)" onmouseout="clogo(0)" onclick="playradio(3,219,1)" id="r3">Zoom</a></li>
    <li><a href="#" onmouseover="clogo(292)" onmouseout="clogo(0)" onclick="playradio(4,292,1)" id="r4">Okay</a></li>
    <li><a href="#" onmouseover="clogo(365)" onmouseout="clogo(0)" onclick="playradio(5,365,1)" id="r5">Blondie</a></li>
    <li><a href="#" onmouseover="clogo(438)" onmouseout="clogo(0)" onclick="playradio(6,438,1)" id="r6">Deejay</a></li>
    <li><a href="#" onmouseover="clogo(511)" onmouseout="clogo(0)" onclick="playradio(7,511,1)" id="r7">Neo</a></li>
    <li><a href="#" onmouseover="clogo(584)" onmouseout="clogo(0)" onclick="playradio(8,584,1)" id="r8">BPM</a></li>
    <li><a href="#" onmouseover="clogo(657)" onmouseout="clogo(0)" onclick="playradio(9,657,1)" id="r9">FX</a></li>
    <li id="juno"><a href="#" onmouseover="clogo(730)" onmouseout="clogo(0)" onclick="playradio(10,730,1)" id="r10">juno</a></li>
  </ul>
  <ul class="col2">
    <span id="banana2"></span>
    <p>pop & rock</p>
    <li><a href="#" onmouseover="clogo(876)" onmouseout="clogo(0)" onclick="playradio(11,876,2)" id="r11">Platinum</a></li>
    <li id="moonlight"><a href="#" onmouseover="clogo(949)" onmouseout="clogo(0)" onclick="playradio(12,949,2)" id="r12">Moonlight</a></li>
    <li id="eighties"><a href="#" onmouseover="clogo(1022)" onmouseout="clogo(0)" onclick="playradio(13,1022,2)" id="r13">Eighties</a></li>
    <li><a href="#" onmouseover="clogo(1095)" onmouseout="clogo(0)" onclick="playradio(14,1095,2)" id="r14">Nikita</a></li>
    <li><a href="#" onmouseover="clogo(1168)" onmouseout="clogo(0)" onclick="playradio(15,1168,2)" id="r15">Rouge</a></li>
    <li><a href="#" onmouseover="clogo(1241)" onmouseout="clogo(0)" onclick="playradio(16,1241,2)" id="r16">Pinky</a></li>
    <li id="sweet"><a href="#" onmouseover="clogo(1314)" onmouseout="clogo(0)" onclick="playradio(17,1314,2)" id="r17">Sweet</a></li>
    <li id="frida"><a href="#" onmouseover="clogo(1387)" onmouseout="clogo(0)" onclick="playradio(18,1387,2)" id="r18">Frida</a></li>
    <li id="katmandu"><a href="#" onmouseover="clogo(1460)" onmouseout="clogo(0)" onclick="playradio(19,1460,2)" id="r19">Katmandu</a></li>
    <li><a href="#" onmouseover="clogo(1533)" onmouseout="clogo(0)" onclick="playradio(20,1533,2)" id="r20">Rocket</a></li>
    <li id="legiao"><a href="#" onmouseover="clogo(1606)" onmouseout="clogo(0)" onclick="playradio(21,1606,2)" id="r21">Legiao</a></li>
    <li><a href="#" onmouseover="clogo(1679)" onmouseout="clogo(0)" onclick="playradio(22,1679,2)" id="r22">Kingston</a></li>
    <li><a href="#" onmouseover="clogo(1752)" onmouseout="clogo(0)" onclick="playradio(23,1752,2)" id="r23">Graffiti</a></li>
    <li id="underground"><a href="#" onmouseover="clogo(1825)" onmouseout="clogo(0)" class="proximamente" onclick="playradio(24,1825,2)" id="r24">Underground</a></li>
    
    <li><a href="#" onmouseover="clogo(1898)" onmouseout="clogo(0)" onclick="playradio(25,1898,2)" id="r25">Memphis</a></li>
    <li><a href="#" onmouseover="clogo(1971)" onmouseout="clogo(0)" onclick="playradio(26,1971,2)" id="r26">Nashville</a></li>
  </ul>
  <ul class="col3">
    <span id="banana3"></span>
    <p>chill & lounge</p>
    <li><a href="#" onmouseover="clogo(2044)" onmouseout="clogo(0)" onclick="playradio(27,2044,3)" id="r27">Cafe Ibiza</a></li>
    <li><a href="#" onmouseover="clogo(2117)" onmouseout="clogo(0)" onclick="playradio(28,2117,3)" id="r28">Tatoo</a></li>
    <li><a href="#" onmouseover="clogo(2190)" onmouseout="clogo(0)" onclick="playradio(29,2190,3)" id="r29">Touch & go</a></li>
    <li><a href="#" onmouseover="clogo(2263)" onmouseout="clogo(0)" onclick="playradio(30,2263,3)" id="r30">Delikatessen</a></li>
    <li><a href="#" onmouseover="clogo(2336)" onmouseout="clogo(0)" onclick="playradio(31,2336)" id="r31">Caramel</a></li>
    <li><a href="#" onmouseover="clogo(2409)" onmouseout="clogo(0)" onclick="playradio(32,2409,3)" id="r32">Trendy</a></li>
    <li id="female"><a href="#" onmouseover="clogo(2482)" onmouseout="clogo(0)" onclick="playradio(33,2482,3)" id="r33">Female</a></li>
    <li id="rainbow"><a href="#" onmouseover="clogo(2555)" onmouseout="clogo(0)" onclick="playradio(34,2555,3)" id="r34">Rainbow</a></li>
    <li><a href="#" onmouseover="clogo(2628)" onmouseout="clogo(0)" onclick="playradio(35,2628,3)" id="r35">Jade</a></li>
    <li id="shangrila"><a href="#" onmouseover="clogo(2701)" onmouseout="clogo(0)" onclick="playradio(36,2701,3)" id="r36">Shangri-la</a></li>
    <li id="fragile"><a href="#" onmouseover="clogo(2774)" onmouseout="clogo(0)" onclick="playradio(37,2774,3)" id="r37">Fragile</a></li>
    <li id="vaudeville"><a href="#" onmouseover="clogo(2847)" onmouseout="clogo(0)" onclick="playradio(38,2847,3)" id="r38">Vaudeville</a></li>
  </ul>
  <ul class="col4">
    <span id="banana4"></span>
    <p>jazz</p>
    <li><a href="#" onmouseover="clogo(2920)" onmouseout="clogo(0)" onclick="playradio(39,2920,4)" id="r39">Jazzy</a></li>
    <li id="scotch"><a href="#" onmouseover="clogo(2993)" onmouseout="clogo(0)" onclick="playradio(40,2993,4)" id="r40">Scotch & soda</a></li>
    <li><a href="#" onmouseover="clogo(3066)" onmouseout="clogo(0)" onclick="playradio(41,3066,4)" id="r41">Manhattan</a></li>
    <li><a href="#" onmouseover="clogo(3139)" onmouseout="clogo(0)" onclick="playradio(42,3139,4)" id="r42">After hour</a></li>
    <li><a href="#" onmouseover="clogo(3212)" onmouseout="clogo(0)" onclick="playradio(43,3212,4)" id="r43">Piano bar</a></li>
    <li><a href="#" onmouseover="clogo(3285)" onmouseout="clogo(0)" onclick="playradio(44,3285,4)" id="r44">Village</a></li>
    <li id="easy"><a href="#" onmouseover="clogo(3358)" onmouseout="clogo(0)" onclick="playradio(45,3358,4)" id="r45">Easy</a></li>
    <li id="bossanostra"><a href="#" onmouseover="clogo(3431)" onmouseout="clogo(0)" onclick="playradio(46,3431,4)" id="r46">Bossa nostra</a></li>
    <li><a href="#" onmouseover="clogo(3504)" onmouseout="clogo(0)" onclick="playradio(47,3504,4)" id="r47">Boogie</a></li>
    <li><a href="#" onmouseover="clogo(3577)" onmouseout="clogo(0)" onclick="playradio(48,3577,4)" id="r48">Jumping</a></li>
    <li id="ray"><a href="#" onmouseover="clogo(3650)" onmouseout="clogo(0)" onclick="playradio(49,3650,4)" id="r49">Ray</a></li>
    <li><a href="#" onmouseover="clogo(3723)" onmouseout="clogo(0)" onclick="playradio(50,3723)" id="r50">Swing</a></li>
    <li id="foxtrot"><a href="#" onmouseover="clogo(3796)" onmouseout="clogo(0)" onclick="playradio(51,3796,4)" id="r51">Foxtrot</a></li>
    <li id="gatsby"><a href="#" onmouseover="clogo(3869)" onmouseout="clogo(0)" onclick="playradio(52,3869,4)" id="r52">Gatsby</a></li>
    <li><a href="#" onmouseover="clogo(3942)" onmouseout="clogo(0)" onclick="playradio(53,3942,4)" id="r53">Cotton Club</a></li>
    <li id="dixie"><a href="#" onmouseover="clogo(4015)" onmouseout="clogo(0)" onclick="playradio(54,4015,4)" id="r54">Dixie</a></li>
    <li><a href="#" onmouseover="clogo(4088)" onmouseout="clogo(0)" onclick="playradio(55,4088,4)" id="r55">Avalon</a></li>
  </ul>
  <ul class="col5">
    <span id="banana5"></span>
    <p>oldies</p>
    <li><a href="#" onmouseover="clogo(4161)" onmouseout="clogo(0)" onclick="playradio(56,4161,5)" id="r56">7 lunas</a></li>
    <li><a href="#" onmouseover="clogo(4234)" onmouseout="clogo(0)" onclick="playradio(57,4234,5)" id="r57">Feelings</a></li>
    <li><a href="#" onmouseover="clogo(4307)" onmouseout="clogo(0)" onclick="playradio(58,4307,5)" id="r58">Z 95</a></li>
    <li id="lecoin"><a href="#" onmouseover="clogo(4380)" onmouseout="clogo(0)" onclick="playradio(59,4380,5)" id="r59">Le Coin</a></li>
    <li><a href="#" onmouseover="clogo(4453)" onmouseout="clogo(0)" onclick="playradio(60,4453,5)" id="r60">Club 74</a></li>
    <li><a href="#" onmouseover="clogo(4526)" onmouseout="clogo(0)" onclick="playradio(61,4526,5)" id="r61">Help</a></li>
    <li id="ebony"><a href="#" onmouseover="clogo(4599)" onmouseout="clogo(0)" onclick="playradio(62,4599,5)" id="r62">Ebony</a></li>
    <li id="motown"><a href="#" onmouseover="clogo(4672)" onmouseout="clogo(0)" onclick="playradio(63,4672,5)" id="r63">Motown</a></li>
    <li><a href="#" onmouseover="clogo(4745)" onmouseout="clogo(0)" onclick="playradio(64,4745,5)" id="r64">Always</a></li>
    <li><a href="#" onmouseover="clogo(4818)" onmouseout="clogo(0)" onclick="playradio(65,4818,5)" id="r65">Rockabilly</a></li>
    <li><a href="#" onmouseover="clogo(4891)" onmouseout="clogo(0)" onclick="playradio(66,4891,5)" id="r66">Pic nic</a></li>
  </ul>
  <ul class="col6">
    <span id="banana6"></span>
    <p>latino</p>
    <li><a href="#" onmouseover="clogo(4964)" onmouseout="clogo(0)" onclick="playradio(67,4964,6)" id="r67">Oye tu</a></li>
    <li><a href="#" onmouseover="clogo(5037)" onmouseout="clogo(0)" onclick="playradio(68,5037,6)" id="r68">Alo</a></li>
    <li id="babylon"><a href="#" onmouseover="clogo(5110)" onmouseout="clogo(0)" onclick="playradio(69,5110,6)" id="r69">Babylon</a></li>
    <li><a href="#" onmouseover="clogo(5183)" onmouseout="clogo(0)" onclick="playradio(70,5183,6)" id="r70">Ji Jo</a></li>
    <li><a href="#" onmouseover="clogo(5256)" onmouseout="clogo(0)" onclick="playradio(71,5256,6)" id="r71">Muevete</a></li>
    <li><a href="#" onmouseover="clogo(5329)" onmouseout="clogo(0)" onclick="playradio(72,5329,6)" id="r72">Danzon</a></li>
    <li><a href="#" onmouseover="clogo(5402)" onmouseout="clogo(0)" onclick="playradio(73,5402,6)" id="r73">Inolvidable</a></li>
    <li><a href="#" onmouseover="clogo(5475)" onmouseout="clogo(0)" onclick="playradio(74,5475,6)" id="r74">Cantares</a></li>
  </ul>
  <ul class="col7">
    <span id="banana7"></span>
    <p>ambient</p>
    <li><a href="#" onmouseover="clogo(5548)" onmouseout="clogo(0)" onclick="playradio(75,5548,7)" id="r75">Slowly</a></li>
    <li><a href="#" onmouseover="clogo(5621)" onmouseout="clogo(0)" onclick="playradio(76,5621,7)" id="r76">Paradise</a></li>
    <li id="melody"><a href="#" onmouseover="clogo(5694)" onmouseout="clogo(0)" onclick="playradio(77,5694,7)" id="r77">Melody</a></li>
    <li><a href="#" onmouseover="clogo(5767)" onmouseout="clogo(0)" onclick="playradio(78,5767,7)" id="r78">Lullaby</a></li>
    <li><a href="#" onmouseover="clogo(5840)" onmouseout="clogo(0)" onclick="playradio(79,5840,7)" id="r79">Splendor</a></li>
    <li><a href="#" onmouseover="clogo(5913)" onmouseout="clogo(0)" onclick="playradio(80,5913,7)" id="r80">Zen</a></li>
    <li><a href="#" onmouseover="clogo(5986)" onmouseout="clogo(0)" onclick="playradio(81,5986,7)" id="r81">Celtic</a></li>
    <li><a href="#" onmouseover="clogo(6059)" onmouseout="clogo(0)" onclick="playradio(82,6059,7)" id="r82">Malibu</a></li>
    <li><a href="#" onmouseover="clogo(6132)" onmouseout="clogo(0)" onclick="playradio(83,6132,7)" id="r83">Bongo Bongo</a></li>
  </ul>
  <ul class="col8">
    <span id="banana8"></span>
    <p>clasico</p>
    <li><a href="#" onmouseover="clogo(6205)" onmouseout="clogo(0)" onclick="playradio(84,6205,8)" id="r84">Opus 1</a></li>
    <li><a href="#" onmouseover="clogo(6278)" onmouseout="clogo(0)" onclick="playradio(85,6278,8)" id="r85">Pizzicato</a></li>
    <li><a href="#" onmouseover="clogo(6351)" onmouseout="clogo(0)" onclick="playradio(86,6351,8)" id="r86">Gala</a></li>
    <li id="viena"><a href="#" onmouseover="clogo(6424)" onmouseout="clogo(0)" onclick="playradio(87,6424,8)" id="r87">Viena</a></li>
    <li><a href="#" onmouseover="clogo(6497)" onmouseout="clogo(0)" onclick="playradio(88,6497,8)" id="r88">Caruso</a></li>
    <li id="diva"><a href="#" onmouseover="clogo(6570)" onmouseout="clogo(0)" onclick="playradio(89,6570,8)" id="r89">Diva</a></li>
    <li><a href="#" onmouseover="clogo(6643)" onmouseout="clogo(0)" onclick="playradio(90,6643,8)" id="r90">Pianissimo</a></li>
  </ul>
  <ul class="col9">
    <span id="banana9"></span>
    <p>world music</p>
    <li><a href="#" onmouseover="clogo(6716)" onmouseout="clogo(0)" onclick="playradio(91,6716,9)" id="r91">Gotan</a></li>
    <li id="pasional"><a href="#" onmouseover="clogo(6789)" onmouseout="clogo(0)" onclick="playradio(92,6789,9)" id="r92">Pasional</a></li>
    <li><a href="#" onmouseover="clogo(6862)" onmouseout="clogo(0)" onclick="playradio(93,6862,9)" id="r93">libertango</a></li>
    <li id="tanghetto"><a href="#" onmouseover="clogo(6935)" onmouseout="clogo(0)" onclick="playradio(94,6935,9)" id="r94">Tanghetto</a></li>
    <li><a href="#" onmouseover="clogo(7008)" onmouseout="clogo(0)" onclick="playradio(95,7008,9)" id="r95">Raices</a></li>
    <li id="beijaflor"><a href="#" onmouseover="clogo(7081)" onmouseout="clogo(0)" onclick="playradio(96,7081,9)" id="r96">Beija flor</a></li>
    <li><a href="#" onmouseover="clogo(7154)" onmouseout="clogo(0)" onclick="playradio(97,7154,9)" id="r97">Cidade</a></li>
    <li><a href="#" onmouseover="clogo(7227)" onmouseout="clogo(0)" onclick="playradio(98,7227,9)" id="r98">Ipanema</a></li>
    <li><a href="#" onmouseover="clogo(7300)" onmouseout="clogo(0)" onclick="playradio(99,7300,9)" id="r99">Saiba</a></li>
    <li><a href="#" onmouseover="clogo(7373)" onmouseout="clogo(0)" onclick="playradio(100,7373,9)" id="r100">Pigalle</a></li>
    <li><a href="#" onmouseover="clogo(7446)" onmouseout="clogo(0)" onclick="playradio(101,7446,9)" id="r101">Bistro</a></li>
    <li><a href="#" onmouseover="clogo(7519)" onmouseout="clogo(0)" onclick="playradio(102,7519,9)" id="r102">Cherie</a></li>
    <li id="volare"><a href="#" onmouseover="clogo(7592)" onmouseout="clogo(0)" onclick="playradio(103,7592,9)" id="r103">Volare</a></li>
    <li id="ciao"><a href="#" onmouseover="clogo(7665)" onmouseout="clogo(0)" onclick="playradio(104,7665,9)" id="r104">Ciao</a></li>
    <li id="fadomeu"><a href="#" onmouseover="clogo(7738)" onmouseout="clogo(0)" onclick="playradio(105,7738,9)" id="r105">Fado meu</a></li>
    <li><a href="#" onmouseover="clogo(7811)" onmouseout="clogo(0)" onclick="playradio(106,7811,9)" id="r106">Voyage</a></li>
    <li><a href="#" onmouseover="clogo(7884)" onmouseout="clogo(0)" onclick="playradio(107,7884,9)" id="r107">Travesia</a></li>
  </ul>
  <ul class="col10">
    <span id="banana10"></span>
    <p>kids</p>
    <li><a href="#" onmouseover="clogo(7957)" onmouseout="clogo(0)" onclick="playradio(108,7957,10)" id="r108">Iupi</a></li>
    <li id="kinder"><a href="#" onmouseover="clogo(8030)" onmouseout="clogo(0)" onclick="playradio(109,8030,10)" id="r109">Kinder</a></li>
    <li id="babybox"><a href="#" onmouseover="clogo(8103)" onmouseout="clogo(0)" onclick="playradio(110,8103,10)" id="r110">Baby box</a></li>
    <li id="gulubu"><a href="#" onmouseover="clogo(8176)" onmouseout="clogo(0)" onclick="playradio(111,8176,10)" id="r111">Gulubu</a></li>
  </ul>
  <div style="clear:both"></div>
</div>
<div id="titularplataforma">Escuchá nuestras demos y descubrí la programación artesanal <br />
  de nuestras 112 estaciones de música ambiental.</div>
<div id="sugeridas">
  <div id="titulosugeridas">
    <p>Estaciones sugeridas para:</p>
  </div>
  <div class="listado" id="resto"><span>Restaurantes, bares y confiterías</span></div>
  <div class="listado" id="spa"><span>Spas y centros de belleza</span></div>
  <div class="listado" id="hotel"><span>Hoteles</span></div>
  <div class="listado" id="institucion"><span>Instituciones</span></div>
  <div class="listado" id="corpo"><span>Corporaciones</span></div>
  <div class="listado" id="retail"><span>Tiendas de retail</span></div>
  <div class="listado" id="melomano"><span>Melómanos</span></div>
  <div style="clear:both"></div>
</div>
<div id="solapas">
  <ul>
    <li id="gen1"><a href="javascript:void()" onclick="lge(1)">Radio Hits</a></li>
    <li id="gen2"><a href="javascript:void()" onclick="lge(2)">Pop & Rock</a></li>
    <li id="gen3"><a href="javascript:void()" onclick="lge(3)">Chill & lounge</a></li>
    <li id="gen4"><a href="javascript:void()" onclick="lge(4)">Jazz</a></li>
    <li id="gen5"><a href="javascript:void()" onclick="lge(5)">Oldies</a></li>
    <li id="gen6"><a href="javascript:void()" onclick="lge(6)">Latino</a></li>
    <li id="gen7"><a href="javascript:void()" onclick="lge(7)">Ambient</a></li>
    <li id="gen8"><a href="javascript:void()" onclick="lge(8)">Clásico</a></li>
    <li id="gen9"><a href="javascript:void()" onclick="lge(9)">World music</a></li>
    <li id="gen10"><a href="javascript:void()" onclick="lge(10)">Kids</a></li>
  </ul>
</div>
<div id="contblanco">
  <div id="contgen1">
    <?php include("includes/inc_radiohits.php")?>
  </div>
  <div id="contgen2">
    <?php include("includes/inc_popyrock.php")?>
  </div>
  <div id="contgen3">
    <?php include("includes/inc_chillylounge.php")?>
  </div>
  <div id="contgen4">
    <?php include("includes/inc_jazz.php")?>
  </div>
  <div id="contgen5">
    <?php include("includes/inc_oldies.php")?>
  </div>
  <div id="contgen6">
    <?php include("includes/inc_latino.php")?>
  </div>
  <div id="contgen7">
    <?php include("includes/inc_ambient.php")?>
  </div>
  <div id="contgen8">
    <?php include("includes/inc_clasico.php")?>
  </div>
  <div id="contgen9">
    <?php include("includes/inc_worldmusic.php")?>
  </div>
  <div id="contgen10">
    <?php include("includes/inc_kids.php")?>
  </div>
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

