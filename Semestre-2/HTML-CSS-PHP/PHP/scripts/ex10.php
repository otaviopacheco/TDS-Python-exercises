<?php
$possivelMes = [ "janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro","dezembro"];
$mesInserido = $_POST["mesInserido"];
    if($mesInserido > 0 and $mesInserido <= 12){
        echo"o mes é ".$possivelMes[$mesInserido-1];
    }
?>