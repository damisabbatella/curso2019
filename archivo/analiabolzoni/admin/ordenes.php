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
  <h1>Administrador </h1>
  </header>
<section>
  <aside>
    <nav>
      <?php include("includes/inc_menu.php") ?>
    </nav>
  </aside>
  <content>
    <h1>Ordenes de Trabajo</h1>
    <div id="comandos">
      <div id="buscador">
        <input type="text" id="buscar" onKeyUp="asistente_busqueda(1)"/>
        <input type="button" value="Buscar por nombre" onClick="mostrar_listado()"/>
        <input type="button" value="Mostrar todo" onClick="mostrar_todo()"/>
        <div id="asistente"></div>
      </div>
      <div id="botonera">
        <input type="button" value="Nueva Orden de trabajo" onClick="nuevo()"/>
        <input type="hidden" value="fecha|tejedor|estado" id="columnas"/>
    	<input type="hidden" value="ordenes" id="tabla"/>
      </div>
    </div>
    <div style="clear:both"></div>
    <div id="titulos">
      <div class="col1"><input id="check_general" type="checkbox" onClick="chequeo()"/></div>
      <div class="col3">FECHA</div>
      <div class="col3">TEJEDOR</div>
      <div class="col4">ESTADO</div>
     
      
    </div>
    <div id="filas"></div>
    <input id="paso" type="hidden" value="10"/>
    <input id="pagina" type="hidden" value="1"/>
  </content>
</section>
<div style="clear:both"></div>
<footer>Edgardo Villafañe 2015</footer>
<div id="fondo"></div>
<div id="ventana">
	
</div>
</body>
</html>
