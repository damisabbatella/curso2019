<div  style="clear:both; float:none; height:0; border-bottom:none;"></div>
  <div id="paginador">
    <div class="pag">
    <span>mostrar filas</span>  
        <select id="selector" onChange="cambio_paso()">
          <option <?php echo $sel1?>>5</option>
          <option <?php echo $sel2?>>10</option>
          <option <?php echo $sel3?>>15</option>
        </select>
        <span><?php echo $inicio+1 ?>-<?php echo $maximo ?> de <?php echo $cant_filas ?></span>
        <input id="atras" type="button" value="<" onClick="atras()"/>
        <input id="adelante" type="button" value=">" onClick="avanzar()"/>
        <input id="cant_filas" type="hidden" value="<?php echo $maximo ?>"/>
      </div>
    </div>