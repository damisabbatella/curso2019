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

 