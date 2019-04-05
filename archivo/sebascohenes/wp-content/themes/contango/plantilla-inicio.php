<?php 

/*

Template Name: plantilla inicio

*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Geografia[4ES]-Huellas</title>
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
</head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arapey' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100,400' rel='stylesheet' type='text/css'>
<style>
body {
	margin: 0;
	background-color: rgb(182, 213, 240);
}
#cuerpo {
	padding-top: 30px;
}
#menu-lateral {
	left: 15.35em;
	position:fixed;
}
#menu-lateral img {
	width: 0.53em;
	height: 6em;
}
#logo {
	width: 354px;
	height: 80px;
	line-height: 80px;
	float: left;
}
#logo img {
	margin-top: 20px;
	margin-left: 50px;
}
header {
	min-width: 800px;
}
nav {
	width: 100%;
	height: 80px;
	background-color: #FFFFFF;
	position: fixed;
	box-shadow: 0 0.05em 0.05em rgba(0, 0, 0, 0.17);
	margin-top: -101px;
}
#contenedorrojo {
	width: 100%;
	height: 80px;
}
#contenedorrojo ul {
	height: 80px;
	list-style: none;
	float: right;
	margin: 0;
	line-height: 80px;
	margin-right: 1.2em;
}
#contenedorrojo ul li {
	height: 80px;
	float: left;
}
#contenedorrojo ul li a {
	display: block;
	text-decoration: none;
	color: #CCCCCC;
	height: 80px;
	font-family: 'Open Sans', sans-serif;
	font-weight: 100;
}
#contenedorrojo ul li:hover > a .fondo {
	width: 100%;
	height: 80px;
}
#contenedorrojo ul li:hover > ul {
	display: block;
	height: auto;
}
#contenedorrojo ul li a div {
	width: auto;
	height: 80px;
	padding: 0 1em;
	font-size: 0.2em;
}
#contenedorrojo ul li a .fondo {
	background-color: rgba(226, 226, 226, 0.33);
	margin-top: -80px;
	width: 0%;
	padding: 0;
	height: 80px;
}
#contenedorrojo ul li ul {
	float: none;
	width: 2.7em;
	padding: 0;
	background-color: rgba(126, 28, 61, 0.9);
	height: 0px;
	line-height: 0.2em;
	display: none;
	transition: all 200ms ease-in-out;
	-webkit-transition: all 200ms ease-in-out;
	position: absolute;
}
#contenedorrojo ul li ul li {
	float: none;
	text-align: left;
	padding-left: 0.17em;
	padding-top: 0.17em;
	height: 0.5em;
	background-image: url(http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/boton-mapa.png);
	background-size: 0.25em 0.4em;
	background-repeat: no-repeat;
	background-position: left;
	border-bottom: 1px solid rgba(255,255,255,0.1);
}
#contenedorrojo ul li ul li:hover {
	background-color: rgba(0,0,0,0.2);
}
#contenedorrojo ul li ul li a {
	font-weight: 300;
	font-size: 0.15em;
	padding-left: 1.2em;
	padding-right: 0.8em;
}
#contenedorrojo ul li ul li a b {
	width: 1.2em;
	position: absolute;
	text-align: center;
	font-size: 0.85em;
	padding-top: 0.2em;
	left: 0.3em;
	font-weight: 600;
}
#contenedorrojo ul li ul li ul {
	float: left;
	margin-left: 241px;
	margin-top: -50px;
	width: 150px;
	padding: 10px 0;
}
#cerrar-sesion {
	font-family: Open Sans, sans-serif;
	color: #990033;
	font-size: 11px;
	margin-right: 3.5em;
	margin-top: 3em;
	float: right;
}
#header {
	width:100%;
	height:70px;
	background-color: #FFF;
	box-shadow: 1px, 1px, 0, 0.2;
	text-align:center;
}
#encabezado {
	float:left;
}
#encabezado img {
	margin-top:15px;
	margin-left:50px;
}
#cuerpo {
	padding-top: 30px;
}
#textocentral {
	text-align:center;
}
#textocentral h2 {
	font-family: 'Open Sans', sans-serif;
	font-size:80px;
	text-transform: uppercase;
	color: #A0004F;
	z-index: 2;
	margin-top:100px;
	font-weight: 500;
}
#textocentral p {
	font-family: 'Open Sans', sans-serif;
	font-weight:100;
	font-size:18px;
	line-height:25px;
	color: #494949;
	z-index: 2;
	margin-top: -30px;
}
#fondociudad {
	width: 100%;
	background-image:url(http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/FONDO-CIUDAD.png);
	background-position: top center;
	background-repeat: no-repeat;
	-webkit-background-size: cover;
	background-size: cover;
}
#info {
	width: 100%;
	height: 470px;
}
footer {
	width:100%;
	height:90px;
	background-color:rgba(102,102,102,1);
	position:absolute;
}
#contenedor-cab {
	width: 100%;
	position: absolute;
	z-index: 300;
}
#pie {
	width: 100%;
	background-color: rgba(89, 11, 35, 0.91);
	height:220px;
}
#columna1 {
	float:left;
	width: 360px;
}
#columna1 div {
	margin: 10px;
	width: 290px;
	height:10px;
}
#columna2 {
	float: left;
	margin-left: 80px;
	margin-top: 40px;
	width: 360px;
}
#columna2 img {
	opacity: 0.4;
}
#columna3 {
	float:left;
	width: 360px;
	margin-top: 30px;
}
#columnas {
	width: 1200px;
	margin: 0 auto;
	padding-top: 19px;
}
#columna3 p {
	font-size: 13px;
	font-family: 'Open Sans', sans-serif;
	font-weight: 100;
	line-height:20px;
}
#pie h3 {
	margin-bottom: 20px;
	font-size: 25px;
	font-family: 'Open Sans', sans-serif;
	font-weight: 100;
	color: #6A6A6A;
}
#columna1 p {
	color: #D3D1D1;
	font-size: 12px;
	font-family: 'Open Sans', sans-serif;
	font-weight: 100;
}
#columna1 hr {
	display: block;
	-webkit-margin-before: -14px;
	-webkit-margin-after: -14px;
	-webkit-margin-start: auto;
	-webkit-margin-end: auto;
	border-style: inset;
	border-width: 1px;
	border-color: rgba(161, 144, 144, 0.46);
}
#contenedor {
	margin: 0 auto;
	width: 1200px;
	padding-top: 30px;
}
#contenedorcolblanco {
	width: 600px;
	height: auto;
}
#fondogris {
	background-color: #2A2B2B;
	width: 100%;
	height: 720px;
}
#fondoblanco {
	width: 100%;
	height: 940px;
}
#contenedorblanco {
	width: 1200px;
	height: 700px;
	margin: 0 auto;
	padding-top: 50px;
}
div.col1 {
	width: 600px;
	height: 460px;
}
div.col2 {
	width: 600px;
	height: 460px;
}
.col1 {
	float: left;
	margin-top: 40px;
}
.col2 {
	float: right;
	margin-top: 40px;
}
.textocol {
	float: left;
	width: 450px;
	height: auto;
}
.textocol h2 {
	font-family: 'Open Sans', sans-serif;
	font-size: 20px;
	color: #A0004F;
	font-weight: 600;
}
.textocol p {
	color: #000000;
	line-height: 25px;
	font-family: 'Open Sans', sans-serif;
	font-weight: 100;
}
.circulonumero {
	width: 80px;
	height: 80px;
	color: #FFF;
	font-weight: bold;
	background-image:url(imagenes/botones-3h.png);
	background-repeat:no-repeat;
	text-align: center;
	line-height: 80px;
	font-size: 38px;
	float: left;
	transition: all 400ms ease-in-out;
	-webkit-transition: all 400ms ease-in-out;
	margin-right: 20px;
}
#contenedorgris div img {
	position: absolute;
	width: 370px;
	height: 220px;
	z-index: 1;
}
#contenedorgris div {
	float: left;
	width: 370px;
	height: 220px;
	margin: 0 20px 20px 0;
}
#contenedorgris div span {
	position: absolute;
	background-color: rgba(255,0,4,0.5);
	z-index: 2;
	height: 55px;
	width: 350px;
	margin-top: 145px;
	font-family: 'Open Sans', sans-serif;
	font-weight: 100;
	color: rgba(255,255,255,1.00);
	font-size: 25px;
	font-weight: bold;
	padding: 10px;
}
#contenedorgris div span:hover {
	background-color: rgba(25,96,184,0.8);
	text-decoration: underline;
}
p {
	color: #FFFFFF;
}
p {
	color: #CCC;
	font-size: 14px;
	line-height: 25px;
}
#descargar {
	margin: 0 auto;
	position:relative;
	text-align: center;
	top: 113px;
}
#descargar a {
	font-family: 'Open Sans', sans-serif;
	font-size: 0.25em;
	font-weight:500;
	text-decoration: none;
}
#descargar img {
	width: 0.35em;
	height: 0.33em;
	margin-right: -0.25em;
	margin-bottom: -0.11em;
}
.boton {
	box-shadow: 0 0.05em 0.05em rgba(0, 0, 0, 0.17);
	display:inline-block;
	color:#C00D51;
	padding: 0.5em 0.8em;
	white-space: nowrap;
	transition: all 0.2s ease-in-out;
	background-color: rgba(255, 255, 255, 0.81);
}
.rojo:hover {
	background: #901B3E;
	color:#FFFFFF;
}
</style>
<body>
<div id="fondociudad">
  <div id="contenedor-cab">
    <header>
      <nav>
        <div id="contenedorrojo">
          <div id="logo"><a href="http://seca.com.ar/sebascohenes/inicio"><img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/logo.png"/></a></div>
          <div id="cerrar-sesion"><a href="http://seca.com.ar/sebascohenes/login">cerrar sesión</a></div>
          <ul>
            <li><a href="#">
              <div>BLOQUE 1</div>
              <div class="fondo"></div>
              </a>
               <ul>
              <li><a href="http://seca.com.ar/sebascohenes/bloque1/caso1-info"><b>1</b>La Argentina en el mundo global</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque1/caso2-info"><b>2</b>África en la mira de Europa</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque1/caso3-info"><b>3</b>Brasil: crecimiento económico y desarrollo humano</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque1/caso4-info"><b>4</b>La ayuda humanitaria <br/>
                en Chad</a></li>
            </ul>
            <li><a href="#">
              <div>BLOQUE 2</div>
              <div class="fondo"></div>
              </a>
              <ul>
              <li><a href="http://seca.com.ar/sebascohenes/bloque2/caso5-info"><b>5</b>Derrame de petróleo en el golfo de México</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque2/caso6-info"><b>6</b>Biocombustibles en China</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque2/caso7-info"><b>7</b>La lenta desaparición del Mar Aral</a></li>
            </ul>
            <li><a href="#">
              <div>BLOQUE 3</div>
              <div class="fondo"></div>
              </a>
              <ul>
              <li><a href="http://seca.com.ar/sebascohenes/bloque3/caso8-info"><b>8</b>China e India, los paises más poblados</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque3/caso9-info"><b>9</b>Estados Unidos y México: una relacion complicada</a></li>
            </ul>
            <li><a href="#">
              <div>BLOQUE 4</div>
              <div class="fondo"></div>
              </a>
              <ul>
              <li><a href="http://seca.com.ar/sebascohenes/bloque4/caso10-info"><b>10</b>Megalópolis en Estados Unidos y China</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque4/caso11-info"><b>11</b>La segregación residencial en Santiago de Chile</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque4/caso12-info"><b>12</b>La agricultura, entre la tradición
                y las innovaciones tecnológicas</a></li>
            </ul>
          </ul>
        </div>
      </nav>
    </header>
  </div>
  <div id="textocentral">
    <h2>Geografia 4</h2>
    <p>En este sitio te brindamos la posibilidad de profundizar los estudios de casos presentes <br />
      en el libro, a partir de una gran variedad de fuentes de información en diferentes soportes digitales.</p>
  </div>
  <section id="fondoblanco">
    <section id="contenedorblanco">
      <div id="info">
        <div class="col1">
          <div id="contenedorcolblanco">
            <div class="textocol">
              <h2>Inicio</h2>
              <p>Podés encontrar el estudio de caso de tu interés según el bloque del libro en el que está ubicado o mediante su localización espacial, haciendo un clic en el planisferio.</p>
            </div>
          </div>
         
          <div class="textocol">
            <h2>Info</h2>
            <p>Artículos, entrevistas, mapas, cuadros estadísticos e infografías que amplían la información del libro.</p>
          </div>
          
          <div class="textocol">
            <h2>Google maps</h2>
            <p>Te invita a navegar con esta herramienta por la zona analizada para observar aspectos del territorio que permitan un mejor abordaje del caso.</p>
          </div>
        </div>
        <div class="col2">
          
          <div class="textocol">
            <h2>Fotos</h2>
            <p>Una galería de imágenes pertinentes a la problemática analizada, que brindan otros detalles para el estudio y la comprensión del tema.</p>
          </div>
        
          <div class="textocol">
            <h2>Video</h2>
            <p>Entrevistas y segmentos de noticieros o de documentales que ofrecen distintos puntos de vista para el análisis de los casos.</p>
          </div>
       
          <div class="textocol">
            <h2>Actividades</h2>
            <p>Para sistematizar la información, reflexionar, debatir y producir nuevos contenidos sobre el caso estudiado. Para descargar, completar e imprimir.</p>
          </div>
        </div>
        <div id="descargar"><a href="http://seca.com.ar/sebascohenes/mapa-2/" class="boton rojo">Entrar</a> </div>
      </div>
    </section>
  </section>
  <div id="pie">
    <div id="columnas">
      <div id="columna1">
        <div>
          <p><b>Idea y coordinación general:</b> Judith Rasnosky</p>
          
        </div>
        <div>
          <p><b>Producción de contenidos: </b> Carolina García</p>
          
        </div>
        <div>
          <p><b>Editora:</b> Aldana Chiodi</p>
          
        </div>
        <div>
          <p><b>Coordinación de diseño: </b> Natalia Otranto</p>
          
        </div>
        <div>
          <p><b>Diseño y programación:</b> Sebastián Cohenes</p>
          
        </div>
        <div>
          <p><b>Cartografía: </b> Miguel Ángel Forchi</p>
          
        </div>
        <div>
          <p><b>Fotografía: </b> Aldana Chiodi, Latinstock</p>
          
        </div>
      </div>
      <div id="columna2"> <img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/logo-estrada.png"/> </div>
      <div id="columna3">
        <p>Av. Blanco Encalada 104 Boulogne<br/>Buenos Aires - República Argentina<br/>
          Sitio web: www.editorialestrada.com.ar<br/>
          Consultas: <b>info@editorialestrada.com.ar<b></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
