<?php
$dado=$_POST['dado'];
$r = lancarDado($dado);
for ($i = 1; $i <= 6; $i++){
    echo "Número $i: caiu ".$r[$i]." vezes<br>";
}
function lancarDado($dado){
    $freq = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0);
    for ($i = 0; $i < $dado; $i++){
        $numero = rand(1, 6);
        $freq[$numero]++;
    }
    return $freq;
}
?>
