function makeStep (buttonId) {
	var button=document.getElementById(buttonId);
	if (isEmptyCell (button)==false) {
		alert("Смотри куды жмешь");
		return "Смотри куды жмешь!"
	}
	else {
		button.innerHTML="X";
		if (FATALITY()==true) {
			return;
		}
		else {
			var a11=document.getElementById("a11");
			var a12=document.getElementById("a12");
			var a13=document.getElementById("a13");
			var a21=document.getElementById("a21");
			var a22=document.getElementById("a22");
			var a23=document.getElementById("a23");
			var a31=document.getElementById("a31");
			var a32=document.getElementById("a32");
			var a33=document.getElementById("a33");
			if(a11.innerHTML==""){
				a11.innerHTML="O";}
			else
			if(a12.innerHTML==""){
				a12.innerHTML="O";}
			else
			if(a13.innerHTML==""){
				a13.innerHTML="O";}
				else
			if(a21.innerHTML==""){
				a21.innerHTML="O";}
				else
			if(a22.innerHTML==""){
				a22.innerHTML="O";}
				else
			if(a23.innerHTML==""){
				a23.innerHTML="O";}
				else
			if(a31.innerHTML==""){
				a31.innerHTML="O";}
				else
			if(a32.innerHTML==""){
				a32.innerHTML="O";}
				else
			if(a33.innerHTML==""){
				a33.innerHTML="O";}
				else
FATALITY();
		}
	}
}

function isEmptyCell (cell){
	if (cell.innerHTML=="X" || cell.innerHTML=="O"){
		return false;
	}
	else {
		return true;
	}

}
function FATALITY (){
var a11=document.getElementById("a11").innerHTML;
var a12=document.getElementById("a12").innerHTML;
var a13=document.getElementById("a13").innerHTML;
var a21=document.getElementById("a21").innerHTML;
var a22=document.getElementById("a22").innerHTML;
var a23=document.getElementById("a23").innerHTML;
var a31=document.getElementById("a31").innerHTML;
var a32=document.getElementById("a32").innerHTML;
var a33=document.getElementById("a33").innerHTML;
if (a11=="X" && a12=="X" && a13=="X"){                         //стоят ли одинаковые значения в первых трех ячейках
	alert("YOU WIN!!!");
	return true;

}
if (a21=="X" && a22=="X" && a23=="X"){                         
	alert("YOU WIN!!!");
	return true;
} 
if (a31=="X" && a32=="X" && a33=="X"){                         
	return true;
} 
if (a11=="X" && a22=="X" && a33=="X"){                       
	alert("YOU WIN!!!");
	return true;
} 
if (a13=="X" && a22=="X" && a31=="X"){                        
	alert("YOU WIN!!!");
	return true;
} 
if (a11=="X" && a21=="X" && a31=="X"){                         
	alert("YOU WIN!!!");
	return true;
} 
if (a12=="X" && a22=="X" && a32=="X"){                         
	alert("YOU WIN!!!");
	return true;
} 
if (a13=="X" && a23=="X" && a33=="X"){                         
	alert("YOU WIN!!!");
	return true;
}  





if (a11=="O" && a12=="O" && a13=="O"){                         //стоят ли одинаковые значения в первых трех ячейках
	alert("YOU Loshara!!!");
	return true;

}
if (a21=="O" && a22=="O" && a23=="O"){                         //стоят ли одинаковые значения в первых трех ячейках
	alert("YOU Loshara!!!");
	return true;
} 
if (a31=="O" && a32=="O" && a33=="O"){                         //стоят ли одинаковые значения в первых трех ячейках
	alert("YOU Loshara!!!");
	return true;
} 
if (a11=="O" && a22=="O" && a33=="O"){                         //стоят ли одинаковые значения в первых трех ячейках
	alert("YOU Loshara!!!");
	return true;
} 
if (a13=="O" && a22=="O" && a31=="O"){                         //стоят ли одинаковые значения в первых трех ячейках
	alert("YOU Loshara!!!");
	return true;
} 
if (a11=="O" && a21=="O" && a31=="O"){                         //стоят ли одинаковые значения в первых трех ячейках
	alert("YOU Loshara!!!");
	return true;
} 
if (a12=="O" && a22=="O" && a32=="O"){                         //стоят ли одинаковые значения в первых трех ячейках
	alert("YOU Loshara!!!");
	return true;
} 
if (a13=="O" && a23=="O" && a33=="O"){                         //стоят ли одинаковые значения в первых трех ячейках
	alert("YOU Loshara!!!");
	return true;
}  
}