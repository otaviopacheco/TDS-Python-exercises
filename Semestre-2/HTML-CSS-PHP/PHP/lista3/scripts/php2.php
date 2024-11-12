<?php
$numero1=$_POST["num1"];
$numero2=$_POST["num2"];
$numero3=$_POST["num3"];
$varif=valide($numero1, $numero2, $numero3);
function valide($numero1, $numero2, $numero3) {
    $soma = $numero1 + $numero2 + $numero3;
    echo "a soma é $soma<br>";
    $media = $soma/3;
echo "a média é $media";
return $soma;
}
?>
