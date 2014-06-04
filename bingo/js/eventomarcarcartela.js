function marcarBingo() {
	
	window.document.getElementById("table1").src = "img/icones/1marcar.jpeg";	
	//window.alert("VOCE MARCOU\nCORRETAMENTE O ICONE\nNA CARTELA");
			 
}

function marcar() {
			 window.document.getElementByData("img/icones/" + data + ".jpeg").src = "img/icones/" + data + "marcar.jpeg";
		}
		
function clickListener(e) {
	var item = e.getAttribute(item);//getElementsByTagName()
	switch(item) {
		case "img/icones/1.jpeg":
			document.getElementById("table1").src = "img/icones/1marcar.jpeg";
			break;
		case "img/icones/2.jpeg":
			document.getElementById("table2").src = "img/icones/2marcar.jpeg";
			break;
		case "img/icones/3.jpeg":
			document.getElementById("table3").src = "img/icones/3marcar.jpeg";
			break;
		case "img/icones/4.jpeg":
			document.getElementById("table4").src = "img/icones/4marcar.jpeg";
			break;
		case "img/icones/5.jpeg":
			document.getElementById("table5").src = "img/icones/5marcar.jpeg";
			break;
		case "img/icones/6.jpeg":
			document.getElementById("table6").src = "img/icones/6marcar.jpeg";
			break;
		case "img/icones/7.jpeg":
			document.getElementById("table7").src = "img/icones/7marcar.jpeg";
			break;
		case "img/icones/8.jpeg":
			document.getElementById("table8").src = "img/icones/8marcar.jpeg";
			break;
		case "img/icones/9.jpeg":
			document.getElementById("table9").src = "img/icones/9marcar.jpeg";
			break;
		case "img/icones/10.jpeg":
			document.getElementById("table10").src = "img/icones/10marcar.jpeg";
			break;
		default:
		alert("NADA ACONTECEU");
	}


}