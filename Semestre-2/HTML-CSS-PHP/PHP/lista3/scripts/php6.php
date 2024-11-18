<?php
$n=$_POST['n'];
function primo($numero){
    if ($numero <= 1){
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++){
        if ($numero % $i == 0){
            return false;
        }
    }
    return true;
}
echo "numeros primos até o $n:<br>";
for ($i = 1; $i <= $n; $i++){
    if (primo($i)){
        echo $i . " ";
    }
}
?>