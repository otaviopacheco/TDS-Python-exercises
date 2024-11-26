<?php
$numero = $_POST["numero"];
function verificarNumeroPerfeito($numero) {
    $somaDivisores = 0;
    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }
    return $somaDivisores == $numero;
}


if (is_numeric($numero) && $numero > 0) {
    if (verificarNumeroPerfeito($numero)) {
        echo "<h1>Resultado:</h1>";
        echo "<p>$numero é um número perfeito!</p>";
    } else {
        echo "<h1>Resultado:</h1>";
        echo "<p>$numero não é um número perfeito.</p>";
    }
} else {
    echo "<p>Por favor, insira um número válido.</p>";
}

echo "<a href='../formulario.html'>Voltar</a>";
?>
