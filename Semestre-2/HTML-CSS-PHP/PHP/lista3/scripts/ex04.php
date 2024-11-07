<?php 


$lancamentos = $_POST["rodadas"];
function qtdlancamentos($lancamentos){
    $vecQtd = [0,0,0,0,0,0];
    while ($lancamentos > 0){
        $random = rand(1,6);
        $vecQtd[$random - 1] += 1;         

        echo "$random<br>";


       
    $lancamentos = $lancamentos-1;
    
    }
    
        print_r($vecQtd);



}
qtdlancamentos($lancamentos)

?>

