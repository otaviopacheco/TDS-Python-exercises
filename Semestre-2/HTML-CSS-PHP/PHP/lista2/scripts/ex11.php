<?php
$nota = $_POST["nota"];

function verificarConceito($nota) {
    if ($nota >= 0 && $nota <= 4.9) {
        return "D";
    } elseif ($nota >= 5.0 && $nota <= 6.9) {
        return "C";
    } elseif ($nota >= 7.0 && $nota <= 8.9) {
        return "B";
    } elseif ($nota >= 9.0 && $nota <= 10.0) {
        return "A";
    } else {
        return "Nota inválida";
    }
}

if (is_numeric($nota)) {
    $conceito = verificarConceito($nota);
    echo "<h1>Resultado:</h1>";
    echo "<p>O conceito do aluno é: <strong>$conceito</strong></p>";
} else {
    echo "<p>Por favor, insira uma nota válida.</p>";
}

echo "<a href='../formulario.html'>Voltar</a>";
?>
