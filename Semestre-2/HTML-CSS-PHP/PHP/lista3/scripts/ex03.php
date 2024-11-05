<?php 
$number = $_POST["number"]; 

// print_r($number);
function compararMenor($number){
    for($i = 0; $i < count($number); $i++){
        if ($number[$i] > $number[2] and $number[$i]> $number[1]){
            echo "o menor numero é $number[$i] caso1";
            $menor = $number[$i];
            return $menor;
        }else if ($number[$i] < $number[2] and $number[$i] <  $number[0]){
            echo "o menor numero é $number[$i] caso2";
            $menor = $number[$i];
            return $menor;
        }else if ($number[$i] < $number[0] and $number[$i]< $number[1]){
            echo "o menor numero é $number[$i] caso3";
            $menor = $number[$i];
            return $menor;
        }
    }
}

echo compararMenor($number)
?>