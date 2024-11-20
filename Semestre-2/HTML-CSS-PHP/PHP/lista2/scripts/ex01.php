<?php 
    $p = $_POST["perimetro"];
    $r = $_POST["raio"];
    function volume($p,$r){
        $v = (4/3*($p*3.14)*($r**3));
        $v = ((4/3)* 3.14 * ($r**3));
        return $v;
    }
$volumeTotal = volume($p,$r);
echo "Volume: $volumeTotal";
?>