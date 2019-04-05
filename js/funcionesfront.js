 
function registrar() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var correo = document.getElementById("correo").value;
    var estado = document.getElementById("nacion").selectedIndex;
    var contrasena1 = document.getElementById("contrasenat").value;
    var contrasena2 = document.getElementById("contra1").value;
    var expreg = /^\w+([\.-_]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,64})+$/;



    if (nombre == "") {

        document.getElementById("mensajecampos").style.display = "block"
        document.getElementById("mensajecampos").innerHTML = "*Escriba nombre"
        document.getElementById("nombre").style.backgroundColor = "#f2dede";



        setTimeout(function() {

            borrar();
        }, 3000)




    } else if (apellido == "") {
        document.getElementById("mensajecampos").style.display = "block"
        document.getElementById("mensajecampos").innerHTML = "*Complete apellido"
        document.getElementById("apellido").style.backgroundColor = "#f2dede";



        setTimeout(function() {

            borrar();
        }, 3000)

    } else if (correo == "") {
        document.getElementById("mensajecampos").style.display = "block"
        document.getElementById("mensajecampos").innerHTML = "*Complete correo"
        document.getElementById("correo").style.backgroundColor = "#f2dede";



        setTimeout(function() {

            borrar();
        }, 3000)

    } else if (!expreg.test(correo)) {

        document.getElementById("mensajecampos").style.display = "block"
        document.getElementById("mensajecampos").innerHTML = "*Correo invalido"
        document.getElementById("correo").style.backgroundColor = "#f2dede";



        setTimeout(function() {

            borrar();
        }, 3000)

    } else if (estado == "") {
        document.getElementById("mensajecampos").style.display = "block"
        document.getElementById("mensajecampos").innerHTML = "*Seleccione estado"
        document.getElementById("nacion").style.backgroundColor = "#f2dede";



        setTimeout(function() {

            borrar();
        }, 3000)






    } else if (contrasena1 == "" || contrasena2 == "") {
      document.getElementById("mensajecampos").style.display = "block"
        document.getElementById("mensajecampos").innerHTML = "*Debe completar las contraseñas"
        document.getElementById("contrasenat").style.backgroundColor = "#f2dede";
 document.getElementById("contra1").style.backgroundColor = "#f2dede";


        setTimeout(function() {

            borrar();
        }, 3000)



    } else if (contrasena1 != contrasena2) {

       document.getElementById("mensajecampos").style.display = "block"
        document.getElementById("mensajecampos").innerHTML = "* las contraseñas no coinciden"
        document.getElementById("contrasenat").style.backgroundColor = "#f2dede";
 document.getElementById("contra1").style.backgroundColor = "#f2dede";


        setTimeout(function() {

            borrar();
        }, 3000)

    } else if (document.getElementById("aceptar").checked == false) {
        document.getElementById("mensajecampos").style.display = "block"
        document.getElementById("mensajecampos").innerHTML = "*Debe aceptar las condiciones"

        setTimeout(function() {

            borrar();
        }, 3000)


    } else {





        var ajax = new XMLHttpRequest();
        ajax.open("post", "../includes/procesoddatos.php", true);
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4) {

if(ajax.responseText==0){

document.getElementById("mensajeformu").innerHTML="su registro se realizo con exito le hemos enviado un email para confirmar su registro"
     $('#ventanaregistrarse').modal('hide');  
     location.href="/index.php" ;       

}



else{verificaemail();

setTimeout(function() {

            borrar();
            
        }, 3000)


}

 
            }
        }
        ajax.send("nombre=" + nombre + "&apellido=" + apellido + "&correo=" + correo + "&nacion=" + estado + "&contrasenat=" + contrasena1);



    }
}

