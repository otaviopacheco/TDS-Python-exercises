<?php
$n=$_POST['numero'];
function perfeito($numero){
    $soma = 0;
    for ($i = 1; $i < $numero; $i++){
        if ($numero % $i == 0){
            $soma += $i;
        }
    }
    return $soma==$numero;
}
echo "Numeros prefeitos até o $n:<br>";
for ($i = 1; $i <= $n; $i++){
    if (perfeito($i)){
        echo $i." ";
    }
}
?>
