<?php
$numero = $_POST["numero"];
function impar($numero){
    if($numero == 2 or $numero % 2!= 0){
        return true;
    }
    return false;
}
$eImpar = impar($numero);

function primo($eImpar,$numero){
    if ($eImpar == true){
        $primos = [1,2];
        for ($i = 2; $i < $numero; $i++){
            $numero = (int) $numero;

            if($numero % $i == 0){
                return 'não é primo';
            }else{

                $primo[] = $i;
                
                }
            }
            print_r($primos);
        }else{
        return "va pa pqp";
    }
}


$Eprimo = primo($eImpar,$numero);
echo $Eprimo;
?>