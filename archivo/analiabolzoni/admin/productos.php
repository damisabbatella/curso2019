<?php include("control.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listado</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<script src="js/funciones.js" type="text/javascript"></script>
</head>
<body>
<header>
  <h1>Analia Bolzoni</h1>
   </header>
<section>
  <aside>
    <nav>
       <?php include("includes/inc_menu.php") ?>
    </nav>
  </aside>
  <content>
  <h1>Productos</h1>
    <div id="comandos">
      <div id="buscador">
        <input type="text" id="buscar" onKeyUp="asistente_busqueda(0)"/>
        <input type="button" value="Buscar por nombre" onClick="mostrar_listado()"/>
        <input type="button" value="Mostrar todo" onClick="mostrar_todo()"/>
        <div id="asistente"></div>
      </div>
      <div id="botonera">
        <input type="button" value="Nuevo" onClick="nuevo()"/>
        <input type="button" value="Editar" onClick="editar()"/>
        <input type="button" value="Borrar" onClick="borrar()"/>
        <input type="hidden" value="titulo|codigo|idcategoria|precio|preciomin" id="columnas"/>
    	<input type="hidden" value="productos" id="tabla"/>
      </div>
    </div>
    <div style="clear:both"></div>
    <div id="titulos">
      <div class="col1"><input id="check_general" type="checkbox" onClick="chequeo()"/></div>
      <div class="col9">TITULO</div>
      <div class="col3">CODIGO</div>
      <div class="col3">CATEGORIA</div>
      <div class="col3">PRECIO MAY</div>
      <div class="col3">PRECIO MIN</div>
    
    </div>
    <div id="filas"></div>
    <input id="paso" type="hidden" value="10"/>
    <input id="pagina" type="hidden" value="1"/>
  </content>
</section>
<div style="clear:both"></div>
<footer>Desarrollo: Edgardo Villafañe 2015</footer>
<div id="fondo"></div>
<div id="ventana">
	
</div>
</body>
</html>
