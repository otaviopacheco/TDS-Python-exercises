<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];

function verificarTipoTriangulo($x, $y, $z) {
    if (($x + $y > $z) && ($x + $z > $y) && ($y + $z > $x)) {
        if ($x == $y && $y == $z) {
            return "Triângulo Equilátero";
        } elseif ($x == $y || $x == $z || $y == $z) {
            return "Triângulo Isósceles";
        } else {
            return "Triângulo Escaleno";
        }
    } else {
        return "Os valores fornecidos não podem formar um triângulo.";
    }
}

if (is_numeric($x) && is_numeric($y) && is_numeric($z) && $x > 0 && $y > 0 && $z > 0) {
    $tipoTriangulo = verificarTipoTriangulo($x, $y, $z);
    echo "<h1>Resultado:</h1>";
    echo "<p>$tipoTriangulo</p>";
} else {
    echo "<p>Por favor, insira valores válidos e positivos para os lados.</p>";
}

echo "<a href='../formulario.html'>Voltar</a>";
?>
