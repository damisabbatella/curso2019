




function adelantebook(campo){
	var meso=document.getElementById("mesobook")
	var anoo=document.getElementById("anoobook")
	anoo.value=(parseInt(meso.value)==11)?anoo.value=parseInt(anoo.value)+1:anoo.value;
	meso.value=(parseInt(meso.value)==11)?0:parseInt(meso.value)+1;
	calendariobook(campo)
		}
	
function atrasbook(campo){
	var meso=document.getElementById("mesobook")
	var anoo=document.getElementById("anoobook")
	anoo.value=(parseInt(meso.value)==0)?anoo.value=parseInt(anoo.value)-1:anoo.value;				    meso.value=(parseInt(meso.value)==0)?11:parseInt(meso.value)-1;
	
	calendariobook(campo)
		}


	

function marcaagendados(){
var apto=document.getElementById("apto").value	
var mes=(parseInt(document.getElementById("meso").value)+1);
mes	= (mes<=9)?("0"+mes):mes;
var ano=document.getElementById("anoo").value
			var ajax = new XMLHttpRequest();; 
     		ajax.open("post", "/js/vermarcados.php", true); 
     		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     		ajax.onreadystatechange=function(){
        		if (ajax.readyState==4){
				
				marcacalendario(ajax.responseText);
				}
	 		}
			var enviar="mes="+mes+"&ano="+ano+"&apto="+apto
			
   			ajax.send(enviar);
	
	}
	
function marcacalendario(dias){
var mesactual=document.getElementById("meso").value;
var anoactual=document.getElementById("anoo").value;
var primerdia=new Date(anoactual,mesactual,1);
var primerdiasemana=primerdia.getDay();	

var diasex=dias.split('|')
	for (x=0;x<(diasex.length-1);x++){
	cas="c"+(primerdiasemana+parseInt(diasex[x]))

		document.getElementById(cas).style.backgroundColor='red';
		}
	
	
	
	}
	
function abrecalendario(campo){
setTimeout('document.getElementById("calendariobook").style.display="block";document.getElementById("calendariobook").style.opacity=1',50)

var contenido='<div id="mes"><div id="botonatbook" onclick="atrasbook(\''+campo+'\')"></div><div id="nombremesbook"></div><div id="botonadbook" onclick="adelantebook(\''+campo+'\')"></div></div><div id="dsemanabook"><div>DO</div><div>LU</div><div>MA</div><div>MI</div><div>JU</div><div>VI</div><div>SA</div></div><div id="dmesbook"></div><input id="mesobook" type="hidden" value="0" /><input id="anoobook" type="hidden" value="0" /><input id="campofechabook" type="hidden" value="0" />';

document.getElementById("calendariobook").innerHTML=contenido


	var fecha=new Date();
	var mesactual=fecha.getMonth();
	var anoactual=fecha.getFullYear();
	document.getElementById("mesobook").value=mesactual
	document.getElementById("anoobook").value=anoactual
	document.getElementById("campofechabook").value=campo

	document.getElementById("calendariobook").style.display="block";
	
	
	calendariobook(campo)	
	
	}	
function calendariobook(campo){

var mesactual=document.getElementById("mesobook").value;
var anoactual=document.getElementById("anoobook").value;
var meses=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
var primerdia=new Date(anoactual,mesactual,1);
var primerdiasemana=primerdia.getDay();
if (anoactual%4==0 && anoactual%100!=0 || anoactual%400==0){var bi=29} else {var bi=28}
var diasmes=new Array(31,bi,31,30,31,30,31,31,30,31,30,31)


document.getElementById("nombremesbook").innerHTML=anoactual + " " +meses[mesactual]  	
	

var cuadritos="";
for(x=1;x<=42;x++){
	cuadritos+="<div id='cb"+x+"'></div>";
}
document.getElementById("dmesbook").innerHTML=cuadritos;	
//relleno los dias del mes
for(x=1;x<=diasmes[mesactual];x++){
	b=x+primerdiasemana
document.getElementById("cb"+b).innerHTML="<span onclick=\"agendardia("+x+",'"+campo+"')\" id='sb"+x+"' >"+x+"</span>";	
	
	}

//relleno  los ultimos dias del mes anterior
if (mesactual==0) {candiasant=31} else {
var candiasant=diasmes[mesactual-1]}
for(x=1;x<=primerdiasemana;x++){
	b=candiasant-(primerdiasemana-x)
document.getElementById("cb"+x).innerHTML=b;
document.getElementById("cb"+x).style.backgroundColor="#fff";
document.getElementById("cb"+x).style.color="#D7E9FF";

	}

//relleno  los prmeros dias del mes siguiente
for(x=1;x<=42-(diasmes[mesactual]+primerdiasemana);x++){
	b=x+primerdiasemana+diasmes[mesactual]
document.getElementById("cb"+b).innerHTML=x;
document.getElementById("cb"+b).style.backgroundColor="#fff";
document.getElementById("cb"+b).style.color="#D7E9FF";

	}


}	
function agendardia(vdec,campo) {
var fecha=new Date();
var diahoy=fecha.getDate()
var dia=parseInt(document.getElementById("sb"+vdec).innerHTML);
var mes=(parseInt(document.getElementById("mesobook").value)+1);
mes	= (mes<=9)?("0"+mes):mes; 
dia = (dia<=9)?("0"+dia):dia;
if(vdec<diahoy){

alert("seleccione una fecha posterior al dia de hoy")

}else{
var fecha =document.getElementById("anoobook" ).value + "-" +mes + "-" +dia
document.getElementById(campo).value=fecha
document.getElementById("calendariobook").style.opacity=0;
setTimeout('document.getElementById("calendariobook").style.display="none"',100);


}
}	
 function reservar(){

if(document.getElementById("desde").value==""||document.getElementById("hasta").value==""){


alert("seleccione las fechas")

}
/*if(document.getElementById("out").value!=""){
	var fechaincano=document.getElementById("in").value
	var inse=fechaincano.split("-")
	
	var fechainmili=new Date(inse[0],inse[1],inse[2])
		var fechaoutmili=new Date(document.getElementById("anoobook" ).value,mes,dia)
	var fechainmiliti=fechainmili.getTime();
	var fechaoutmiliti=fechaoutmili.getTime();
	
var fechafinal=fechaoutmiliti-fechainmiliti
	if(fechafinal<1){alert ("Fechas incorrectas")
	document.getElementById("out").value=""
	}else{//864000000 significa un dia 
		3 dias 259200000
			document.getElementById("noches").innerHTML=(parseInt(fechafinal/86400000))+"   noches"
		
		}
	
	}

*/
 }