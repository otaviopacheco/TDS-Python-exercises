<?php
$number1 = $_POST["number1"];
$number2 = $_POST["number2"]; 
$respSting = "o resultado é";
$opResp = 0;
$operation = $_POST["operation"];
if ($operation == "+"){
    $opResp = $number1 + $number2;
    echo"$respSting : $opResp";
}
elseif($operation == "-"){
    $opResp = $number1 - $number2;
    echo"$respSting : $opResp";
}
elseif($operation == "*"){
    $opResp = $number1 * $number2;
    echo"$respSting : $opResp";
}
elseif($operation =="/"){
    if($number2 != 0){
        $opResp = $number1 / $number2;
        echo"$respSting : $opResp";
    }else{
        echo "Não é possivel realizar a divisão por zero";
    }
    
}
?>