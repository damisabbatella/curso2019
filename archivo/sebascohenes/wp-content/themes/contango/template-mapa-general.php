<?php 

/*

Template Name: Mapa general

*/



/** Header */

/*get_header();*/

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />



<?php  wp_head();?>
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

document.getElementById("fondo").style.fontSize=tamfuente;
}
};
window.onload=redimensiona
window.onresize = redimensiona
</script>
</head>



<body style="overflow:hidden">
<div id="fondo">
  <header>
    <nav>
  <div id="contenedorrojo">
  <div id="logo"><a href="2-Mapa-Gral1.html"><img src="/sebascohenes/imagenes/logo.png"/></a></div>
  <div id="cerrar-sesion">cerrar sesión</div>
    <ul>
      <li><a href="#">
        <div>BLOQUE 1</div>
        <div class="fondo"></div>
        </a>
        <ul>
          <li><a href="3-caso1-intro.html"><b>1</b>La Argentina en el mundo global</a></li>
          <li><a href="3-caso2-intro.html"><b>2</b>África en la mira de Europa</a></li>
          <li><a href="3-caso3-intro.html"><b>3</b>Brasil: crecimiento económico y desarrollo humano</a></li>
          <li><a href="3-caso4-intro.html"><b>4</b>La ayuda humanitaria <br/>en Chad</a></li>
        </ul>
     
      <li><a href="#">
        <div>BLOQUE 2</div>
        <div class="fondo"></div>
        </a>
        <ul>
          <li><a href="3-caso5-intro.html"><b>5</b>Derrame de petroleo en el golfo de México</a></li>
          <li><a href="3-caso6-intro.html"><b>6</b>Biocombustibles en China</a></li>
          <li><a href="3-caso7-intro.html"><b>7</b>La lenta desaparición del Mar Aral</a></li>
        </ul>
      
      <li><a href="#">
        <div>BLOQUE 3</div>
        <div class="fondo"></div>
        </a>
        <ul>
          <li><a href="3-caso8-intro.html"><b>8</b>China e India los paises más poblados</a></li>
          <li><a href="3-caso9-intro.html"><b>9</b>Estados Unidos y Mexico, una relacion complicada</a></li>
        </ul>
      <li><a href="#">
        <div>BLOQUE 4</div>
        <div class="fondo"></div>
        </a>
      <ul>
          <li><a href="3-caso10-intro.html"><b>10</b>Megalópolis en Estados Unidos y China</a></li>
          <li><a href="3-caso11-intro.html"><b>11</b>La segregación residencial en Santiago de Chile</a></li>
<li><a href="3-caso12-intro.html"><b>12</b>La agricultura, entre la tradición
y las innovaciones tecnológicas</a></li>

          
        </ul>
     
    </ul> 
  </div>
</nav>
</header>
  <div id="filtro"></div>
  <div id="menu-lateral"> <img src="/sebascohenes/imagenes/BOTONES.png"></div>
  <div id="localizaciones">
    <a href="3-caso1-intro.html" id="circulo1"><span>La argentina en el mundo global</span>1</a>
    <a href="3-caso2-intro.html" id="circulo2"><span>África en la mira de Europa</span>2</a>
    <a href="3-caso3-intro.html" id="circulo3"><span>Brasil: crecimiento económico y desarrollo humano</span>3</a>
    <a href="3-caso4-intro.html" id="circulo4"><span>La ayuda humanitaria en Chad</span>4</a>
    <a href="3-caso5-intro.html" id="circulo5"><span>Derrame de petroleo en el golfo de México</span>5</a>
    <a href="3-caso6-intro.html" id="circulo6"><span>Biocombustibles en China</span>6</a>
    <a href="3-caso7-intro.html" id="circulo7"><span>La lenta desaparición del Mar Aral</span>7</a>
    <a href="3-caso8-intro.html" id="circulo8"><span>China e India los paises más poblados</span>8</a>
    <a href="3-caso9-intro.html" id="circulo9"><span>Estados Unidos y Mexico, una relacion complicada</span>9</a>
    <a href="3-caso10-intro.html" id="circulo10"><span>Megalópolis en Estados Unidos y China</span>10</a>
    <a href="3-caso11-intro.html" id="circulo11"><span>La segregación residencial en Santiago de Chile</span>11</a>
    <a href="3-caso12-intro.html" id="circulo12"><span>La agricultura, entre la tradición
y las innovaciones tecnológicas</span>12</a>
    
  </div>
</div>
</body>
</html>