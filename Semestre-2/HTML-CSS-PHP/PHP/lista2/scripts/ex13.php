<?php
$valor1 = $_POST["valor1"];
$valor2 = $_POST["valor2"];
$valor3 = $_POST["valor3"];

function ordenarValores($valor1, $valor2, $valor3) {
    $valores = array($valor1, $valor2, $valor3);
    sort($valores);  
    return $valores;
}

if (is_numeric($valor1) && is_numeric($valor2) && is_numeric($valor3)) {
    $valoresOrdenados = ordenarValores($valor1, $valor2, $valor3);
    echo "<h1>Resultado:</h1>";
    echo "<p>Os valores ordenados em ordem crescente são: " . implode(", ", $valoresOrdenados) . "</p>";
} else {
    echo "<p>Por favor, insira apenas valores numéricos válidos.</p>";
}

echo "<a href='../formulario.html'>Voltar</a>";
?>
