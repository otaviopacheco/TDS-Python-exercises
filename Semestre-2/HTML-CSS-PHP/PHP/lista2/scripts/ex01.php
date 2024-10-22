<?php 
    $p = $_POST["perimetro"];
    $r = $_POST["raio"];
    // $v = (4/3*($p*3.14)*($r**3));
    $v = ((4/3)* 3.14 * ($r**3));
    echo "Volume:  $v";
?>