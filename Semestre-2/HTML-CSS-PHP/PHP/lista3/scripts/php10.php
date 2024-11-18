<?php
$numero = $_POST["numero"];
function verify($numero){
    if ($numero > 0){
        return "P";
    } else{
        return "N";
    }
}
$r = verify($numero);
echo "resultado: $r";
?>