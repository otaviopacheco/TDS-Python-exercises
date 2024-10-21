<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];
if ($idade < 18){
    echo "$nome é menor de idade e tem $idade anos";
}elseif($idade >=18){
    echo "$nome é maior de idade e tem $idade anos";
}

?>