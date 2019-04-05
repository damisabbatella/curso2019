<!doctype html>
<html lang="es">
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
<link href="<?php echo get_template_directory_uri(); ?>/estilos.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arapey' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Slab:100,400' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/favicon.ico" />
<link rel="shortcut icon" href="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/favicon.png" />
<link rel="shortcut icon" href="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/favicon" />
</head>
<body>
  <header>
  <div id="logo"><a href="http://seca.com.ar/sebascohenes/inicio"><img src="<?php echo get_template_directory_uri(); ?>/imagenes/logo.png"/></a></div>
    <nav>
        <div id="cerrarsesion"><a href="http://seca.com.ar/sebascohenes/login">cerrar sesión</a></div>
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
          </li>
          <li><a href="#">
            <div>BLOQUE 2</div>
            <div class="fondo"></div>
            </a>
            <ul>
              <li><a href="http://seca.com.ar/sebascohenes/bloque2/caso5-info"><b>5</b>Derrame de petróleo en el golfo de México</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque2/caso6-info"><b>6</b>Biocombustibles en China</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque2/caso7-info"><b>7</b>La lenta desaparición del Mar Aral</a></li>
            </ul>
          </li>
          <li><a href="#">
            <div>BLOQUE 3</div>
            <div class="fondo"></div>
            </a>
            <ul>
              <li><a href="http://seca.com.ar/sebascohenes/bloque3/caso8-info"><b>8</b>China e India, los paises más poblados</a></li>
              <li><a href="http://seca.com.ar/sebascohenes/bloque3/caso9-info"><b>9</b>Estados Unidos y México: una relacion complicada</a></li>
            </ul>
          </li>
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
          </li>
        </ul>
    </nav>
  </header>
