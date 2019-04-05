// Calendario creado por Franco ultima modificacion 26/09/2015//

window.onload = function() {
    var fecha = new Date() //indica el dia actual -- y la hora actual tb
    var mesactual = fecha.getMonth()
    var anoactual = fecha.getFullYear()
        //escribo en la memoria el mes y el año actual
    document.getElementById("mes").value = mesactual
    document.getElementById("ano").value = anoactual
    calendario()

}


function calendario() {
    var fecha = new Date() //este es el dia del sistema//

    var meses = new Array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre")
    mesactual = document.getElementById("mes").value
    anoactual = document.getElementById("ano").value
    var primerdia = new Date(anoactual, mesactual, 01)
    var primerdiames = primerdia.getDay()
        /*
        if ((anoactual % 4 == 0 && anoactual %100 !=0) || anoactual %400 ==0) {
                    var bi= 29 

                } else {
                    var bi=28
                } */
        /*if (anoactual % 4 == 0) {
            if (anoactual % 100 != 0) {

                if (anoactual % 400 == 0) {
                    var bi = 29
                } else {
                    var bi = 28
                }
            } else{
                var bi=28
            }
        }*/

    var bi = ((anoactual % 4 == 0 && anoactual % 100 != 0) || anoactual % 400 == 0) ? 29 : 28
    var diasmes = new Array(31, bi, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31)
    var calendario = document.getElementById('calendario')
    calendario.innerHTML = '<div id="nombremes" ><div id="atras" onclick="atras()"><</div>' + meses[mesactual] + '  ' + anoactual + '<div id="adelante" onclick="adelante()">></div></div>'
        //generar la grilla//
    for (x = 1; x <= 49; x++) {
        calendario.innerHTML = calendario.innerHTML + "<div id='c" + x + "'></div>"
    }
    //escribo los nombres de los dias//
    var dias = new Array("DO", "LU", "MA", "MI", "JU", "VI", "SA")

    for (x = 0; x < 7; x++) {
        document.getElementById("c" + (x + 1)).innerHTML = dias[x]
    }




    //escribo los dias del mes actual//
    for (x = 1; x <= diasmes[mesactual]; x++) {
        document.getElementById("c" + (x + 7 + primerdiames)).innerHTML = x
    }
    //realtar el dia actual 
    var diaactual = fecha.getDate() //dia actual del sistema
    var messistema = fecha.getMonth() // mes actual del sistema
    var anosistema = fecha.getFullYear() //año actual del sistema

    if (mesactual == messistema && anosistema == anoactual) {
        document.getElementById("c" + (diaactual + 7 + primerdiames)).innerHTML = "<b>" + diaactual + "</b>"
    }



    //escribo los primeros dias del mes proximo
    for (x = 1; x <= (42 - primerdiames - diasmes[mesactual]); x++) {
        document.getElementById("c" + (primerdiames + diasmes[mesactual] + 7 + x)).innerHTML = "<i>" + x + "</i>"
    }

    //escribo los ultimos dias del mes anterior

    for (x = 1; x <= primerdiames; x++) {
        if (mesactual == 0) {
            var mesanterior = 11
        } else {
            var mesanterior = mesactual - 1
        }
        document.getElementById("c" + (7 + x)).innerHTML = "<i>" + (diasmes[mesanterior] - primerdiames + x) + "</i>"
    }

}


function adelante() {
    var mes = document.getElementById("mes")
    if (mes.value < 11) {
        mes.value = parseInt(mes.value) + 1
    } else {
        mes.value = 0
        document.getElementById("ano").value = parseInt(document.getElementById("ano").value) + 1
    }
    calendario()
}

function atras() {
    if (document.getElementById("mes").value > 0) {
        document.getElementById("mes").value = parseInt(document.getElementById("mes").value) - 1
    } else {
        mes.value = 11
        document.getElementById("ano").value = parseInt(document.getElementById("ano").value) - 1
    }
    calendario()
}
