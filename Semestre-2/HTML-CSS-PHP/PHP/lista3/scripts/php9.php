<?php
$n=$_POST['n'];
function seq($n){
    for ($i = 1; $i <= $n; $i++){
        for ($j = 1; $j <= $i; $j++){
            echo $j." ";
        }
        echo "<br>";
    }
}
echo "Sequência até o $n:<br>";
seq($n);
?>
