<?php

function calcularHoras($segundos) {
    return floor($segundos / 3600);
}

function calcularMinutos($segundos) {
    return floor(($segundos % 3600) / 60);
}

// Função para calcular segundos restantes
function calcularSegundosRestantes($segundos) {
    return $segundos % 60;
}


$seconds = $_POST["seconds"];

$hours = calcularHoras($seconds);
$minutes = calcularMinutos($seconds);
$remainingSeconds = calcularSegundosRestantes($seconds);


echo "<h1>Resultado:</h1>";
echo "<p>$seconds segundos equivalem a:</p>";
echo "<ul>";
echo "<li>$hours horas</li>";
echo "<li>$minutes minutos</li>";
echo "<li>$remainingSeconds segundos</li>";
echo "</ul>";

// Botão para voltar ao formulário
echo "<a href='../formulario.html'>Voltar</a>";
?>
