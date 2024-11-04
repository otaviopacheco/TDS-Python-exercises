<?php 
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$number3 = $_POST["number3"];
$soma = soma($number1,$number2,$number3);

function soma($number1,$number2,$number3){
    return $number1 + $number2 + $number3;
}
function media($soma){
    return $soma / 3;
}
echo media($soma)
?>