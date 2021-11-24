<?php



$no1 = $_POST['no1'] ;
$no2 = $_POST['no2'] ;
$op = $_POST['operand'];




switch ($op) {
case '+':
$res = $no1+$no2;
echo $res;
break;
case '-':
$res = $no1-$no2;
echo $res;
break;
case '*':
$res = $no1*$no2;
echo $res;
break;
case '/':
$res = $no1/$no2;
echo $res;
break;



}



?>