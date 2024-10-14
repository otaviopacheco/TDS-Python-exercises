<?php
    
    
    $num = $_POST["number"]; 
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $count = 0;
    if ($num > 0)
        echo " é um número positivo";
    elseif ($num < 0)
        echo "é negativo";
    elseif($num == 0)
        echo "é zero";
    do{
        $count++;
        $res = $count * $num;
        echo "<br>$count x $num = $res";
    }while ($count < 10 );
        $fat = $num;
        for($i = $num-1; $i > 0; $i--){
       
        $fat = $fat * $i;
    };
    echo "<br>Fatorial de $num é $fat";
    echo "<br>$num1 $num2"
        
    

?>