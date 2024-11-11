<?php
// $numero = $_POST["numeros"];  // Pegando o número enviado via POST

// function getPerfeito($numero) {
//     // Inicializa a variável para somar os divisores
//     $somaDivisores = 1; // 1 é sempre divisor de qualquer número

//     // Loop para encontrar os divisores do número (até $numero/2)
//     for ($i = 0; $i <= $numero / 2; $i++) {
//         if ($numero % $i == 0) {
//             $somaDivisores += $i;  // Soma os divisores
//         }
//     }

//     // Verifica se a soma dos divisores é igual ao número
//     if ($somaDivisores == $numero) {
//         return "O número $numero é perfeito.";
//     } else {
//         return "O número $numero não é perfeito.";
//     }
// }

// $perfeito = getPerfeito($numero);
// echo $perfeito;




$numero = $_POST["numeros"];

function getPerfeito($numero){

    $divisores = 1;

    for($i = 1; $i < $numero; $i++){

        if ($numero % $i == 0){

            $divisores = $divisores + $i;

        }else{
            return "não é ";
        }
    

    }
    
    return $divisores;
    
}


$perfeito = getPerfeito($numero);
echo $perfeito;



function GetLinha($perfeito, $numero){
    echo "abrobrinhao";



}

?> 
