<?php 
$numero = $_POST["numero"];

$ehInteiro = inteiro($numero);
$ehPositivo = positivo($numero);
$ehPrimo = primo($numero);

echo "é inteiro?:$ehInteiro<br>";
echo "é positivo?:$ehPositivo<br>";
echo "é Primo?:$ehPrimo<br>";

function inteiro($numero){
    if (sqrt($numero)){
        return "True";
    }else{
        return "False";
    }


}

function positivo($numero){
    if($numero<0){
        return "False";
    }else{
        return "True";
    }

}


function primo($numero){
    if ($numero <= 1){
        return "False";
    }
    for ($i = 2; $i <= sqrt($numero); $i++){
        if ($numero % $i == 0){
            return "False";
        }
    }
    return "True";
}


?>

