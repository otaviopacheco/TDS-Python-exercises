<?php
$num1 = $_POST["number1"];
$num2 = $_POST["number2"];
$op = $_POST["operacao"];
$operation;
$resString = "o resultado é";
if ($op == "+") {
    $operation = $num1+$num2;
    echo "$resString $operation";
}elseif($op == "-"){
    $operation = $num1-$num2;
    echo "$resString $operation";
}elseif($op =="/"){
    if( $num2 ==0){
        echo "Não é possível dividir por zero";
    }else{
        $operation = $num1/$num2;
        echo "$resString $operation";
    }
}elseif($op == "*"){
    $operation = $num1*$num2;
    echo "$resString $operation";
}
?>