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
    <h1>Movimientos de Materiales</h1>
    <div id="comandos">
      <div id="buscador">
        <input type="text" id="buscar" onKeyUp="asistente_busqueda(0)"/>
        <input type="button" value="Buscar por nombre" onClick="mostrar_listado()"/>
        <input type="button" value="Mostrar todo" onClick="mostrar_todo()"/>
        <div id="asistente"></div>
      </div>
      <div id="botonera">
        <input type="button" value="Nuevo Movimiento" onClick="nuevo()"/>
        <input type="hidden" value="fecha|tipo|idproducto|idcliente|idcolor|cantidad|remito" id="columnas"/>
    	<input type="hidden" value="movimientos" id="tabla"/>
      </div>
    </div>
    <div style="clear:both"></div>
    <div id="titulos">
      <div class="col1"></div>
      <div class="col8">FECHA</div>
      <div class="col8">TIPO</div>
      <div class="col3">MATERIAL</div>
      <div class="col4">PROPIETARIO</div>
      <div class="col150">COLOR</div>
      <div class="col8">CANTIDAD</div>
      <div class="col150">Observaciones</div>
      
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
