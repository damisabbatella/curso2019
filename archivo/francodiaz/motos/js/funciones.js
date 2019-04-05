window.onload=function(){
	var cont=1
	setInterval(function(){
		if(cont<3){cont++}else{cont=1}
	   saludar(cont)
	},4000)
}

function saludar(num){

	document.getElementById("diapo1").style.opacity=0
	document.getElementById("diapo2").style.opacity=0
	document.getElementById("diapo3").style.opacity=0

	document.getElementById("diapo"+num).style.opacity=1
}