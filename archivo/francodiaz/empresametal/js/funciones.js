function nuevo() {
    document.getElementById("ventana").style.display = "block";
    document.getElementById("fondo").style.display = "block";
}

function cerrar() {
    document.getElementById("ventana").style.display = "none";
    document.getElementById("fondo").style.display = "none";
}

function cerrareditar() {
    document.getElementById("ventanaeditar").style.display = "none";
    document.getElementById("fondo").style.display = "none";
}

function editar() {
    var seleccionados = 0

    for (var i = 0; i <= document.getElementById("cantfilas").value; i++) {

        if (document.getElementById("check" + i).checked == true) {
            seleccionados++
        }
    }


    if (seleccionados == 0) {
        alert("Seleccione un registro")
    } else {
        if (seleccionados > 1) {
            alert("Selecciones solo un registro")
        } else {

        for (var i = 0; i <= document.getElementById("cantfilas").value; i++) {

        if (document.getElementById("check" + i).checked == true) {
            var id=document.getElementById("check" + i).value
        }
    }

           var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/empleados/edit.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {

             document.getElementById("ventanaeditar").innerHTML = ajax.responseText;
             document.getElementById("ventanaeditar").style.display = "block";
             document.getElementById("fondo").style.display = "block";
         }
     }
     ajax.send("id="+id);

        }
    }
}



function checkeartodo() {
    /* if (document.getElementById("check0").checked == true) {
     	var estado=true
     } else {
     	var estado=false
     }*/

    var estado = (document.getElementById("check0").checked == true) ? true : false
    for (var i = 0; i <= document.getElementById("cantfilas").value; i++) {
        document.getElementById("check" + i).checked = estado
    }
}

function borrar() {
var seleccionados=0
var id=""
for (var i = 0; i <= document.getElementById("cantfilas").value; i++) {

        if (document.getElementById("check" + i).checked == true) {
            seleccionados++
            id+=document.getElementById("check" + i).value+"|"
        }
    }

if(seleccionados==0){
	alert("Seleccione un registro")
}else{
location.href="includes/empleados/destroy.php?seleccionados="+id

}
}
