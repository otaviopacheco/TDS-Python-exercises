<?php
$numero = $_POST["numero"];

function verificarParOuImpar($numero) {
    return $numero % 2 == 0;
}

if (is_numeric($numero)) {
    $resultado = verificarParOuImpar($numero);
    if ($resultado) {
        echo "<h1>Resultado:</h1>";
        echo "<p>$numero é um número par!</p>";
    } else {
        echo "<h1>Resultado:</h1>";
        echo "<p>$numero é um número ímpar!</p>";
    }
} else {
    echo "<p>Por favor, insira um número válido.</p>";
}

echo "<a href='../formulario.html'>Voltar</a>";
?>
