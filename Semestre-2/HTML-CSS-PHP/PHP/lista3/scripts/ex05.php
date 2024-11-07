<?php 
$count = $_POST["fn"]; 
$count= (int) $count+2;
if ($count < 0){
    echo "seu numero foi convertido para inteiro mas ainda é negativo então inicie novamente";
}