<?php
$A = $_POST["A"];
$B = $_POST["B"];
    if ($A > $B){
        echo "A maior que B";
    }elseif($A < $B){
        echo "A Menor que B";
    }elseif($A == $B){
        echo "A igual a B";
    }

?>