<?php
$numero=$_POST["numero"];
$cvt=$_POST["select"];
$varif=valide($cvt,$numero);
echo "$varif";

function valide($cvt,$numero){
    if ($cvt == "1"){
    $C=$numero;
    $F = ($C*9/5) + 32;
    $r = "printado de celsius para farenheit: $F";
}elseif ($cvt == "2"){
    $F=$numero;
    $C = ($F-32)*5/9;
    $r = "printado de farenheit p celsius  $C";
}else{
    $r = "erro";
}
return $r;
}
?>