function TamVentana() {
  var Tamanyo = [0, 0];
  if (typeof window.innerWidth != 'undefined')
  {
    Tamanyo = [
        window.innerWidth,
        window.innerHeight
    ];
  }
  else if (typeof document.documentElement != 'undefined'
      && typeof document.documentElement.clientWidth !=
      'undefined' && document.documentElement.clientWidth != 0)
  {
 Tamanyo = [
        document.documentElement.clientWidth,
        document.documentElement.clientHeight
    ];
  }
  else   {
    Tamanyo = [
        document.getElementsByTagName('body')[0].clientWidth,
        document.getElementsByTagName('body')[0].clientHeight
    ];
  }
  return Tamanyo;
}


function redimensiona() {
  var Tam =TamVentana();
  
  var tamfuente=parseInt((Tam[0]*0.047))+"px";

document.getElementById("todo").style.fontSize=tamfuente;

};

window.onresize = function() {
  var Tam = TamVentana();
  
  var tamfuente=parseInt((Tam[0]*0.047))+"px";

document.getElementById("todo").style.fontSize=tamfuente;
};
contador=1
function moverbotonera(uno){
num=uno+contador;

if(num % 2 == 0){
	document.getElementById("derecha").style.left=80+"%"
	document.getElementById("navegador").style.left=70+"%"
	contador++
}else{
	document.getElementById("derecha").style.left=100+"%"
	document.getElementById("navegador").style.left=90+"%"
	contador++
	}
}
sec=0

