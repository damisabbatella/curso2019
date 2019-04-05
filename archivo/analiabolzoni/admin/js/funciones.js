 //Listener del onLoad
 window.onload = function() {
     mostrar_listado();
 }

 document.onclick = clickEnDoc;

 function clickEnDoc(e) {
     if (document.getElementById('asistente').style.display == "block") {
         document.getElementById('asistente').style.display = "none";
         document.getElementById('asistente').innerHTML = "";
     }
 }
 // JavaScript Document
 //Llamo a la funcion resaltar
 function resaltar(valor) {
     //Genero un nodo para las filas
     var fila = document.getElementById("f" + valor)
         //Verifico si el checkbox esta chequeado. Utilizo "false" porque el click llama a la funcion y le da check al mismo tiempo
     if (document.getElementById("check" + valor).checked == false) {
         //Compruebo la clase que tenia la fila para devolverle su color original
         if (fila.className == "fila clara") {
             var color_fila = "rgba(255,255,255,.6)"
         } else {
             var color_fila = "rgba(215,215,215,.6)"
         }
         fila.style.backgroundColor = color_fila
     } else {
         //Al chequear, resalto la fila
         fila.style.backgroundColor = "rgba(16,50,107,.5)"
     }
 }

 function abre_ventana() {
    document.getElementsByTagName('body')[0].scrollTop=0
     document.getElementById("fondo").style.display = "block"
     document.getElementById("ventana").style.display = "block"
     document.documentElement.style.overflowX = "hidden";
     document.documentElement.style.overflowY = "hidden";
 }

 function nuevo() {
     abre_ventana();
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/form_alta.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("ventana").innerHTML = ajax.responseText;
         }
     }
     ajax.send();
 }

 function nuevaprenda(idconsignacion) {
     abre_ventana();
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/alta_item.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("ventana").innerHTML = ajax.responseText;
         }
     }
     ajax.send("idconsignacion=" + idconsignacion);
 }

  function nuevaprendaorden(idorden) {
     abre_ventana();
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/alta_item.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("ventana").innerHTML = ajax.responseText;
         }
     }
     ajax.send("idorden=" + idorden);
 }

  function verventa(idconsignacion) {
     abre_ventana();
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/ver_venta.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("ventana").innerHTML = ajax.responseText;
         }
     }
     ajax.send("idconsignacion=" + idconsignacion);
 }

 function verifica_paso() {
     if (parseInt(document.getElementById("paso").value) > parseInt(document.getElementById("cant_filas").value)) {
         var filas = document.getElementById("cant_filas").value;
     } else {
         var filas = document.getElementById("paso").value;
     }
     return filas;
 }

 function cerrar() {
     document.getElementById("fondo").style.display = "none"
     document.getElementById("ventana").style.display = "none"
     document.documentElement.style.overflowX = "visible";
     document.documentElement.style.overflowY = "visible";
 }

 function chequeo() {
     var filas = verifica_paso();
     if (document.getElementById("check_general").checked == true) {
         for (x = 1; x <= filas; x++) {
             document.getElementById("check" + x).checked = true
             resaltar(x)
         }
     } else {
         for (x = 1; x <= filas; x++) {
             document.getElementById("check" + x).checked = false
             resaltar(x)
         }
     }

 }

 function editar() {
     var chequeados = 0
     var seleccionados = ""
     var filas = verifica_paso();
     for (x = 1; x <= filas; x++) {
         if (document.getElementById("check" + x).checked == true) {
             chequeados++
             seleccionados += "|" + document.getElementById("check" + x).value
         }
     }
     if (chequeados > 1) {
         alert("Seleccione solo 1")
     } else if (chequeados == 0) {
         alert("Seleccione algun registro")
     } else {
         editando(seleccionados)
     }
 }

 function editando(valor) {
     abre_ventana();
     var tabla = document.getElementById("tabla").value;
     var columnas = document.getElementById("columnas").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/editar.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
             //mostrar_listado();
             document.getElementById("ventana").innerHTML = ajax.responseText;
         }
     }
     ajax.send("seleccionados=" + valor + "&tabla=" + tabla + "&columnas=" + columnas);
 }

 function borrar() {
     var chequeados = 0
     var seleccionados = ""
     var filas = verifica_paso();
     for (x = 1; x <= filas; x++) {
         if (document.getElementById("check" + x).checked == true) {
             chequeados++
             seleccionados += "|" + document.getElementById("check" + x).value
         }

     }
     if (chequeados == 0) {
         alert("seleccione un registro")
     } else {
         borrar_registro(seleccionados);
     }
 }

 function validar(valor) {
     var campos = new Array()
     var columnas = document.getElementById("columnas").value
     var tabla = document.getElementById("tabla").value
     var col = columnas.split("|");
     for (x = 0; x < col.length; x++) {
         campos[x] = document.getElementById("campo" + x).value
     }
     var juntos = campos.join("|");
     if (campos[0] == "" || campos[1] == "") {
         alert("Complete todos los campos")
     } else {
         var ajax = new XMLHttpRequest();
         if (valor == 0) {
             ajax.open("post", "includes/alta.php", true);
         } else {
             ajax.open("post", "includes/modificar.php", true);
         }
         ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         ajax.onreadystatechange = function() {
             if (ajax.readyState == 4) {
                 cerrar();
                 mostrar_listado();

             }
         }
         ajax.send("seleccionados=" + valor + "&datos=" + juntos + "&columnas=" + columnas + "&tabla=" + tabla);

     }
 }

 function mostrar_todo() {
     document.getElementById("buscar").value = "";
     mostrar_listado();
 }

 function asistente_busqueda(col_bus) {
     if (document.getElementById("asistente").style.display == "block") {
         var tabla = document.getElementById("tabla").value;
         var columnas = document.getElementById("columnas").value;
         var ajax = new XMLHttpRequest();
         ajax.open("post", "includes/asistente.php", true);
         ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         ajax.onreadystatechange = function() {
             if (ajax.readyState == 4) {
                 document.getElementById("asistente").innerHTML = ajax.responseText;
             }
         }
         ajax.send("clave=" + document.getElementById("buscar").value + "&tabla=" + tabla + "&columnas=" + columnas + "&col_busqueda=" + col_bus);
     } else {
         document.getElementById("asistente").style.display = "block";
     }
 }

 function filtrar(valor) {
     document.getElementById("buscar").value = valor;
     mostrar_listado();
 }

 function mostrar_listado() {
     var tabla = document.getElementById("tabla").value;
     if (tabla != "backup") {
         var paso = document.getElementById("paso").value;
         var pagina = document.getElementById("pagina").value;

         var columnas = document.getElementById("columnas").value;
         var clave = document.getElementById("buscar").value;
         var ajax = new XMLHttpRequest();
         ajax.open("post", "includes/" + tabla + "/abm.php", true);
         ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         ajax.onreadystatechange = function() {
             if (ajax.readyState == 4) {
                 document.getElementById("filas").innerHTML = ajax.responseText;
                 var cant_filas = document.getElementById("cant_filas").value;
                 if (pagina == 1) {
                     document.getElementById("atras").disabled = true;
                 }
                 if ((pagina * paso) > cant_filas) {
                     document.getElementById("adelante").disabled = true;
                 }
             }
         }
         ajax.send("paso=" + paso + "&pagina=" + pagina + "&tabla=" + tabla + "&columnas=" + columnas + "&clave=" + clave);

     }
 }

 function cambio_paso() {
     document.getElementById("paso").value = document.getElementById("selector").value;
     document.getElementById("pagina").value = 1;
     mostrar_listado();
 }

 function avanzar() {
     document.getElementById("atras").disabled = false;
     document.getElementById("pagina").value = parseInt(document.getElementById("pagina").value) + 1;
     mostrar_listado();
 }

 function atras() {
     if (document.getElementById("pagina").value > 1) {
         document.getElementById("pagina").value = parseInt(document.getElementById("pagina").value) - 1;
     }
     mostrar_listado();
 }

 function borrar_registro(valor) {
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/baja.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
             mostrar_listado();
             //document.getElementById("filas").innerHTML=ajax.responseText;
         }
     }
     ajax.send("seleccionados=" + valor + "&tabla=" + tabla);
 }

 function mostrarlistaBC() {
     var oHTTPRequest = new XMLHttpRequest();
     oHTTPRequest.open("post", "includes/backup.php", true);
     oHTTPRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     oHTTPRequest.onreadystatechange = function() {
         if (oHTTPRequest.readyState == 4) {
             document.getElementById("filas").innerHTML = oHTTPRequest.responseText;
         }
     }
     oHTTPRequest.send("accion=listarBC");
 }

 function hacerBC() {
     var oHTTPRequest = new XMLHttpRequest();
     oHTTPRequest.open("post", "includes/backup.php", true);
     oHTTPRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     oHTTPRequest.onreadystatechange = function() {
         if (oHTTPRequest.readyState == 4) {
             mostrarlistaBC()


         }
     }
     oHTTPRequest.send("accion=hacerBC");
 }

 function eliminarBC(enlace) {
     if (confirm("eliminar Backup?")) {
         var oHTTPRequest = new XMLHttpRequest();
         oHTTPRequest.open("post", "includes/backup.php", true);
         oHTTPRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         oHTTPRequest.onreadystatechange = function() {
             if (oHTTPRequest.readyState == 4) {
                 mostrarlistaBC()

             }
         }
         oHTTPRequest.send("accion=eliminarBC&enlace=" + enlace);
     }
 }

 function filtratalle() {
     var producto = document.getElementById("campo2").value
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/filtratalle.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
             document.getElementById("campo4").disabled = false;
             document.getElementById("campo4").innerHTML = ajax.responseText;
         }
     }
     ajax.send("producto=" + producto);

 }

 function filtracolor() {
     var producto = document.getElementById("campo2").value
     var talle = document.getElementById("campo4").value
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/filtracolor.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
             document.getElementById("campo5").disabled = false;
             document.getElementById("campo5").innerHTML = ajax.responseText;
         }
     }
     ajax.send("producto=" + producto + "&talle=" + talle);

 }

 function filtramaximo(num) {

     document.getElementById("campo6").disabled = false;
     document.getElementById("campo6").placeholder = "cant";

 }

 function altaitem(idconsignacion) {
     var tabla = document.getElementById("tabla").value;
     var producto = document.getElementById("campo2").value
     var talle = document.getElementById("campo4").value
     var color = document.getElementById("campo5").value
     var cantidad = document.getElementById("campo6").value
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/daraltaitem.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             mostrardetalle(idconsignacion)
         }
     }
     ajax.send("producto=" + producto + "&talle=" + talle + "&color=" + color + "&cantidad=" + cantidad + "&idconsignacion=" + idconsignacion);

 }

 function altamaterialorden(idorden) {
     var tabla = document.getElementById("tabla").value;
     var material = document.getElementById("campo2").value
     var color = document.getElementById("campo5").value
     var cantidad = document.getElementById("campo6").value
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/daraltamaterial.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             mostrardetalleorden(idorden)
         }
     }
     ajax.send("material=" + material +  "&color=" + color + "&cantidad=" + cantidad + "&idorden=" + idorden);

 }


 function altaprendaorden(idorden) {
     var tabla = document.getElementById("tabla").value;
     var prenda = document.getElementById("campo2").value
     var talle = document.getElementById("campo4").value
     var color = document.getElementById("campo5").value
     var cantidad = document.getElementById("campo6").value
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/daraltaprenda.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             mostrardetalleorden(idorden)
         }
     }
     ajax.send("prenda=" + prenda + "&talle=" + talle + "&color=" + color + "&cantidad=" + cantidad + "&idorden=" + idorden);

 }

 function eliminarprenda(iditem, idconsignacion, idproducto, idtalle, idcolor, idcantidad) {
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/eliminaritem.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
             //alert(ajax.responseText)
             mostrardetalle(idconsignacion)
         }
     }
     ajax.send("iditem=" + iditem + "&idproducto=" + idproducto + "&idtalle=" + idtalle + "&idcolor=" + idcolor + "&cantidad=" + idcantidad)

 }

  function eliminarprendaorden(iditem) {
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/eliminarprendaorden.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
             //alert(ajax.responseText)
             mostrardetalleorden(idorden)
         }
     }
     ajax.send("iditem=" + iditem )

 }

  function eliminarmaterialorden(iditem, idorden, idmaterial, idcolor, idcantidad) {
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/eliminarmaterialorden.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
             //alert(ajax.responseText)
             mostrardetalleorden(idorden)
         }
     }
     ajax.send("iditem=" + iditem + "&idmaterial=" + idmaterial  + "&idcolor=" + idcolor + "&cantidad=" + idcantidad)

 }

 function mostrardetalle(idconsignacion) {
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/detalle.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("detalle").innerHTML = ajax.responseText;
         }
     }
     ajax.send("idconsignacion=" + idconsignacion)

 }


  function mostrardetalleorden(idorden) {
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/detalle.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("detalle").innerHTML = ajax.responseText;
         }
     }
     ajax.send("idorden=" + idorden)

 }

 function finalizar(idconsignacion) {

     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/finalizar.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

     ajax.onreadystatechange = function() {

         if (ajax.readyState == 4) {

             cerrar();
             mostrar_listado();
         }
     }
     ajax.send("idconsignacion=" + idconsignacion)


 }

 function verorden(idconsignacion) {
     abre_ventana();
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/ver_orden.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("ventana").innerHTML = ajax.responseText;

         }
     }
     ajax.send("idconsignacion=" + idconsignacion);
 }

  function verliquidacion(idconsignacion) {
     abre_ventana();
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/ver_liquidacion.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("ventana").innerHTML = ajax.responseText;
             calcular();
         }
     }
     ajax.send("idconsignacion=" + idconsignacion);
 }


 function liquidarorden(idconsignacion) {
     abre_ventana();
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/liquidar_orden.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("ventana").innerHTML = ajax.responseText;
             calcular();
         }
     }
     ajax.send("idconsignacion=" + idconsignacion);
 }

 function liquidar(idconsignacion) {
     abre_ventana();
     var tabla = document.getElementById("tabla").value;
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/" + tabla + "/liquidar.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("ventana").innerHTML = ajax.responseText;
         }
     }
     ajax.send("idconsignacion=" + idconsignacion);
 }


 function imprimir() {
     var ficha = document.getElementById('formulario');
     var ventimp = window.open(' ', 'popimpr');
     ventimp.document.write(ficha.innerHTML);
     ventimp.document.close();
     ventimp.print();
     ventimp.close();
 }

 function detallestockmat(idmat) {
    document.getElementsByTagName('body')[0].scrollTop=0
     abre_ventana();
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/materiales/detallestockmat.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("ventana").innerHTML = ajax.responseText;
         }
     }
     ajax.send("idmat=" + idmat)

 }

 function asignacolor() {
     document.getElementById("campo4").value = document.getElementById("campo4a").value
     var texto = document.getElementById("campo4a").options[document.getElementById("campo4a").selectedIndex].text;
     var codigo = texto.split(" - ")
     document.getElementById("campo4o").value = codigo[0]
 }

 function marcacolor() {

     var x = document.getElementById("campo4a");
     var y = document.getElementById("campo4o");
     for (i = 0; i < x.length; i++) {

         var cod = x.options[i].text.split(" - ")

         if (cod[0] == y.value) {
            //selecciono el valor en el menu desplegable
            x.options[i].selected = true;
            document.getElementById("campo4").value=x.value
         }

     }
    

 }

 function asignacolorp() {
     document.getElementById("campo5").value = document.getElementById("campo5a").value
     var texto = document.getElementById("campo5a").options[document.getElementById("campo5a").selectedIndex].text;
     var codigo = texto.split(" - ")
     document.getElementById("campo5o").value = codigo[0]
 }

 function marcacolorp() {

     var x = document.getElementById("campo5a");
     var y = document.getElementById("campo5o");
     for (i = 0; i < x.length; i++) {

         var cod = x.options[i].text.split(" - ")

         if (cod[0] == y.value) {
            //selecciono el valor en el menu desplegable
            x.options[i].selected = true;
            document.getElementById("campo5").value=x.value
         }

     }
    

 }

