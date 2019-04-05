<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content after

 *

 * @package adamos

 * @since adamos 1.0

 */

?>



	</div><!-- #main .site-main -->

<div id="ocho">
  <div id="CONocho">
    <div id="SECocho1">Enlaces
      <div id="INTocho1a" onClick="moverEnlaces(2)"></div>
      <div id="INTocho1b" onClick="moverEnlaces(1)"></div>
      <div id="INTocho1c"></div>
    </div>
    <div id="SECocho2">
      <div id="enCON1">
        <div class="contenedorSEP">
          <div id="INTocho2a" class="Soc1">
            <div id="Io2ahover" class="Soc2" onClick="javascript:window.open('https://www.aysa.com.ar/')"></div>
          </div>
        </div>
        <div class="contenedorSEP">
          <div id="INTocho2b" class="Soc1">
            <div id="Io2bhover" class="Soc2" onClick="javascript:window.open('http://www.minplan.gob.ar')"></div>
          </div>
        </div>
        <div class="contenedorSEP">
          <div id="INTocho2c" class="Soc1">
            <div id="Io2chover" class="Soc2" onClick="javascript:window.open('http://www.obraspublicas.gov.ar/')"></div>
          </div>
        </div>
        <div class="contenedorSEP">
          <div id="INTocho2d" class="Soc1">
            <div id="Io2dhover" class="Soc2" onClick="javascript:window.open('http://www.argentina.gob.ar/')"></div>
          </div>
        </div>
        <div class="contenedorSEP">
          <div id="INTocho2e" class="Soc1">
            <div id="Io2ehover" class="Soc2" onClick="javascript:window.open('http://www.presidencia.gob.ar/')"></div>
          </div>
        </div>
      </div>
      <div id="enCON2">
        <div class="contenedorSEP">
          <div id="INTocho2f" class="Soc1">
            <div id="Io2fhover" class="Soc2" onClick="javascript:window.open('http://www.indec.gov.ar/')"></div>
          </div>
        </div>
        <div class="contenedorSEP">
          <div id="INTocho2g" class="Soc1">
            <div id="Io2ghover" class="Soc2" onClick="javascript:window.open('http://www.hidricosargentina.gov.ar//')"></div>
          </div>
        </div>
        <div  class="contenedorSEP">
          <div id="INTocho2h" class="Soc1">
            <div id="Io2hhover" class="Soc2" onClick="javascript:window.open('http://www.afip.gob.ar/')"></div>
          </div>
        </div>
        <div class="contenedorSEP">
          <div id="INTocho2i" class="Soc1">
            <div id="Io2ihover" class="Soc2" onClick="javascript:window.open('http://www.anses.gob.ar/')"></div>
          </div>
        </div>
        <div class="contenedorSEP">
          <div id="INTocho2j" class="Soc1">
            <div id="Io2jhover" class="Soc2" onClick="javascript:window.open('http://www.presidencia.gob.ar/')"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

	<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="footer_container">

    <div class="section group">

    <div class="col span_1_of_4">

  

         <div class="widget">

			<h4>Calendario</h4>

            <div id="INTnueve1b" class="Cn4">
            <div id="In1a" class="Cn10 Cn11">22 de Marzo</div>
            <div id="In1b" class="Cn10 Cn12"><a href="http://villafane.com.ar/eras/?page_id=167">Día Mundial del Agua</a></div>
            <div id="In1c" class="Cn10 Cn11">31 de Marzo</div>
            <div id="In1d" class="Cn10 Cn12"><a href="http://villafane.com.ar/eras/?page_id=167">Día Nacional del Agua</a></div>
            <div id="In1e" class="Cn10 Cn11">15 de Mayo</div>
            <div id="In1f" class="Cn10 Cn12"><a href="http://villafane.com.ar/eras/?page_id=167">Día del Trabajador Sanitarista</a></div>
        </div>
            </div>     


		</div>

	<div class="col span_1_of_4">

         <div class="widget">

			<h4>Mapa del Sitio</h4>
              <div class="mapadelsitio scrollinterno">
           <?php wp_nav_menu( array( 'theme_location' => 'mapa' ) ); ?>
              </div>
            </div>     

	

		</div>

        

	<div class="col span_1_of_4">

	

         <div class="widget">
 <style>
      #map-canvas {
        height: 200px;
        width:200px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(-34.5975742,-58.3930752);
  var mapOptions = {
    zoom: 13,
    center: myLatlng,
	mapTypeControl: false
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'ERAS'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
			<h4>Como Llegar</h4>

            <div id="map-canvas"></div>

            </div>     





	</div>

    

	<div class="col span_1_of_4">
	
    <div class="widget">
    
      <h4>Contacto</h4>
        
      
      <div id="INTnueve3b" class="Cn4">
        <div id="In3a" class="Cn10 Cn11">Callao 982 (C1023AAP) </div>
        <div id="In3b" class="Cn10 Cn11">Teléfonos (011) 4815 - 9229 / 9339 </div>
        <div id="In3c" class="Cn10 Cn11">Buenos Aires  l  Argentina</div>
      </div>
    </div>

	</div>

	</div>

        </div><!-- footer container -->

        <div class="site-info">

		<div id="contderechos">
        
        <div class="derechosregistrados">Todos los derechos reservados, ERAS 2014.</div>
        <div class="www"></div>
        
        </div>	

		</div><!-- .site-info -->

	</footer><!-- #colophon .site-footer -->

</div><!-- #page .hfeed .site -->

</div><!-- end of wrapper -->

<?php wp_footer(); ?>



</body>

</html>