function abrircontenido(zona){
	if(zona==1){
		document.getElementById("contenido").style.left=-80+"%"
		sec=0
		document.getElementById("derecha").style.left=100+"%"
		document.getElementById("navegador").style.left=90+"%"
		
		document.getElementById("btn1").className="currentBTN"
		document.getElementById("borde1").className="currentBOR"
		document.getElementById("resto1").className="currentRES"
		
		document.getElementById("btn2").className="botones"
		document.getElementById("borde2").className="bordes"
		document.getElementById("resto2").className="restos"
		
		document.getElementById("btn3").className="botones"
		document.getElementById("borde3").className="bordes"
		document.getElementById("resto3").className="restos"
		
		document.getElementById("btn4").className="botones"
		document.getElementById("borde4").className="bordes"
		document.getElementById("resto4").className="restos"
		contador++
	}
	if(zona==2){
		if(sec==0 | sec==2){
		document.getElementById("contenido").style.left=0+"%"
		document.getElementById("btn2").className="currentBTN"
		document.getElementById("borde2").className="currentBOR"
		document.getElementById("resto2").className="currentRES"
		
		document.getElementById("btn1").className="botones"
		document.getElementById("borde1").className="bordes"
		document.getElementById("resto1").className="restos"
		
		document.getElementById("btn3").className="botones"
		document.getElementById("borde3").className="bordes"
		document.getElementById("resto3").className="restos"
		
		document.getElementById("btn4").className="botones"
		document.getElementById("borde4").className="bordes"
		document.getElementById("resto4").className="restos"
		
		document.getElementById("titulo").innerHTML="PORTFOLIO"
		document.getElementById("titulo").style.opacity=1
		document.getElementById("contenido").style.backgroundColor="#009cff"
		document.getElementById("porfolio").style.display="block"
		sec=2
		}else{
		document.getElementById("contenido").style.left=-80+"%"
		
		
		setTimeout(function(){	
		document.getElementById("cursos").style.display="none"
		document.getElementById("contacto").style.display="none"
			
		document.getElementById("contenido").style.left=0+"%"
		document.getElementById("btn2").className="currentBTN"
		document.getElementById("borde2").className="currentBOR"
		document.getElementById("resto2").className="currentRES"
		
		document.getElementById("btn1").className="botones"
		document.getElementById("borde1").className="bordes"
		document.getElementById("resto1").className="restos"
		
		document.getElementById("btn3").className="botones"
		document.getElementById("borde3").className="bordes"
		document.getElementById("resto3").className="restos"
		
		document.getElementById("btn4").className="botones"
		document.getElementById("borde4").className="bordes"
		document.getElementById("resto4").className="restos"
		
		document.getElementById("titulo").innerHTML="PORTFOLIO"
		document.getElementById("titulo").style.opacity=1
		document.getElementById("contenido").style.backgroundColor="#009cff"
		document.getElementById("porfolio").style.display="block"
		sec=2
		}
		,420);
		}
	}
	if(zona==3){
		if(sec==0 | sec==3){
		document.getElementById("contenido").style.left=0+"%"
		
		document.getElementById("btn3").className="currentBTN"
		document.getElementById("borde3").className="currentBOR"
		document.getElementById("resto3").className="currentRES"
		
		document.getElementById("btn1").className="botones"
		document.getElementById("borde1").className="bordes"
		document.getElementById("resto1").className="restos"
		
		document.getElementById("btn2").className="botones"
		document.getElementById("borde2").className="bordes"
		document.getElementById("resto2").className="restos"
		
		document.getElementById("btn4").className="botones"
		document.getElementById("borde4").className="bordes"
		document.getElementById("resto4").className="restos"
		
		document.getElementById("titulo").innerHTML="CURSOS"
		document.getElementById("titulo").style.opacity=1
		document.getElementById("contenido").style.backgroundColor="#0072c3"
		document.getElementById("cursos").style.display="block"
		sec==3
		}else{
		document.getElementById("contenido").style.left=-80+"%"
		
		setTimeout(function(){		
		document.getElementById("porfolio").style.display="none"
		document.getElementById("contacto").style.display="none"
		
		document.getElementById("contenido").style.left=0+"%"
		
		document.getElementById("btn3").className="currentBTN"
		document.getElementById("borde3").className="currentBOR"
		document.getElementById("resto3").className="currentRES"
		
		document.getElementById("btn1").className="botones"
		document.getElementById("borde1").className="bordes"
		document.getElementById("resto1").className="restos"
		
		document.getElementById("btn2").className="botones"
		document.getElementById("borde2").className="bordes"
		document.getElementById("resto2").className="restos"
		
		document.getElementById("btn4").className="botones"
		document.getElementById("borde4").className="bordes"
		document.getElementById("resto4").className="restos"
		
		document.getElementById("titulo").innerHTML="CURSOS"
		document.getElementById("titulo").style.opacity=1
		document.getElementById("contenido").style.backgroundColor="#0072c3"
		document.getElementById("cursos").style.display="block"
		sec=3
		}
		,420);
		}
	}
	if(zona==4){
		if(sec==0 | sec==4){
		document.getElementById("contenido").style.left=0+"%"
		
		document.getElementById("btn4").className="currentBTN"
		document.getElementById("borde4").className="currentBOR"
		document.getElementById("resto4").className="currentRES"
		
		document.getElementById("btn1").className="botones"
		document.getElementById("borde1").className="bordes"
		document.getElementById("resto1").className="restos"
		
		document.getElementById("btn2").className="botones"
		document.getElementById("borde2").className="bordes"
		document.getElementById("resto2").className="restos"
		
		document.getElementById("btn3").className="botones"
		document.getElementById("borde3").className="bordes"
		document.getElementById("resto3").className="restos"
		
		document.getElementById("titulo").innerHTML="CONTACTO"
		document.getElementById("titulo").style.opacity=1
		document.getElementById("contenido").style.backgroundColor="#00355f"
		document.getElementById("contacto").style.display="block"
		sec=4
		}else{
		document.getElementById("contenido").style.left=-80+"%"
		
		setTimeout(function(){
		document.getElementById("cursos").style.display="none"
		document.getElementById("porfolio").style.display="none"
		
		document.getElementById("contenido").style.left=0+"%"
		
		document.getElementById("btn4").className="currentBTN"
		document.getElementById("borde4").className="currentBOR"
		document.getElementById("resto4").className="currentRES"
		
		document.getElementById("btn1").className="botones"
		document.getElementById("borde1").className="bordes"
		document.getElementById("resto1").className="restos"
		
		document.getElementById("btn2").className="botones"
		document.getElementById("borde2").className="bordes"
		document.getElementById("resto2").className="restos"
		
		document.getElementById("btn3").className="botones"
		document.getElementById("borde3").className="bordes"
		document.getElementById("resto3").className="restos"
		
		document.getElementById("titulo").innerHTML="CONTACTO"
		document.getElementById("titulo").style.opacity=1
		document.getElementById("contenido").style.backgroundColor="#00355f"
		document.getElementById("contacto").style.display="block"
		sec=4
		}
		,420);
		}
	}
}