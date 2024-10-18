<?php
$number1 = $_POST["numero1"];
if ($number1 >= 0) {
    echo "O numero é positivo:";
}elseif($number1 < 0){
    echo "O numero é negativo:";
}
?>