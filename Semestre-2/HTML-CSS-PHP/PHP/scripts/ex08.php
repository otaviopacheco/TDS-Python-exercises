<?php 
$notas = $_POST["nota"];
$resp = 0;
// $resp = ($notas[0] + $notas[1] + $notas[2])/3;
// print_r($notas)
for($i = 0; $i < count($notas); $i++){
    $resp += (($notas[$i])/3);
}
echo $resp;
?>