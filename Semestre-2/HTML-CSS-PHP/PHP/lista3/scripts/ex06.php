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
        return 'rolou';

    }else{
        return "va pa pqp";
    }


};
$Eprimo = primo($eImpar,$numero);
echo $Eprimo;
?>