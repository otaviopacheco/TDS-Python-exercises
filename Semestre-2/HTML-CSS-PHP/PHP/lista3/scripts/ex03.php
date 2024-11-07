<?php 
$number = $_POST["number"]; 
$opt = $_POST["op"]; 




function compararMenor($number){
    $menorNumero = $number[1];
    for($i = 0; $i < count($number); $i++){
        if ($menorNumero > $number[$i]){
            $menorNumero = $number[$i];
        } 
        
    }
    echo "O menor número é $menorNumero";
}
function compararMaior($number){
    $maiorNumero = $number[1];
    for($i = 0; $i < count($number); $i++){
        if ($maiorNumero < $number[$i]){
            $maiorNumero = $number[$i];
        }
    }
    echo "O maior número é $maiorNumero";
}
if($opt == "maior"){
    echo compararMaior($number);
}else{
    echo compararMenor($number);
}


?>