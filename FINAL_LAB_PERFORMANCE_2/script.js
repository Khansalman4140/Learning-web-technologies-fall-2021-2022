function btn(number){

let existingnum = document.getElementById('result').innerHTML;



document.getElementById('result').innerHTML = existingnum+number;
}



function btnf(operand){
let number = document.getElementById('result').innerHTML;



document.getElementById('resultPrev').innerHTML = number;
document.getElementById('operand').innerHTML = operand;
document.getElementById('result').innerHTML = "";
}



function clear(){
/* document.getElementById('resultPrev').innerHTML = "";
document.getElementById('operand').innerHTML = "";*/
document.getElementById('result').innerHTML = "";
}
function clearAll(){
document.getElementById('resultPrev').innerHTML = "";
document.getElementById('operand').innerHTML = "";
document.getElementById('result').innerHTML = "";
}



function cal(){



let num1 = document.getElementById('resultPrev').innerHTML;
let operand = document.getElementById('operand').innerHTML;
let num2 = document.getElementById('result').innerHTML;
let no1 = parseInt(num1);
let no2 = parseInt(num2);





let xhttp = new XMLHttpRequest();

xhttp.open('POST', 'check.php', true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send('operand='+operand+'&&no1='+no1+'&&no2='+no2);



xhttp.onreadystatechange = function(){



if(this.readyState == 4 && this.status == 200){
document.getElementById('result').innerHTML = this.responseText;
}
document.getElementById('resultPrev').innerHTML = "";
document.getElementById('operand').innerHTML = "";
}
}