<?php
$n=$_POST["n"];
function fibonacci($n, $i = 0, $a = 0, $b = 1){
    if ($i < $n) {
        echo $a." ";
        fibonacci($n, $i + 1, $b, $a + $b);
    }
}
echo "Sequência de Fibonacci até o $n-ésimo termo:<br>";
fibonacci($n);
?>
