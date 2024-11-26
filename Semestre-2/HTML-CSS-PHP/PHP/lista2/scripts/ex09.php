<?php
$numero = $_POST["numero"];

function verificarPositivoOuNegativo($numero) {
    return $numero >= 0;
}

if (is_numeric($numero)) {
    $resultado = verificarPositivoOuNegativo($numero);
    if ($resultado) {
        echo "<h1>Resultado:</h1>";
        echo "<p>$numero é um número positivo!</p>";
    } else {
        echo "<h1>Resultado:</h1>";
        echo "<p>$numero é um número negativo!</p>";
    }
} else {
    echo "<p>Por favor, insira um número válido.</p>";
}

echo "<a href='../formulario.html'>Voltar</a>";
?>
