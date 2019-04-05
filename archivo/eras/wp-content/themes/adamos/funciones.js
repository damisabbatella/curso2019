function seleccionar(num){
	
	if(num==1){
	document.getElementById("SECsiete2bINVI").style.display="block";
	setTimeout(function(){
	document.getElementById("SECsiete2bINVI").style.maxHeight=130+"px";
	document.getElementById("SECsiete2bINVI").style.opacity=1;
	document.getElementById("SECsiete2bINVI").style.lineHeight=20+"px";
	}
	,10);
	
	document.getElementById("SECsiete2cINVI").style.maxHeight=0;
	document.getElementById("SECsiete2cINVI").style.opacity=0;
	document.getElementById("SECsiete2cINVI").style.lineHeight=1+"px";
	setTimeout(function(){
	document.getElementById("SECsiete2cINVI").style.display="none";
	}
	,200);
	
	document.getElementById("SECsiete2dINVI").style.maxHeight=0;
	document.getElementById("SECsiete2dINVI").style.opacity=0;
	document.getElementById("SECsiete2dINVI").style.lineHeight=1+"px";
	setTimeout(function(){
	document.getElementById("SECsiete2dINVI").style.display="none";
	}
	,200);
	}
	if(num==2){
	document.getElementById("SECsiete2bINVI").style.maxHeight=0;
	document.getElementById("SECsiete2bINVI").style.opacity=0;
	document.getElementById("SECsiete2bINVI").style.lineHeight=1+"px";
	setTimeout(function(){
	document.getElementById("SECsiete2bINVI").style.display="none";
	}
	,200);
	
	document.getElementById("SECsiete2cINVI").style.display="block";
	setTimeout(function(){
	document.getElementById("SECsiete2cINVI").style.maxHeight=130+"px";
	document.getElementById("SECsiete2cINVI").style.opacity=1;
	document.getElementById("SECsiete2cINVI").style.lineHeight=20+"px";
	}
	,10);
	
	document.getElementById("SECsiete2dINVI").style.maxHeight=0;
	document.getElementById("SECsiete2dINVI").style.opacity=0;
	document.getElementById("SECsiete2dINVI").style.lineHeight=1+"px";
	setTimeout(function(){
	document.getElementById("SECsiete2dINVI").style.display="none";
	}
	,200);
	}
	if(num==3){
	document.getElementById("SECsiete2bINVI").style.maxHeight=0;
	document.getElementById("SECsiete2bINVI").style.opacity=0;
	document.getElementById("SECsiete2bINVI").style.lineHeight=1+"px";
	setTimeout(function(){
	document.getElementById("SECsiete2bINVI").style.display="none";
	}
	,200);
	
	document.getElementById("SECsiete2cINVI").style.maxHeight=0;
	document.getElementById("SECsiete2cINVI").style.opacity=0;
	document.getElementById("SECsiete2cINVI").style.lineHeight=1+"px";
	setTimeout(function(){
	document.getElementById("SECsiete2cINVI").style.display="none";
	}
	,200);
	
	document.getElementById("SECsiete2dINVI").style.display="block";
	document.getElementById("SECsiete2dINVI").style.maxHeight=130+"px";
	document.getElementById("SECsiete2dINVI").style.opacity=1;
	document.getElementById("SECsiete2dINVI").style.lineHeight=20+"px";
	}
}
function moverEnlaces(sec){
	if(sec==2){
	document.getElementById("SECocho2").style.marginLeft=-100+"%";
	}
	if(sec==1){
	document.getElementById("SECocho2").style.marginLeft=0+"%";
	}
}

contador=1

