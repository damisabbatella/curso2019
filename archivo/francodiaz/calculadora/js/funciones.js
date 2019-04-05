window.onload = function() {
    //escribimos un cero en la pantalla al inicio
    document.getElementById("pantalla").innerHTML = 0
    document.getElementById("memoria").value = 0
}
var cont = 1
var punto=0

function numero(num) {
    var pantalla = document.getElementById("pantalla")
    if (num=='.') {
        punto++
    };
    if (punto>1){
        num=""
}
    if (cont <= 8) {
        if (cont == 1) {
            pantalla.innerHTML = ""
        }


        pantalla.innerHTML = pantalla.innerHTML + num
        cont++

    }

}

function sumar() {

    var pantalla = document.getElementById("pantalla")
    var memoria = document.getElementById("memoria")

    if (cont != 1) {


        if (parseFloat(pantalla.innerHTML) + parseFloat(memoria.value) > 99999999) {
            pantalla.innerHTML = "Error"
        } else {
            if (document.getElementById("signo").value!=""){
            pantalla.innerHTML = parseFloat(memoria.value) + parseFloat(pantalla.innerHTML)
            }
            memoria.value = pantalla.innerHTML
        }
        cont = 1
            // Guardamos el signo en el campo oculto 
        document.getElementById("signo").value = "+"
        punto=0
    }
}

function restar() {

    var pantalla = document.getElementById("pantalla")
    var memoria = document.getElementById("memoria")

    if (cont != 1) {


        if (parseFloat(pantalla.innerHTML) + parseFloat(memoria.value) < -99999999) {
            pantalla.innerHTML = "Error"
        } else {

        	if (document.getElementById("signo").value!=""){
            pantalla.innerHTML = parseFloat(memoria.value) - parseFloat(pantalla.innerHTML)
            }
            memoria.value = pantalla.innerHTML
        }
        cont = 1
            // Guardamos el signo en el campo oculto 
        document.getElementById("signo").value = "-"
        punto=0
    }
}

function multiplicar() {

    var pantalla = document.getElementById("pantalla")
    var memoria = document.getElementById("memoria")

    if (cont != 1) {

        var res = parseFloat(pantalla.innerHTML) * parseFloat(memoria.value)
        if (res < -99999999 || res > 99999999) {
            pantalla.innerHTML = "Error"
        } else {
        	if (document.getElementById("signo").value!=""){
            pantalla.innerHTML = parseFloat(memoria.value) * parseFloat(pantalla.innerHTML)
            }
            memoria.value = pantalla.innerHTML
        }
        cont = 1
            // Guardamos el signo en el campo oculto 
        document.getElementById("signo").value = "*"
        punto=0
    }
}

function dividir() {

    var pantalla = document.getElementById("pantalla")
    var memoria = document.getElementById("memoria")

    if (cont != 1) {

        var res = parseFloat(memoria.value) / parseFloat(pantalla.innerHTML)
        if (res < -99999999 || res > 99999999) {
            pantalla.innerHTML = "Error"
        } else {
            if (document.getElementById("signo").value!=""){
            pantalla.innerHTML = parseFloat(memoria.value) / parseFloat(pantalla.innerHTML)
            }
            memoria.value = pantalla.innerHTML
        }
        cont = 1
            // Guardamos el signo en el campo oculto 
        document.getElementById("signo").value = "/"
        punto=0
    }
}

function igual() {
    //verifico cual es el signo aritmetico guardado 
    //en el campo oculto para determinar cual va a ser la operacion
    var pantalla = document.getElementById("pantalla")
    var memoria = document.getElementById("memoria")

    if (cont != 1) {
        if (document.getElementById("signo").value == "+") {
            pantalla.innerHTML = (parseFloat(document.getElementById("memoria").value) + parseFloat(pantalla.innerHTML)).toFixed(2)
        }
        if (document.getElementById("signo").value == "-") {
            pantalla.innerHTML = (parseFloat(document.getElementById("memoria").value) - parseFloat(pantalla.innerHTML)).toFixed(2)
        }
        if (document.getElementById("signo").value == "*") {
            pantalla.innerHTML = (parseFloat(document.getElementById("memoria").value) * parseFloat(pantalla.innerHTML)).toFixed(2)
        }
        if (document.getElementById("signo").value == "/") {
            pantalla.innerHTML = (parseFloat(document.getElementById("memoria").value) / parseFloat(pantalla.innerHTML)).toFixed(2)
        }

        memoria.value = 0
        document.getElementById("signo").value=""
        cont = 1
        punto=0
    }
}
