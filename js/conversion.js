window.onload = function () {
	convertir();
}
function convertir() {
let input = document.getElementById("input").value;
let s1 = document.getElementById("s1").value;
let s2 = document.getElementById("s2").value;	
let byte="bytes", kilo="KiloBytes",mega="megas",giga="gigas",tera="tera";	
	if(s1 === "B" && s2 === "BB"){
		let res1=(input/1);
		document.getElementById('resultado').innerHTML = res1+byte;
} else if(s1 === "B" && s2 === "KB"){
		let res2=(input/1000);
		document.getElementById('resultado').innerHTML = res2+byte;
} else if(s1 === "B" && s2 === "MB"){
		let res3=(input/(1000000));
		document.getElementById('resultado').innerHTML = res3+byte;
} else if(s1 === "B" && s2 === "GB"){
		let res4=(input/(1000000000));
		document.getElementById('resultado').innerHTML = res4+byte;
} else if(s1 === "B" && s2 === "TB"){
		let res5=(input/(1000000000000));
		document.getElementById('resultado').innerHTML = res5+byte;
/*---------------------------------kilo-----------------------------------------------------------*/	
} else if(s1 === "K" && s2 === "BB"){
		let res2=(input*1000);
		document.getElementById('resultado').innerHTML = res2+byte;
} else if(s1 === "K" && s2 === "KB"){
		let res2=(input*1);
		document.getElementById('resultado').innerHTML = res2+kilo;
} else if(s1 === "K" && s2 === "MB"){
		let res3=(input/(1000000));
		document.getElementById('resultado').innerHTML = res3+mega;
} else if(s1 === "K" && s2 === "GB"){
		let res4=(input/(1000000000));
		document.getElementById('resultado').innerHTML = res4+giga;
} else if(s1 === "K" && s2 === "TB"){
		let res5=(input/(1000000000000));
		document.getElementById('resultado').innerHTML = res5+tera;	
/*---------------------------------mega-----------------------------------------------------------*/	
} else if(s1 === "M" && s2 === "BB"){
		let res2=(input*1000000);
		document.getElementById('resultado').innerHTML = res2+byte;
} else if(s1 === "M" && s2 === "KB"){
		let res2=(input*1000);
		document.getElementById('resultado').innerHTML = res2+kilo;
} else if(s1 === "M" && s2 === "MB"){
		let res3=(input*1);
		document.getElementById('resultado').innerHTML = res3+mega;
} else if(s1 === "M" && s2 === "GB"){
		let res4=(input/(1000000000));
		document.getElementById('resultado').innerHTML = res4+giga;
} else if(s1 === "M" && s2 === "TB"){
		let res5=(input/(1000000000000));
		document.getElementById('resultado').innerHTML = res5+tera;		
/*---------------------------------giga-----------------------------------------------------------*/	
} else if(s1 === "G" && s2 === "BB"){
		let res2=(input*1000000000);
		document.getElementById('resultado').innerHTML = res2+byte;
} else if(s1 === "G" && s2 === "KB"){
		let res2=(input*1000000);
		document.getElementById('resultado').innerHTML = res2+kilo;
} else if(s1 === "G" && s2 === "MB"){
		let res3=(input*1000);
		document.getElementById('resultado').innerHTML = res3+mega;
} else if(s1 === "G" && s2 === "GB"){
		let res4=(input*1);
		document.getElementById('resultado').innerHTML = res4+giga;
} else if(s1 === "G" && s2 === "TB"){
		let res5=(input/(1000000000));
		document.getElementById('resultado').innerHTML = res5+tera;	
/*---------------------------------tera-----------------------------------------------------------*/	
} else if(s1 === "T" && s2 === "BB"){
		let res2=(input*1000000000000);
		document.getElementById('resultado').innerHTML = res2+byte;
} else if(s1 === "T" && s2 === "KB"){
		let res2=(input*1000000000);
		document.getElementById('resultado').innerHTML = res2+kilo;
} else if(s1 === "T" && s2 === "MB"){
		let res3=(input*(1000000));
		document.getElementById('resultado').innerHTML = res3+mega;
} else if(s1 === "T" && s2 === "GB"){
		let res4=(input*(1000));
		document.getElementById('resultado').innerHTML = res4+giga;
} else if(s1 === "T" && s2 === "TB"){
		let res5=(input*1);
		document.getElementById('resultado').innerHTML = res5+tera;		

	
}else{document.getElementById("resultado").value = "sin datos"; }
	
	
}
