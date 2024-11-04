<?php
$celsius = $_POST["celsius"];
$fah = $_POST["fah"];

function conversor($celsius) {
    return ($celsius*9/5) + 32;
}
function fah($fah){
    return ($fah-32)*9/5;
}


$resp2 = fah($fah);
$resp = conversor($celsius);
echo "$resp <br>";
echo $resp2;
?>