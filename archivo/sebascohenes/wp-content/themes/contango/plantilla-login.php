<?php 

/*

Template Name: plantilla login

*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<SCRIPT LANGUAGE="JavaScript"> 
<!-- 
function Saltar(pal){ 
if (pal=='sesamo'){window.location="secreta.html"} 
else {alert ('Respuesta equivocada')} 
} 
//--> 
function validarcodigo(){
	var codigo=document.getElementById("codigo").value
	if(codigo==""){
		alert("ingrese el códido")
		}else{
			if(parseInt(codigo)>=10000 && parseInt(codigo)<=22100){
				location.href="http://seca.com.ar/sebascohenes/inicio"
				}else{
				alert("codigo incorrecto")	
					}
			
			}
	
	
	}
</SCRIPT>
<style>
body {
	margin: 0;
}
#fondo-foto {
	min-width: 100%;
	min-height: 100%;
	width: auto;
	height: auto;
	position: fixed;
	background-image: url(http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/fotofondo.jpg);
	background-size: cover;
	z-index:-2;
}
#logo-estrada img {
	margin-top: 40px;
	margin-left: 40px;
	width:200px;
}
#logo-geo {
	text-align: center;
	margin-top: 220px;
	margin-bottom: 140px;
}
#logo-geo {
	text-align: center;
	margin-top: 200px;
	margin-bottom: 140px;
}
#formulario {
	margin: 0 auto;
	width: 400px;
}
#usuario, #contrasena {
	font-size: 16px;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	margin-bottom: 10px;
	color: #FFFFFF;
}
input[type="button"] {
	width: 350px;
	height: 35px;
	font-size: 18px;
	margin-top: 10px;
	border: 1px solid #FFF;
	background-color: transparent;
	color: #FFFFFF;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
input[type="button"]:hover {
	color: rgba(153,0,0,1);
	background-color:#FFFFFF;
}
input[type="text"], input[type="password"] {
	width: 170px;
	height: 30px;
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 16px;
	font-variant: inherit;
}
#usuario div, #contrasena div {
	float: left;
	text-align: right;
	margin-right: 20px;
	text-transform: uppercase;
	margin-top: 7px;
}
#legales {
	padding-top: 50px;
	font-family: Verdana, Geneva, sans-serif;
	color: rgba(255,255,255,1);
	font-size: 12px;
	text-align: center;
	margin: 30px;
	
}

#legales a{

text-decoration:none;
	color:#FFFFFF;
	margin-right:10px;
	
}

</style>
<title>Geografia[4es]Huellas</title>
</head>

<body>
<div id="fondo-foto"></div>
<div id="logo-estrada"><img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/logo-estrada.png"></div>
<div id="logo-geo"> <img src="http://seca.com.ar/sebascohenes/wp-content/themes/contango/imagenes/logogeo4-login.png"/> </div>
<div id="formulario">
  <div id="usuario">
    <div>Ingresá tu código</div>
    <INPUT TYPE="Password" NAME="palclave" id="codigo" SIZE=25 VALUE="">
  </div>
  <input type="button" id="boton" value="Entrar" onclick="validarcodigo()">
  <div id="legales"><a href="http://seca.com.ar/sebascohenes/terminos-y-condiciones">Terminos y condiciones</a>
</div>
</div>
</body>
</html>

