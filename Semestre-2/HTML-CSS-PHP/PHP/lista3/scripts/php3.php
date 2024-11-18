<?php
$numero1=$_POST["num1"];
$numero2=$_POST["num2"];
$numero3=$_POST["num3"];
$select=$_POST["option"];
if ($select == "maior") {
    $r = maior($numero1, $numero2, $numero3);
} elseif ($select == "menor") {
    $r = menor($numero1, $numero2, $numero3);
} else {
    $r = "Opcao invalida";
}
echo $r;
function maior($num1, $num2, $num3) {
    $maior = max($num1, $num2, $num3);
    return "O maior numero é: $maior";
}
function menor($num1, $num2, $num3) {
    $menor = min($num1, $num2, $num3);
    return "O menor numero é: $menor";
}
?>