function validarprod(valor) {
     var campos = new Array()
     var columnas = document.getElementById("columnas").value
     var tabla = document.getElementById("tabla").value
     var col = columnas.split("|");
     for (x = 0; x < col.length; x++) {
         campos[x] = document.getElementById("campo" + x).value
     }
     var juntos = campos.join("|");
     if (document.getElementById("campo0").value == "" || document.getElementById("campo1").value == 0|| document.getElementById("campo2").value == 0|| document.getElementById("campo3").value == 0|| document.getElementById("campo4").value == 0|| document.getElementById("campo5").value == 0) {
         alert("Complete todos los campos")
     } else {
         var ajax = new XMLHttpRequest();
         if (valor == 0) {
             ajax.open("post", "includes/alta.php", true);
         } else {
             ajax.open("post", "includes/modificar.php", true);
         }
         ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         ajax.onreadystatechange = function() {
             if (ajax.readyState == 4) {
                 cerrar();
                 mostrar_listado();

             }
         }
         ajax.send("seleccionados=" + valor + "&datos=" + juntos + "&columnas=" + columnas + "&tabla=" + tabla);

     }
 }

 function validarmov(valor) {
     var campos = new Array()
     var columnas = document.getElementById("columnas").value
     var tabla = document.getElementById("tabla").value
     var col = columnas.split("|");
     for (x = 0; x < col.length; x++) {
         campos[x] = document.getElementById("campo" + x).value
     }
     var juntos = campos.join("|");
     if (document.getElementById("campo0").value == "" || document.getElementById("campo1").value == 0|| document.getElementById("campo2").value == 0|| document.getElementById("campo3").value == 0|| document.getElementById("campo4").value == 0) {
         alert("Complete todos los campos")
     } else {
         var ajax = new XMLHttpRequest();
         if (valor == 0) {
             ajax.open("post", "includes/alta.php", true);
         } else {
             ajax.open("post", "includes/modificar.php", true);
         }
         ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         ajax.onreadystatechange = function() {
             if (ajax.readyState == 4) {
                 cerrar();
                 mostrar_listado();

             }
         }
         ajax.send("seleccionados=" + valor + "&datos=" + juntos + "&columnas=" + columnas + "&tabla=" + tabla);

     }
 }

 function calcular(idconsignacion){
    var items=document.getElementById("items").value
    var productos=0
    var totalapagar=0
    var devueltos=0
    var totaldevuelto=0
    var liquidados=0
    var iditems=items.split("|");
    for (x=0;x<(iditems.length-1);x++){
            var devueltos=parseInt(document.getElementById("devueltos"+iditems[x]).value)
        if(devueltos!=0){
                //hubo devoluciones
                //se devuelve al stock

            }
        var cantconsig=parseInt(document.getElementById("cantconsig"+iditems[x]).value)
         var precio=parseInt(document.getElementById("precio"+iditems[x]).innerHTML)
         var vendidos=parseInt(document.getElementById("vendidos"+iditems[x]).value)
       
            productos=productos+cantconsig

            

            if(cantconsig!=vendidos){
                //se vendio menos de lo entregado se liquida una parte y se renueva el remanente
                var liquidaitem=vendidos

            }else{
                //se vendio todo
                var liquidaitem=cantconsig

            }
           
            totalapagar=totalapagar+(liquidaitem*precio)
            totaldevuelto=totaldevuelto+(devueltos*precio)

            

    }
    document.getElementById("totalapagar").innerHTML=totalapagar
    document.getElementById("devueltas").innerHTML=totaldevuelto
    document.getElementById("remanente").innerHTML=parseInt(document.getElementById("totalconsignacion").innerHTML)-totalapagar-totaldevuelto
 
 }

 function devolucion(item){
       
 document.getElementById("vendidos"+item).value=parseInt(document.getElementById("cantconsig"+item).innerHTML)-parseInt(document.getElementById("devueltos"+item).value)

 }