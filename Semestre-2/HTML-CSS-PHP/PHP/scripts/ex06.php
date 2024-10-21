<?php 
$numeroA = $_POST["numeroA"];
$numeroB = $_POST["numeroB"];
    if($numeroA < $numeroB){
        echo "$numeroA $numeroB";
    }elseif ($numeroB < $numeroA){
        echo "$numeroB $numeroA";
    }else{
        echo "Os numeros são iguais";
    }
?>