function verificaemail(valor) {
    var emailr = document.getElementById("correo").value;
    var expreg = /^\w+([\.-_]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,64})+$/;


    if (!expreg.test(emailr)) {

        document.getElementById("mensajecampos").style.display = "block"
        document.getElementById("mensajecampos").innerHTML = "*Correo invalido"
        document.getElementById("correo").style.backgroundColor = "#f2dede";



        setTimeout(function() {

            borrar();
        }, 3000)
    } else {
        var ajax = new XMLHttpRequest();
        ajax.open("post", "../includes/verificaemail.php", true);
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.onreadystatechange = function() {
            if (ajax.readyState == 4) {



                if (ajax.responseText == 0) {

                    //escribo el tilde verde

                    document.getElementById("mensajeemail").style.display = "block"
                    document.getElementById("mensajeemail").innerHTML = "<img src='img/tilde-verde.png'/>"
                    setTimeout(function() {

                        borrar();
                    }, 3000)

                } else { 

                 document.getElementById("correo").style.backgroundColor="#f2dede";
                    
                    document.getElementById("mensajecampos1").style.display = "block"

                
                    document.getElementById("mensajecampos1").innerHTML = "este email ya existe en nuestra base de datos intente con otro";


                    setTimeout(function() {

                        borrar();


                    }, 4000)
                    
                }


            }
        }
        ajax.send("correo=" + emailr);


    }

}




function borra() {

    document.getElementById("mensajeformu").style.display = "none";
   
    document.getElementById("contra1").value = "";
    document.getElementById("contrasenat").value = "";
    document.getElementById("nombre").value = "";
    document.getElementById("apellido").value = "";
    document.getElementById("correo").value = "";
   document.getElementById("aceptar").checked=false;
   document.getElementById("nacion").selectedIndex=false;

    
  
}

function borrar() {
    document.getElementById("mensajecampos").style.display = "none"
     document.getElementById("mensajecampos1").style.display = "none"
    document.getElementById("nombre").style.backgroundColor = "white";
    document.getElementById("apellido").style.backgroundColor = "white";
    document.getElementById("correo").style.backgroundColor = "white";
    document.getElementById("correo").style.borderColor = "#ccc";
    document.getElementById("nacion").style.backgroundColor = "white";
    document.getElementById("campoemail").style.borderColor = "white";
    
       document.getElementById("contra1").style.backgroundColor = "white";
    document.getElementById("contra1").style.borderColor = "#ccc";
    document.getElementById("contrasenat").style.backgroundColor = "white";
    document.getElementById("contrasenat").style.borderColor = "#ccc";
    
}


function login() {

    var usuario = document.getElementById("usuario").value;
    var password = document.getElementById("contrasena").value;


    if (usuario == "" || password == "") {


        alert("complete los campos")

    } else {



        document.getElementById("login").submit()
    }








}


function mostracurso(numerocurso){

  
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/mostracurso.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
            
             document.getElementById("numero").innerHTML=ajax.responseText;
         }
     }
     ajax.send("numero=" +numerocurso);



}

function inscripcion(numcurso,idusuario){




var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/inscripcion_alumnos.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
             document.getElementById("vercurso").style.display="block";
            
             
             document.getElementById("vercurso").innerHTML="<h7>¡¡¡Felicitaciones se ha inscripto!!! correctamente al curso</h7>";
vercursos(numcurso);
         }
     }
     ajax.send("numcurso="+numcurso+"&idusuario="+idusuario);






}


function vercursos(numerocurso){

  
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/mostracurso.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
            
             document.getElementById("numero").innerHTML=ajax.responseText;
         }
     }
     ajax.send("numero=" +numerocurso);



}



function enviarcomentario(){
var idleccion=document.getElementById("idleccion").value;
var idalumno=document.getElementById("idalumno").value;
var pregunta=document.getElementById("pregunta").value;  
     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/enviarcomentario.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
            
             document.getElementById("mensajes").innerHTML="Ya hemos recibido su consulta.A la brevedad su profesor enviara una respuesta";
         }
     }
     ajax.send("idalumno=" +idalumno+"&idleccion="+idleccion+"&pregunta="+pregunta);



}

function listarcomentarios(){

     var ajax = new XMLHttpRequest();
     ajax.open("post", "includes/verleccion.php", true);
     ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     ajax.onreadystatechange = function() {
         if (ajax.readyState == 4) {
            
             document.getElementById("listadocomentarios").innerHTML=ajax.responseText;
         }
     }
     

 
}