function menuM(uno){

num=uno+contador;

if(num % 2 == 0){
	document.getElementById("nav").style.opacity=1;
	//document.getElementsByClassName("barritas").style.backgroundColor="#717171";
	document.getElementById("bar1").style.backgroundColor="#717171"
	document.getElementById("bar2").style.backgroundColor="#717171"
	document.getElementById("bar3").style.backgroundColor="#717171"
	contador++;
	}else{
	document.getElementById("nav").style.opacity=0;
	//document.getElementsByClassName("barritas").style.backgroundColor="#bebdbd";
	document.getElementById("bar1").style.backgroundColor="#bebdbd"
	document.getElementById("bar2").style.backgroundColor="#bebdbd"
	document.getElementById("bar3").style.backgroundColor="#bebdbd"
	
	contador++;	
	}
}
function transicion(curva,ms,callback){ 
    this.ant=0.01; 
    this.done_=false; 
    var _this=this; 
    this.start=new Date().getTime(); 
    this.init=function(){ 
        setTimeout(function(){ 
                if(!_this.next()){ 
                    callback(1); 
                    _this.done_=true; 
                    window.globalIntervalo=0;
					reiniciar(1)
                    return;
                } 
                callback(_this.next()); 
				_this.init(); 
            },13); 
    } 
    this.next=function(){ 
        var now=new Date().getTime(); 
        if((now-this.start)>ms) 
            return false; 
        return this.ant=curva((now-this.start+.001)/ms,this.ant); 
    } 
} 
function mover(){
	vertexto()
	var o=document.getElementById("barraCAR")
    var inicio=0,fin=100; 
    var t=new transicion(linear,6000,function(p){ 
        o.style.width=inicio+((fin-inicio)*p)+'%'; 
    }); 
    t.init(); 
    t=null;
} 
function linear(p,a){ 
    return p; 
}
imgs=0
mo=(imgs+numimg)
function reiniciar(uno){ 

	cambia=(imgs+uno)
	
	if(cambia==1){
    document.getElementById("Gbase").style.marginLeft=-100+"%"
	imgs++
		
		document.getElementById("Gb1").className="normalGb"
			
		document.getElementById("Gb2").className="currentGb"
			
		document.getElementById("Gb3").className="normalGb"
		document.getElementById("Gb4").className="normalGb"
		
	mover()
	
	}
	if(cambia==2){
    document.getElementById("Gbase").style.marginLeft=-200+"%"
	imgs++
	
		document.getElementById("Gb1").className="normalGb"			
		document.getElementById("Gb2").className="normalGb"
			
		document.getElementById("Gb3").className="currentGb"
			
		document.getElementById("Gb4").className="normalGb"	
			
	mover()
	}
	if(cambia==3){
    document.getElementById("Gbase").style.marginLeft=-300+"%"
	imgs++
		
		document.getElementById("Gb1").className="normalGb"			
		document.getElementById("Gb2").className="normalGb"		
		document.getElementById("Gb3").className="normalGb"
			
		document.getElementById("Gb4").className="currentGb"
			
	mover()
	}
	if(cambia==4){
    document.getElementById("Gbase").style.marginLeft=0+"%"
	imgs=0
	
		document.getElementById("Gb1").className="currentGb"
			
		document.getElementById("Gb2").className="normalGb"
		document.getElementById("Gb3").className="normalGb"
		document.getElementById("Gb4").className="normalGb"	
	mover()
	}
}
function correrIMG(numimg){
	
	if(numimg==0){		
			document.getElementById("Gbase").style.marginLeft=0+"%"
			imgs=0
											
			document.getElementById("Gb1").className="currentGb"
			
			document.getElementById("Gb2").className="normalGb"
			document.getElementById("Gb3").className="normalGb"
			document.getElementById("Gb4").className="normalGb"	
			
			vertexto()	
	}
	if(numimg==1){		
			document.getElementById("Gbase").style.marginLeft=-100+"%"
			imgs=1
			
			document.getElementById("Gb1").className="normalGb"
			
			document.getElementById("Gb2").className="currentGb"
			
			document.getElementById("Gb3").className="normalGb"
			document.getElementById("Gb4").className="normalGb"	
			vertexto()		
	}
	if(numimg==2){		
			document.getElementById("Gbase").style.marginLeft=-200+"%"
			imgs=2
			
			document.getElementById("Gb1").className="normalGb"			
			document.getElementById("Gb2").className="normalGb"
			
			document.getElementById("Gb3").className="currentGb"
			
			document.getElementById("Gb4").className="normalGb"	
			vertexto()			
	}
	if(numimg==3){		
			document.getElementById("Gbase").style.marginLeft=-300+"%"
			imgs=3
			
			document.getElementById("Gb1").className="normalGb"			
			document.getElementById("Gb2").className="normalGb"		
			document.getElementById("Gb3").className="normalGb"
			
			document.getElementById("Gb4").className="currentGb"
			vertexto()		
	}
}
function vertexto(){
	document.getElementById("Gbimagtexto1").style.opacity=0
	document.getElementById("Gbimagtexto2").style.opacity=0
	setTimeout(function(){
	document.getElementById("Gbimagtexto1").style.opacity=1
	document.getElementById("Gbimagtexto2").style.opacity=1		
	if(imgs==1){
		document.getElementById("Gbimagtexto1").innerHTML="El cuidado del agua depende"
		document.getElementById("Gbimagtexto2").innerHTML="de todos"
		}
	if(imgs==2){
		document.getElementById("Gbimagtexto1").innerHTML="El agua tambíen es energía"
		document.getElementById("Gbimagtexto2").innerHTML="cuidémosla"
		}
	if(imgs==3){
		document.getElementById("Gbimagtexto1").innerHTML="Debemos cuidar"
		document.getElementById("Gbimagtexto2").innerHTML="el agua"
		}
	if(imgs==0){
		document.getElementById("Gbimagtexto1").innerHTML="Ente Regulador de Agua"
		document.getElementById("Gbimagtexto2").innerHTML="y Saneamiento"
		}
	}
	,1000);
	
}
function propa(){
	window.open(
  'http://www.minplan.gob.ar/subsidios/',
  '_blank' 
);
}
function cerrarpropa(){
	document.getElementById("propaganda").style.opacity=0
	setTimeout(function(){
	document.getElementById("propaganda").style.display="none"	
	}
	,300);
}